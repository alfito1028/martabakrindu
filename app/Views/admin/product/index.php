<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>

<h2 class="text-orange fw-bold mb-4"><?= esc($pageTitle) ?></h2>

<a href="/admin/products/create" class="btn btn-orange mb-3">+ Tambah Produk</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $p): ?>
        <tr>
            <td><img src="/uploads/<?= esc($p['gambar']) ?>" width="60"></td>
            <td><?= esc($p['nama_produk']) ?></td>
            <td><?= esc($p['kategori']) ?></td>
            <td>Rp <?= number_format($p['harga']) ?></td>
            <td>
                <a href="/admin/products/edit/<?= $p['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="/admin/products/delete/<?= $p['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
