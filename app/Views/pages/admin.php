<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="list-page">

    <a href="/admin/add" type="button" class="btn btn-primary tambah">
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
                    <a href="/admin/update/<?= $ds['id']; ?>" class="bi bi-folder2-open btn btn-primary"></a>
                    <!-- <a href="/admin/delete/$ds['id']; ?>" class="bi bi-trash-fill btn btn-danger"></a> -->
                    <!-- <a href="/delete/< $ds['id']; ?>" class="bi bi-trash-fill btn btn-danger"></a> -->
                    <form action="/admin/delete/<?= $ds['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="bi bi-trash-fill btn btn-danger "
                            onclick="return confirm('Apakah anda yakin ingin menghapus ini?')"></button>

                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>