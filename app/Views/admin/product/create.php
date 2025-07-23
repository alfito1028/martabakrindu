<?= $this->include('layout/header') ?>
<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        
            <?= $this->include('layout/sidebar') ?>

        <!-- Konten Utama -->
        <div class="col-md-9 py-4">
            <h2 class="text-orange fw-bold mb-4"><?= esc($pageTitle ?? 'Form Produk') ?></h2>

            <form action="<?= $action ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" value="<?= esc($product['nama_produk'] ?? '') ?>" required>
                </div>

                <div class="mb-3">
                    <label>Kategori</label>
                    <select name="kategori" class="form-select" required>
                        <option value="">-- Pilih --</option>
                        <option value="Martabak Manis" <?= (isset($product) && $product['kategori'] == 'Martabak Manis') ? 'selected' : '' ?>>Martabak Manis</option>
                        <option value="Martabak Telur" <?= (isset($product) && $product['kategori'] == 'Martabak Telur') ? 'selected' : '' ?>>Martabak Telur</option>
                        <option value="Martabak Gulung" <?= (isset($product) && $product['kategori'] == 'Martabak Gulung') ? 'selected' : '' ?>>Martabak Gulung</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" value="<?= esc($product['harga'] ?? '') ?>" required>
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3"><?= esc($product['deskripsi'] ?? '') ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Gambar <?= isset($product) ? '(kosongkan jika tidak diubah)' : '*' ?></label>
                    <input type="file" name="gambar" class="form-control" <?= isset($product) ? '' : 'required' ?>>
                    <?php if (!empty($product['gambar'])): ?>
                        <img src="/uploads/<?= esc($product['gambar']) ?>" width="100" class="mt-2">
                    <?php endif ?>
                </div>

                <button type="submit" class="btn btn-orange">Simpan</button>
            </form>
        </div>

    </div>
</div>
<?= $this->include('layout/footer') ?>
