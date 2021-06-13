<?php

class RegisterService {


    function registerVehicleFleet($fleet,$vehicle) {
        if (in_array($vehicle->id, $fleet->listVehicle)) {
            return 'This vehicle already exist in this fleet';
        }else{
            array_push($fleet->listVehicle, $vehicle->id);
            return 'Vehicle succesfully added to the fleet';
        }
    }



    function registerVehicleLocation($location,$vehicle) {
        if($vehicle->lastLocation !=$location){
            $vehicle->lastLocation = $location;
            return 'Successfully park a vehicle';
        }else{
            return 'This location is the same';
        }
        
    }
}

?> 

<!-- 
        
    function registerVehicleFleetById($fleetId, $plateNumber) {
        $fleet = getFleetById($fleetId); 
        $vehicle = getVehiculeByPlate($plateNumber);
        if (in_array($vehicle->registrationNumber, $fleet->listVehicle)) {
            return 'This vehicle already exist in this fleet';
        }else{
            array_push($fleet->listVehicle, $vehicle->id);
            return 'Vehicle succesfully added to the fleet';
        }
    } -->
    
    <!-- 
    ./fleet register-vehicle <fleetId> <vehiclePlateNumber>

     php -r "require 'RegisterService.php'; registerVehicleFleetById(1, 'ES-411-LK')"
     -->