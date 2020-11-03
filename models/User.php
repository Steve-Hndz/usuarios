<?php

require_once "database/Database.php";

class User extends Database { //Clase de usuario

    const TABLE_NAME = 'usuario';

    private $id_usuario;
    private $nombre_usuario;
    private $apellido_usuario;
    private $user_usuario;
    private $rol_usuario;
    private $id_departamento;
    private $id_municipio;
    private $id_colonia;

	public function getId_usuario() {
		return this.$id_usuario;
	}

	public function setId_usuario($id_usuario) {
		this.$id_usuario = $id_usuario;
	}

	public function getNombre_usuario() {
		return this.$nombre_usuario;
	}

	public function setNombre_usuario( $nombre_usuario) {
		this.$nombre_usuario = $nombre_usuario;
	}

	public function getApellido_usuario() {
		return this.$apellido_usuario;
	}

	public function setApellido_usuario( $apellido_usuario) {
		this.$apellido_usuario = $apellido_usuario;
	}

	public function getUser_usuario() {
		return this.$user_usuario;
	}

	public function setUser_usuario( $user_usuario) {
		this.$user_usuario = $user_usuario;
	}

	public function getRol_usuario() {
		return this.$rol_usuario;
	}

	public function setRol_usuario( $rol_usuario) {
		this.$rol_usuario = $rol_usuario;
	}

	public function getId_departamento() {
		return this.$id_departamento;
	}

	public function setId_departamento( $id_departamento) {
		this.$id_departamento = $id_departamento;
	}

	public function getId_municipio() {
		return this.$id_municipio;
	}

	public function setId_municipio( $id_municipio) {
		this.$id_municipio = $id_municipio;
	}

	public function getId_colonia() {
		return this.$id_colonia;
	}

	public function setId_colonia( $id_colonia) {
		this.$id_colonia = $id_colonia;
	}



    public function showUser() { //Metodo para mostrar direccion de la vista
        $userDir = "user.php"; //Declaramos el nombre del archivo de vista
        return $userDir; //Retronamos la vista
    }

    public function getAll(){
        $sql = "SELECT u.id_usuario, u.nombre_usuario, u.apellido_usuario, u.user_usuario, u.rol_usuario, d.nombre_departamento, m.nombre_municipio, u.id_colonia FROM " . self::TABLE_NAME." u ";
        $sql .= " INNER JOIN departamento d on d.id_departamento = u.id_departamento INNER JOIN municipio m on m.id_municipio = u.id_municipio";
        if ($result = $this->conn->query($sql)) {
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        }
    }

    public function getFilter($departamento, $rol){
        $bandera = false;
        $sql = "SELECT u.id_usuario, u.nombre_usuario, u.apellido_usuario, u.user_usuario, u.rol_usuario, d.nombre_departamento, m.nombre_municipio, u.id_colonia FROM " . self::TABLE_NAME." u ";
        $sql .= " INNER JOIN departamento d on d.id_departamento = u.id_departamento INNER JOIN municipio m on m.id_municipio = u.id_municipio";
        if($departamento != ""){
            if(!$bandera)
            {
                $sql .= " WHERE";
                $bandera = true;
            } else{
                $sql .= " AND";
            }
            $sql .= " d.nombre_departamento = '{$departamento}' ";
        }
        if($rol != ""){
            if(!$bandera)
            {
                $sql .= " WHERE";
                $bandera = true;
            } else{
                $sql .= " AND";
            }
            $sql .= " u.rol_usuario = '{$rol}' ";
        }
        if ($result = $this->conn->query($sql)) {
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        }
    }
    
    public function getDepartamentos(){
        $sql = "SELECT nombre_departamento FROM departamento";
        if ($result = $this->conn->query($sql)) {
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        }
    }

    public function getMunicipios(){
        $sql = "SELECT nombre_municipio FROM municipio";
        if ($result = $this->conn->query($sql)) {
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        }
    }

    public function getRol(){
        $sql = "SELECT rol_usuario FROM usuario GROUP BY rol_usuario";
        if ($result = $this->conn->query($sql)) {
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        }
    }
}