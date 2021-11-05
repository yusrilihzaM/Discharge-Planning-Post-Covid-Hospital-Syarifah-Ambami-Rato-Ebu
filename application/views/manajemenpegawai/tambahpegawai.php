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
                        <h4>Tambah Data Pegawai Baru</h4>
                    </div>
                    <div class="card-body">
                        <form method="" action="<?=base_url();?>" class="needs-validation" novalidate="">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                                <div class="col-sm-12 col-md-7" >
                                    <input type="text" name="name" class="form-control" required autofocus
                                        tabindex="1" placeholder="Masukkan nama">
                                    <div class="invalid-feedback">
                                        Silahkan isi nama pegawai terlebih dahulu
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username
                                </label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="username" class="form-control" required autofocus
                                        tabindex="1" placeholder="Masukkan username">
                                    <div class="invalid-feedback">
                                        Silahkan isi username pegawai terlebih dahulu
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="password" class="form-control" required autofocus
                                        tabindex="1" placeholder="Masukkan nama">
                                    <div class="invalid-feedback">
                                        Password tidak boleh kosong!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal lahir</label>
                                <div class="col-sm-12 col-md-7">
                                <input class="form-control" type="date" value="2021-01" id="example-month-input" name="date_of_birth" required autofocus>
                    
                                    <div class="invalid-feedback">
                                    Silahkan isi Tanggal lahir anda terlebih dahulu
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Umur</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" name="age" class="form-control" required autofocus
                                        tabindex="1"  placeholder="Pilih umur anda " >
                                    <div class="invalid-feedback">
                                        Silahkan isi umur pasien
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis
                                    Kelamin</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="custom-select" required autofocus name="gender">
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
                                    <div class="form-group" required autofocus name="address">
                                        <textarea class="form-control" style="height: 150px;" cols="10000" placeholder="Masukkan alamat lengkap anda. Contoh: Jl. Jaya Wijaya Rt 05 Rw 05 Dusun Sidomulyo, Desa Sumberayu, Kecamatan Srono, Kabupaten Klaten, kode pos 453627"></textarea>
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