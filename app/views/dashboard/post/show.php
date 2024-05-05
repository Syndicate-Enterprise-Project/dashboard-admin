<div class="d-flex flex-column w-100 mx-4">
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-8">
                <article>
                    <h2><?= $data['blogpost']['judul_blog']; ?></h2>
                    <a href="<?= BASEURL; ?>/blog" class="btn btn-success my-3"><i class="bi bi-arrow-left"></i> Back to my
                        posts</a>
                    <a href="<?= BASEURL; ?>/blog/post_edit/<?= $data['blogpost']['ID_blog']; ?>" class="btn btn-warning my-3"><i class="bi bi-pencil-square"></i> Edit</a>
                    <a href="<?= BASEURL; ?>/blog/delete/<?= $data['blogpost']['ID_blog']; ?>" class="btn btn-danger tombol-hapus" data-pesan="delete this post"><i class="bi bi-x-circle"></i> Delete</a>
                    <?php if (!$data['blogpost']['gambar_blog'] == '') : ?>
                        <img src="<?= BASEURL; ?>/img/upload/<?= $data['blogpost']['gambar_blog']; ?>" class="img-fluid d-block" alt="Not Found">
                    <?php else : ?>
                        <img src="https://source.unsplash.com/1200x500/?<?= $data['blogpost']['kategori']; ?>" class="img-fluid d-block" alt="Not Found">
                    <?php endif; ?>

                    <article class="my-3 fs-5 text-justify">
                        <?= $data['blogpost']['isi_blog']; ?>
                    </article>

                </article>
            </div>
        </div>
    </div>
</div>