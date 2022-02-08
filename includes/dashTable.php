<?php 

$db= NEW PDO('mysql:host=localhost;dbname=smartframes;charset=utf8','root','root');
$select = "SELECT * FROM frames";
$req = $db->query($select);
$trames = $req->fetchAll();


// affiche dans la table Dashboard //
foreach ($trames as $trame){

    $ipFrom = (long2ip(hexdec($trame["ipFrom"])));
    $ipDest = (long2ip(hexdec($trame["ipDest"])));

    echo "<tr>";
    echo "<td>" . date('d/m/y', $trame["date"]) . "</td>";
    echo "<td>" . $trame["version"] . "</td>";
    echo "<td>" . $trame["headerLength"] . "</td>";
    echo "<td>" . $trame["service"] . "</td>";
    echo "<td>" . $trame["identification"] . "</td>";
    echo "<td>" . $trame["flagsCode"] . "</td>";
    echo "<td>" . $trame["ttl"] . "</td>";
    echo "<td>" . $trame["protocolName"] . "</td>";
    echo "<td>" . $trame["protocolChecksumStatus"] . "</td>";
    echo "<td>" . $trame["protocolPortsFrom"] . "</td>";
    echo "<td>" . $trame["protocolPortsDest"] . "</td>";
    echo "<td>" . $trame["headerChecksum"] . "</td>";
    echo "<td>" . $ipFrom . "</td>";
    echo "<td>" . $ipDest . "</td>";
    echo "<td>" . $trame["protocolVersion"] . "</td>";
    echo "<td>" . $trame["protocolContentType"] . "</td>";
    echo "<td>" . $trame["protocolType"] . "</td></tr>";
}