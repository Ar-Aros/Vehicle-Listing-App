<?php 

require_once '../../app/Classes/VehicleManager.php';

$id = 0;

$updatedVehicle = [
    'name' => 'Lamborgini',
    'type' => 'Electric Version',
    'price' => 10000000,
    'image' => 'https://shorturl.at/2f7sC'
];

$vehicleManager = new VehicleManager('','','', '');
$vehicleManager->editVehicle($id, $updatedVehicle);

echo "Vehicle with ID $id updated successfully!";
