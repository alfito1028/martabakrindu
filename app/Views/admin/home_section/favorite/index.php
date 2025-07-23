<?= $this->include('layout/header') ?>

<div class="container py-4">
    <h2 class="mb-4">Menu Favorit</h2>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <a href="/admin/home/menu/create" class="btn btn-orange mb-3">+ Tambah Menu</a>

    <div class="row">
        <?php if (!empty($menus)): ?>
            <?php foreach ($menus as $menu): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow">
                        <img src="/uploads/<?= esc($menu['image']) ?>" class="card-img-top" alt="<?= esc($menu['name']) ?>" style="height: 220px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($menu['name']) ?></h5>
                            <p class="card-text"><?= esc($menu['description']) ?></p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="/admin/home/menu/edit/<?= $menu['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/admin/home/menu/delete/<?= $menu['id'] ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus?')">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <div class="alert alert-info text-center">Belum ada data menu favorit.</div>
            </div>
        <?php endif; ?>
    </div>
    <a href="/admin/dashboard" class="btn btn-orange">Kembali</a>
</div>


