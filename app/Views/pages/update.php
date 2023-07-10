<?= $this->extend('layouts/formTemplate'); ?>

<?= $this->section('content'); ?>
<form action="/updateSave" method="post" class="container my-5">
    <?= csrf_field(); ?>
    <h1>Edit Data</h1>
    <input type="hidden" class="form-control" id="id" name="id" value="<?= $dataSewa['id']; ?>">

    <div class="mb-3 row">
        <label for="nama_penyewa" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa"
                value="<?= $dataSewa['nama_penyewa']; ?>" autofocus required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nik_penyewa" class="col-sm-2 col-form-label">NIK</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nik_penyewa" name="nik_penyewa"
                value="<?= $dataSewa['nik_penyewa']; ?>" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="waktu_penyewaan" class="col-sm-2 col-form-label">Waktu Sewa</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="waktu_penyewaan" name="waktu_penyewaan"
                value="<?= $dataSewa['waktu_penyewaan']; ?>" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jenis_mobil" class="col-sm-2 col-form-label">Jenis Mobil</label>
        <div class="col-sm-10">
            <select required class="form-select" name="jenis_mobil" id="jenis_mobil">

                <option value="<?= $dataSewa['jenis_mobil']; ?>"><?= $dataSewa['jenis_mobil']; ?></option>
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
        <label for="no_plat" class="col-sm-2 col-form-label">No Plat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="no_plat" name="no_plat" value="<?= $dataSewa['no_plat']; ?>"
                required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="gambar_kendaraan" class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-10">
            <!-- <input type="text" class="form-control" id="gambar_kendaraan" name="gambar_kendaraan" value="< $dataSewa['gambar_kendaraan']; ?>">   -->

            <select required class="form-select" name="gambar_kendaraan" id="gambar_kendaraan">

                <option value="<?= $dataSewa['jenis_mobil']; ?>"><?= $dataSewa['jenis_mobil']; ?></option>
                <option value="porsche.jpeg">Porsche
                </option>
                <option value="lamborghini.jpeg">Lamborghini
                </option>
                <option value="bmw.jpeg">BMW
                </option>

            </select>

        </div>
    </div>
    <fieldset enable>
        <div class="mb-3 row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <!-- <input type="text" class="form-control" id="harga" name="harga"> -->
                <input type="text" class="form-control" id="harga" name="harga" value="<?= $dataSewa['harga']; ?>">
            </div>
        </div>
    </fieldset>
    <div class="mb-3 row">
        <label for="jenis_sewa" class="col-sm-2 col-form-label">Jenis Sewa</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="jenis_sewa" name="jenis_sewa"
                value="<?= $dataSewa['jenis_sewa']; ?>">
        </div>
    </div>
    <a href="/admin" class="btn btn-danger">kembali</a>
    <button type="submit" class="btn btn-primary">Tambahkan</button>
</form>

<?= $this->endSection(); ?>