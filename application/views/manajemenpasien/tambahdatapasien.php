<div class="main-content">
    <section class="section">
        <div class="flash-data-news" data-flashdata="">

        </div>
        <div class="flash-data-data" data-flashdata="">
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
                    <form method="" action="<?=base_url();?>" class="needs-validation" novalidate="">

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama
                                    </label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="tambah" class="form-control" required autofocus tabindex="1">
                                    <div class="invalid-feedback">
                                    Silahkan isi nama pasien terlebih dahulu
                                    </div>
                                </div> 
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="tambah" class="form-control" required autofocus tabindex="1">
                                    <div class="invalid-feedback">
                                    NIK tidak boleh kosong
                                    </div>
                                </div> 
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Rekam Medis</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="tambah" class="form-control" required autofocus tabindex="1">
                                    <div class="invalid-feedback">
                                    Nomor rekam medis tidak boleh kosong
                                    </div>
                                </div> 
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Umur</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="tambah" class="form-control" required autofocus tabindex="1">
                                    <div class="invalid-feedback">
                                    Silahkan isi umur anda
                                    </div>
                                </div> 
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="tambah" class="form-control" required autofocus tabindex="1">
                                    <div class="invalid-feedback">
                                    Jenis kelamin tidak boleh kosong
                                    </div>
                                </div> 
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="tambah" class="form-control" required autofocus tabindex="1">
                                    <div class="invalid-feedback">
                                    Alamat tidak boleh kosong
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