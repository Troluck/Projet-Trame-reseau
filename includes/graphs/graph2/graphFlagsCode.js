$(document).ready(function () {
    let keys = [];
    let values = [];
    $.getJSON("includes/graphs/getGraphData/getFlagsCode.php", function (data) {

        $.each(data, function (key, val) {
            keys.push(key);
            values.push(val);
        });

        const ctx = document.getElementById('myChart2');

        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: keys,
                datasets: [{
                    label: 'Flags Code Usage',
                    data: values,
                    backgroundColor: [
                        'rgba(0, 0, 255, 0.5)',
                        'rgba(255, 0, 0, 0.5)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 0, 0, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {}
        })
    })
})

