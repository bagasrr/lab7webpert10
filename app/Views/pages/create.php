<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<form action="/save" method="post" class="container my-5">
    <?= csrf_field(); ?>
    <div class="mb-3 row">
        <label for="namaPenyewa" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="namaPenyewa" name="namaPenyewa" autofocus required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nik" name="nik" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="waktuSewa" class="col-sm-2 col-form-label">Waktu Sewa</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="waktuSewa" name="waktuSewa" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jenis_mobil" class="col-sm-2 col-form-label">Jenis Mobil</label>
        <div class="col-sm-10">
            <select required class="form-select" name="jenis_mobil" id="jenis_mobil">

                <option value="Porche">Porsche
                </option>
                <option value="Lamborghini">Lamborghini
                </option>
                <option value="BMW">BMW
                </option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="noPlat" class="col-sm-2 col-form-label">No Plat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="noPlat" name="noPlat" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="gambar" name="gambar">
        </div>
    </div>
    <fieldset disabled>
        <div class="mb-3 row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="harga" name="harga">
            </div>
        </div>
    </fieldset>

    <a href="/cumadminyangtau" class="btn btn-danger">kembali</a>
    <button type="submit" class="btn btn-primary">Tambahkan</button>
</form>

<?= $this->endSection(); ?>