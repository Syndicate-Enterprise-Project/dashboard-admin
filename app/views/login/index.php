<?php
if (isset($_SESSION['flash'])) {
    $flashdata = $_SESSION['flash'];
    unset($_SESSION['flash']);
} else {
    $flashdata = null;
}
?>
<div class="flash-data" style="" data-flashdata="<?= htmlspecialchars(json_encode($flashdata)); ?>"></div>
<div style="background-image: url(<?= BASEURL; ?>/img/login.jpg); background-size: cover; max-width: 100%; height: 100%;">
    <div class="d-flex justify-content-center" style="padding-top: 10%; padding-bottom: 10%; min-height: 100vh;">
        <div class="card" style="width: 25rem; height: 25rem; background-color: rgb(254,251,246,0.5); backdrop-filter: blur(10px); ">
            <div class="card-body">
                <main class="form-signin">
                    <h1 class="h3 mb-5 text-center text-light">Login</h1>
                    <form action="<?= BASEURL; ?>/Login/authenticate" method="POST">
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required />
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required />
                            <label for="password">Password</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="True" id="flexCheckDefault" name="remember">
                            <label class="form-check-label text-light" for="flexCheckDefault">
                                Remember Me
                            </label>
                        </div>
                        <button class="btn btn-danger w-100 py-2 mt-5" type="submit">
                            Login
                        </button>
                    </form>
                </main>
            </div>
        </div>
    </div>