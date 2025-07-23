<?= $this->include('layout/header') ?>

<div class="container py-4">
    <h2 class="mb-4">Edit Lokasi</h2>
    <form action="/admin/locations/update/<?= $location['id'] ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label>Wilayah</label>
            <input type="text" name="wilayah" class="form-control" value="<?= esc($location['wilayah']) ?>" required>
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= esc($location['nama']) ?>" required>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required><?= esc($location['alamat']) ?></textarea>
        </div>

        <div class="mb-3">
            <label>Link WhatsApp</label>
            <input type="url" name="wa" class="form-control" value="<?= esc($location['wa']) ?>">
        </div>

        <div class="mb-3">
            <label>Link Grab</label>
            <input type="url" name="grab" class="form-control" value="<?= esc($location['grab']) ?>">
        </div>

        <div class="mb-3">
            <label>Link GoFood</label>
            <input type="url" name="gofood" class="form-control" value="<?= esc($location['gofood']) ?>">
        </div>

        <div class="mb-3">
            <label>Link ShopeeFood</label>
            <input type="url" name="shopeefood" class="form-control" value="<?= esc($location['shopeefood'] ?? '') ?>">
        </div>

        <div class="mb-3">
            <label>Upload Gambar Baru (opsional)</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            <div class="mt-2">
                <img src="<?= esc($location['image']) ?>" width="150">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="/admin/locations" class="btn btn-secondary">Batal</a>
    </form>
</div>


