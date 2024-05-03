<div class="d-flex flex-column w-100 mx-4">
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-8">
                <article>
                    <h2><?= $data['post']['title']; ?></h2>
                    <a href="<?= BASEURL; ?>/dashboard/posts" class="btn btn-success my-3"><i class="bi bi-arrow-left"></i> Back to my
                        posts</a>
                    <a href="<?= BASEURL; ?>/dashboard/post_edit/<?= $data['post']['id']; ?>" class="btn btn-warning my-3"><i class="bi bi-pencil-square"></i> Edit</a>
                    <a href="<?= BASEURL; ?>/dashboard/delete/<?= $data['post']['id']; ?>" class="btn btn-danger tombol-hapus"><i class="bi bi-x-circle"></i> Delete</a>
                    <?php if (!$data['post']['image'] == '') : ?>
                        <img src="<?= BASEURL; ?>/img/upload/<?= $data['post']['image']; ?>" class="img-fluid d-block" alt="Not Found">
                    <?php else : ?>
                        <img src="https://source.unsplash.com/1200x500/?<?= $data['post']['category_name']; ?>" class="img-fluid d-block" alt="Not Found">
                    <?php endif; ?>

                    <article class="my-3 fs-5 text-justify">
                        <?= $data['post']['body']; ?>
                    </article>

                </article>
            </div>
        </div>
    </div>
</div>