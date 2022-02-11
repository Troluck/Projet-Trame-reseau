<?php
header('Content-Type: application/json; charset=utf-8');

$db = new PDO('mysql:host=localhost;dbname=smartframes;charset=utf8', 'root', 'root');
$select = "SELECT COUNT(protocolFrom) as number, protocolFrom
FROM frames
GROUP BY protocolFrom";
$req = $db->query($select);
$trames = $req->fetchAll();
$value = [];
$i = 0;

foreach ($trames as $trame) {
    $value[$trame["protocolFrom"]] = $trame["number"];
};

echo json_encode($value);
