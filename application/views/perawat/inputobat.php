    <div class="main-content">
        <section class="section">
                <div class="section-header">
                    <h1>Input Resep Obat</h1>
                </div>

        <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                                
                        <div class="card-header">
                            <h4>Resep Obat Pasien</h4>
                        </div>
                    
                    <div class="card-body">
                        <form method="POST" action="<?=base_url();?>" class="needs-validation" novalidate="">
                            <div class="form-group">
                            </div>
                            <div class="form-group row mb-4">
                                <div class="col-sm-12 col-md-12">
                                    <label>Pilih nama dan kode pasien</label>
                                    <select class="custom-select" name="" placeholder="Kode pasien-Nama pasien"required autofocus>
                                        <option selected disabled>--Kode pasien - Nama pasien--</option>
                                        <option value="">123-Alif</option>
                                        <option value="">234-Baba</option>
                                        <option value="">345-Cici</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Halaman tidak boleh kosong
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-sm-12 col-md-12">
                                    <label>Pilih kode resep</label>
                                    <select class="custom-select" name="" placeholder="Kode resep" required autofocus>
                                        <option selected disabled>--Kode resep--</option>
                                        <option value="">prctml</option>
                                        <option value="">c2h20</option>
                                        <option value="">c5h2i</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Kode resep tidak boleh kosong
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-sm-12 col-md-12">
                                    <label>Pilih Dokter Penanggung Jawab</label>
                                    <select class="custom-select" name="" placeholder="Kode resep" required autofocus>
                                        <option selected disabled>--Nama Dokter--</option>
                                        <option value="">Dr.Az-Zahra</option>
                                        <option value="">Dr.Jasmine</option>
                                        <option value="">Dr.Jihan</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Kode resep tidak boleh kosong
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