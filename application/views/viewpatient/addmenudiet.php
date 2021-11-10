<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1> Beri Menu Diet Pasien <?=$data['name_patient']?></h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Menu Diet</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="" class="needs-validation" novalidate="">
                            <label><span style="font-size:medium">Sarapan</span></label>


                            <div class="form-group">
                                <label>Karbohidrat</label>

                                <textarea class="form-control mb-3" name="carbohydrate" required=""
                                    placeholder="Contoh: Pilihan menu : Bisa nasi, kentang, ubi, singkong atau jenis makanan yang mengandung karbohidrat"
                                    id="floatingTextarea2" style="height: 100px"></textarea>

                                <div class="invalid-feedback">
                                    Karbohidrat harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Protein</label>

                                <textarea class="form-control mb-3" name="protein" required=""
                                    placeholder="Contoh: Pilihan menu : Dada ayam tanpa lemak,Daging tanpa lemak, Telur atau jenis makanan yang mengandung protein"
                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                <div class="invalid-feedback">
                                    Protein harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Mineral</label>

                                <textarea class="form-control mb-3" name="mineral" required=""
                                    placeholder="Contoh: Pilihan menu : Buah dan Sayuran segar" id="floatingTextarea2"
                                    style="height: 100px"></textarea>
                                <div class="invalid-feedback">
                                    Mineral harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Susu</label>

                                <textarea class="form-control mb-3" name="milks" required=""
                                    placeholder="Pilihan susu yang dikonsumsi bebas. jika memiliki alergi terhadap susu bisa di tulis pada kolom"
                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                <div class="invalid-feedback">
                                    Susu harus diisi
                                </div>
                            </div>
                        
                            <div class="col-lg" class="card-footer" style="justify-content: center;">
                                <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
                                <!-- <a href="<?=base_url()?>pasien" style="color: white;" class="btn btn-danger ml-5"
                                        data-bs-dismiss="modal">Keluar</a> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>