<?= $this->include('layout/header') ?>

<div class="container py-4">
    <h2 class="mb-4">Edit Perjalanan Tahun <?= esc($timeline['year']) ?></h2>

    <form action="/admin/timeline/update/<?= $timeline['id'] ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="year" class="form-label">Tahun</label>
            <input type="text" name="year" class="form-control" value="<?= esc($timeline['year']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" value="<?= esc($timeline['title']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" rows="4" required><?= esc($timeline['description']) ?></textarea>
        </div>

        <div class="mb-3">
            <label>Gambar Saat Ini</label><br>
            <img src="/uploads/<?= esc($timeline['image']) ?>" alt="Gambar" class="img-fluid mb-2" style="max-height: 150px;">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Ganti Gambar</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="/admin/timeline" class="btn btn-orange">Kembali</a>
    </form>
</div>


