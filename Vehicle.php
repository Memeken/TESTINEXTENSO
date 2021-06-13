<?php
class Vehicle
{
    public $id;
    public $type;
    public $registrationNumber;
    public $lastLocation;


    public function __construct($idV, $rN, $tV, $lL = null)
    {
        $this->id = $idV;
        $this->type = $tV;
        $this->registrationNumber = $rN;
        $this->lastLocation = $lL;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($idVehicle)
    {
        $this->id = $idVehicle;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($typeVehicle)
    {
        $this->type = $typeVehicle;
    }

    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    public function setRegistrationNumber($rN)
    {
        $this->registrationNumber = $rN;
    }

    public function getLastLocation()
    {
        return $this->lastLocation;
    }

    public function setILastLocation($lastLocation)
    {
        $this->lastLocation = $lastLocation;
    }

    
}
