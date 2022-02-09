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
    <title>Smart Frames</title>
</head>

<body>
    <?php include("includes/header.php") ?>
    <main>
        <div class="gridDashboard">
            <div id="graphsGrid">
                <div class="graphsX2">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="graphsX2">
                    <canvas id="myChart2"></canvas>
                </div>
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

<script>
    $(document).ready(function() {
        var i = 0;
        var labelsSetup = [];
        var dataSetup = [];
        var i = 0;
        $.get("getFlagsCode.php", function(data) {
            $.each(data, function(key, item) {
                labelsSetup[i] = key;
                dataSetup[i] = item;
                i++
            });
        });
        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labelsSetup,
                datasets: [{
                    label: 'Flags Code Usage',
                    data: dataSetup,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(255, 159, 64, 0.5)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    })
</script>
<script>
    $(document).ready(function() {
        var i = 0;
        var labelsSetup = [];
        var dataSetup = [];
        var i = 0;
        $.get("getFlagsCode.php", function(data) {
            $.each(data, function(key, item) {
                labelsSetup[i] = key;
                dataSetup[i] = item;
                i++
            });
        });
        const ctx = document.getElementById('myChart2');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labelsSetup,
                datasets: [{
                    label: 'Flags Code Usage',
                    data: dataSetup,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(255, 159, 64, 0.5)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    })
</script>