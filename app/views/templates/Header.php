<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/login.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="position-sticky top-0 z-3">
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
            <div class="container-fluid ms-5">
                <a class="navbar-brand" href="<?= BASEURL; ?>">Novan Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link <?= end(explode('/', $_SERVER['REQUEST_URI'])) == '' ? 'active' : ''; ?>" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                        <!-- <a class="nav-link <?= end(explode('/', $_SERVER['REQUEST_URI'])) == 'mahasiswa' ? 'active' : ''; ?>" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a> -->
                        <!-- <li class="nav-item dropdown">
                            <button class="btn nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Tentang
                            </button>
                            <ul class="dropdown-menu dropdown-menu-light">
                                <li><a class="dropdown-item" href="<?= BASEURL; ?>/Tentang/visi_misi">Visi & Misi</a></li>
                                <li><a class="dropdown-item" href="<?= BASEURL; ?>/Tentang/struktur_organisasi">Struktur Organisasi</a></li>
                            </ul>
                        </li> -->
                        <a class="nav-link <?= end(explode('/', $_SERVER['REQUEST_URI'])) == 'posts' ? 'active' : ''; ?>" href="<?= BASEURL; ?>/posts">Posts</a>
                        <a class="nav-link <?= end(explode('/', $_SERVER['REQUEST_URI'])) == 'categories' ? 'active' : ''; ?>" href="<?= BASEURL; ?>/posts/categories">Category</a>
                        <a class="nav-link <?= end(explode('/', $_SERVER['REQUEST_URI'])) == 'About' ? 'active' : ''; ?>" href="https://novandra7.github.io/Tailwindcss_Website/">About</a>
                    </div>
                    <?php if (isset($_SESSION['user_auth'])) : ?>
                        <div class="navbar-nav ms-auto me-5">
                            <li class="nav-item dropdown">
                                <button class="btn nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $_SESSION['user_auth']['username']; ?>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-light">
                                    <li><a class="dropdown-item" href="<?= BASEURL; ?>/dashboard">My Dashboard</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="<?= BASEURL; ?>/login/signout">Sign Out</a></li>
                                </ul>
                            </li>
                        </div>
                    <?php else : ?>
                        <div class="navbar-nav ms-auto me-5">
                            <a href="<?= BASEURL; ?>/login" class="btn btn-outline-light me-3">Login</a>
                            <a href="<?= BASEURL; ?>/register" class="btn btn-outline-light">Register</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </div>