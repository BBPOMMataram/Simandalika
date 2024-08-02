document.addEventListener('DOMContentLoaded', function() {
    // For Sidebar
const allSideMenu = document.querySelectorAll('#sidebar .sidebar-menu li a');

allSideMenu.forEach(item=> {
const li = item.parentElement;

item.addEventListener('click', function () {
    allSideMenu.forEach(i=> {
        i.parentElement.classList.remove('active');
    })
    li.classList.add('active');
})
});

// For Toggle
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
    sidebar.classList.toggle('hide');
})

});

//  Percepat

// Score Stok

// script.js
document.addEventListener("DOMContentLoaded", function() {
    const apiUrl = "https://percepat-api.bbpommataram.id/api/barang";
    
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            const total = data.data.total;
            const jumlahATK = total.atk;
            const jumlahReagen = total.reagen;

            document.getElementById('jmlatk').innerText = jumlahATK;
            document.getElementById('jmlreagen').innerText = jumlahReagen;
        })
        .catch(error => {
            console.error('Error fetching data:', error);
            document.getElementById('jmlatk').innerText = 'Error';
            document.getElementById('jmlreagen').innerText = 'Error';
        });
});

// Jumlah

async function fetchChartData() {
    try {
        const response = await fetch('https://percepat-api.bbpommataram.id/api/barang');
        const data = await response.json();
        
        console.log('Data from API:', data);
        return data;
    } catch (error) {
        console.error('Error fetching data:', error);
        return []; // Return empty array on error
    }
}

async function createChart() {
    const chartData = await fetchChartData();
    if (chartData.length === 0) {
        console.error('No data available to display.');
        return;
    }

    // Convert the object to an array
    const parsedData = Object.values(chartData);

    const reagen = parsedData.filter(item => item.data && item.data.total && item.data.total.reagen === 'Reagen').length;
    const atk = parsedData.filter(item => item.data && item.data.total && item.data.total.atk === 'ATK').length;


    
    const ctx = document.getElementById('diagram').getContext('2d');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Reagen', 'ATK'],
            datasets: [{
                data: [reagen, atk],
                backgroundColor: ['#FF6384', '#36A2EB'],
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Jumlah Reagen & ATK'
                }
            }
        }
    });
}

createChart();

// Permintaan

let permintaanChart;

async function fetchChartData(year) {
    try {
        const response = await fetch(`https://percepat-api.bbpommataram.id/api/reagen/permintaan?year=${year}`);
        const data = await response.json();


        console.log('Data from API:', data);


        if (!data.reagen) {
            console.error('Data is not in expected format:', data);
            return;
        }


        const reagenData = data.reagen;


        const labels = reagenData.map(item => item.month);
        const jumlahPermintaan = reagenData.map(item => item.jumlah_permintaan);
        const jumlahRealisasi = reagenData.map(item => item.jumlah_realisasi);


        console.log('Labels:', labels);
        console.log('Jumlah Permintaan:', jumlahPermintaan);
        console.log('Jumlah Realisasi:', jumlahRealisasi);


        const ctx = document.getElementById('permintaan').getContext('2d');
        if (permintaanChart) {
            permintaanChart.data.labels = labels;
            permintaanChart.data.datasets[0].data = jumlahPermintaan;
            permintaanChart.data.datasets[1].data = jumlahRealisasi;
            permintaanChart.update();
        } else {
            permintaanChart = new Chart(ctx, {
                type: 'line',
                data: {
                                    labels: labels,
                                    datasets: [
                                        {
                                            label: 'Jumlah Permintaan',
                                            data: jumlahPermintaan,
                                            backgroundColor: '#0F67B1',
                                            borderColor: '#0F67B1',
                                            borderWidth: 1
                                        },
                                        {
                                            label: 'Jumlah Realisasi',
                                            data: jumlahRealisasi,
                                            backgroundColor: '#059212',
                                            borderColor: '#059212',
                                            borderWidth: 1
                                        }
                                    ]
                                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        } 
    } catch (error) {
        console.error('Error fetching data:', error);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const yearSelect = document.getElementById('year');
    const currentYear = new Date().getFullYear();

    // Check if the current year is already in the options
    let yearExists = false;
    for (let i = 0; i < yearSelect.options.length; i++) {
        if (parseInt(yearSelect.options[i].value) === currentYear) {
            yearExists = true;
            break;
        }
    }

    // Add the current year if it doesn't exist in the options
    if (!yearExists) {
        const option = document.createElement('option');
        option.value = currentYear;
        option.text = currentYear;
        yearSelect.appendChild(option);
    }

    // Set the default value to the current year
    yearSelect.value = currentYear;
    fetchChartData(currentYear); // Load data for the current year
});



// window.onload = () => fetchChartData(2024);

// ED
document.addEventListener("DOMContentLoaded", function () {
    fetch('https://percepat-api.bbpommataram.id/api/reagen-ed')
        .then(response => response.json())
        .then(data => {
            const total = data.meta.total;
            const expired = data.meta.to;

            const ctx = document.getElementById('diagram').getContext('2d');
            const myPieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Total Item', 'Item Expired '],
                    datasets: [{
                        label: 'Jumlah Reagen & ATK',
                        data: [total, expired],
                        backgroundColor: [
                            '#059212',
                            '#FF9F00'
                        ],
                        borderColor: [
                            '#059212',
                            '#FF9F00'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                            align: 'start',
                            labels: {
                                padding: 10,
                                boxWidth: 12,
                                padding: 5
                            }
                        },
                        datalabels: {
                            color: '#FCFFFE',
                            anchor: 'center',
                            align: 'center',
                            offset: -10,
                            font: {
                                weight: 'regular'
                            },
                            formatter: (value) => value
                        }
                    },
                    layout: {
                        padding: {
                            bottom: 20
                        }
                    }
                },
                plugins: [ChartDataLabels]
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});

// E-Tamu

// document.addEventListener('DOMContentLoaded', function () {
//     const tahunSelect = document.getElementById('tahun');
//     const bulanSelect = document.getElementById('bulan');
//     const ctx = document.getElementById('guestPieChart').getContext('2d');
    
let chart;

async function fetchGuestData(year, month) {
    const url = 'https://e-tamu.bbpommataram.id/api/guests?year=' + year;
    const response = await fetch(url);
    const data = await response.json();
    return data.guests;
}

function processGuestData(guests, monthFilter) {
    const serviceCounts = {};

    guests.forEach(guest => {
        if (monthFilter && guest.month !== monthFilter) {
            return;
        }

        guest.services.forEach(service => {
            if (serviceCounts[service.service_name]) {
                serviceCounts[service.service_name] += service.total;
            } else {
                serviceCounts[service.service_name] = service.total;
            }
        });
    });

    const labels = Object.keys(serviceCounts);
    const counts = Object.values(serviceCounts);

    return { labels, counts };
}

async function updateChart(year, month) {
    const guests = await fetchGuestData(year);
    const { labels, counts } = processGuestData(guests, month);

    if (chart) {
        chart.destroy();
    }

    chart = new Chart(document.getElementById('guestPieChart').getContext('2d'), {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                label: 'Jumlah Pengunjung',
                data: counts,
                backgroundColor: [
                                        '#D32F2E',
                                        '#FF5F00',
                                        '#FF9F00',
                                        '#9BEC00',
                                        '#059212',
                                        '#006769',
                                        '#0F67B1',
                                        '#850F8D'
                                    ],
                                    borderColor: [
                                       '#D32F2E',
                                        '#FF5F00',
                                        '#FF9F00',
                                        '#9BEC00',
                                        '#059212',
                                        '#006769',
                                        '#0F67B1',
                                        '#850F8D'
                                    ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                    align: 'start',
                    labels: {
                        padding: 10,
                        boxWidth: 12,
                        padding: 5
                    }
                },
                datalabels: {
                    color: '#FCFFFE',
                    anchor: 'center',
                    align: 'center',
                    offset: -10,
                    font: {
                        weight: 'regular'
                    },
                    formatter: (value) => value
                }
            },
            layout: {
                padding: {
                    bottom: 20
                }
            }
        },
        plugins: [ChartDataLabels]
    });
}


function Filtering() {
    const year = document.getElementById('tahun').value;
    const month = document.getElementById('bulan').value !== 'Pilih' ? document.getElementById('bulan').value : null;
    if (year !== 'Pilih') {
        updateChart(year, month);
    }
}

function Resetting() {
    document.getElementById('tahun').value = new Date().getFullYear();
    document.getElementById('bulan').value = 'Pilih';
    if (chart) {
        // chart.destroy();
        updateChart('2024', '');
    }
}

// Inisialisasi chart dengan data default
updateChart('2024', null);

// Bind filter buttons
document.querySelector('button[onclick="Filtering()"]').addEventListener('click', Filtering);
document.querySelector('button[onclick="Resetting()"]').addEventListener('click', Resetting);

   
