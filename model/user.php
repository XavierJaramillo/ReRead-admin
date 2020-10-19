<?php

class User {
    //Atributos
    private $id;
    private $name;
    private $email;
    private $password;

    //Contructor
    public function __construct($email, $password) {
        $this -> email = $email;
        $this -> password = $password;
    }

    //Getters and Setters
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
}

?>