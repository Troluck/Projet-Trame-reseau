<?php
header('Content-Type: application/json; charset=utf-8');

$db = new PDO('mysql:host=localhost;dbname=smartframes;charset=utf8', 'root', 'root');
$selectF = "SELECT COUNT(ipFrom) as number, ipFrom
FROM frames
GROUP BY ipFrom";

$reqF = $db->query($selectF);
$tramesF = $reqF->fetchAll();

$selectD = "SELECT COUNT(ipDest) as number, ipDest
FROM frames
GROUP BY ipDest";

$reqD = $db->query($selectD);
$tramesD = $reqD->fetchAll();

$valueF = [];
$valueD = [];
$value = [];
foreach ($tramesF as $trame) {
    $valueF[$trame["ipFrom"]] = $trame["number"];
};

foreach ($tramesD as $trame) {
    $valueD[$trame["ipDest"]] = $trame["number"];
};

$value = [$valueF, $valueD];
echo json_encode($value);
