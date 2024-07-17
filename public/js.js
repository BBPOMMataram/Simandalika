// Chart Function
$(document).ready(function () {
    fetch('grafik_data.json')
        .then(response => response.json())
        .then(data => {
            // Design 
            const presentaseData = {
                labels: data.labels,
                datasets: [{
                    label: 'Presentase Jumlah permintaan',
                    data: data.presentaseValues,
                    backgroundColor: 'rgba(50, 205, 50, 0.5)', // Lime Green with transparency
                    borderColor: 'rgba(50, 205, 50, 1)', // Lime Green
                    borderWidth: 1
                }]
            };

            const grafikData = {
                labels: data.labels,
                datasets: [{
                    label: 'Grafik Presentase permintaan Reagen',
                    data: data.grafikValues,
                    borderColor: '#0F67B1', 
                    backgroundColor: '#8AC4F4', 
                    fill: false,
                    tension: 0.1
                }]
            };

        //    Bar Chart
            const presentaseConfig = {
                type: 'bar',
                data: presentaseData,
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

        //    Line chart
            const grafikConfig = {
                type: 'line',
                data: grafikData,
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            // Rendering Bar
            const presentaseCtx = document.getElementById('presentase').getContext('2d');
            new Chart(presentaseCtx, presentaseConfig);

            // Rendering Line
            const grafikCtx = document.getElementById('grafik').getContext('2d');
            new Chart(grafikCtx, grafikConfig);
        });
});

//  Table Config
$(document).ready(function () {
    fetch('pizza_data.json')
        .then(response => response.json())
        .then(data => {
         const limitedData = data.slice(0, 200);
            const table = $('#pizzaTable').DataTable({
                data: data,
                columns: [
                    { data: 'name' },
                    { data: 'category' },
                    { data: 'ingredients' },
                    { data: 'date' },
                    { data: 'time' },
                    { data: 'price' },
                    { data: 'quantity' },
                    { data: 'size' }
                ]
            });
        });
});