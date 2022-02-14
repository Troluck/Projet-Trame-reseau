<?php
header('Content-Type: application/json; charset=utf-8');

$db = new PDO('mysql:host=localhost;dbname=smartframes;charset=utf8', 'root', 'root');
$selectF = "SELECT COUNT(protocolPortsFrom) as number, protocolPortsFrom
FROM frames
GROUP BY protocolPortsFrom";

$reqF = $db->query($selectF);
$tramesF = $reqF->fetchAll();

$selectD = "SELECT COUNT(protocolPortsDest) as number, protocolPortsDest
FROM frames
GROUP BY protocolPortsDest";

$reqD = $db->query($selectD);
$tramesD = $reqD->fetchAll();

$valueF = [];
$valueD = [];
$value = [];
foreach ($tramesF as $trame) {
    $valueF[$trame["protocolPortsFrom"]] = $trame["number"];
};

foreach ($tramesD as $trame) {
    $valueD[$trame["protocolPortsDest"]] = $trame["number"];
};

$value = [$valueF, $valueD];
echo json_encode($value);
