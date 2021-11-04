<div class="main-content">
    <section class="section">
        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

        </div>
        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
        </div>
        <div class="section-header">
            <h1><?=$title;?></h1>
        </div>


        <div class="row">
            <div class="col-12 ">
                <div class="card">
                    <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                    </div>
                    <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                    </div>
                    <div class="card-header">
                        <h4>Tambah Sub Menu Baru</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="" class="needs-validation" novalidate="">
                        <input type="text" hidden disable name="id_user_sub_menu" class="form-control"
                        value="<?=$data_submenu['id_user_sub_menu']?>">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama
                                    Sub Menu</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="title" class="form-control" required autofocus
                                        placeholder="Masukan nama sub menu" tabindex="1"
                                        value="<?=$data_submenu['title']?>">
                                    <div class="invalid-feedback">
                                        Silahkan isi nama Sub Menu terlebih dahulu
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Menu</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="id_user_menu" id="id_user_menu" class="form-control">
                                        <option disabled selected>Pilih Menu</option>

                                        <?php foreach($menu as $m): ?>
                                        <?php if($data_submenu['id_user_menu']==$m['id_user_menu'] ):?>
                                        <option value="<?= $m['id_user_menu']; ?>" selected><?= $m['menu']; ?></option>
                                        <?php else : ?>
                                        <option value="<?= $m['id_user_menu']; ?>"><?= $m['menu']; ?></option>
                                        <?php endif?>
                                        <?php endforeach;?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Silahkan isi menu terlebih dahulu
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Menu
                                    URL</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="url" class="form-control" required autofocus
                                        placeholder="Masukan url sub menu" value="<?=$data_submenu['url']?>">
                                    <div class="invalid-feedback">
                                        Silahkan isi Sub Menu URL terlebih dahulu
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Menu
                                    Icon</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="icon" class="form-control" required autofocus
                                        placeholder="Masukan icon sub menu" value="<?=$data_submenu['icon']?>">
                                    <div class="invalid-feedback">
                                        Silahkan isi Sub Menu Icon terlebih dahulu
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Menu</label>
                                <div class="col-sm-12 col-md-7">
                                    <label class="custom-switch mt-2">
                                        <?php if ($data_submenu['is_active']==1) : ?>
                                        <input type="checkbox" name="is_active" class="custom-switch-input" checked>
                                        <?php else : ?>
                                        <input type="checkbox" name="is_active" class="custom-switch-input">
                                        <?php endif; ?>
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">tidak aktif / aktif</span>
                                    </label>
                                    <div class="invalid-feedback">
                                        Silahkan isi Sub Menu Icon terlebih dahulu
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </section>
</div>