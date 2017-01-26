<?php 

class User extends \HXPHP\System\Model
{
	static $belongs_to = array(
		array('role')
	);
	static $validates_presence_of = array(
		array(
			'name',
			'message' => 'O nome é um campo obrigatório.'
		),
		array(
			'email',
			'message' => 'O e-mail é um campo obrigatório.'
		),
		array(
			'username',
			'message' => 'O nome de usuário é um campo obrigatório.'
		),
		array(
			'password',
			'message' => 'A senha é um campo obrigatório.'
		),
		array(
			'data_nascimento',
			'message' => 'O data de nascimento é um campo obrigatório.'
		)
	);

    static $validates_uniqueness_of = array(
      array(
      	array('username'),
      	'message' => 'Este nome de usuário já está cadastrado em nosso sistema'
      	),
      array(	
      	array('email'),
      	'message' => 'Este e-mail já está cadastrado em nosso sistema'
      	//array('email', 'message' => 'Este email já foi cadastrado em nosso sistema')
    	)
    );



	public static function cadastrar(array $post)
	{
		//StdClass é uma classe vazia
		$callbackObj = new \stdClass;
		$callbackObj->user = null;
		$callbackObj->status = false;
		$callbackObj->errors = array();

		$role = Role::find_by_role('user');

		if(is_null($role))
		{
			array_push($callbackObj, 'O tipo de usuário passado não existe. Por favor, contate o administrador do sistema.');	
			return $callbackObj;
		}
		//atualizar o POST
		$user_data = array(
			'role_id' => $role->id,
			'status' => 1
		);

		$password = \HXPHP\System\Tools::hashHX($post['password']);

		$post = array_merge($post, $user_data, $password);

		$cadastrar = self::create($post);

		if($cadastrar->is_valid()){
			$callbackObj->user = $cadastrar;
			$callbackObj->status = true;
			return $callbackObj;
		}

		$errors = $cadastrar->errors->get_raw_errors();
		
		foreach ($errors as $field => $message) {
			array_push($callbackObj->errors, $message[0]);
		}

		return $callbackObj;
	}

	public static function login(array $post)
	{
		//StdClass é uma classe vazia
		$callbackObj = new \stdClass;
		$callbackObj->user = null;
		$callbackObj->status = false;
		$callbackObj->code = null;
		$callbackObj->tentativas_restantes = null;


		$user = self::find_by_username($post['username']);
		
		if(!is_null($user))
		{
			$password = \HXPHP\System\Tools::hashHX($post['password'], $user->salt);

			if($user->status == 1){
				if(LoginAttempt::verificaTentativas($user->id))
				{
					if($password['password'] === $user->password)
					{
						$callbackObj->user = $user;
						$callbackObj->status = true;
						LoginAttempt::limparTentativas($user->id);
					}
					else
					{
						if(LoginAttempt::tentativasRestantes($user->id) <=3){
							$callbackObj->code = 'tentativas-esgotando';
							$callbackObj->tentativas_restantes = LoginAttempt::tentativasRestantes($user->id);
						}
						else
						{
							$callbackObj->code = 'dados-incorretos';
						}
						LoginAttempt::registrarTentativa($user->id);
					}
				}
				else
				{
					$callbackObj->code = 'usuario-bloqueado';
					$user->status = 0;
					$user->save(false);
				}
			}
			else
			{
				$callbackObj->code = 'usuario-bloqueado';
			}
			
		}
		else
		{
			$callbackObj->code = 'usuario-inexistente';
		}
			return $callbackObj;
	}

	public static function atualizarSenha($user, $newPassword)
	{
		$user = self::find_by_id($user->id);
		$password = \HXPHP\System\Tools::hashHX($newPassword);

		$user->password = $password['password'];
		$user->salt = $password['salt'];

		return $user->save(false);
	}
}