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
<<<<<<< HEAD
        <h1 class="h2">Ubah Blog</h1>
=======
        <h1 class="h2">Create New Post</h1>
>>>>>>> 552b67389f2338092cbefe82d1af8844dc15537d
    </div>

    <div class="col-lg-8">
        <form action="<?= BASEURL; ?>/dashboard/update" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
            <input type="hidden" name="post_id" value="<?= $data['post']['id']; ?>">
            <div class="mb-3">
<<<<<<< HEAD
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control " id="title" name="title" required autofocus>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <select class="form-select" name="category_id">
                    <?php foreach ($data['categories'] as $category) : ?>
                        <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
=======
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control " id="title" name="title" required autofocus value="<?= $data['post']['title']; ?>">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    <?php foreach ($data['categories'] as $category) : ?>
                        <?php if ($category['name'] == $data['post']['category_name']) : ?>
                            <option selected value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
                        <?php else : ?>
                            <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
                        <?php endif; ?>
>>>>>>> 552b67389f2338092cbefe82d1af8844dc15537d
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
<<<<<<< HEAD
                <label for="image" class="form-label">Gambar</label>
                <img class="img-fluid img-preview mb-3 col-sm-5">
                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Isi Blog</label>
                <input id="body" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
                <div id="error-msg" style="color: red; display: none;">Isi Blog tidak boleh kosong!</div>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mb-4">Simpan</button>
=======
                <label for="image" class="form-label">Post Image</label>
                <input type="hidden" name="oldImage" value="<?= $data['post']['image']; ?>">
                <?php if ($data['post']['image']) : ?>
                    <img src="<?= BASEURL; ?>/img/upload/<?= $data['post']['image']; ?>" alt="Not Found" class="col-sm-5 img-fluid d-block mb-3">
                <?php else : ?>
                    <img class="img-fluid img-preview mb-3 col-sm-5">
                <?php endif; ?>
                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body" value="<?= $data['post']['body']; ?>">
                <trix-editor input="body"></trix-editor>
                <div id="error-msg" style="color: red; display: none;">Body tidak boleh kosong!</div>
            </div>
            <button type="submit" class="btn btn-primary mb-4">Create Post</button>
>>>>>>> 552b67389f2338092cbefe82d1af8844dc15537d
        </form>
    </div>
</div>

<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    function validateForm() {
        var editor = document.querySelector('trix-editor');
        var bodyValue = editor.editor.getDocument().toString().trim();

        if (bodyValue === '') {
            document.getElementById('error-msg').style.display = 'block';
            return false;
        }

        return true;
    }
</script>