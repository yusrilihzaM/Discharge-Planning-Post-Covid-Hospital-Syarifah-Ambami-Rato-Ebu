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
                            <label><span style="font-size:medium">Sarapan Pagi</span></label>


                            <div class="form-group">
                                <label>Karbohidrat</label>

                                <textarea class="form-control mb-3" name="carbohydrate_morning" required=""
                                    placeholder="Contoh: Pilihan menu : Bisa nasi, kentang, ubi, singkong atau jenis makanan yang mengandung karbohidrat"
                                    id="floatingTextarea2" style="height: 100px"></textarea>

                                <div class="invalid-feedback">
                                    Karbohidrat pagi harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Protein</label>

                                <textarea class="form-control mb-3" name="protein_morning" required=""
                                    placeholder="Contoh: Pilihan menu : Dada ayam tanpa lemak,Daging tanpa lemak, Telur atau jenis makanan yang mengandung protein"
                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                <div class="invalid-feedback">
                                    Protein pagi harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Mineral</label>

                                <textarea class="form-control mb-3" name="mineral_morning" required=""
                                    placeholder="Contoh: Pilihan menu : Buah dan Sayuran segar" id="floatingTextarea2"
                                    style="height: 100px"></textarea>
                                <div class="invalid-feedback">
                                    Mineral pagi harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Susu</label>

                                <textarea class="form-control mb-3" name="milks_morning" required=""
                                    placeholder="Pilihan susu yang dikonsumsi bebas. jika memiliki alergi terhadap susu bisa di tulis pada kolom"
                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                <div class="invalid-feedback">
                                    Susu pagi harus diisi
                                </div>
                            </div>
                            <label for=""><span style="font-size:medium">Makan Siang</span></label>
                            <div class="form-group">
                                <label>Karbohidrat</label>

                                <textarea class="form-control mb-3" name="carbohydrate_afternoon" required=""
                                    placeholder="Contoh: Pilihan menu : Bisa nasi, kentang, ubi, singkong atau jenis makanan yang mengandung karbohidrat"
                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                <div class="invalid-feedback">
                                    Karbohidrat siang harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Protein</label>

                                <textarea class="form-control mb-3" name="protein_afternoon" required=""
                                    placeholder="Contoh: Pilihan menu : Dada ayam tanpa lemak,Daging tanpa lemak, Telur atau jenis makanan yang mengandung protein"
                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                <div class="invalid-feedback">
                                    Karbohidrat siang harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Mineral</label>

                                <textarea class="form-control mb-3" name="mineral_afternoon" required=""
                                    placeholder="Contoh: Pilihan menu : Buah dan Sayuran segar" id="floatingTextarea2"
                                    style="height: 100px"></textarea>
                                <div class="invalid-feedback">
                                    Mineral siang harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Susu</label>

                                <textarea class="form-control mb-3" name="milks_afternoon" required=""
                                    placeholder="Pilihan susu yang dikonsumsi bebas. jika memiliki alergi terhadap susu bisa di tulis pada kolom"
                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                <div class="invalid-feedback">
                                    Susu siang harus diisi
                                </div>
                            </div>
                            <label for=""><span style="font-size:medium">Makan Sore</span></label>
                            <div class="form-group">
                                <label>Karbohidrat</label>

                                <textarea class="form-control" name="carbohydrate_evening" required=""
                                    placeholder="Contoh: Pilihan menu : Bisa nasi, kentang, ubi, singkong atau jenis makanan yang mengandung karbohidrat"
                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                <div class="invalid-feedback">
                                    Karbohidrat sore harus diisi
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Protein</label>

                                <textarea class="form-control" name="protein_evening" required=""
                                    placeholder="Contoh: Pilihan menu : Dada ayam tanpa lemak,Daging tanpa lemak, Telur atau jenis makanan yang mengandung protein"
                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                <div class="invalid-feedback">
                                    Protein sore harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Mineral</label>

                                <textarea class="form-control" name="mineral_evening" required=""
                                    placeholder="Contoh: Pilihan menu : Buah dan Sayuran segar" id="floatingTextarea2"
                                    style="height: 100px"></textarea>
                                <div class="invalid-feedback">
                                    Mineral sore harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Susu</label>

                                <textarea class="form-control" name="milks_evening" required=""
                                    placeholder="Pilihan susu yang dikonsumsi bebas. jika memiliki alergi terhadap susu bisa di tulis pada kolom"
                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                <div class="invalid-feedback">
                                    Susu sore harus diisi
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