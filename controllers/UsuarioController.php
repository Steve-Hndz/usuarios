<?php

class UsuarioController
{
    public function index() //Metodo por defecto para index
    {
        echo "Controlador de Usuario, accion index";
    }

    public function register() //Metodo para mostrar vista de registro
    {
        require_once "views/registerUser.php"; //Requerimos la vista de registro de usuario
    }

    public function save() { //Metodo para guardar usuarios
        require_once "models/Usuario.php"; //Requerimos el modelo de usuario

        $usuario = new Usuario(); //Instanciamos un nuevo objeto usuario
        $usuario->setNombre($_POST["nombre"]); //Asigmanos el nombre con su respectivo set
        $usuario->setApellido($_POST["apellido"]); //Asignamos el apellido con su respectivo set
        $usuario->setUsuario($_POST["usuario"]); //Asignamos el usuario con su respectivo set
        $usuario->setPass($_POST["password"]); //Asignamos la contrasenia con su respectivo set

        //var_dump($usuario);

        echo $usuario->save(); //Ejecutamos el metodo para guardar en base de datos
    }

    public function getAll() { //Metodo para obtener registros
        require_once "models/Usuario.php"; //Requerimos el modelo de usuario

        $usuario = new Usuario(); //Instanciamos un nuevo objeto de usuario

        if($users = $usuario->getAll()) { //Ejecutamos metodo para obtener usuarios de la base
            foreach ($users as $user) { //Realizamos un recorrido por cada entidad
                echo $user["id"]."\n"; //Obtenemos id de usuario
                echo $user["nombre"]."\n"; //Obtenemos nombre de usuario
                echo $user["apellido"]."\n"; //Obtenemos apellido de usuario
                echo $user["usuario"]."\n<br>"; //Obtenemos el usuario correspondiente
            }
        }
        else { //Si no hay usuarios registrados
            //Mostrar mensaje de error
            echo "<h1>Error! no se pudo cargar los usuarios</h1>";
        }
    }
}