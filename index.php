<?php

require_once __DIR__ . '/DB/Conection.php';
require_once __DIR__ . '/Model/Model.php';
require_once __DIR__ . '/Model/Car.php';

$car = new Car();
$data_mobil = ['name' => 'Pajelo', 'brand' => 'Toyota', 'color' => 'Hitam'];
$data_owner = ['name' => 'Honda', 'country' => 'Jepang', 'since' => '1889'];
var_dump($car->find(2));
header("Location: /projects/pos/views/index.php");
// $data_mobil = ['name' => 'Ayla', 'brand' => 'Daihatsu', 'color' => 'Merah'];
// $data_motor = ['name' => 'Supra', 'brand' => 'Honda', 'color' => 'Hitam'];
// $data_sepeda = ['name' => 'Family', 'brand' => 'Linux', 'color' => 'Warna-Warni'];
// $model->Create($data_mobil, 'cars');

// $dataMobil = $model->update(2, $data_mobil, 'cars');
// var_dump($dataMobil = $model->index('cars'));

// $model->create($data_motor, 'cars');

// var_dump($Car->all());
// echo "<br>";
// var_dump($car->create($data_mobil));
// echo "<br>";

// echo "<br>";
// var_dump($car->update(2, $data_mobil));
// echo "<br>";
// var_dump($car->delete(2));
// $model->create($data_sepeda, 'cars');
// $model->update(5, $data_sepeda, 'cars');
