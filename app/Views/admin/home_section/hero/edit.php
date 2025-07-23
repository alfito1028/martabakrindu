<?= $this->include('layout/header') ?>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        

        <!-- Konten -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h2 class="mt-4">Edit Hero Section</h2>

            <form action="/admin/home/update/<?= $hero['id'] ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" name="title" class="form-control" value="<?= esc($hero['title']) ?>">
                </div>

                <div class="mb-3">
                    <label for="subtitle" class="form-label">Subjudul</label>
                    <textarea name="subtitle" class="form-control"><?= esc($hero['subtitle']) ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Ganti Gambar (opsional)</label>
                    <input type="file" name="image" class="form-control">
                    <?php if ($hero['image']): ?>
                        <img src="/uploads/hero/<?= esc($hero['image']) ?>" width="150" class="mt-2">
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/admin/home" class="btn btn-secondary">Batal</a>
            </form>
        </main>
    </div>
</div>
