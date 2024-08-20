function cargarGrafico() {
    $.ajax({
        url: '../controllers/graficoReservaController.php',
        success: function(data) {
            const datos = JSON.parse(data);
            console.log(datos);
            const ctx = document.getElementById('myChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: datos.labels,
                    datasets: [{
                        label: 'Reservas',
                        data: datos.data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
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
            });
        },
        error: function(xhr, status, error) {
            console.error('Error al cargar datos para el gráfico de reservas:', error);
        }
    });
}

function cargarGraficoDenuncia() {
    $.ajax({
        url: '../controllers/graficoDenunciasController.php',
        success: function(data) {
            const datos = JSON.parse(data);
            console.log(datos);
            const ctx = document.getElementById('myChartDenuncia').getContext('2d');
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: datos.labels,
                    datasets: [{
                        label: 'Número de Denuncias',
                        data: datos.data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return `${tooltipItem.label}: ${tooltipItem.raw}`;
                                }
                            }
                        }
                    }
                }
            });
        },
        error: function(xhr, status, error) {
            console.error('Error al cargar datos para el gráfico de denuncias:', error);
        }
    });
}


function cargarGraficoCharla() {
    $.ajax({
        url: '../controllers/graficoCharlaController.php',
        success: function(data) {
            const datos = JSON.parse(data);
            console.log(datos);
            const ctx = document.getElementById('myChartTipoCharla').getContext('2d');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: datos.labels,
                    datasets: [{
                        label: 'Tipos de Charla',
                        data: datos.data,
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return `${tooltipItem.label}: ${tooltipItem.raw}`;
                                }
                            }
                        }
                    }
                }
            });
        },
        error: function(xhr, status, error) {
            console.error('Error al cargar datos para el gráfico de charlas:', error);
        }
    });
}

cargarGraficoCharla();
cargarGraficoDenuncia();
cargarGrafico();
