    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Diet pasien</h1>
            </div>
          
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Menu Anda</h4>
                        </div>
                        <div class="card-body">
                        <form method="post" action="dietpasien/save">
                            <div class="form-group">
                                <label for=""><span style="font-size:medium">Sarapan Pagi</span></label>
                                <div class="row">
                                    <div class="col">
                                        <label>Karbohidrat</label>
                                        <div class="form-floating">
                                            <textarea class="form-control mb-3" name="carbohydrate_morning"
                                                placeholder="Contoh: Pilihan menu : Bisa nasi, kentang, ubi, singkong atau jenis makanan yang mengandung karbohidrat"
                                                id="KarbohidratPagi" style="height: 100px"></textarea>
                                        </div>
                                        <label>Protein</label>
                                        <div class="form-floating">
                                            <textarea class="form-control mb-3" name="protein_morning"
                                                placeholder="Contoh: Pilihan menu : Dada ayam tanpa lemak,Daging tanpa lemak, Telur atau jenis makanan yang mengandung protein"
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                        </div>
                                        <label>Mineral</label>
                                        <div class="form-floating">
                                            <textarea class="form-control mb-3" name="mineral_morning"
                                                placeholder="Contoh: Pilihan menu : Buah dan Sayuran segar"
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                        </div>
                                        <label>Susu</label>
                                        <div class="form-floating">
                                            <textarea class="form-control mb-3" name="milks_morning"
                                                placeholder="Pilihan susu yang dikonsumsi bebas. jika memiliki alergi terhadap susu bisa di tulis pada kolom"
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <label for=""><span style="font-size:medium">Makan Siang</span></label>
                                <div class="row">
                                    <div class="col">
                                        <label>Karbohidrat</label>
                                        <div class="form-floating">
                                            <textarea class="form-control mb-3" name="carbohydrate_afternoon"
                                                placeholder="Contoh: Pilihan menu : Bisa nasi, kentang, ubi, singkong atau jenis makanan yang mengandung karbohidrat"
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                        </div>
                                        <label>Protein</label>
                                        <div class="form-floating">
                                            <textarea class="form-control mb-3" name="protein_afternoon"
                                                placeholder="Contoh: Pilihan menu : Dada ayam tanpa lemak,Daging tanpa lemak, Telur atau jenis makanan yang mengandung protein"
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                        </div>
                                        <label>Mineral</label>
                                        <div class="form-floating">
                                            <textarea class="form-control mb-3" name="mineral_afternoon"
                                                placeholder="Contoh: Pilihan menu : Buah dan Sayuran segar"
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                        </div>
                                        <label>Susu</label>
                                        <div class="form-floating">
                                            <textarea class="form-control mb-3" name="milks_afternoon"
                                                placeholder="Pilihan susu yang dikonsumsi bebas. jika memiliki alergi terhadap susu bisa di tulis pada kolom"
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <label for=""><span style="font-size:medium">Makan Sore</span></label>
                                <div class="row">
                                    <div class="col">
                                        <label>Karbohidrat</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" name="carbohydrate_evening"
                                                placeholder="Contoh: Pilihan menu : Bisa nasi, kentang, ubi, singkong atau jenis makanan yang mengandung karbohidrat"
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                        </div>
                                        <label>Protein</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" name="protein_evening"
                                                placeholder="Contoh: Pilihan menu : Dada ayam tanpa lemak,Daging tanpa lemak, Telur atau jenis makanan yang mengandung protein"
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                        </div>
                                        <label>Mineral</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" name="mineral_evening"
                                                placeholder="Contoh: Pilihan menu : Buah dan Sayuran segar"
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                        </div>
                                        <label>Susu</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" name="milks_evening"
                                                placeholder="Pilihan susu yang dikonsumsi bebas. jika memiliki alergi terhadap susu bisa di tulis pada kolom"
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <label for="" class="mt-3"><span style="color :red">Catatan : Tulis riwayat alergi jika
                                        memiliki alergi terhadap menu diet yang telah direkomendasikan. Dan bisa diganti
                                        dengan menu diet anda sendiri</span></label>

                            </div>
                            <div class="col-lg" class="modal-footer" style="justify-content: center;">
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