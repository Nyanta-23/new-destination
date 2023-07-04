<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include("../config.php");
include('session.php');

$count_artikel = mysqli_fetch_array(mysqli_query($mysqli, "SELECT COUNT(*) FROM article"))[0];
$count_users = mysqli_fetch_array(mysqli_query($mysqli, "SELECT COUNT(*) FROM users"))[0];
$count_attractions = mysqli_fetch_array(mysqli_query($mysqli, "SELECT COUNT(*) FROM attractions"))[0];

$attraction_chart_data = mysqli_fetch_all(
    mysqli_query($mysqli, 
        "SELECT district.nama
        , count(attractions.district_id) count
        FROM  district  
        LEFT 
        JOIN attractions 
        ON attractions.district_id = district.id  
        GROUP 
        BY district.id"
    )
);
$chart_label = [];
$chart_value = [];

foreach ($attraction_chart_data as $key => $value) {
    $chart_label[] = $value[0];
    $chart_value[] = $value[1];
}
?>
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Dashboard</h1>
            </div>
            <div class="col-md-4">
                <div class="card border border-danger text-danger rounded-4">
                    <div class="card-body text-center">
                        <h1 class="text-bold"><?= $count_users ?></h1>
                        <h5 class="text-bold">Users</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border border-primary text-primary rounded-4">
                    <div class="card-body text-center">
                        <h1 class="text-bold"><?= $count_attractions ?></h1>
                        <h5 class="text-bold">Destinasi Wisata</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border border-success text-success rounded-4">
                    <div class="card-body text-center">
                        <h1 class="text-bold"><?= $count_artikel ?></h1>
                        <h5 class="text-bold">Artikel</h5>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
    let chartLabel = JSON.parse(`<?=json_encode($chart_label)?>`)
    let chartValue = JSON.parse(`<?=json_encode($chart_value)?>`)

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: chartLabel,
            datasets: [{
                label: 'Grafik Destinasi Wisata berdasarkan Kabupaten',
                data: chartValue,
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
</script>