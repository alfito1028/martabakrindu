<?= $this->include('layout/header') ?>

<style>
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
    body{
        font-family: 'Poppins', sans-serif;
    }
.card {
    border-radius: 16px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.1);
}

.card-img-top {
    border-top-left-radius: 16px;
    border-top-right-radius: 16px;
}

.card-body {
    padding: 1rem;
}

.card-title {
    font-size: 1rem;
    font-weight: 600;
}

.card-text {
    color: #555;
    font-size: 0.9rem;
}

.section-title {
    font-weight: 700;
    font-size: 1.75rem;
    text-shadow: 0 10px 30px rgba(207, 140, 40,0.5);
    color: #e26a00;
}

.category-title {
    font-weight: 600;
    font-size: 1.25rem;
    color: #e26a00;
}
.section-heading {
    background-color: #fff3e0;
    padding: 10px 20px;
    border-left: 6px solid #ff9800;
    border-bottom: 3px solid #ffcc80;
    font-weight: bold;
    color: #e65100;
    display: inline-block;
    border-radius: 6px;
    margin-bottom: 20px;
}

   #scrollToTopBtn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 999;
        display: none;
        padding: 12px 16px;
        font-size: 18px;
        background-color: #ff8c00;
        color: white;
        border: none;
        transition: opacity 0.3s ease-in-out;
    }

    #scrollToTopBtn:hover {
        background-color: #e37400;
    }

</style>
<button id="scrollToTopBtn" class="btn btn-orange circle shadow-lg">↑</button>
<section class="py-5" style="background-color: #fffaf3;">
    <div class="container">
        <!-- JUDUL UTAMA -->
        <h1 class="text-center section-title mb-5">Menu Martabak</h1>

        <!-- === KATEGORI: MARTABAK MANIS === -->
        <h3 class="section-heading mb-4">Martabak Manis</h3>
        <div class="row g-4">
            <?php foreach ($manis as $item): ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <img src="/uploads/<?= esc($item['gambar']) ?>" class="card-img-top" style="height: 180px; object-fit: cover;" alt="<?= esc($item['nama_produk']) ?>">
                        <div class="card-body">
                            <h6 class="card-title"><?= esc($item['nama_produk']) ?></h6>
                            <p class="card-text"><?= esc($item['deskripsi']) ?></p>
                            <p class="fw-bold text-orange mb-0">Rp <?= number_format($item['harga'], 0, ',', '.') ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <!-- === KATEGORI: MARTABAK TELUR === -->
        <h3 class="section-heading mb-4 mt-5">Martabak Telur</h3>
        <div class="row g-4">
            <?php foreach ($telur as $item): ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <img src="/uploads/<?= esc($item['gambar']) ?>" class="card-img-top" style="height: 180px; object-fit: cover;" alt="<?= esc($item['nama_produk']) ?>">
                        <div class="card-body">
                            <h6 class="card-title"><?= esc($item['nama_produk']) ?></h6>
                            <p class="card-text"><?= esc($item['deskripsi']) ?></p>
                            <p class="fw-bold text-orange mb-0">Rp <?= number_format($item['harga'], 0, ',', '.') ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <!-- === KATEGORI: MARTABAK GULUNG === -->
        <h3 class="section-heading mb-4 mt-5">Martabak Gulung</h3>
        <div class="row g-4">
            <?php foreach ($gulung as $item): ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <img src="/uploads/<?= esc($item['gambar']) ?>" class="card-img-top" style="height: 180px; object-fit: cover;" alt="<?= esc($item['nama_produk']) ?>">
                        <div class="card-body">
                            <h6 class="card-title"><?= esc($item['nama_produk']) ?></h6>
                            <p class="card-text"><?= esc($item['deskripsi']) ?></p>
                            <p class="fw-bold text-orange mb-0">Rp <?= number_format($item['harga'], 0, ',', '.') ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
        const elements = document.querySelectorAll('.scroll-animate');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // agar hanya sekali animasi
                }
            });
        }, { threshold: 0.2 });

        elements.forEach(el => observer.observe(el));

        const scrollBtn = document.getElementById("scrollToTopBtn");

        window.addEventListener("scroll", function () {
            if (window.scrollY > 300) {
                scrollBtn.style.display = "block";
            } else {
                scrollBtn.style.display = "none";
            }
        });

        scrollBtn.addEventListener("click", function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });
</script>


<?= $this->include('layout/footer') ?>
