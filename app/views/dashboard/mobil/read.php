<?php
if (isset($_SESSION['flash'])) {
    $flashdata = $_SESSION['flash'];
    unset($_SESSION['flash']);
} else {
    $flashdata = null;
}
?>
<div class="flash-data" data-flashdata="<?= htmlspecialchars(json_encode($flashdata)); ?>"></div>

<div class="d-flex flex-column w-100 mx-4" style="margin-top: 5rem;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Mobil</h1>
    </div>

    <div class="table-responsive small me-5">
        <a href="<?= BASEURL; ?>/mobil/mobil_create" class="btn btn-primary mb-3">Tambah Mobil</a>
        <a href="<?= BASEURL; ?>/mobil/csv" class="btn btn-primary mb-3">Download CSV</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Mesin</th>
                    <th scope="col">Transmisi</th>
                    <th scope="col">Tenaga</th>
                    <th scope="col">Bahan Bakar</th>
                    <th scope="col">Penggerak</th>
                    <th scope="col">Warna</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Gambar</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['mobil'] as $post) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $post['nama_mobil']; ?></td>
                        <td><?= $post['tipe_mobil']; ?></td>
                        <td><?= $post['tahun_mobil']; ?></td>
                        <td><?= $post['mesin_mobil']; ?></td>
                        <td><?= $post['transmisi_mobil']; ?></td>
                        <td><?= $post['tenaga_mobil']; ?></td>
                        <td><?= $post['bb_mobil']; ?></td>
                        <td><?= $post['penggerak_mobil']; ?></td>
                        <td><?= $post['warna_mobil']; ?></td>
                        <td><?= $post['harga_mobil']; ?></td>
                        <td><img style="width: 50px;" src="<?= BASEURL . "/img/upload/" . $post["gambar_mobil"] ?>" alt=""></td>
                        <td class="text-center">
                            <a href="<?= BASEURL; ?>/mobil/mobil_edit/<?= $post['ID_mobil']; ?>" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="<?= BASEURL; ?>/mobil/delete/<?= $post['ID_mobil']; ?>" class="badge bg-danger border-0 tombol-hapus" data-pesan="delete this post"><i class="bi bi-x-circle"></i></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>