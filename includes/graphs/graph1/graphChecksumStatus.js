$(document).ready(function () {
    let keys = [];
    let values = [];
    $.getJSON("includes/graphs/getGraphData/getChecksumStatus.php", function (data) {

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
                    label: 'Protocol Checksum Status',
                    data: values,
                    backgroundColor: [
                        'rgba(50, 50, 220, 0.9)',
                        'rgba(220, 50, 50, 0.9)',
                        'rgba(50, 220, 50, 0.9)'
                    ],
                    borderColor: [
                        'rgba(0, 0, 150, 1)',
                        'rgba(150, 0, 0, 1)',
                        'rgba(0, 150, 0, 1)'
                    ],
                    borderRadius: 5,
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            boxWidth: 0,
                        }
                    }
                }
            }
        })
    })
})