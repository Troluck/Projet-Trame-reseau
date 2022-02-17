<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="modal/modal.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <title>Smart Frames | Dashboard</title>
</head>
<script>
    $(document).ready(function() {
        -
        $('#table_id').DataTable({
            "scrollY": 400,
            "scrollX": true,
            language: {
                url: "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
            }
        });
    });
</script>

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
        } elseif ($choice1 == "based") {
            $graph = 'graphVide.js';
        }
    } else {
        $graph = 'graphVide.js';
    }
    if (isset($_POST['graph2selector'])) {
        // var_dump($_POST);
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
        } elseif ($choice2 == "based") {
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
                        <option value="protocolName" <?php if ($choice1 == 'protocolName') {
                                                            echo 'selected';
                                                        } ?>>Nom des protocoles utilisés :</option>
                        <option value="protocolFrom" <?php if ($choice1 == 'protocolFrom') {
                                                            echo 'selected';
                                                        } ?>>Protocoles en provenance de :</option>
                        <option value="protocolDest" <?php if ($choice1 == 'protocolDest') {
                                                            echo 'selected';
                                                        } ?>>Protocoles à destination de :</option>
                        <option value="flagsCode" <?php if ($choice1 == 'flagsCode') {
                                                        echo 'selected';
                                                    } ?>>Code de drapeau utilisés :</option>
                        <option value="checksumStatus" <?php if ($choice1 == 'checksumStatus') {
                                                            echo 'selected';
                                                        } ?>>Status des protocole checksum :</option>
                        <option value="headerChecksum" <?php if ($choice1 == 'headerChecksum') {
                                                            echo 'selected';
                                                        } ?>>Header checksum</option>
                        <option value="ipFrom" <?php if ($choice1 == 'ipFrom') {
                                                    echo 'selected';
                                                } ?>>IP en provenance de :</option>
                        <option value="ipDest" <?php if ($choice1 == 'ipDest') {
                                                    echo 'selected';
                                                } ?>>IP à destination de :</option>
                    </select>
                    <input id="button" type="submit" value="Changer les graphiques">
                    <select name="graph2selector">
                        <option value="based">- Graph II -</option>
                        <option value="protocolName" <?php if ($choice2 == 'protocolName') {
                                                            echo 'selected';
                                                        } ?>>Nom des protocoles utilisés :</option>
                        <option value="protocolFrom" <?php if ($choice2 == 'protocolFrom') {
                                                            echo 'selected';
                                                        } ?>>Protocoles en provenance de :</option>
                        <option value="protocolDest" <?php if ($choice2 == 'protocolDest') {
                                                            echo 'selected';
                                                        } ?>>Protocoles à destination de :</option>
                        <option value="flagsCode" <?php if ($choice2 == 'flagsCode') {
                                                        echo 'selected';
                                                    } ?>>Code de drapeau utilisés :</option>
                        <option value="checksumStatus" <?php if ($choice2 == 'checksumStatus') {
                                                            echo 'selected';
                                                        } ?>>Status des protocole checksum :</option>
                        <option value="headerChecksum" <?php if ($choice2 == 'headerChecksum') {
                                                            echo 'selected';
                                                        } ?>>Header checksum</option>
                        <option value="ipFrom" <?php if ($choice2 == 'ipFrom') {
                                                    echo 'selected';
                                                } ?>>IP en provenance de :</option>
                        <option value="ipDest" <?php if ($choice2 == 'ipDest') {
                                                    echo 'selected';
                                                } ?>>IP à destination de :</option>
                    </select>
                </form>
            </div>
            <div id="dashTable">
                <table id="table_id" class="display nowrap" style="width: 80%;">
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

<script src="modal/headerModal.js"></script>

</html>