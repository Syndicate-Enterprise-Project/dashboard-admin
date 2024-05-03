<div class="container mt-4">

    <h1 class="mb-5 text-center">Category List</h1>

    <div class="container">
        <div class="row">
            <?php foreach ($data['categories'] as $category) : ?>
                <div class="col-md-4 mb-3">
                    <a href="<?= BASEURL; ?>/posts/category/<?= $category['name']; ?>">
                        <div class="card text-bg-dark">
                            <img src="https://source.unsplash.com/500x500/?<?= $category['name']; ?>" class="card-img" alt="Not Found">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-3 fs-3" style="background-color: rgba(0, 0, 0, 0.532)"><?= $category['name']; ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>