<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <title>Document</title>
</head>

<body>
    <canvas id="myChart2"></canvas>
</body>

</html>


<script>
    let MyChart2 = document.getElementById('myChart2');

    let PopChart = new Chart(myChart2, {
        type: 'bar',
        data: {
            labels: ['C', 'D'],
            datasets: [{
                label: 'Testing',
                data: [
                    300,
                    1000
                ],
                backgroundColor: 'green'
            }]
        },
        options: {}
    });
</script>