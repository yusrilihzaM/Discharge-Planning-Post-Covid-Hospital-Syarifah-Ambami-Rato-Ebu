<div class="main-content">
    <section class="section">
        <div class="flash-data-news">

        </div>
        <div class="flash-data-data">
        </div>
        <div class="section-header">
            <h1><?=$title;?></h1>
        </div>


        <div class="row">
            <div class="col-12 ">
                <div class="card">
                    <div class="flash-data-news" data-flashdata="">

                    </div>
                    <div class="flash-data-data" data-flashdata="">
                    </div>
                    <div class="card-header">
                        <h4>Tambah Data Baru</h4>
                    </div>
                    <div class="card-body">
                        <form method="" action="" class="needs-validation" novalidate="">

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama
                                    Sub Menu</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="title" class="form-control" required autofocus
                                        placeholder="Masukan nama sub menu" tabindex="1">
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
                                        
                                        <option value=""></option>
                                        
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
                                        placeholder="Masukan url sub menu">
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
                                        placeholder="Masukan icon sub menu">
                                    <div class="invalid-feedback">
                                        Silahkan isi Sub Menu Icon terlebih dahulu
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Menu</label>
                                <div class="col-sm-12 col-md-7">
                                    <label class="custom-switch mt-2">
                                        <input type="checkbox" name="is_active" class="custom-switch-input">
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