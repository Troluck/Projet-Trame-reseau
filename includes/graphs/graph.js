$(document).ready(function () {
    let keys = [];
    let values = [];
    $.getJSON("includes/graphs/getFlagsCode.php", function (data) {

        $.each(data, function (key, val) {
            keys.push(key);
            values.push(val);
        });
        // console.log(keys);
        // console.log('------------------')
        // console.log(values);
        // console.log('------------------')


        const ctx = document.getElementById('myChart');

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

