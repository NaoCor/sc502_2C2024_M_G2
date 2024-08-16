function cargarGrafico() {

    $.ajax({
        url: '../controllers/graficoReservaController.php',
        data: {
        
         },
        success: function(data) {
            ///trabajar los datos para pintar los labels y las columnas de datos
            datos=JSON.parse(data);
            console.log(datos);
            const ctx = document.getElementById('myChart');
            new Chart(ctx, {
                type: 'bar',
                data: {
                labels: datos.labels,
                datasets: [{
                    label: 'Productos',
                    data: datos.data,
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
        }
    });
}

cargarGrafico();