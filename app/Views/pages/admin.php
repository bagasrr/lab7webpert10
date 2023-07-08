<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="list-page">

    <a href="/add" type="button" class="btn btn-primary tambah">
        Tambah Penyewa
        <i class="bi bi-plus-lg"></i>
    </a>
    <h1>Data Rental</h1>
    <?php if (session()->getFlashdata('pesan')): ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashData('pesan'); ?>
    </div>
    <?php endif; ?>
    <table class="table table-hover text-center align-middle">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Penyewa</th>
                <th scope="col">NIk Penyewa</th>
                <th scope="col">Waktu Penyewaan</th>
                <th scope="col">Jenis Mobil</th>
                <th scope="col">No Plat</th>
                <th scope="col">Gambar</th>
                <th scope="col">Harga</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($dataSewa as $ds) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $ds['nama_penyewa']; ?></td>
                <td><?= $ds['nik_penyewa']; ?></td>
                <td><?= $ds['waktu_penyewaan']; ?></td>
                <td><?= $ds['jenis_mobil']; ?></td>
                <td><?= $ds['no_plat']; ?></td>
                <td><img src="/img/<?= $ds['gambar_kendaraan']; ?>" class="carImg" alt=""></td>
                <td>Rp<?= $ds['harga']; ?></td>
                <td>
                    <div class="btn btn-info text-white"><?= $ds['jenis_sewa']; ?></div>
                    <div class="btn-group btn2">
                        <a href="/datarental/info" type="button" class="btn btn-success">
                            Info
                        </a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>