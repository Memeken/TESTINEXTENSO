<?php

require_once 'Fleet.php';
require_once 'Vehicle.php';
require_once 'User.php';
require_once 'RegisterService.php';
require_once 'Location.php';


$vehicle = new Vehicle(1, 'ES-411-LK', 'car');
$fleet = new Fleet(1, 'FleetNumber1', 1);
$fleet2 = new Fleet(2, 'FleetNumber1', 2);
$location = 'N43.4094, E5.406';
$location2 = 'N86.4004, O5.586';

$rs = new RegisterService;
####Test add a vehicle to the fleet #####
//Test 1 : fleet->list vehicle is empty 
if ($rs->registerVehicleFleet($fleet, $vehicle) == "Vehicle succesfully added to the fleet") {
    echo "test 1 : OK : Vehicle succesfully added to the fleet \n";
} else {
    echo  "test 1 : failed \n" .
        "output :" . $rs->registerVehicleFleet($fleet, $vehicle) . "\n" .
        "Expected output : 'Vehicle succesfully added to the fleet' \n";
}

//Test 2 : fleet->list contain already $vehicule->id=1 and add same vehicle
if ($rs->registerVehicleFleet($fleet, $vehicle) == "This vehicle already exist in this fleet") {
    echo "test 2 : OK :This vehicle already exist in this fleet\n";
} else {
    echo  "test 2 : failed \n" .
        "output :" . $rs->registerVehicleFleet($fleet, $vehicle) . "\n" .
        "Expected output : 'This vehicle already exist in this fleet' \n";
}

//Test 3 : fleet->list contain already $vehicule->id=1 and add new vehicle
if ($rs->registerVehicleFleet($fleet2, $vehicle) == "Vehicle succesfully added to the fleet") {
    echo "test 3 : OK :Vehicle succesfully added to the fleet\n";
} else {
    echo  "test 3 : failed \n" .
        "output :" . $rs->registerVehicleFleet($fleet2, $vehicle) . "\n" .
        "Expected output : 'Vehicle succesfully added to the fleet' \n";
}

/* echo $rs->registerVehicleFleet($fleet, $vehicle) . "\n";
echo $rs->registerVehicleFleet($fleet, $vehicle) . "\n";
echo $rs->registerVehicleFleet($fleet2, $vehicle) . "\n"; */

####Test add a location to the vehicle #####
//Test 1 : vehicle->lastLocation vehicle is empty or null
if ($rs->registerVehicleLocation($location, $vehicle)== "Successfully park a vehicle") {
    echo "test 1 : OK : Successfully park a vehicle \n";
} else {
    echo  "test 1 : failed \n" .
        "output :" . $rs->registerVehicleLocation($location, $vehicle) . "\n" .
        "Expected output : 'Successfully park a vehicle' \n";
}
//Test 2 : vehicle->lastLocation is different of new location
if ($rs->registerVehicleLocation($location2, $vehicle) == "Successfully park a vehicle") {
    echo "test 2 : OK :Successfully park a vehicle\n";
} else {
    echo  "test 2 : failed \n" .
        "output :" . $rs->registerVehicleLocation($location2, $vehicle) . "\n" .
        "Expected output : 'Successfully park a vehicle' \n";
}
//Test 3 : vehicle->lastLocation is the same of new location
if ($rs->registerVehicleLocation($location2, $vehicle) == "This location is the same") {
    echo "test 3 : OK :This location is the same\n";
} else {
    echo  "test 3 : failed \n" .
        "output :" . $rs->registerVehicleLocation($location2, $vehicle) . "\n" .
        "Expected output : 'This location is the same' \n";
}
/* echo $rs->registerVehicleLocation($location, $vehicle) . "\n";
echo $rs->registerVehicleLocation($location2, $vehicle) . "\n";
echo $rs->registerVehicleLocation($location2, $vehicle); */

/* the tests are execute with a command line cli : php -r "require 'execute.php';" */