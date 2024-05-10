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
        <h1 class="h2">Ubah Mobil</h1>
    </div>

    <div class="col-lg-8">
        <form action="<?= BASEURL; ?>/mobil/update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data['mobil']['ID_mobil']; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control " id="nama" name="nama" value="<?= $data['mobil']['nama_mobil']; ?>" required autofocus>
            </div>
            <div class="mb-3">
                <label for="tipe" class="form-label">Tipe</label>
                <select class="form-select" name="tipe">
                    <?php foreach ($data['selectbox']['tipe'] as $tipe) : ?>
                        <?php if ($tipe == $data['mobil']['tipe_mobil']) : ?>
                            <option selected value="<?= $tipe; ?>"><?= $tipe; ?></option>
                        <?php else : ?>
                            <option value="<?= $tipe; ?>"><?= $tipe; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="number" class="form-control " id="tahun" name="tahun" value="<?= $data['mobil']['tahun_mobil']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="mesin" class="form-label">Mesin</label>
                <input type="text" class="form-control " id="mesin" name="mesin" value="<?= $data['mobil']['mesin_mobil']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="transmisi" class="form-label">Transmisi</label>
                <select class="form-select" name="transmisi">
                    <?php foreach ($data['selectbox']['transmisi'] as $transmisi) : ?>
                        <?php if ($transmisi == $data['mobil']['transmisi_mobil']) : ?>
                            <option selected value="<?= $transmisi; ?>"><?= $transmisi; ?></option>
                        <?php else : ?>
                            <option value="<?= $transmisi; ?>"><?= $transmisi; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="tenaga" class="form-label">Tenaga</label>
                <input type="text" class="form-control " id="tenaga" name="tenaga" value="<?= $data['mobil']['tenaga_mobil']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="penggerak" class="form-label">Penggerak</label>
                <select class="form-select" name="penggerak">
                    <?php foreach ($data['selectbox']['penggerak'] as $penggerak) : ?>
                        <?php if ($penggerak == $data['mobil']['penggerak_mobil']) : ?>
                            <option selected value="<?= $penggerak; ?>"><?= $penggerak; ?></option>
                        <?php else : ?>
                            <option value="<?= $penggerak; ?>"><?= $penggerak; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="warna" class="form-label">Warna</label>
                <input type="text" class="form-control " id="warna" name="warna" value="<?= $data['mobil']['warna_mobil']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control " id="harga" name="harga" value="<?= $data['mobil']['harga_mobil']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="bb" class="form-label">Bahan Bakar</label>
                <select class="form-select" name="bb">
                    <?php foreach ($data['selectbox']['bb'] as $bb) : ?>
                        <?php if ($bb == $data['mobil']['bb_mobil']) : ?>
                            <option selected value="<?= $bb; ?>"><?= $bb; ?></option>
                        <?php else : ?>
                            <option value="<?= $bb; ?>"><?= $bb; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="hidden" name="oldImage" value="<?= $data['mobil']['gambar_mobil']; ?>">
                <?php if ($data['mobil']['gambar_mobil']) : ?>
                    <img src="<?= BASEURL; ?>/img/upload/<?= $data['mobil']['gambar_mobil']; ?>" alt="Not Found" class="col-sm-5 img-fluid d-block mb-3">
                    <img class="img-fluid img-preview mb-3 col-sm-5">
                <?php endif; ?>
                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
            </div>
<<<<<<< HEAD
            <div class="mb-3">
                <label for="imageInt" class="form-label">Gambar Interior Mobil</label>
                <input type="hidden" name="oldImageInt" value="<?= $data['mobil']['gambar_interior']; ?>">
                <?php if ($data['mobil']['gambar_interior']) : ?>
                    <img src="<?= BASEURL; ?>/img/upload/<?= $data['mobil']['gambar_interior']; ?>" alt="Not Found" class="col-sm-5 img-fluid d-block mb-3">
                    <img class="img-fluid img-previewInt mb-3 col-sm-5">
                <?php endif; ?>
                <input class="form-control" type="file" id="imageInt" name="imageInt" onchange="previewImageInt()">
            </div>
            <div class="mb-3">
                <label for="imageEks" class="form-label">Gambar Eksterior Mobil</label>
                <input type="hidden" name="oldImageEks" value="<?= $data['mobil']['gambar_eksterior']; ?>">
                <?php if ($data['mobil']['gambar_eksterior']) : ?>
                    <img src="<?= BASEURL; ?>/img/upload/<?= $data['mobil']['gambar_eksterior']; ?>" alt="Not Found" class="col-sm-5 img-fluid d-block mb-3">
                    <img class="img-fluid img-previewEks mb-3 col-sm-5">
                <?php endif; ?>
                <input class="form-control" type="file" id="imageEks" name="imageEks" onchange="previewImageEks()">
            </div>
=======
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
            <button type="submit" class="btn btn-primary mb-4">Ubah Mobil</button>
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