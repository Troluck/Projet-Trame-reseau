<?php
header('Content-Type: application/json; charset=utf-8');

$db = new PDO('mysql:host=localhost;dbname=smartframes;charset=utf8', 'root', 'root');
$select = "SELECT COUNT(headerChecksum) as number, headerChecksum
FROM frames
GROUP BY headerChecksum";
$req = $db->query($select);
$trames = $req->fetchAll();
$value = [];
$i = 0;

foreach ($trames as $trame) {
    $value[$trame["headerChecksum"]] = $trame["number"];
};

echo json_encode($value);
