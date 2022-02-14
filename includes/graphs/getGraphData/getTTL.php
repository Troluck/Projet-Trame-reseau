<?php
header('Content-Type: application/json; charset=utf-8');

$db = new PDO('mysql:host=localhost;dbname=smartframes;charset=utf8', 'root', 'root');
$select = "SELECT ttl
FROM frames";
$req = $db->query($select);
$trames = $req->fetchAll();
$row = $req->rowCount();
$total = 0;
$total = 0;
$maxLoss = 128;

foreach ($trames as $trame) {
    $total = $trame["ttl"] + $total;
    if ($maxLoss > $trame["ttl"]) {
        $maxLoss = $trame["ttl"];
    }
};

$value['moyenne'] = 128 - ($total / $row);
$value['maxLoss'] = 128 - $maxLoss;

// echo ($total) ;
// echo ' - ';
// echo $row;
// echo ' - ';
// echo 128 - $maxLoss;
// echo ' - ';
echo json_encode($value);
