
<?= $this->include('layout/header') ?>

<div class="container py-5">
    <form action="/admin/home/about/update" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $about['id'] ?? '' ?>">

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="<?= esc($about['title']) ?>">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control"><?= esc($about['description']) ?></textarea>
        </div>

        <div class="mb-3">
            <label>Gambar Saat Ini</label><br>
            <img src="/uploads/<?= esc($about['image']) ?>" style="max-height: 100px;">
        </div>

        <div class="mb-3">
            <label>Ganti Gambar Baru</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <br>
    <a href="/admin/dashboard">
        <button type="submit" class="btn btn-orange" >kembali</button>
    </a>
</div>
<?= $this->include('layout/footer') ?>