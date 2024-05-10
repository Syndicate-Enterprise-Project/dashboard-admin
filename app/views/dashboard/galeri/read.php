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
        <h1 class="h2">Daftar Galeri</h1>
    </div>
    <div class="row">
        <div class="d-flex justify-content-start w-100">
            <button type="button" class="btn btn-primary mb-3 tampilModalFoto me-2" data-bs-toggle="modal" data-bs-target="#tambahAkun">
                Tambah Foto
            </button>
            <button type="button" class="btn btn-primary mb-3 tampilModalVideo" data-bs-toggle="modal" data-bs-target="#tambahVideo">
                Tambah Video
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
                            <th scope="col">Foto</th>
                            <th scope="col">Video</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($data['galeri'] as $galeri) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><img style="width: 50px;" src="<?= BASEURL . "/img/upload/" . $galeri["foto"] ?>" alt="Not Found"></td>
                                <td><?= $galeri['video']; ?></td>
                                <td class="text-center">
                                    <a href="<?= BASEURL; ?>/galeri/delete/<?= $galeri['ID_galeri']; ?>" class="badge bg-danger border-0 tombol-hapus" data-pesan=""><i class="bi bi-x-circle fs-5"></i></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
=======
<div class="d-flex flex-column w-100 mx-4" style="margin-top: 5rem;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Galeri</h1>
    </div>

    <div class="table-responsive col-md-8 me-5">
        <button type="button" class="btn btn-primary mb-3 tampilModalFoto" data-bs-toggle="modal" data-bs-target="#tambahAkun">
            Tambah Foto
        </button>
        <button type="button" class="btn btn-primary mb-3 tampilModalVideo" data-bs-toggle="modal" data-bs-target="#tambahVideo">
            Tambah Video
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
                        <td><img style="width: 50px;" src="<?= BASEURL . "/img/upload/" . $galeri["foto"] ?>" alt="Not Found"></td>
                        <td><?= $galeri['video']; ?></td>
                        <td class="text-center">
                            <a href="<?= BASEURL; ?>/galeri/delete/<?= $galeri['ID_galeri']; ?>" class="badge bg-danger border-0 tombol-hapus" data-pesan=""><i class="bi bi-x-circle"></i></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahAkun" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
<<<<<<< HEAD
    <div class="modal-dialog modal-dialog-centered">
=======
    <div class="modal-dialog">
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Galeri</h1>
                <button type="button" class="btn-close account" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/galeri/createFoto" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control" id="foto" required>
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
<div class="modal fade" id="tambahVideo" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
<<<<<<< HEAD
    <div class="modal-dialog modal-dialog-centered">
=======
    <div class="modal-dialog">
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Galeri</h1>
                <button type="button" class="btn-close account" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/galeri/createVideo" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="video" class="form-label">Video</label>
<<<<<<< HEAD
                        <input type="text" name="video" class="form-control" id="video" placeholder="Harap masukkan link video yang sudah di embed..." required>
=======
                        <input type="text" name="video" class="form-control" id="video" required>
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
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