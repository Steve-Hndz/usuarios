<?php
    require "database/Database.php"; //Incluir la clase padre Database

    class Usuario extends Database  { //Clase usuario extiende o hereda de Database
        private $nombre; //Variable privada de nombre
        private $apellido; //Variable privada de apellido
        private $usuario; //Variable privada de usuario
        private $pass; //Variable privada de contrasena

        public function __construct() { //Contructor de la clase
            parent::__construct(); //Obtenemos el constructor del padre para trabajar con la misma conexion
        }

        public function getNombre() { //Get para el nombre
            return $this->nombre; //Devolvemos el nombre de la variable privada
        }

        public function setNombre($nombre) { //Set para el nombre
            $this->nombre = $this->conn->quote($nombre); //Asignar el nombre capturado
            return $this; //Devolver el valor
        }

        public function getApellido() { //Get para el apellido
            return $this->apellido;
        }

        public function setApellido($apellido) { //Set para el apellido
            $this->apellido = $this->conn->quote($apellido);
            return $this;
        }

        public function getUsuario() //Get para el usuario
        {
            return $this->usuario;
        }

        public function setUsuario($usuario) //Set para el usuario
        {
            $this->usuario = $this->conn->quote($usuario);
            return $this;
        }

        public function getPass() //Get para la contrasena
        {
            return $this->pass;
        }

        public function setPass($pass) //Set para la contrasena
        {
            //Usando modo de encriptacion BCRYPT de 4
            $this->pass = password_hash($this->conn->quote($pass), PASSWORD_BCRYPT, ['cost' => 4]);
            return $this;
        }

        public function save() //Metodo para guardar en base de datos
        {
            //Preparar los argumentos de la consulta
            $sql = "INSERT INTO tbl_usuarios VALUES(:id, :nombre, :apellido, :usuario, :pass)";
            $stmt = $this->conn->prepare($sql); //Preparar consulta con la conexion
            
            //Pasar los valores vinculados para cada campo
            $stmt->bindValue(':id', NULL);
            $stmt->bindValue(':nombre', $this->getNombre());
            $stmt->bindValue(':apellido', $this->getApellido());
            $stmt->bindValue(':usuario', $this->getUsuario());
            $stmt->bindValue(':pass', $this->getPass());

            $message = "<h1>Error al ingresar datos!</h1>"; //Definir mensaje de error

            if($stmt->execute()) //Si se ha realizado la consulta con exito
            {
                //El mensaje que muestra ahora es de aprobacion
                $message = "<h1>Datos ingresados con éxito!</h1>";
            }

            //Regresa el mensaje correspondiente segun la conexion
            return $message;
        }
        
        public function getAll() //Metodo para obtener registros
        {
            $sql = "SELECT * FROM tbl_usuarios"; //Preparar los argumentos de la consulta
            $stmt = $this->conn->prepare($sql); //Preparar conexion
            
            $result = false; //Result esta por defecto en falso en caso de error
            
            if($stmt->execute()) { //Ejecutamos y en caso se haya realizado la consulta
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //Devuelve los registros
            }
            
            return $result; //Retorna los valores segun si ha realizado la conexion o no
        }
    }

?>