<?= $this->include('layout/header') ?>

<div class="container py-5">
    <h2 class="mb-4">Edit Hero Section</h2>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <form action="/admin/home/hero/update" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $hero['id'] ?? '' ?>">

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="<?= esc($hero['title']) ?>">
        </div>

        <div class="mb-3">
            <label>Subjudul</label>
            <textarea name="subtitle" class="form-control"><?= esc($hero['subtitle']) ?></textarea>
        </div>

        <div class="mb-3">
            <label>Logo Saat Ini</label><br>
            <img src="/uploads/<?= esc($hero['logo']) ?>" alt="" style="max-height: 80px;">
        </div>

        <div class="mb-3">
            <label>Upload Logo Baru</label>
            <input type="file" name="logo" class="form-control">
        </div>

        <div class="mb-3">
            <label>Gambar Background Baru (bisa pilih beberapa)</label>
            <input type="file" name="backgrounds[]" class="form-control" multiple>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form><br>
    <a href="/admin/dashboard">
        <button type="submit" class="btn btn-orange" >kembali</button>
    </a>
</div>

