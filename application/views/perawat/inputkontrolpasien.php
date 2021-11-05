    <div class="main-content">
        <section class="section">
                <div class="section-header">
                    <h1>Input Kontrol Perawat</h1>
                </div>

        <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                                
                        <div class="card-header">
                            <h4>Jadwal Kontrol Pasien</h4>
                        </div>
                    
                    <div class="card-body">
                        <form method="POST" action="<?=base_url();?>" class="needs-validation" novalidate="">
                            <div class="form-group">
                                <label>08 Novemver 2021</label>
                                <br>
                                <label>Dokter Jihan</label>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-sm-12 col-md-12">
                                    <label>Pilih nama dan kode pasien</label>
                                    <select class="custom-select" name="" placeholder="Kode pasien-Nama pasien"required autofocus>
                                        <option selected disabled>Kode pasien-Nama pasien</option>
                                        <option value="">123-Alif</option>
                                        <option value="">234-Baba</option>
                                        <option value="">345-Cici</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Halaman tidak boleh kosong
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label>Waktu kontrol psaien</label>
                                        <input class="form-control" type="date" value="2021-01" id="example-month-input" name=""  required autofocus>
                                    </div>
                                    <div class="invalid-feedback">
                                        Halaman tidak boleh kosong
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group"  >
                                        <label>Tuliskan pesan</label>
                                        <textarea class="form-control"  required autofocus name="" style="height: 150px;" cols="10000" placeholder="Hai..., waktu kontrol anda pada hari..tanggal..tahun. pukul .. wib"></textarea>
                                    </div>
                                    <div class="invalid-feedback">
                                        Halaman tidak boleh kosong
                                    </div>
                                </div>
                            </div>


                                    </div>
                                        <div class="modal-footer" style="justify-content: center;">
                                            <button type="button" class="btn btn-success mr-5" data-bs-dismiss="modal">Simpan</button>
                                            <button type="button" class="btn btn-danger ml-5" data-bs-dismiss="modal">Keluar</button>
                                        </div>

                                </div>
                            </div>
                    </div>
        </div>
    </div>