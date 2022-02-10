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
    <canvas id="myChart"></canvas>
</body>

</html>


<script>
    async function loadNames() {
        const response = await fetch('includes/graphs/getFlagsCode.php');
        const jsonData = await response.json();
        console.log(jsonData);
        jsonData => []
        console.log(jsonData);

    }
    loadNames();

    let MyChart = document.getElementById('myChart');

    let flagCode = new Chart(myChart, {
        type: 'bar',
        data: {
            labels: ['A', 'B'],
            datasets: [{
                label: 'Testing',
                data: [
                    500,
                    1000
                ]
            }]
        },
        options: {}
    });
</script>