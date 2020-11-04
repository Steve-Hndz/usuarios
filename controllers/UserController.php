<?php

class UserController { //Clase para controladores de usuario
    
    
    public function showUser() { //Metodo para mostrar la vista de usuario
        require_once "models/User.php"; //Requerimos el archivo para el modelo de usuario
        $user = new User(); //Instanciamos el objeto de usuario
        //$showUser = $user->showUser(); //Obtenemos la vista con el metodo de usuario
        
        $departamentos = $user->getDepartamentos();
        $roles = $user->getRol();
        $municipios = $user->getMunicipios();
        if(isset($_POST)){
            $listado = $user->getFilter($_POST['departamento'],$_POST['municipio'],$_POST['rol']);
        } else{
            $listado = $user->getAll();
        }
        
        require_once "views/user.php"; //Requerimos la vista para mostrarla
    }
}