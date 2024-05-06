<?php
if (isset($_SESSION['flash'])) {
    $flashdata = $_SESSION['flash'];
    unset($_SESSION['flash']);
} else {
    $flashdata = null;
}
?>

<div class="flash-data" data-flashdata="<?= htmlspecialchars(json_encode($flashdata)); ?>"></div>

<div class="d-flex flex-column w-100 h-100" style="margin-top: 5rem;">
    <div class="container my-3">
        <div class="text-start bg-bg-light rounded-3 my-3 mb-5">
            <h1 class="text-body-emphasis">Selamat Datang, <?= $_SESSION['user_auth']['name']; ?></h1>
            <p class="lead">
                <!-- jangan lupa sholat -->
            </p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card text-center bg-danger text-light">
                    <i class="bi bi-car-front-fill" style="font-size: 5rem;"></i>
                    <div class="card-body">
                        <h5 class="card-title fs-1"><?= $data['mobil']; ?></h5>
                        <p class="card-text">Mobil</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center bg-success text-light">
                    <i class="bi bi-newspaper" style="font-size: 5rem;"></i>
                    <div class="card-body">
                        <h5 class="card-title fs-1"><?= $data['blog']; ?></h5>
                        <p class="card-text">Blog</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center bg-warning text-light">
                    <i class="bi bi-tools" style="font-size: 5rem;"></i>
                    <div class="card-body">
                        <h5 class="card-title fs-1"><?= $data['servis']; ?></h5>
                        <p class="card-text">Servis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div><!-- penutup d-flex header -->
</div><!-- penutup container header -->
</body>