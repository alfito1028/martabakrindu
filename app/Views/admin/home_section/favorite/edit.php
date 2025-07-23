<?= $this->include('layout/header') ?>

<div class="container py-5">
    <h2 class="mb-4">Edit Menu Favorit</h2>

    <form action="/admin/home/menu/update/<?= $menu['id'] ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label>Nama Menu</label>
            <input type="text" name="name" class="form-control" value="<?= esc($menu['name']) ?>" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control" rows="4" required><?= esc($menu['description']) ?></textarea>
        </div>

        <div class="mb-3">
            <label>Gambar Saat Ini</label><br>
            <img src="/uploads/<?= esc($menu['image']) ?>" style="max-height: 200px;">
        </div>

        <div class="mb-3">
            <label>Upload Gambar Baru (Opsional)</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        
    </form>
    <br>
    <a href="/admin/home/menu" class="btn btn-orange">Kembali</a>
</div>


