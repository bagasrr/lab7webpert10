<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<form action="" class="container my-5">

    <div class="mb-3 row">
        <label for="namaPenyewa" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="namaPenyewa">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="namaPenyewa" class="col-sm-2 col-form-label">NIK</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="namaPenyewa">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="namaPenyewa" class="col-sm-2 col-form-label">Waktu Sewa</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="namaPenyewa">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jenis_barang" class="col-sm-2 col-form-label"> Jenis Mobil </label>
        <div class="col-sm-10">
            <select required class="form-select" name="jenis_barang" id="jkel">
                <option value="Porche">Porche
                </option>
                <option value="Lamborghini">Lamborghini
                </option>
                <option value="BMW">BMW
                </option>
            </select>
        </div>
    </div>
</form>
<?= $this->endSection(); ?>