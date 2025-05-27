<?php 

require_once '../../app/Classes/VehicleManager.php';

$newVehicle = [
    'name' => 'Audi',
    'type' => 'Electric',
    'price' => 560000,
    'image' => 'https://shorturl.at/Kn893z'
];

$vehicleManager = new VehicleManager('','','', '');
$vehicleManager->addVehicle($newVehicle);

echo "Vehicle added successfully!";
