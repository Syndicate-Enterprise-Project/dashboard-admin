<?php
if (isset($_SESSION['flash'])) {
    $flashdata = $_SESSION['flash'];
    unset($_SESSION['flash']);
} else {
    $flashdata = null;
}
?>
<<<<<<< HEAD
<div class="flash-data" style="" data-flashdata="<?= htmlspecialchars(json_encode($flashdata)); ?>"></div>
<div class="d-flex justify-content-center" style="padding-top: 10%; padding-bottom: 10%; background-color: black; min-height: 100vh;">
<div class="card" style="width: 30%">
  <div class="card-body">
        <main class="form-signin">
            <h1 class="h3 mb-5 text-center">Login</h1>
=======
<div class="flash-data" data-flashdata="<?= htmlspecialchars(json_encode($flashdata)); ?>"></div>
<div class="d-flex justify-content-center" style="padding-top: 10%; padding-bottom: 10%;">
    <div class="col-md-4">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
>>>>>>> 552b67389f2338092cbefe82d1af8844dc15537d
            <form action="<?= BASEURL; ?>/Login/authenticate" method="POST">
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required />
                    <label for="email">Email address</label>
                </div>
<<<<<<< HEAD
                <div class="form-floating mt-2">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required />
                    <label for="password">Password</label>
                </div>
                <button class="btn btn-primary w-100 py-2 mt-5" type="submit">
=======
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required />
                    <label for="password">Password</label>
                </div>
                <button class="btn btn-primary w-100 py-2 mt-2" type="submit">
>>>>>>> 552b67389f2338092cbefe82d1af8844dc15537d
                    Log in
                </button>
            </form>
        </main>
<<<<<<< HEAD
  </div>
=======
    </div>
>>>>>>> 552b67389f2338092cbefe82d1af8844dc15537d
</div>