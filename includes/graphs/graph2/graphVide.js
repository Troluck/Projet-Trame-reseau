$(document).ready(function () {
    const ctx = document.getElementById('myChart2');

    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['D', 'E', 'F'],
            datasets: [{
                label: 'Graph 2',
                data: [30, 20, 50],
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
        options: {}
    })
})

