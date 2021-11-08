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
                                <li class="nav-item"><a href="<?= base_url() ?>profil"
                                        class="nav-link active">Profil</a></li>
                                <li class="nav-item"><a href="<?= base_url() ?>profil/password" class="nav-link">Ganti
                                        kata sandi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <form id="setting-form">
                        <div class="card" id="settings-card">
                            <div class="card-header">
                                <h4>Profil</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">Data pribadi</p>
                                <div class="form-group row align-items-center">
                                    <label for="site-title"
                                        class="form-control-label col-sm-3 text-md-right">Nama</label>
                                    <div class="col-sm-6 col-md-9">
                                        <input type="text" disabled name="name" class="form-control" id="site-title"
                                            placeholder="<?=$name?>">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="umur" class="form-control-label col-sm-3 text-md-right">Umur</label>
                                    <div class="col-sm-6 col-md-9">
                                        <input type="text" disabled name="name" class="form-control" id="umur"
                                            placeholder="<?=$age?>">
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label for="site-description"
                                        class="form-control-label col-sm-3 text-md-right">Alamat</label>
                                    <div class="col-sm-6 col-md-9">
                                        <textarea class="form-control" disabled name="site_description"
                                            id="site-description"><?=$address?></textarea>
                                    </div>
                                </div>

                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>