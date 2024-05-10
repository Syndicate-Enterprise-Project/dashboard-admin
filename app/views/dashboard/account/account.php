<?php
if (isset($_SESSION['flash'])) {
    $flashdata = $_SESSION['flash'];
    unset($_SESSION['flash']);
} else {
    $flashdata = null;
}
?>
<div class="flash-data" data-flashdata="<?= htmlspecialchars(json_encode($flashdata)); ?>"></div>

<div class="d-flex flex-column w-100 mx-2 mb-5" style="margin-top: 5rem;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Akun</h1>
    </div>
    <div class="row">
        <div class="d-flex justify-content-start w-100">
            <button type="button" class="btn btn-primary mb-3 tampilModalTambahAkun" data-bs-toggle="modal" data-bs-target="#tambahAkun">
                    Tambah Akun
                </button>
        </div>
        </div>
    <div class="card shadow mb-4">
                <div class="card-header py-3">
                </div>
                <div class="card-body">
                <div class="table-responsive small">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Email</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['accounts'] as $account) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $account['nama_pegawai']; ?></td>
                        <td><?= $account['hp_pegawai']; ?></td>
                        <td><?= $account['email_pegawai']; ?></td>
                        <td class="text-center">
                            <a href="<?= BASEURL; ?>/account/update" class="badge bg-warning tampilModalUbahAkun mb-1" data-bs-toggle="modal" data-bs-target="#tambahAkun" data-id="<?= $account['ID_pegawai']; ?>"><i class="bi bi-pencil-square fs-5"></i></a>
                            <a href="<?= BASEURL; ?>/account/delete/<?= $account['ID_pegawai']; ?>" class="badge bg-danger border-0 tombol-hapus" data-pesan="Deleting an account will delete all posts based on that account"><i class="bi bi-x-circle fs-5"></i></a>
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

<!-- Modal -->
<div class="modal fade" id="tambahAkun" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Akun</h1>
                <button type="button" class="btn-close account" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/account/create" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor Telepon</label>
                        <input type="text" name="phone" class="form-control" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3" id="passwordDiv">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
            </div>
            <div class="modal-footer account">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>