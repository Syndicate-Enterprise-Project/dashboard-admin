<?php
if (isset($_SESSION['flash'])) {
    $flashdata = $_SESSION['flash'];
    unset($_SESSION['flash']);
} else {
    $flashdata = null;
}
?>
<div class="flash-data" data-flashdata="<?= htmlspecialchars(json_encode($flashdata)); ?>"></div>

<div class="d-flex flex-column w-100 mx-4" style="margin-top: 5%;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Mobil</h1>
    </div>

    <div class="col-lg-8">
        <form action="<?= BASEURL; ?>/mobil/create" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control " id="nama" name="nama" required autofocus>

            </div>
            <div class="mb-3">
                <label for="tipe" class="form-label">Tipe</label>
                <select class="form-select" name="tipe">
                    <option value="SUV Kecil">SUV Kecil</option>
                    <option value="SUV Medium">SUV Medium</option>
                    <option value="SUV Besar">SUV Besar</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="number" class="form-control " id="tahun" name="tahun" required>
            </div>
            <div class="mb-3">
                <label for="mesin" class="form-label">Mesin</label>
                <input type="text" class="form-control " id="mesin" name="mesin" required>
            </div>
            <div class="mb-3">
                <label for="transmisi" class="form-label">Transmisi</label>
                <select class="form-select" name="transmisi">
                    <option value="CVT">CVT</option>
                    <option value="DCT">DCT</option>
                    <option value="Otomatis">Otomatis</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tenaga" class="form-label">Tenaga</label>
                <input type="text" class="form-control " id="tenaga" name="tenaga" required>
            </div>
            <div class="mb-3">
                <label for="penggerak" class="form-label">Penggerak</label>
                <select class="form-select" name="penggerak">
                    <option value="(4x2) FWD">(4x2) FWD</option>
                    <option value="(4x2) RWD">(4x2) RWD</option>
                    <option value="(4x4) AWD">(4x4) AWD</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="warna" class="form-label">Warna</label>
                <input type="text" class="form-control " id="warna" name="warna" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control " id="harga" name="harga" required>
            </div>
            <div class="mb-3">
                <label for="bb" class="form-label">Bahan Bakar</label>
                <select class="form-select" name="bb">
                    <option value="Bensin">Bensin</option>
                    <option value="Listrik">Listrik</option>
                    <option value="Hybrid">Hybrid</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <img class="img-fluid img-preview mb-3 col-sm-5">
                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
            </div>
            <button type="submit" class="btn btn-primary mb-4">Tambah Mobil</button>
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
</script>