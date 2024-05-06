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
        <h1 class="h2">Blog Post</h1>
    </div>

    <div class="table-responsive small me-5">
        <a href="<?= BASEURL; ?>/blog/post_create" class="btn btn-primary mb-3">Tambah Blog</a>
        <table class="table table-striped table-md">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Isi Blog</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['posts'] as $post) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $post['judul_blog']; ?></td>
                        <td><?= $post['kategori_blog']; ?></td>
                        <td><?= $post['isi_blog']; ?></td>
                        <td><?= $post['terbit_blog']; ?></td>
                        <td class="text-center">
                            <a href="<?= BASEURL; ?>/blog/post_edit/<?= $post['ID_blog']; ?>" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="<?= BASEURL; ?>/blog/delete/<?= $post['ID_blog']; ?>" class="badge bg-danger border-0 tombol-hapus" data-pesan="delete this post"><i class="bi bi-x-circle"></i></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>