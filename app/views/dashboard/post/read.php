<?php
if (isset($_SESSION['flash'])) {
    $flashdata = $_SESSION['flash'];
    unset($_SESSION['flash']);
} else {
    $flashdata = null;
}
?>
<<<<<<< HEAD


<div class="flash-data" data-flashdata="<?= htmlspecialchars(json_encode($flashdata)); ?>"></div>

<div class="d-flex flex-column w-100 mx-2 mb-5" style="margin-top: 5rem;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Blog</h1>
    </div>
    <div class="row">
        <div class="d-flex justify-content-start w-100">
            <a href="<?= BASEURL; ?>/blog/post_create" class="btn btn-primary mb-3">Tambah Blog</a>
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
=======
<div class="flash-data" data-flashdata="<?= htmlspecialchars(json_encode($flashdata)); ?>"></div>

<div class="d-flex flex-column w-100 mx-4" style="margin-top: 5rem;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Blog Post</h1>
    </div>

    <div class="table-responsive small me-5">
        <a href="<?= BASEURL; ?>/blog/post_create" class="btn btn-primary mb-3">Tambah Blog</a>
        <table class="table table-striped table-md">
            <thead>
                <tr>
                    <th scope="col">#</th>
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Isi Blog</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
<<<<<<< HEAD
            <tbody style="max-height: 30px; overflow-y: auto;">
=======
            <tbody>
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
                <?php $i = 1; ?>
                <?php foreach ($data['posts'] as $post) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $post['judul_blog']; ?></td>
                        <td><?= $post['kategori_blog']; ?></td>
<<<<<<< HEAD
                        <td>
                            <?php
                            $max_length = 250;
                            $isi_blog = $post['isi_blog'];

                            if (strlen($isi_blog) > $max_length) {
                                $trimmed_text = substr($isi_blog, 0, $max_length) . "...";
                                echo $trimmed_text;
                            } else {
                                echo $isi_blog;
                            }
                            ?>
                        </td>

                        <td><?= $post['terbit_blog']; ?></td>
                        <td class="text-center">
                            <a href="<?= BASEURL; ?>/blog/post_edit/<?= $post['ID_blog']; ?>" class="badge bg-warning mb-1"><i class="bi bi-pencil-square fs-5"></i></a>
                            <a href="<?= BASEURL; ?>/blog/delete/<?= $post['ID_blog']; ?>" class="badge bg-danger border-0 tombol-hapus" data-pesan="delete this post"><i class="bi bi-x-circle fs-5"></i></a>
=======
                        <td><?= $post['isi_blog']; ?></td>
                        <td><?= $post['terbit_blog']; ?></td>
                        <td class="text-center">
                            <a href="<?= BASEURL; ?>/blog/post_edit/<?= $post['ID_blog']; ?>" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="<?= BASEURL; ?>/blog/delete/<?= $post['ID_blog']; ?>" class="badge bg-danger border-0 tombol-hapus" data-pesan="delete this post"><i class="bi bi-x-circle"></i></a>
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