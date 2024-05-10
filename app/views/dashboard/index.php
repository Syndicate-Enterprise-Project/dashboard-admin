<?php
if (isset($_SESSION['flash'])) {
    $flashdata = $_SESSION['flash'];
    unset($_SESSION['flash']);
} else {
    $flashdata = null;
}
?>

<div class="flash-data" data-flashdata="<?= htmlspecialchars(json_encode($flashdata)); ?>"></div>
<div class="nama-mobil-populer" data-mobil="<?= htmlspecialchars(json_encode($data['namamobil'])); ?>"></div>
<div class="data-mobil-populer" data-mobil="<?= htmlspecialchars(json_encode(array_count_values($data['datamobil']))); ?>"></div>
<div class="tipe-pembayaran" data-pembayaran="<?= htmlspecialchars(json_encode($data['tipepembayaran'])); ?>"></div>
<div class="data-pembayaran" data-pembayaran="<?= $data['datatipepembayaran']; ?>"></div>

<div class="d-flex flex-column mt-5 w-100 mb-5">
    <!-- Main Content -->
    <div id="content" class="mt-5">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Selamat Datang, <?= $_SESSION['user_auth']['name']; ?></h1>
                <a href="<?= BASEURL; ?>/dashboard/csv" class="btn btn-primary mb-3">Download Laporan</a>

            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div style="display: flex; align-items: center; margin-left: 10%;">
                                        <div>
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 fs-5">
                                                Mobil
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['mobil']; ?></div>
                                        </div>
                                        <i class="bi bi-car-front-fill text-primary" style="padding-left: 30%; font-size: 4rem;"></i>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div style="display: flex; align-items: center; margin-left: 10%;">
                                        <div>
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1 fs-5">
                                                Blog
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['blog']; ?></div>
                                        </div>
                                        <i class="bi bi-newspaper text-success" style="padding-left: 30%; font-size: 4rem;"></i>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div style="display: flex; align-items: center; margin-left: 10%;">
                                        <div>
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 fs-5">
                                                Servis
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['servis']; ?></div>
                                        </div>
                                        <i class="bi bi-tools text-warning" style="padding-left: 30%; font-size: 4rem;"></i>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->

            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Tipe Mobil Populer</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area d-flex justify-content-center">
                                <canvas id="mobil-populer"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pie Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Metode Pembayaran Populer</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2 d-flex justify-content-center">
                                <canvas id="metode-populer"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> Direct
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> Social
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> Referral
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?= BASEURL; ?>/js/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        tipeMobilPopuler();
        metodePembayaranPopuler();
    });

    function tipeMobilPopuler() {
        const namamobil = $(".nama-mobil-populer").data("mobil");
        const datamobil = $(".data-mobil-populer").data("mobil");
        const ctx = document.getElementById('mobil-populer');

        let labels = namamobil;
        let data = Object.values(datamobil);

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: '# Banyak Penjualan',
                    data: data,
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


    function metodePembayaranPopuler() {
        const tipepembayaran = $(".tipe-pembayaran").data("pembayaran");
        const datatipepembayaran = $(".data-pembayaran").data("pembayaran");
        const ctx = document.getElementById('metode-populer');

        let labels = Object.values(tipepembayaran);
        let data = Object.values(datatipepembayaran);

        new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: labels,
                datasets: [{
                    label: '# Banyak Penjualan',
                    data: data,
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
</script>