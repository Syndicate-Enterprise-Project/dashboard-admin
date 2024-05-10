<?php
if (isset($_SESSION['flash'])) {
    $flashdata = $_SESSION['flash'];
    unset($_SESSION['flash']);
} else {
    $flashdata = null;
}
?>

<div class="flash-data" data-flashdata="<?= htmlspecialchars(json_encode($flashdata)); ?>"></div>
<div class="d-flex flex-column w-100 mx-2" style="margin-top: 5rem;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Mobil</h1>
    </div>
    <div class="row">
        <div class="d-flex justify-content-start w-100">
            <a href="<?= BASEURL; ?>/mobil/mobil_create" class="btn btn-primary mb-3 me-2">Tambah Mobil</a>
            <a href="<?= BASEURL; ?>/mobil/csv" class="btn btn-primary mb-3">Download CSV</a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <div class="table-responsive small me-5">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Mesin</th>
                            <th scope="col">Transmisi</th>
                            <th scope="col">Tenaga</th>
                            <th style="width: 50%;" scope="col">Bahan Bakar</th>
                            <th scope="col">Penggerak</th>
                            <th scope="col">Warna</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Gambar Mobil</th>
                            <th scope="col">Interior Mobil</th>
                            <th scope="col">Eksterior Mobil</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($data['mobil'] as $mobil) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $mobil['nama_mobil']; ?></td>
                                <td><?= $mobil['tipe_mobil']; ?></td>
                                <td><?= $mobil['tahun_mobil']; ?></td>
                                <td><?= $mobil['mesin_mobil']; ?></td>
                                <td><?= $mobil['transmisi_mobil']; ?></td>
                                <td><?= $mobil['tenaga_mobil']; ?></td>
                                <td><?= $mobil['bb_mobil']; ?></td>
                                <td><?= $mobil['penggerak_mobil']; ?></td>
                                <td><?= $mobil['warna_mobil']; ?></td>
                                <td><?= $mobil['harga_mobil']; ?></td>
                                <td><img style="width: 50px;" src="<?= BASEURL . "/img/upload/" . $mobil["gambar_mobil"] ?>" alt=""></td>
                                <td><img style="width: 50px;" src="<?= BASEURL . "/img/upload/" . $mobil["gambar_interior"] ?>" alt=""></td>
                                <td><img style="width: 50px;" src="<?= BASEURL . "/img/upload/" . $mobil["gambar_eksterior"] ?>" alt=""></td>
                                <td class="text-center">
                                    <a href="<?= BASEURL; ?>/mobil/mobil_edit/<?= $mobil['ID_mobil']; ?>" class="badge bg-warning mb-1"><i class="bi bi-pencil-square fs-5"></i></a>
                                    <a href="<?= BASEURL; ?>/mobil/delete/<?= $mobil['ID_mobil']; ?>" class="badge bg-danger border-0 tombol-hapus" data-pesan="delete this post"><i class="bi bi-x-circle fs-5"></i></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>