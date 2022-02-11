$(document).ready(function () {
    let keys = [];
    let values = [];
    $.getJSON("includes/graphs/getTTL.php", function (data) {

        $.each(data, function (key, val) {
            keys.push(key);
            values.push(val);
        });


        const ctx2 = document.getElementById('myChart2');

        const myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: keys,
                datasets: [{
                    label: 'TTL perdus',
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
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        })
    })
})

