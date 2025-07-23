    <?= $this->include('layout/header') ?>

    <section class="py-5" style="background-color: #fef9f4;">
        <div class="container position-relative">
            <h2 class="text-center fw-bold text-orange mb-5">Perjalanan Martabak Rindu</h2>

            <div class="timeline position-relative">
                <?php foreach ($timelines as $index => $timeline): ?>
                    <div class="row mb-5 align-items-center">
                        <?php if ($index % 2 == 0): ?>
                            <!-- Gambar Kanan -->
                            <div class="col-md-6 order-md-2 mb-3 mb-md-0 ps-md-5">
                                <img src="/uploads/<?= esc($timeline['image']) ?>"
                                    alt="Martabak Rindu <?= esc($timeline['year']) ?>"
                                    class="timeline-img rounded shadow-lg scroll-animate"
                                    data-animate="fadeInKanan">
                            </div>
                            <div class="col-md-6 order-md-1 scroll-animate" data-animate="fadeInKiri">
                                <h4 class="fw-bold text-orange"><?= esc($timeline['year']) ?></h4>
                                <h5 class="fw-semibold mb-3"><?= esc($timeline['title']) ?></h5>
                                <p><?= esc($timeline['description']) ?></p>
                            </div>
                        <?php else: ?>
                            <!-- Gambar Kiri -->
                            <div class="col-md-6 mb-3 mb-md-0 pe-md-5">
                                <img src="/uploads/<?= esc($timeline['image']) ?>"
                                    alt="Martabak Rindu <?= esc($timeline['year']) ?>"
                                    class="timeline-img rounded shadow-lg scroll-animate"
                                    data-animate="fadeInKiri">
                            </div>
                            <div class="col-md-6 scroll-animate" data-animate="fadeInKanan">
                                <h4 class="fw-bold text-orange"><?= esc($timeline['year']) ?></h4>
                                <h5 class="fw-semibold mb-3"><?= esc($timeline['title']) ?></h5>
                                <p><?= esc($timeline['description']) ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
                <!-- Tombol Scroll to Top -->
                <button id="scrollToTopBtn" class="btn btn-orange circle shadow-lg">↑</button>
            </div>
        </div>
    </section>

    <?= $this->include('layout/footer') ?>

    <!-- ==== STYLE ==== -->
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
    body{
        font-family: 'Poppins', sans-serif;
    }
    /* Garis tengah timeline */
    .timeline::before {
        content: "";
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 4px;
        background-color: #ffe0b2;
        transform: translateX(-50%);
        z-index: 0;
    }

    @media (max-width: 768px) {
        .timeline::before {
             display: none; /* Menyembunyikan garis tengah di handphone */
        }
    }

    .timeline-img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
        background-color: transparent;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    /* Animasi scroll */
    @keyframes fadeInKanan {
        0% { opacity: 0; transform: translateX(60px); }
        100% { opacity: 1; transform: translateX(0); }
    }

    @keyframes fadeInKiri {
        0% { opacity: 0; transform: translateX(-60px); }
        100% { opacity: 1; transform: translateX(0); }
    }

    .scroll-animate {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.3s, transform 0.3s;
    }

    .scroll-animate.visible[data-animate="fadeInKanan"] {
        animation: fadeInKanan 0.8s ease-out forwards;
    }

    .scroll-animate.visible[data-animate="fadeInKiri"] {
        animation: fadeInKiri 0.8s ease-out forwards;
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

    <!-- ==== SCRIPT ==== -->
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
