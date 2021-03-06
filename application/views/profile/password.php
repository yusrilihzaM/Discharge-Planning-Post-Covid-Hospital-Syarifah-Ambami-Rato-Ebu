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

                        <div class="row">
                            <div class="col-lg-6">
                                <?= $this->session->flashdata('Message'); ?>
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

                    <?= $this->session->flashdata('message'); ?>
                    
                        <form method="post" id="setting-form" action="" >
                            <div class="card" id="settings-card">
                                <div class="card-header">
                                    <h4>Ganti kata sandi</h4>
                                </div>
                                <div class="card-body">

                                    <!-- <div class="row">
                                        <div class="col-lg-6">
                                            <?= $this->session->flashdata('message');?>
                                        </div>
                                    </div> -->

                                        <div class="form-group row align-items-center">
                                            <label for="password_lama" class="form-control-label col-sm-3 text-md-right">Password
                                                    lama</label>
                                                <div class="col-sm-6 col-md-9">
                                                    <input type="password" class="form-control" name="password_lama" id="password_lama"
                                                        placeholder="Password lama" tabindex="1" required autofocus> 
                                                    <div class="invalid-feedback">
                                                        Silahkan isi password lama anda
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row align-items-center">
                                            <label for="password_baru1"
                                                class="form-control-label col-sm-3 text-md-right">Password baru</label>
                                            <div class="col-sm-6 col-md-9">
                                                <input type="password" name="password_baru1" class="form-control"
                                                    id="password_baru1" placeholder="Password baru" tabindex="1" required autofocus>
                                                <div class="invalid-feedback">
                                                    Silahkan isi password baru anda
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="password_baru2" class="form-control-label col-sm-3 text-md-right">Ulangi
                                                password baru</label>
                                            <div class="col-sm-6 col-md-9">
                                                <input type="password" name="password_baru2" class="form-control" id="password_baru2"
                                                    placeholder="Ulangi password baru" tabindex="1" required autofocus>
                                                <div class="invalid-feedback">
                                                    Silahkan isi ulangi password baru anda
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-whitesmoke text-md-right">
                                            <button type="submit" class="btn btn-primary" id="save-btn">Simpan Perubahan</button>
                                        </div>
                                    </div>
                            </div></form>
                    </div></div>
                    </div>
                </div>
        </div>
    </section>
</div>