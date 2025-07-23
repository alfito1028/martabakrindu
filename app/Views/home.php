<?= $this->include('layout/header') ?>

<!-- STYLING -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #fff;
        color: #333;
    }

    /* HERO */
    #hero {
    height: 90vh;
    background-size: cover;
    background-position: center;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-image 1s ease-in-out;
    text-align: center;
    padding-top: 50px;
    
    
}

.hero-overlay {
    
    width: 100%;
    height: 100%;
    color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 2rem;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
    margin-bottom: 1rem;
}

.hero-subtitle {
    font-size: 1.25rem;
    max-width: 600px;
    margin-bottom: 2rem;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
}
    .hero-overlay h1 {
        font-size: 3.5rem;
        font-weight: 700;
        text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
    }

    .hero-overlay p {
        font-size: 1.25rem;
        margin-top: 1rem;
        max-width: 600px;
    }

    .btn-orange {
        background-color: #ff7f00;
        color: #fff;
        padding: 0.75rem 1.75rem;
        font-weight: 600;
        border: none;
        border-radius: 8px;
        margin-top: 2rem;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-orange:hover {
        background-color: #e76f00;
        transform: scale(1.05);
    }

    h2 {
        font-weight: 700;
        margin-bottom: 1rem;
        color: #222;
    }

    /* CARD */
    .card {
        border: none;
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .card-title {
        font-weight: 600;
        font-size: 1.25rem;
    }

    blockquote {
        background: #f8f9fa;
        padding: 1.5rem;
        border-left: 5px solid #ff7f00;
        border-radius: 8px;
        font-style: italic;
        margin: 0 auto;
    }

    .blockquote-footer {
        margin-top: 0.75rem;
        color: #777;
        font-weight: 500;
    }

    @media (max-width: 768px) {
    .hero {
        height: 70vh;
        padding: 1rem;
        
    }

    .hero-overlay h1 {
        font-size: 2.2rem;
    }

    .hero-overlay p {
        font-size: 1rem;
        padding: 0 1rem;
    }

    .btn-orange {
        font-size: 0.9rem;
        padding: 0.6rem 1.25rem;
    }

    h2 {
        font-size: 1.5rem;
        text-align: center;
    }

    .card .card-body {
        padding: 1rem;
    }

    .card-title {
        font-size: 1rem;
    }

    .container, .row {
        padding: 0 1rem;
    }

    .blockquote {
        font-size: 0.9rem;
    }

    .hero-overlay img {
        max-width: 200px;
    }
}

@media (max-width: 576px) {
    .hero-overlay h1 {
        font-size: 1.8rem;
    }

    .hero-overlay p {
        font-size: 0.95rem;
    }

    .btn-orange {
        font-size: 0.85rem;
        padding: 0.5rem 1rem;
    }

    .card-img-top {
        height: 180px !important;
    }
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

<!-- HERO SECTION -->
<!-- HERO SECTION -->
<section class=" " id="hero" style="background-image: url('<?= isset($hero['backgrounds']) ? json_decode($hero['backgrounds'])[0] ?? '' : '' ?>');">
    <div class="hero-overlay text-center">
        <?php if (!empty($hero['logo'])): ?>
            <img src="/uploads/<?= esc($hero['logo']) ?>" 
                 alt="Logo" 
                 class="img-fluid mb-4" 
                 style="max-width: 320px; width: 80%;">
        <?php endif; ?>

        <h1 class="hero-title"><?= esc($hero['title'] ?? 'Judul Default') ?></h1>
        <p class="hero-subtitle"><?= esc($hero['subtitle'] ?? 'Subjudul Default') ?></p>
        <a href="/menu" class="btn-orange">Lihat Menu</a>
    </div>
</section>

<!-- HERO BACKGROUND ROTATION -->
<?php
    $bgArray = json_decode($hero['backgrounds'] ?? '[]');
    $bgImages = !empty($bgArray) ? $bgArray : ['/images/hero1.jpeg', '/images/hero2.jpeg'];
?>
<script>
    const hero = document.getElementById('hero');
    const images = <?= json_encode($bgImages) ?>;
    let current = 0;

    function changeBackground() {
        hero.style.backgroundImage = `url('${images[current]}')`;
        current = (current + 1) % images.length;
    }

    setInterval(changeBackground, 4000);
</script>

<!-- TENTANG KAMI -->
<?php
    use App\Models\AboutSectionModel;
    $aboutModel = new AboutSectionModel();
    $about = $aboutModel->first();
?>
<section class="container py-4">
    <div class="row align-items-center">
        <div class="col-md-5" data-aos="fade-right">
            <h2><?= esc($about['title']) ?></h2>
            <p><?= esc($about['description']) ?></p>
            <a href="/cerita" class="btn-orange">Selengkapnya</a>
        </div>
        <div class="col-md-5 py-4 text-center" data-aos="fade-left">
            <img src="/uploads/<?= esc($about['image'] ?? '') ?>" class="img-fluid rounded shadow" alt="Tentang Kami">
        </div>
    </div>
</section>

<!-- MENU FAVORIT -->
<?php
    use App\Models\FavoriteMenuModel;
    $menuModel = new FavoriteMenuModel();
    $menus = $menuModel->findAll();
?>
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-5">Menu Favorit</h2>
        <div class="row">
            <?php foreach ($menus as $menu): ?>
                <div class="col-md-4 mb-4 " data-aos="zoom-in">
                    <div class="card h-100 shadow-sm">
                        <img src="/uploads/<?= esc($menu['image']) ?>" class="card-img-top" alt="<?= esc($menu['name']) ?>" style="height: 220px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= esc($menu['name']) ?></h5>
                            <p class="card-text"><?= esc($menu['description']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-4">
            <a href="/menu" class="btn-orange px-4 py-2">Lihat Semua Menu</a>
        </div>
    </div>
</section>

<!-- TESTIMONI -->
<section class="container py-5">
    <h2 class="text-center mb-5">Apa Kata Mereka?</h2>
    <div class="row text-center">
        <div class="col-md-4 mb-4" data-aos="fade-up">
            <blockquote>
                <p>“Martabaknya bikin nagih! Toppingnya nggak pelit.”</p>
                <footer class="blockquote-footer">Dewi, Jakarta</footer>
            </blockquote>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="150">
            <blockquote>
                <p>“Udah coba banyak martabak, tapi yang ini paling enak.”</p>
                <footer class="blockquote-footer">Reza, Depok</footer>
            </blockquote>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <blockquote>
                <p>“Kalau kangen kampung halaman, pesennya ini.”</p>
                <footer class="blockquote-footer">Maya, Tangerang</footer>
            </blockquote>
        </div>
    </div>
</section>
<button id="scrollToTopBtn" class="btn btn-orange circle shadow-lg">↑</button>
<!-- FOOTER -->
<?= $this->include('layout/footer') ?>
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

<!-- AOS LIBRARY (ANIMATIONS ON SCROLL) -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>
