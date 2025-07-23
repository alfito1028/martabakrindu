    <?= $this->include('layout/header') ?>

    <style>
           @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
    body{
        font-family: 'Poppins', sans-serif;
        background-color: #fef0c7;
    }
  
    h2 {
        font-weight: 700;
        font-size: 32px;
        text-shadow:0 5px 10px rgba(255, 255, 255, 1.6);
        
    }

        .lokasi-card {
            background-color: cornsilk;
            border-radius: 15px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);             
            border: none;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .lokasi-card img {
            height: 180px;
            object-fit: cover;
            width: 100%;
            border-radius: 15px 15px 0 0;
        }

        .lokasi-card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .lokasi-title {
            
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 6px;
        }

    .lokasi-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background-color: #fbbf24;
        color: black;
        border: none;
        padding: 10px 15px;
        border-radius: 10px;
        font-weight: 600;
        text-decoration: none;
        text-align: center;
        transition: background-color 0.3s ease;
        white-space: nowrap;
        font-size: 14px;
    }



    .lokasi-btn img {
        height: 20px;
        width: 20px;
        object-fit: contain;
        vertical-align: middle;   /* sejajarkan logo dengan teks */
        display: inline-block;
    }



        .lokasi-btn:hover {
            background-color: #f59e0b;
        }

        .btn-wrapper {
            margin-top: auto;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
    </style>

    <?php
    use App\Models\LocationModel;
    $model = new LocationModel();
    $outlets = $model->findAll();
    ?>
    <div class="container py-5">
        <h2 class="text-center mb-5 fw-bold" style="color:black;" >Lokasi Martabak Rindu 2025</h2>
        <div class="row g-4">
            <?php foreach ($outlets as $outlet): ?>
                <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                    <div class="card lokasi-card w-100">
                        <img src="<?= esc($outlet['image']) ?>" alt="<?= esc($outlet['nama']) ?>">
                        <div class="lokasi-card-body">
                            <small class="text-muted mb-1"><?= esc($outlet['wilayah']) ?></small>
                            <div class="lokasi-title"><?= esc($outlet['nama']) ?></div>
                            <p class="text-muted small mb-3"><?= esc($outlet['alamat']) ?></p>
                        <div class="btn-wrapper">
                                <a href="<?= esc($outlet['wa']) ?>" class="lokasi-btn" target="_blank">
                                    Whatsapp <img src="/icons/whatsapp.png" alt="WA">
                                </a>
                                <a href="<?= esc($outlet['grab']) ?>" class="lokasi-btn" target="_blank">
                                    GrabFood <img src="/icons/grabfood.png" alt="Grab">
                                </a>
                                <a href="<?= esc($outlet['gofood']) ?>" class="lokasi-btn" target="_blank">
                                    GoFood <img src="/icons/gofood.png" alt="GoFood">
                                </a>
                                <a href="<?= esc($outlet['shopeefood']) ?>" class="lokasi-btn" target="_blank">
                                    ShopeeFood <img src="/icons/shopeefood.png" alt="ShopeeFood">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?= $this->include('layout/footer') ?>
