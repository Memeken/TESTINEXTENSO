<?php
class Location {
    public $id;
    public $location;
   

    public function __construct($id,$coordinate)
    {
        $this->id = $id;
        $this->coordinate = $coordinate;
        
        
  
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLocation()
    {
        return $this->idUser;
    }

    public function setLocation($location)
    {
        $this->location= $location;
    }

   

   
  
}


?> 