<?php 
include 'dados.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gráfico de Aprovados e reprovados</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart"></canvas>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const aprovados = <?php echo $aprovados; ?>;
        const reprovados = <?php echo $reprovados; ?>;

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Aprovados', 'Reprovados'],
                datasets: [{
                    label: 'Número de Aprovados e Reprovados',
                    data: [aprovados, reprovados],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 0
                }]
            }
        });
    </script>   

</body>
</html>