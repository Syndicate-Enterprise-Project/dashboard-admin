<div class="container mt-4">
    <div class="container mb-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article>
                    <h2><?= $data['post']['title']; ?></h2>
                    <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"><?= $data['post']['author_name']; ?></a> in <a href="//posts?category={{ $post->category->slug }}" class="text-decoration-none"><?= $data['post']['category_name']; ?></a></p>
                    <?php if (!$data['post']['image'] == '') : ?>
                        <img src="<?= BASEURL; ?>/img/upload/<?= $data['post']['image']; ?>" class="img-fluid" alt="Not Found">
                    <?php else : ?>
                        <img src="https://source.unsplash.com/1200x500/?<?= $data['post']['image']; ?>" class="img-fluid" alt="Not Found">
                    <?php endif; ?>

                    <article class="my-3 fs-5 text-justify">
                        <?= $data['post']['body']; ?>
                    </article>

                </article>
                <a href="<?= BASEURL; ?>/posts">Kembali</a>
            </div>
        </div>
    </div>
</div>