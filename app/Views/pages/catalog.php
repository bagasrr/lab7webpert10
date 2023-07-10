<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="card-wrapper">
    <?php 
    $i = 0;
    while($i<20): ?>
    <div class="card m-4" style="width: 18rem;">
        <img src="/img/porsche.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Porche</h5>
            <p class="card-text">Rp1.000.000/Jam</p>
        </div>
    </div>
    <?php $i++; endwhile; ?>

</div>
<?= $this->endSection(); ?>