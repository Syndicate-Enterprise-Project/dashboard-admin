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
        <?php if ($_SESSION['user_auth']['is_admin'] === 1 or $_SESSION['user_auth']['is_admin'] === 2) : ?>
<<<<<<< HEAD
            <h1 class="h2">User Blog</h1>
        <?php else : ?>
            <h1 class="h2">My Blog</h1>
=======
            <h1 class="h2">User Posts</h1>
        <?php else : ?>
            <h1 class="h2">My Posts</h1>
>>>>>>> 552b67389f2338092cbefe82d1af8844dc15537d
        <?php endif; ?>
    </div>

    <div class="table-responsive small">
<<<<<<< HEAD
        <a href="<?= BASEURL; ?>/dashboard/post_create" class="btn btn-primary mb-3">Tambah Blog</a>
=======
        <a href="<?= BASEURL; ?>/dashboard/post_create" class="btn btn-primary mb-3">Create New Post</a>
>>>>>>> 552b67389f2338092cbefe82d1af8844dc15537d
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
<<<<<<< HEAD
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Isi Blog</th>
                    <th scope="col" class="text-center">Aksi</th>
=======
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col" class="text-center">Action</th>
>>>>>>> 552b67389f2338092cbefe82d1af8844dc15537d
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['posts'] as $post) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $post['title']; ?></td>
                        <td><?= $post['category_name']; ?></td>
<<<<<<< HEAD
                        <td></td>
                        <td></td>
=======
>>>>>>> 552b67389f2338092cbefe82d1af8844dc15537d
                        <td class="text-center">
                            <a href="<?= BASEURL; ?>/dashboard/post_show/<?= $post['id']; ?>" class="badge bg-info"><i class="bi bi-eye"></i></a>
                            <a href="<?= BASEURL; ?>/dashboard/post_edit/<?= $post['id']; ?>" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                            <a href="<?= BASEURL; ?>/dashboard/delete/<?= $post['id']; ?>" class="badge bg-danger border-0 tombol-hapus" data-pesan="delete this post"><i class="bi bi-x-circle"></i></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>