$(document).ready(function () {
    let keys = [];
    let values = [];
    $.getJSON("includes/graphs/getGraphData/getProtocolName.php", function (data) {



        $.each(data, function (key, val) {
            keys.push(key);
            values.push(val);
        });



        const ctx3 = document.getElementById('myChart');

        const myChart3 = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: keys,
                datasets: [{
                    label: 'Protocol Name Usage',
                    data: values,
                    backgroundColor: [
                        'rgba(0, 0, 255, 0.5)',
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
            options: {

            }
        })
    })
})

