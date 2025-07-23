<?= $this->include('layout/header') ?>

<div class="container py-4">
    <div class="d-flex justify-content-end mb-3">
        <a href="/admin/categories" class="btn btn-orange">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>
    <h2 class="text-orange fw-bold mb-4">Edit Kategori</h2>

    <form action="/admin/categories/update/<?= $category['id'] ?>" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label>Nama Kategori</label>
            <input type="text" name="name" class="form-control" value="<?= esc($category['name']) ?>" required>
        </div>
        <button class="btn btn-orange">Update</button>
        
    </form>
</div>

