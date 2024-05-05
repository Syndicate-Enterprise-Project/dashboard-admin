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
        <h1 class="h2">Ubah Blog</h1>
    </div>

    <div class="col-lg-8">
        <form action="<?= BASEURL; ?>/blog/update" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
            <input type="hidden" name="id" value="<?= $data['blogpost']['ID_blog']; ?>">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control " id="judul" name="judul" required autofocus value="<?= $data['blogpost']['judul_blog']; ?>">
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" name="kategori">
                    <?php foreach ($data['selectbox']['kategori'] as $category) : ?>
                        <?php if ($category == $data['blogpost']['kategori_blog']) : ?>
                            <option selected value="<?= $category; ?>"><?= $category; ?></option>
                        <?php else : ?>
                            <option value="<?= $category; ?>"><?= $category; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <input type="hidden" name="oldImage" value="<?= $data['blogpost']['gambar_blog']; ?>">
                <?php if ($data['blogpost']['gambar_blog']) : ?>
                    <img src="<?= BASEURL; ?>/img/upload/<?= $data['blogpost']['gambar_blog']; ?>" alt="Not Found" class="col-sm-5 img-fluid d-block mb-3">
                    <img class="img-fluid img-preview mb-3 col-sm-5">
                <?php endif; ?>
                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body" value="<?= $data['blogpost']['isi_blog']; ?>">
                <trix-editor input="body"></trix-editor>
                <div id="error-msg" style="color: red; display: none;">Body tidak boleh kosong!</div>
            </div>
            <button type="submit" class="btn btn-primary mb-4">Update Post</button>
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