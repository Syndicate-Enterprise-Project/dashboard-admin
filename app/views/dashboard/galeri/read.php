<?php
if (isset($_SESSION['flash'])) {
    $flashdata = $_SESSION['flash'];
    unset($_SESSION['flash']);
} else {
    $flashdata = null;
}
?>
<div class="flash-data" data-flashdata="<?= htmlspecialchars(json_encode($flashdata)); ?>"></div>

<div class="d-flex flex-column w-100 mx-4" style="margin-top: 5%;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Galeri</h1>
    </div>

    <div class="table-responsive col-md-8">
        <button type="button" class="btn btn-primary mb-3 tampilModalTambahAkun" data-bs-toggle="modal" data-bs-target="#tambahAkun">
            Tambah Galeri
        </button>
        <table class="table table-striped table-md">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Video</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['galeri'] as $galeri) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $galeri['nama_pegawai']; ?></td>
                        <td><?= $galeri['hp_pegawai']; ?></td>
                        <td><?= $galeri['email_pegawai']; ?></td>
                        <td class="text-center">
                            <a href="<?= BASEURL; ?>/account/update" class="badge bg-warning tampilModalUbahAkun" data-bs-toggle="modal" data-bs-target="#tambahAkun" data-id="<?= $account['ID_pegawai']; ?>"><i class="bi bi-pencil-square"></i></a>
                            <a href="<?= BASEURL; ?>/account/delete/<?= $account['ID_pegawai']; ?>" class="badge bg-danger border-0 tombol-hapus" data-pesan="Deleting an account will delete all posts based on that account"><i class="bi bi-x-circle"></i></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahAkun" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Galeri</h1>
                <button type="button" class="btn-close account" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/account/create" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="text" name="foto" class="form-control" id="foto" required>
                    </div>
                    <div class="mb-3">
                        <label for="video" class="form-label">Video</label>
                        <input type="text" name="video" class="form-control" id="video" required>
                    </div>
            </div>
            <div class="modal-footer account">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>