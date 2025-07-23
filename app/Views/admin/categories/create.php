<?= $this->include('layout/header') ?>

<div class="container py-4">
    <div class="d-flex justify-content-end mb-3">
        <a href="/admin/categories" class="btn btn-orange">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>
    <h2 class="text-orange fw-bold mb-4">Tambah Kategori</h2>

    <form action="/admin/categories/store" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label>Nama Kategori</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button class="btn btn-orange">Simpan</button>
        
    </form>
</div>


