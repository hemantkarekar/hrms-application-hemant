<main class="main-wrapper">
    <section class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">
            <div class="row w-100 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-3 mb-lg-4">
                                <img src="<?= base_url('assets/logo.png') ?>" height="40" alt="Platform Logo">
                            </div>
                            <?= form_open(base_url('api/v2/login')) ?>
                            <div class="mb-3">
                                <label for="inputUsername" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="inputUsername">
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="inputPassword">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>