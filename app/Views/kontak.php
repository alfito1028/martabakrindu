<?= $this->include('layout/header') ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
    body {
        background-color: #fff4dc;
        font-family: 'Poppins', sans-serif;
    }

    h2, h4, label {
        font-family: 'Montserrat', sans-serif;
    }

    .form-control, select, textarea {
        background-color: #fff0b3;
        border: none;
        border-radius: 8px;
        padding: 10px;
        font-size: 14px;
        box-shadow: inset 1px 1px 3px rgba(0,0,0,0.05);
    }

    .form-control:focus {
        outline: none;
        box-shadow: 0 0 5px orange;
    }

    .submit-btn {
        background-color: #ff8c00;
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 25px;
        box-shadow: 0 4px 10px rgba(255,140,0,0.4);
        transition: 0.3s ease-in-out;
        font-weight: bold;
    }

    .submit-btn:hover {
        background-color: #e67300;
        transform: scale(1.05);
    }

    .fade-in {
        opacity: 0;
        animation: fadeIn 1s ease-out forwards;
    }

    .slide-up {
        opacity: 0;
        transform: translateY(30px);
        animation: slideUp 1s ease-out forwards;
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    @keyframes slideUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

</style>

<!-- Optional: Font Google (if allowed to use online fonts) -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins&display=swap" rel="stylesheet">

<div class="container py-5 fade-in">
    <h2 class="text-center mb-5 fw-bold text-orange slide-up">Kontak Martabak Rindu</h2>

    <?php if (session()->getFlashdata('message')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-6 text-center d-flex flex-column justify-content-center slide-up" style="animation-delay: 0.2s;">
            <img src="/uploads/images/kontak.jpg" alt="Martabak" class="img-fluid mb-3 rounded shadow" style="max-height: 300px;">
            <h4 class="fw-bold" >Kami Selalu Siap Untuk Melayani</h4>
            <p class="px-4">
                Dari pesanan partai besar, kritik & saran, serta ide kerjasama atau kolaborasi lainnya, kami selalu siap untuk melayani.
            </p>
        </div>
        <div class="col-md-6 slide-up" style="animation-delay: 0.4s;">
            <form action="/kontak/kirim" method="post">
                <?= csrf_field() ?>
                <div class="row mb-3">
                    <div class="col ">
                        <label>Nama Depan *</label>
                        <input type="text" name="nama_depan" class="form-control " required>
                    </div>
                    <div class="col">
                        <label>Nama Belakang *</label>
                        <input type="text" name="instansi" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label>Email yang Aktif *</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Hal *</label>
                    <select name="hal" class="form-control" required>
                        <option value="">-- Pilih Hal --</option>
                        <option value="Pesanan">Pesanan</option>
                        <option value="Kritik & Saran">Kritik & Saran</option>
                        <option value="Kolaborasi">Kolaborasi</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Pesan *</label>
                    <textarea name="pesan" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-btn mt-3">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->include('layout/footer') ?>
