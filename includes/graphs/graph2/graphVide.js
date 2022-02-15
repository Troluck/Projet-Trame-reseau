$(document).ready(function () {
    const ctx = document.getElementById('myChart2');

    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['D', 'E', 'F'],
            datasets: [{
                label: 'Votre Graphique ici',
                data: [30, 20, 50],
                backgroundColor: [
                    'rgba(50, 50, 50, 0.9)',
                    'rgba(100, 100, 100, 0.9)',
                    'rgba(150, 150, 150, 0.9)'
                ],
                borderColor: [
                    'rgba(0, 0, 0, 1)',
                    'rgba(0, 0, 0, 1)',
                    'rgba(0, 0, 0, 1)'
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

