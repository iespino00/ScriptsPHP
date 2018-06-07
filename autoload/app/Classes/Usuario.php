<?php
namespace app\Classes;    //namespace para esta clase

use app\Modelos\UserModel;  //para hacer uso del modelo

class Usuario
{
    public function crear()
    {
       return UserModel::crearUsuario();
    }
}


?>
