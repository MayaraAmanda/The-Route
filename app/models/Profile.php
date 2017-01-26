<?php 

class Profile extends \HXPHP\System\Model
{

    public static function cadastrar(array $post, $user_id)
    {
        $callbackObj = new \stdClass;
        $callbackObj->profile = null;
        $callbackObj->status = false;
        $callbackObj->errors = array();

        $profile = array(
            'gastronomia' => $post[1],
            'natureza' => $post[2],
            'negocios' =>$post[3],
            'saude' =>$post[4],
            'cultural' => $post[5],
            'religioso' =>$post[6],
            'user_id' => $user_id,
            'mobility' => 0,
            'alone' => 0);

        $cadastrar = self::create($profile);

        if($cadastrar->is_valid()){
             $callbackObj->profile = $cadastrar;
             $callbackObj->status = true;
             return $callbackObj;
         }

        $errors = $cadastrar->errors->get_raw_errors();

        foreach ($errors as $field => $message) {
            array_push($callbackObj->errors, $message[0]);
        }

        return $callbackObj;
        //return self::create($profile);
    }
}