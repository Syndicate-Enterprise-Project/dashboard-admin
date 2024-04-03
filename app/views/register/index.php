<div class="d-flex justify-content-center" style="padding-top: 8%; padding-bottom: 10%;">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="<?= BASEURL; ?>/Register/tambah" method="POST">
                <input type="hidden" name="role" value="0">
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="name" required />
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username" placeholder="username" required />
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required />
                    <label for="email">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom" id="floatingPassword" placeholder="Password" required />
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="btn btn-primary w-100 py-2 mt-3" type="submit">
                    Register
                </button>
            </form>
        </main>
    </div>
</div>