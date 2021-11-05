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
                        <h4>Tambah Data Pasien Baru</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?=base_url();?>Manajemenpasien/tambah" class="needs-validation" novalidate="">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Rekam
                                    Medis</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="id_patient" class="form-control" required autofocus placeholder="Masukan nomor rekam medis"
                                        tabindex="1">
                                    <div class="invalid-feedback">
                                        Nomor rekam medis tidak boleh kosong
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama
                                </label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="name_patient" class="form-control" required autofocus placeholder="Masukan nama pasien"
                                        tabindex="1">
                                    <div class="invalid-feedback">
                                        Silahkan isi nama pasien terlebih dahulu
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="nik_patient" class="form-control" required autofocus placeholder="Masukan NIK pasien"
                                        tabindex="1">
                                    <div class="invalid-feedback">
                                        NIK tidak boleh kosong
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal lahir</label>
                                <div class="col-sm-12 col-md-7">
                                <input class="form-control" type="date" value="2021-01" id="example-month-input" name="date_of_birth_patient"  required autofocus>
                    
                                    <div class="invalid-feedback">
                                    Silahkan isi Tanggal terlebih dahulu
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Umur</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" name="age_patient" class="form-control" required autofocus placeholder="Masukan umur pasien"
                                        tabindex="1">
                                    <div class="invalid-feedback">
                                        Silahkan isi umur pasien
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis
                                    Kelamin</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="custom-select" name="gender_patient" required autofocus>
                                        <option selected disabled>Pilih jenis kelamin</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Jenis kelamin tidak boleh kosong
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="form-group"  >
                                        <label>Textarea</label>
                                        <textarea class="form-control"  required autofocus name="address_patient"style="height: 150px;" cols="10000"></textarea>
                                    </div>
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