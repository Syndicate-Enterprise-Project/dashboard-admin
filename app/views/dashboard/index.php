<?php
if (isset($_SESSION['flash'])) {
    $flashdata = $_SESSION['flash'];
    unset($_SESSION['flash']);
} else {
    $flashdata = null;
}
?>

<div class="flash-data" data-flashdata="<?= htmlspecialchars(json_encode($flashdata)); ?>"></div>

<div class="d-flex flex-column w-100" style="margin-top: 5%;">
    <div class="container my-3">
        <div class="p-5 text-center bg-dark-subtle rounded-3">
            <h1 class="text-body-emphasis">Selamat Datang Admin <?= $_SESSION['user_auth']['name']; ?></h1>
            <p class="lead">
                jangan lupa sholat
            </p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kunjungan/Hari</h5>
                        <p class="card-text">Kunjungan/Hari</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kunjungan/Bulan</h5>
                        <p class="card-text">Kunjungan/Hari</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Total Kunjungan</h5>
                        <p class="card-text">Kunjungan/Hari</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div><!-- penutup d-flex header -->
</div><!-- penutup container header -->
</body>