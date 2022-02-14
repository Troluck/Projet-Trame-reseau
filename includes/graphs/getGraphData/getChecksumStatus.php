<?php
header('Content-Type: application/json; charset=utf-8');

$db = new PDO('mysql:host=localhost;dbname=smartframes;charset=utf8', 'root', 'root');
$select = "SELECT COUNT(protocolChecksumStatus) as number, protocolChecksumStatus
FROM frames
GROUP BY protocolChecksumStatus";
$req = $db->query($select);
$trames = $req->fetchAll();
$value = [];
$i = 0;

foreach ($trames as $trame) {
    $value[$trame["protocolChecksumStatus"]] = $trame["number"];
};

echo json_encode($value);
