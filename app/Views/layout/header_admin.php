<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= esc($pageTitle ?? 'Martabak Rindu') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
        body {
            background-color: #f8f9fa;
            
        }

        .text-orange {
            color: #FF6F00 !important;
        }

        .btn-orange {
            background-color: #FF6F00;
            color: white;
        }

        .btn-orange:hover {
            background-color: #e65c00;
            color: white;
        }

        .navbar-orange {
            background-color: #FF6F00;
        }

        .navbar-orange .nav-link {
            color: white;
            font-weight: 500;
        }

        .navbar-orange .nav-link:hover {
            color: #ffe4b5;
        }

        .card:hover {
            transform: scale(1.02);
            transition: all 0.3s ease;
            box-shadow: 0 6px 18px rgba(255, 111, 0, 0.3);
        }

        .nav-link.active {
            background-color: #FF6F00 !important;
            color: white !important;
            border-radius: 0.375rem;
        }

        .nav-link {
            color: #343a40;
            transition: background-color 0.3s ease;
        }

        .nav-link:hover {
            background-color: #ffc078 !important;
            color: white !important;
            border-radius: 0.375rem;
        }

        .footer-custom {
            background-color: #2b2823;
            color: #fff;
        }

        .footer-line {
            width: 80%;
            border-top: 1px solid #ddd;
            opacity: 0.4;
        }

        .footer-link {
            color: #ddd;
            text-decoration: none;
            font-size: 14px;
        }

        .footer-link:hover {
            color: #fbbf24;
            text-decoration: underline;
        }

        .footer-tagline {
            font-family: 'Brush Script MT', cursive;
            font-size: 28px;
            font-weight: 400;
        }
    </style>
</head>
<body>
<div class="d-flex flex-column min-vh-100"> <!-- WRAPPER MULAI -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-orange shadow-sm">
    <div class="container">
        <a class="navbar-brand text-white fw-bold" href="/home">
            <img src="/uploads/logo.png" alt="Logo Martabak" class="img-fluid" style="max-width: 50px;">
            Martabak Rindu
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/cerita">Cerita</a></li>
                <li class="nav-item"><a class="nav-link" href="/menu">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="/kontak">Kontak</a></li>
                <li class="nav-item"><a class="nav-link" href="/lokasi">Lokasi</a></li>
            </ul>
        </div>
    </div>
</nav>
