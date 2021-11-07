<div class="main-content">
    <section class="section">
        <div class="section-header">

            <h1>Akun</h1>

        </div>

        <div class="section-body">



            <div id="output-status"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar mr-2 avatar-lg">
                                            <img src="<?= base_url() ?>assets_user/img/avatar/avatar-1.png" alt="...">
                                        </figure>
                                    </div>
                                    <div class="col-auto">
                                        <h5 style="font-weight: bold;color:black;">
                                            <?=$name?>
                                        </h5>
                                        Jenis Akun: <?=$role?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item"><a href="<?= base_url() ?>profil" class="nav-link ">Profil</a></li>
                                    <li class="nav-item"><a href="<?= base_url() ?>profil/password"
                                            class="nav-link active">Ganti kata sandi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form id="setting-form">
                            <div class="card" id="settings-card">
                                <div class="card-header">
                                    <h4>Ganti kata sandi</h4>
                                </div>
                                <div class="card-body">

                                <form action="<?= base_url('profile/password');?>" class="action"></form>
                                        <div class="form-group row align-items-center">
                                            <label for="site-title" class="form-control-label col-sm-3 text-md-right">Password
                                                lama</label>
                                            <div class="col-sm-6 col-md-9">
                                                <input type="password" name="password_lama" class="form-control" id="site-title"
                                                    placeholder="Password lama">
                                                <?= form_error('password_lama', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="password-baru"
                                                class="form-control-label col-sm-3 text-md-right">Password baru</label>
                                            <div class="col-sm-6 col-md-9">
                                                <input type="password" name="password_baru1" class="form-control"
                                                    id="password_baru1" placeholder="Password baru">
                                                <?= form_error('password_baru1', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="site-title" class="form-control-label col-sm-3 text-md-right">Ulangi
                                                password baru</label>
                                            <div class="col-sm-6 col-md-9">
                                                <input type="password" name="password_baru2" class="form-control" id="password_baru2"
                                                    placeholder="Ulangi password baru">
                                                <?= form_error('password_baru2', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-whitesmoke text-md-right">
                                            <button type="submit" class="btn btn-primary" id="save-btn">Simpan Perubahan</button>
                                        </div>
                                    </div>
                                </form>
                    </div>
                </div>
        </div>
    </section>
</div>