    <div class="main-content">
        <section class="section">
                <div class="section-header">
                    <h1>Resep Dokter</h1>
                </div>

        <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                                
                        <div class="card-header">
                            <h4>Resep Obat Dokter</h4>
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

                            <div class="form-group row mb-4">
                                <div class="col-sm-12 col-md-12">
                                    <select class="custom-select" name="" placeholder="Kode resep" required autofocus>
                                        <option selected disabled>Kode resep</option>
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
                                    <div class="form-group"  >
                                        <label>Tuliskan resep</label>
                                        <textarea class="form-control"  required autofocus name="" style="height: 150px;" cols="10000" placeholder="Paracetamol 3x4"></textarea>
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