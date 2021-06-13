<?php
class User {
    public $id;
    public $username ;
   
    public function __construct($id,$username)
    {
        $this->id = $id;
        $this->username = $username;
  
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($idUser)
    {
        $this->id = $idUser;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    
}

?> 