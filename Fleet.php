<?php
class Fleet {
    public $id;
    public $name;
    public $idUser ;
    public $listVehicle = array();

    public function __construct($id,$name,$idUser)
    {
        $this->id = $id;
        $this->name = $name;
        $this->idUser = $idUser;
  
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdUser()
    {
        return $this->idUser;
    }

    public function setIdUser($idUser)
    {
        $this->idUser= $idUser;
    }

    public function getIName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name= $name;
    }

    public function getListVehicle()
    {
        return $this->listVehicle;
    }

    public function setListVehicle($listVehicle)
    {
        $this->listVehicle = $listVehicle;
    }

   
  
}


?> 