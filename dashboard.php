<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <title>Smart Frames | Dashboard</title>
</head>

<body>
    <?php include("includes/header.php") ?>
    <?php if (isset($_POST['graph1selector'])) {
        // var_dump($_POST);
        $choice1 = $_POST['graph1selector'];
        if ($choice1 == "protocolName") {
            $graph = 'graphProtocolName.js';
        } elseif ($choice1 == "protocolFrom") {
            $graph = 'graphProtocolFrom.js';
        } elseif ($choice1 == "protocolDest") {
            $graph = 'graphProtocolDest.js';
        } elseif ($choice1 == "flagsCode") {
            $graph = 'graphFlagsCode.js';
        } elseif ($choice1 == "checksumStatus") {
            $graph = 'graphChecksumStatus.js';
        } elseif ($choice1 == "headerChecksum") {
            $graph = 'graphHeaderChecksum.js';
        } elseif ($choice1 == "ipFrom") {
            $graph = 'graphIpFrom.js';
        } elseif ($choice1 == "ipDest") {
            $graph = 'graphIpDest.js';
        } else {
            $graph = 'graphVide.js';
        }
    } else {
        $graph = 'graphVide.js';
    }
    ?>
    <?php if (isset($_POST['graph2selector'])) {
        var_dump($_POST);
        $choice2 = $_POST['graph2selector'];
        if ($choice2 == "protocolName") {
            $graph2 = 'graphProtocolName.js';
        } elseif ($choice2 == "protocolFrom") {
            $graph2 = 'graphProtocolFrom.js';
        } elseif ($choice2 == "protocolDest") {
            $graph2 = 'graphProtocolDest.js';
        } elseif ($choice2 == "flagsCode") {
            $graph2 = 'graphFlagsCode.js';
        } elseif ($choice2 == "checksumStatus") {
            $graph2 = 'graphChecksumStatus.js';
        } elseif ($choice2 == "headerChecksum") {
            $graph2 = 'graphHeaderChecksum.js';
        } elseif ($choice2 == "ipFrom") {
            $graph2 = 'graphIpFrom.js';
        } elseif ($choice2 == "ipDest") {
            $graph2 = 'graphIpDest.js';
        } else {
            $graph2 = 'graphVide.js';
        }
    } else {
        $graph2 = 'graphVide.js';
    }
    ?>
    <main>
        <div class="gridDashboard">
            <div id="graphsGrid">
                <div class="graphsX2">
                    <canvas id="myChart"></canvas>
                    <script src="includes/graphs/graph1/<?php echo $graph ?>"></script>
                </div>
                <div class="graphsX2">
                    <canvas id="myChart2"></canvas>
                    <script src="includes/graphs/graph2/<?php echo $graph2 ?>"></script>
                </div>
            </div>
            <div id="selectorBox">
                <form action="" method="post">
                    <select name="graph1selector">
                        <option value="based">- Graph I -</option>
                        <option value="protocolName">Nom des protocoles utilisés :</option>
                        <option value="protocolFrom">Protocoles en provenance de :</option>
                        <option value="protocolDest">Protocoles à destination de :</option>
                        <option value="flagsCode">Code de drapeau utilisés :</option>
                        <option value="checksumStatus">Status des protocole checksum :</option>
                        <option value="headerChecksum">Header checksum</option>
                        <option value="ipFrom">IP en provenance de :</option>
                        <option value="ipDest">IP à destination de :</option>
                    </select>
                    <input type="submit" value="Changer graphique 1">
                </form>
                <form action="" method="post">
                    <select name="graph2selector">
                        <option value="based">- Graph II -</option>
                        <option value="protocolName">Nom des protocoles utilisés :</option>
                        <option value="protocolFrom">Protocoles en provenance de :</option>
                        <option value="protocolDest">Protocoles à destination de :</option>
                        <option value="flagsCode">Code de drapeau utilisés :</option>
                        <option value="checksumStatus">Status des protocole checksum :</option>
                        <option value="headerChecksum">Header checksum</option>
                        <option value="ipFrom">IP en provenance de :</option>
                        <option value="ipDest">IP à destination de :</option>
                    </select>
                    <input type="submit" value="Changer graphique 2">
                </form>
            </div>
            <div id="dashTable">
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Version</th>
                            <th>Header Length</th>
                            <th>Service</th>
                            <th>Identification</th>
                            <th>Flags Code</th>
                            <th>TTL</th>
                            <th>Protocol Name</th>
                            <th>Protocol Checksum Status</th>
                            <th>Protocol Ports From</th>
                            <th>Protocol Ports Destination</th>
                            <th>Header Checksum</th>
                            <th>IP From</th>
                            <th>IP Destination</th>
                            <th>Protocol Version</th>
                            <th>Protocol Content Type</th>
                            <th>Protocol Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include("includes/dashTable.php") ?>
                    </tbody>

                </table>
            </div>
        </div>
    </main>
    <?php include("includes/footer.php") ?>
</body>

</html>