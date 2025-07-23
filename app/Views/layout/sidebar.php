<!-- sidebar.php -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar shadow-sm border-end" style="overflow-y: auto;">

    <div class="position-sticky pt-3 px-3">
        <h5 class="fw-bold mb-4 text-orange">Martabak Admin</h5>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center <?= uri_string() == 'admin/dashboard' ? 'active bg-primary text-white' : 'text-dark' ?>" href="/admin/dashboard">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex align-items-center <?= uri_string() == 'admin/products' ? 'active bg-primary text-white' : 'text-dark' ?>" href="/admin/products">
                    <i class="bi bi-box-seam me-2"></i> Produk
                </a>
            </li>

            <!-- Tambahan menu Kategori -->
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center <?= uri_string() == 'admin/categories' ? 'active bg-primary text-white' : 'text-dark' ?>" href="/admin/categories">
                    <i class="bi bi-tags me-2"></i> Kategori
                </a>
            </li>

            <!-- COLLAPSIBLE MENU -->
            <li class="nav-item">
                <button class="nav-link d-flex align-items-center w-100 text-start <?= (strpos(uri_string(), 'admin/home') === 0) ? 'active bg-primary text-white' : 'text-dark' ?>"
                    data-bs-toggle="collapse" data-bs-target="#collapseHomeSection" aria-expanded="<?= (strpos(uri_string(), 'admin/home') === 0) ? 'true' : 'false' ?>" aria-controls="collapseHomeSection">
                    <i class="bi bi-folder2-open me-2"></i> Tampilan Home
                    <i class="bi bi-caret-down ms-auto"></i>
                </button>
                <div class="collapse <?= (strpos(uri_string(), 'admin/home') === 0) ? 'show' : '' ?>" id="collapseHomeSection">
                    <ul class="nav flex-column ms-3 mt-2">
                        <li class="nav-item">
                            <a class="nav-link <?= uri_string() == 'admin/home/hero' ? 'text-primary' : 'text-dark' ?>" href="/admin/home/hero">
                                <i class="bi bi-house-gear me-2"></i> Home Hero
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= uri_string() == 'admin/home/about' ? 'text-primary' : 'text-dark' ?>" href="/admin/home/about">
                                <i class="bi bi-house-gear me-2"></i> Home Tentang
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= uri_string() == 'admin/home/menu' ? 'text-primary' : 'text-dark' ?>" href="/admin/home/menu">
                                <i class="bi bi-house-gear me-2"></i> Menu Favorit
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Menu lain -->
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center <?= uri_string() == 'admin/timeline' ? 'active bg-primary text-white' : 'text-dark' ?>" href="/admin/timeline">
                    <i class="bi bi-calendar-range me-2"></i> Tampilan Cerita
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center <?= uri_string() == 'admin/messages' ? 'active bg-primary text-white' : 'text-dark' ?>" href="/admin/messages">
                    <i class="bi bi-envelope-open me-2"></i> Pesan Masuk
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center <?= uri_string() == 'admin/locations' ? 'active bg-primary text-white' : 'text-dark' ?>" href="/admin/locations">
                    <i class="bi bi-house-gear me-2"></i> Lokasi
                </a>
            </li>

            <li class="nav-item mt-4">
                <a class="nav-link d-flex align-items-center text-danger" href="/logout">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</nav>
