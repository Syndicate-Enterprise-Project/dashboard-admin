<?php

use Carbon\Carbon; ?>

<div class="container mt-4">
    <h1 class="mb-2 text-center"><?= $data['title']; ?></h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="<?= BASEURL; ?>/posts/search" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control z-0" placeholder="Masukkan judul atau isi dari post..." name="search">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Button</button>
                </div>
            </form>
        </div>
    </div>

    <?php if (count($data['posts'])) : ?>
        <?php $datetime = Carbon::parse($data['posts'][0]['created_at'], "Asia/Singapore"); ?>
        <div class="card mb-3 text-center">
            <?php if (!$data['posts'][0]['image'] == '') : ?>
                <img src="<?= BASEURL; ?>/img/upload/<?= $data['posts'][0]['image']; ?>" class="img-fluid" alt="Not Found" style="width: 1200px; height: 400px; object-fit: cover;">
            <?php else : ?>
                <img src="https://source.unsplash.com/1200x400/?<?= $data['posts'][0]['category_name']; ?>" class="card-img-top" alt="Not Found">
            <?php endif; ?>
            <div class="card-body">
                <h3 class="card-title"><a href="<?= BASEURL; ?>/posts/show/<?= $data['posts'][0]['id']; ?>" class="text-decoration-none text-dark"><?= $data['posts'][0]['title']; ?></a></h3>
                <p> <small class="text-body-secondary"> By. <a href="<?= BASEURL; ?>/posts/author/<?= $data['posts'][0]['author_name']; ?>" class="text-decoration-none"><?= $data['posts'][0]['author_name']; ?></a>
                        in <a href="<?= BASEURL; ?>/posts/category/<?= $data['posts'][0]['category_name']; ?>" class="text-decoration-none"><?= $data['posts'][0]['category_name']; ?></a>
                        <?= $datetime->diffForHumans(); ?></small></p>
                <p class="card-text"><?= $data['posts'][0]['excerpt']; ?></p>
                <a href="<?= BASEURL; ?>/posts/show/<?= $data['posts'][0]['id']; ?>" class="text-decoration-none btn btn-primary">Read more...</a>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <?php for ($i = 1; $i < count($data['posts']); $i++) : ?>
                    <?php $datetime = Carbon::parse($data['posts'][$i]['created_at'], "Asia/Singapore"); ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 text-white rounded" style="background-color: rgba(0, 0, 0, 0.7)"><a href="<?= BASEURL; ?>/posts/category/<?= $data['posts'][$i]['category_name']; ?>" class="text-white text-decoration-none"><?= $data['posts'][$i]['category_name']; ?></a></div>
                            <?php if (!$data['posts'][$i]['image'] == '') : ?>
                                <img src="<?= BASEURL; ?>/img/upload/<?= $data['posts'][$i]['image']; ?>" class="img-fluid" alt="Not Found">
                            <?php else : ?>
                                <img src="https://source.unsplash.com/500x400?<?= $data['posts'][$i]['category_name']; ?>" class="card-img-top" alt="Not Found">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?= BASEURL; ?>/posts/show/<?= $data['posts'][$i]['id']; ?>" class="text-decoration-none text-dark"><?= $data['posts'][$i]['title']; ?></a></h5>
                                <p> <small class="text-body-secondary"> By. <a href="<?= BASEURL; ?>/posts/author/<?= $data['posts'][$i]['author_name']; ?>" class="text-decoration-none"><?= $data['posts'][$i]['author_name']; ?></a>
                                        <?= $datetime->diffForHumans(); ?></small></p>
                                <p class="card-text"><?= $data['posts'][$i]['excerpt']; ?></p>
                                <a href="<?= BASEURL; ?>/posts/show/<?= $data['posts'][$i]['id']; ?>" class="btn btn-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    <?php else : ?>
        <p class="text-center fs-4">No Post Found.</p>
    <?php endif; ?>

    <div class="mt-5 d-flex justify-content-center">
        <!-- {{ $posts->links() }} -->
    </div>
</div>