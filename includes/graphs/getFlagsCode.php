<?php 
header('Content-Type: application/json; charset=utf-8');

$db= NEW PDO('mysql:host=localhost;dbname=smartframes;charset=utf8','root','root');
$select = "SELECT COUNT(flagsCode) as number, flagsCode
FROM frames
GROUP BY flagsCode";
$req = $db->query($select);
$trames = $req->fetchAll();
$value = [];
$i = 0;

foreach($trames as $trame){
    $value[$trame["flagsCode"]] = $trame["number"];
};

echo json_encode($value);

?>