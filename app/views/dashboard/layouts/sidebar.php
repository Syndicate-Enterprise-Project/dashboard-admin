<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; min-height: 100vh;">
    <a href="<?= BASEURL; ?>/dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">Dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="<?= BASEURL; ?>/dashboard" class="nav-link <?= end(explode('/', $_SERVER['REQUEST_URI'])) == 'dashboard' ? 'active' : ''; ?> text-white" aria-current="page">
                <i class="bi bi-house-door-fill me-2"></i>
                Home
            </a>
        </li>
        <li>
            <a href="<?= BASEURL; ?>/Statistik" class="nav-link <?= end(explode('/', $_SERVER['REQUEST_URI'])) == 'Statistik' ? 'active' : ''; ?> text-white">
                <i class="bi bi-file-post me-2"></i>
                Statistik
            </a>
        </li>
        <li>
            <a href="<?= BASEURL; ?>/dashboard/posts" class="nav-link <?= end(explode('/', $_SERVER['REQUEST_URI'])) == 'posts' ? 'active' : ''; ?> text-white">
                <i class="bi bi-file-post me-2"></i>
                Blog
            </a>
        </li>
        <li>
            <a href="<?= BASEURL; ?>/Mobil" class="nav-link <?= end(explode('/', $_SERVER['REQUEST_URI'])) == 'Mobil' ? 'active' : ''; ?> text-white">
                <i class="bi bi-bookmark-dash-fill me-2"></i>
                Mobil
            </a>
        </li>
        <li>
            <a href="<?= BASEURL; ?>/account/users_account" class="nav-link <?= end(explode('/', $_SERVER['REQUEST_URI'])) == 'users_account' ? 'active' : ''; ?> text-white">
                <i class="bi bi-people-fill me-2"></i>
                Account
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle mx-2"></i>
            <strong><?= $_SESSION['user_auth']['username']; ?></strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="<?= BASEURL; ?>">Novan Blog</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="<?= BASEURL; ?>/login/signout">Sign out</a></li>
        </ul>
    </div>
</div>