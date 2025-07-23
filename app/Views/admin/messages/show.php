<?= $this->include('layout/header') ?>

<div class="container mt-4">
    <h2>Detail Pesan</h2>

    <table class="table">
        <tr><th>Nama Depan</th><td><?= esc($message['nama_depan']) ?></td></tr>
        <tr><th>Instansi</th><td><?= esc($message['instansi']) ?></td></tr>
        <tr><th>Email</th><td><?= esc($message['email']) ?></td></tr>
        <tr><th>Hal</th><td><?= esc($message['hal']) ?></td></tr>
        <tr><th>Pesan</th><td><?= esc($message['pesan']) ?></td></tr>
        <tr><th>Dikirim Pada</th><td><?= $message['created_at'] ?></td></tr>
    </table>

    <a href="/admin/messages" class="btn btn-secondary">Kembali</a>
</div>

<?= $this->include('layout/footer') ?>
