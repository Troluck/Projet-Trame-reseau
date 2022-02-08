<?php
$db= NEW PDO('mysql:host=localhost;dbname=smartframes;charset=utf8','root','root');
$json = file_get_contents("http://51.255.160.47:8282/resources/frames.json");
$array = json_decode(file_get_contents("http://51.255.160.47:8282/resources/frames.json"), true);
var_dump($array);

foreach ($array as $key => $value){
    if(empty($value["protocol"]["version"])){
        $value["protocol"]["version"] = "";
    }
    if(empty($value["protocol"]["code"])){
        $value["protocol"]["code"] = "";
    }
    if(empty($value["protocol"]["type"])){
        $value["protocol"]["type"] = "";
    }
    if(empty($value["protocol"]["contentType"])){
        $value["protocol"]["contentType"] = "";
    }

    $insert = $db->prepare('INSERT INTO frames (date,version,headerLength,service,identification,flagsCode,ttl,protocolName,protocolChecksumStatus,protocolPortsFrom,protocolPortsDest,headerChecksum,ipFrom,ipDest,protocolVersion,protocolContentType,protocolType,protocolCode)
     VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
    $insert->execute(array($value["date"],$value["version"],$value["headerLength"],$value["service"],$value["identification"],$value["flags"]["code"],$value["ttl"],$value["protocol"]["name"],$value["protocol"]["checksum"]["status"],$value["protocol"]["ports"]["from"],$value["protocol"]["ports"]["dest"],$value["headerChecksum"],$value["ip"]["from"],$value["ip"]["dest"],$value["protocol"]["version"],$value["protocol"]["contentType"],$value["protocol"]["type"],$value["protocol"]["code"]));
    header('location: #?Succes=true');
};

