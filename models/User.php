<?php

class User { //Clase de usuario
    public function showUser() { //Metodo para mostrar direccion de la vista
        $userDir = "user.php"; //Declaramos el nombre del archivo de vista
        return $userDir; //Retronamos la vista
    }
}