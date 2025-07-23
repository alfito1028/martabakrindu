<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<h2 class="text-orange fw-bold">Dashboard Admin</h2>

<div class="row g-4 mt-3">
    <div class="col-md-4">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Total Produk</h5>
                <h2><?= $totalProducts ?></h2>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Kategori</h5>
                <h2><?= $totalCategories ?></h2>
            </div>
        </div>
    </div>
</div>

<hr class="my-4">

<h5 class="text-orange">Produk Terbaru</h5>
<div class="row g-3">
    <?php foreach ($latestProducts as $p): ?>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="<?= base_url('uploads/' . $p['gambar']) ?>" class="card-img-top" style="height:180px; object-fit:cover;">
                <div class="card-body">
                    <h6 class="card-title"><?= esc($p['nama_produk']) ?></h6>
                    <p class="text-orange">Rp <?= number_format($p['harga'], 0, ',', '.') ?></p>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?= $this->endSection() ?>
