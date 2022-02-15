$(document).ready(function () {
    let keys = [];
    let values = [];
    $.getJSON("includes/graphs/getGraphData/getFlagsCode.php", function (data) {

        $.each(data, function (key, val) {
            keys.push(key);
            values.push(val);
        });

        const ctx = document.getElementById('myChart');

        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: keys,
                datasets: [{
                    label: 'Flags Code Usage',
                    data: values,
                    backgroundColor: [
                        'rgba(179, 179, 179, 0.9)',
                        'rgba(255, 0, 0, 0.5)',
                        'rgba(0, 255, 0, 0.5)'
                    ],
                    borderColor: [
                        'rgba(0, 0, 255, 1)',
                        'rgba(255, 0, 0, 1)',
                        'rgba(0, 255, 0, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {}
        })
    })
})

