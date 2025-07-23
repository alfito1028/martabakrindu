<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= esc($pageTitle ?? 'Dashboard Admin') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #f8f9fa;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .wrapper {
            flex: 1;
            display: flex;
            flex-direction: row;
            min-height: 0;
        }

        .sidebar {
            width: 250px;
            background-color: #fff;
            min-height: 100vh;
        }

        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .content-wrapper {
            flex: 1;
            padding: 2rem;
            overflow-y: auto;
        }

        footer {
            background-color: #2b2823;
            color: white;
            padding: 1rem 0;
            text-align: center;
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

        .sidebar .nav-link.active {
            background-color: #FF6F00;
            color: #fff;
        }

        .sidebar .nav-link:hover {
            background-color: #ffe0b3;
        }

        
    </style>
</head>
<body>

    <?= $this->include('layout/header_admin') ?>

    <div class="wrapper">
        <?= $this->include('layout/sidebar') ?>

        <div class="main-content">
            <div class="content-wrapper">
                <?= $this->renderSection('content') ?>
            </div>

            <!-- Footer admin di bawah sidebar dan main -->
            <?= $this->include('layout/footer_admin') ?>
        </div>
    </div>

    <?= $this->renderSection('scripts') ?>

</body>
</html>
