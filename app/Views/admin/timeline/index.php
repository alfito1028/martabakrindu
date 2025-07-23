<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<h2 class="text-orange fw-bold mb-4">Perjalanan Martabak Rindu</h2>

<a href="/admin/timeline/create" class="btn btn-orange mb-3">+ Tambah Tahun</a>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<div class="table-responsive">
    <table class="table table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th style="width: 80px;">Tahun</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th style="width: 120px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($timelines as $item): ?>
                <tr>
                    <td><strong><?= esc($item['year']) ?></strong></td>
                    <td><?= esc($item['title']) ?></td>
                    <td><?= esc($item['description']) ?></td>
                    <td>
                        <img src="<?= base_url('uploads/' . esc($item['image'])) ?>" alt="Gambar" style="width: 100px; height: auto;">
                    </td>
                    <td>
                        <a href="/admin/timeline/edit/<?= $item['id'] ?>" class="btn btn-warning btn-sm mb-1">Edit</a>
                        <form action="/admin/timeline/delete/<?= $item['id'] ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                            <?= csrf_field() ?>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
