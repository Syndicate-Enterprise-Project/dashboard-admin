<?php
if (isset($_SESSION['flash'])) {
    $flashdata = $_SESSION['flash'];
    unset($_SESSION['flash']);
} else {
    $flashdata = null;
}
?>
<div class="flash-data" data-flashdata="<?= htmlspecialchars(json_encode($flashdata)); ?>"></div>

<div class="d-flex flex-column w-100 mx-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Account</h1>
    </div>

    <div class="table-responsive col-md-8">
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
                <h1 class="modal-title fs-5" id="judulModal">Create Account</h1>
                <button type="button" class="btn-close account" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/account/create" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3" id="passwordDiv">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <label for="role">Role</label>
                    <select class="form-select" name="role" id="role">
                        <option value="0">User</option>
                        <option value="1">Admin</option>
                        <option value="2">Super Admin</option>
                    </select>
            </div>
            <div class="modal-footer account">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
            </form>
        </div>
    </div>
</div>