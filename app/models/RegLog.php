<?php

class RegLog {

    private $db;

    function __construct(Database $db){
        $this->db = $db;
    }

    // prisijungimas
    public function login($name) {
            
        return $this->db->select(("SELECT * FROM users WHERE nickname = :nickname"), ["nickname" => $name]);
    }

    // registracija
    public function register($nickname, $name, $surname, $age, $password) {
        return $this->db->insert("INSERT INTO users (nickname, name, surname, age, password) VALUES (:nickname, :name, :surname, :age, :password)", ["nickname" => $nickname, "name" => $name, "surname" => $surname, "age" => $age, "password" => password_hash($password, PASSWORD_BCRYPT)]);
    }

}