<?= $this->include('layout/header') ?>

<div class="container py-4">
    <h2 class="mb-4">Tambah Menu Favorit</h2>

    <form action="/admin/home/menu/store" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="name" class="form-label">Nama Menu</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        
    </form>
    <br>
     <a href="/admin/home/menu" class="btn btn-orange">Kembali</a>
</div>


