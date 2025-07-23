<?= $this->include('layout/header') ?>
<div class="container py-4">
    <h2 class="mb-4">Tambah Lokasi Baru</h2>
    <form action="/admin/locations/store" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label>Wilayah</label>
            <input type="text" name="wilayah" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label>Link WhatsApp</label>
            <input type="url" name="wa" class="form-control">
        </div>

        <div class="mb-3">
            <label>Link Grab</label>
            <input type="url" name="grab" class="form-control">
        </div>

        <div class="mb-3">
            <label>Link GoFood</label>
            <input type="url" name="gofood" class="form-control">
        </div>

        <div class="mb-3">
            <label>Link ShopeeFood</label>
            <input type="url" name="shopeefood" class="form-control">
        </div>

        <div class="mb-3">
            <label>Upload Gambar</label>
            <input type="file" name="image" class="form-control" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/admin/locations" class="btn btn-secondary">Batal</a>
    </form>
</div>
