<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<h2 class="text-orange fw-bold mb-4">Pesan Kontak Masuk</h2>

<?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
<?php endif; ?>

<table class="table table-bordered table-striped mt-3">
    <thead class="table-dark">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Hal</th>
            <th>Dikirim Pada</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($messages as $msg): ?>
            <tr>
                <td><?= esc($msg['nama_depan']) ?></td>
                <td><?= esc($msg['email']) ?></td>
                <td><?= esc($msg['hal']) ?></td>
                <td><?= date('d M Y H:i', strtotime($msg['created_at'])) ?></td>
                <td>
                    <a href="/admin/messages/<?= $msg['id'] ?>" class="btn btn-info btn-sm">Detail</a>
                    <form action="/admin/messages/delete/<?= $msg['id'] ?>" method="post" class="d-inline" onsubmit="return confirm('Hapus pesan ini?')">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<a href="/admin/dashboard" class="btn btn-orange mt-4">Kembali</a>

<?= $this->endSection() ?>
