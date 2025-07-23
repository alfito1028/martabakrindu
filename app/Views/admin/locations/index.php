<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<h2 class="text-orange fw-bold mb-4">Daftar Lokasi Outlet</h2>

<?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-success"> <?= session('message') ?> </div>
<?php endif; ?>

<div class="mb-3">
    <a href="/admin/locations/create" class="btn btn-orange me-2">+ Tambah Lokasi</a>
    <a href="/admin/dashboard" class="btn btn-secondary">Kembali</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Wilayah</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($locations as $loc): ?>
            <tr>
                <td><?= esc($loc['wilayah']) ?></td>
                <td><?= esc($loc['nama']) ?></td>
                <td><?= esc($loc['alamat']) ?></td>
                <td><img src="<?= base_url(esc($loc['image'])) ?>" width="100" class="img-thumbnail"></td>
                <td>
                    <a href="/admin/locations/edit/<?= $loc['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/admin/locations/delete/<?= $loc['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
