<?php
if (isset($_SESSION['flash'])) {
    $flashdata = $_SESSION['flash'];
    unset($_SESSION['flash']);
} else {
    $flashdata = null;
}
?>
<div class="flash-data" data-flashdata="<?= htmlspecialchars(json_encode($flashdata)); ?>"></div>

<<<<<<< HEAD
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
=======
<div class="d-flex flex-column w-100 mx-4" style="margin-top: 5rem;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Account</h1>
    </div>

    <div class="table-responsive col-md-8 me-5">
        <button type="button" class="btn btn-primary mb-3 tampilModalTambahAkun" data-bs-toggle="modal" data-bs-target="#tambahAkun">
            Create New Account
        </button>
        <table class="table table-striped table-md">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col" class="text-center">Action</th>
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
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
<<<<<<< HEAD
                            <a href="<?= BASEURL; ?>/account/update" class="badge bg-warning tampilModalUbahAkun mb-1" data-bs-toggle="modal" data-bs-target="#tambahAkun" data-id="<?= $account['ID_pegawai']; ?>"><i class="bi bi-pencil-square fs-5"></i></a>
                            <a href="<?= BASEURL; ?>/account/delete/<?= $account['ID_pegawai']; ?>" class="badge bg-danger border-0 tombol-hapus" data-pesan="Deleting an account will delete all posts based on that account"><i class="bi bi-x-circle fs-5"></i></a>
=======
                            <a href="<?= BASEURL; ?>/account/update" class="badge bg-warning tampilModalUbahAkun" data-bs-toggle="modal" data-bs-target="#tambahAkun" data-id="<?= $account['ID_pegawai']; ?>"><i class="bi bi-pencil-square"></i></a>
                            <a href="<?= BASEURL; ?>/account/delete/<?= $account['ID_pegawai']; ?>" class="badge bg-danger border-0 tombol-hapus" data-pesan="Deleting an account will delete all posts based on that account"><i class="bi bi-x-circle"></i></a>
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<<<<<<< HEAD
                </div>
            </div>
=======
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
</div>

<!-- Modal -->
<div class="modal fade" id="tambahAkun" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
<<<<<<< HEAD
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Akun</h1>
=======
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Create Account</h1>
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
                <button type="button" class="btn-close account" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/account/create" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
<<<<<<< HEAD
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor Telepon</label>
=======
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
                        <input type="text" name="phone" class="form-control" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3" id="passwordDiv">
<<<<<<< HEAD
                        <label for="password" class="form-label">Kata Sandi</label>
=======
                        <label for="password" class="form-label">Password</label>
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
            </div>
            <div class="modal-footer account">
<<<<<<< HEAD
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
=======
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create</button>
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
            </div>
            </form>
        </div>
    </div>
</div>