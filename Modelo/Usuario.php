<?php

class Usuario {
    private $username;
    private $pass;
    
    function __construct() {
        $username = "";
        $pass = "";
    }
    
    function getUsername(){
        return $this->username;
    }
    
    function getPass(){
        return $this->pass;
    }
    
    function setUsername($username){
        return $this->username = $username;
    }
    
    function setPass($pass){
        return $this->pass = $pass;
    }
}
