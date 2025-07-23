<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<h2 class="text-orange fw-bold mb-4">Kategori Produk</h2>

<a href="/admin/categories/create" class="btn btn-orange mb-3">+ Tambah Kategori</a>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $c): ?>
            <tr>
                <td><?= esc($c['name']) ?></td>
                <td>
                    <a href="/admin/categories/edit/<?= $c['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <form action="/admin/categories/delete/<?= $c['id'] ?>" method="post" class="d-inline" onsubmit="return confirm('Hapus kategori ini?')">
                        <?= csrf_field() ?>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
