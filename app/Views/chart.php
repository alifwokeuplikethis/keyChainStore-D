<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body style="background-color:#CADABF;">
<h2 style="text-align:center;margin-left:100px;">Data penjualan <button style="float:right;" onclick="window.location.href='/'"><i class="fas fa-arrow-left"></i> Back to home</button></h2>
<div>
    <label for="startDate">Tentukan hari awal:</label>
    <input type="date" id="startDate" name="startDate" onchange="updateDates()" required>
    <label for="endDate">Tentukan hari akhir:</label>
    <input type="date" id="endDate" name="endDate" onchange="updateDates()" required></div> 
    <div style="width: 50%;float:left;">
        <canvas id="salesChart1"></canvas><p>
        <canvas id="salesChart2"></canvas><p>
        <canvas id="salesChart3"></canvas>
    </div><div style="float:right;width:50%;margin-top:200px;"><canvas id="salesPieChart"></canvas><center style="margin-top:10px;">Total yang terjual: <?= $sumTotal; ?> gantungan</center></div>
    <script>
        function updateDates() {
            const startDate = document.getElementById('startDate').value;
            const endDate = document.getElementById('endDate').value;
            
            if (startDate && endDate) {
                window.location.href = `/dashboard/${startDate}/${endDate}`;
            }
        }
        
        
        const salesData1 = <?= json_encode($dataId1['data']) ?>;
        const salesData2 = <?= json_encode($dataId2['data']) ?>;
        const salesData3 = <?= json_encode($dataId3['data']) ?>;

        const labels1 = salesData1.map(item => item.date);
        const amounts1 = salesData1.map(item => item.total_amount);

        const labels2 = salesData2.map(item => item.date);
        const amounts2 = salesData2.map(item => item.total_amount);

        const labels3 = salesData3.map(item => item.date);
        const amounts3 = salesData3.map(item => item.total_amount);

        const ctx1 = document.getElementById('salesChart1').getContext('2d');
        const ctx2 = document.getElementById('salesChart2').getContext('2d');
        const ctx3 = document.getElementById('salesChart3').getContext('2d');
        const ctxPie = document.getElementById('salesPieChart').getContext('2d');

        const salesChart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: labels1,
                datasets: [{
                    label: '(Keychain Mahiru Shiina)',
                    data: amounts1,
                    backgroundColor: 'rgba(85, 210, 25, 0.4)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2
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

        const salesChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: labels2,
                datasets: [{
                    label: '(Keychain Dazai Osamu)',
                    data: amounts2,
                    backgroundColor: 'rgba(255, 159, 64, 0.4)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 2
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

        const salesChart3 = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: labels3,
                datasets: [{
                    label: '(Keychain Fyodor Dostoevsky)',
                    data: amounts3,
                    backgroundColor: 'rgba(54, 162, 235, 0.4)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2
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
        const totalAmount1 = amounts1.reduce((sum, value) => sum + value, 0);
        const totalAmount2 = amounts2.reduce((sum, value) => sum + value, 0);
        const totalAmount3 = amounts3.reduce((sum, value) => sum + value, 0);

        const salesPieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: [
                    'Keychain Mahiru Shiina',
                    'Keychain Dazai Osamu',
                    'Keychain Fyodor Dostoevsky'
                ],
                datasets: [{
                    label: 'Total Penjualan',
                    data: [totalAmount1, totalAmount2, totalAmount3],
                    backgroundColor: [
                        'rgba(85, 210, 25, 0.4)',
                        'rgba(255, 159, 64, 0.4)',
                        'rgba(54, 162, 235, 0.4)'
                    ],
                    borderColor: [
                        'rgba(85, 210, 25, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(54, 162, 235, 1)'
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
                            label: function(context) {
                                let label = context.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                label += context.raw;
                                return label;
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
