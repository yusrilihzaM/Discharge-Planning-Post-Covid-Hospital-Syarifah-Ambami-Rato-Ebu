    <div class="main-content">
        <section class="section">
                <div class="section-header">
                    <h1>Input Menu Diet</h1>
                </div>
                
        <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                                
                        <div class="card-header">
                            <h4>Menu Diet Pasien</h4>
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
                                        <option selected disabled>--Kode pasien-Nama pasien--</option>
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
                                    <select class="custom-select" name="" placeholder="Kode nutrisi" required autofocus>
                                        <option selected disabled>--Kode nutrisi--</option>
                                        <option value="">nutri1</option>
                                        <option value="">nutri2</option>
                                        <option value="">nutri3</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Kode resep tidak boleh kosong
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 col-md-12">
                                    <label style="font-size:medium;">Menu Diet</label>
                                    <div class="form-group">
                                        
                                        <label>Karbohidrat</label>
                                        <textarea class="form-control"  required autofocus name="" style="height: 150px;" cols="10000" placeholder="Nasi putih, kentang, ubi"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">   
                                        <label>Protein</label>
                                        <textarea class="form-control"  required autofocus name="" style="height: 150px;" cols="10000" placeholder="Dada ayam tanpa lemak"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">   
                                        <label>Mineral</label>
                                        <textarea class="form-control"  required autofocus name="" style="height: 150px;" cols="10000" placeholder="Buah dan sayuran segar"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">   
                                        <label>Susu</label>
                                        <textarea class="form-control"  required autofocus name="" style="height: 150px;" cols="10000" placeholder="Susu sapi segar, susu kambing, susu kedelai. Jika memiliki riwayat alergi terhadap susu bisa ditulis pada kolom"></textarea>
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