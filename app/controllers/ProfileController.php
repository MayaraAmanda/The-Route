<?php

class ProfileController extends \HXPHP\System\Controller
{

    public function __construct($configs)
    {
        parent::__construct($configs);
        $this->load(
            'Services\Auth',
            $configs->auth->after_login,
            $configs->auth->after_logout,
            true
        );
        $this->auth->redirectCheck();

        $this->load(
            'Helpers\Menu',
            $this->request,
            $this->configs,
            $this->auth->getUserRole()
        );

        $user_id = $this->auth->getUserId();

        $this->view->setTitle('Quero Viajar')
                    ->setVar('user', User::find($user_id)
                        );
    }
    
    public function bloqueadaAction()
    {
        $this->auth->roleCheck(array(
            'administrator',
            'user'
        ));
    }

    public static function calcular($resultado){
        for($i=1; $i<7; $i++){
            $valor[$i] = 0;
        }

        for($i=0; $i<5; $i++){
            $valor[$resultado[$i]] = $valor[$resultado[$i]] + 0.2;
        }
        return $valor;
    }

    public function cadastrarAction()
    {
        $this->view->setFile('index');

        $resultado = $this->request->post('resultado');

        $value = explode(" ",$resultado);

        $va = self::calcular($value);

        $user_id = $this->auth->getUserId();


        $cadastrarProfile = Profile::cadastrar($va, $user_id);

        if($cadastrarProfile->status === false)
        {
            $this->load('Helpers\Alert', array(
                'danger',
                'Ops! Não foi possível completar o seu cadastro. <br>Verifique os erros abaixo:',
                $cadastrarProfile->errors
            ));
        }
        else
        {
            $this->load('Helpers\Alert', array(
                'danger',
                'Cadastro realizado com sucesso',
            ));
        }
    }
}