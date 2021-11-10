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
                        <input type="text" name="id_diet_nutrisionist" class="form-control" hidden disable required autofocus tabindex="1" value="<?= $diet_nutrisionist['id_diet_nutrisionist']?>">
                            <label><span style="font-size:medium">Sarapan Pagi</span></label>


                            <div class="form-group">
                                <label>Karbohidrat pagi</label>

                                <textarea class="form-control mb-3" name="carbohydrate_morning" required=""
                                    placeholder="Contoh: Pilihan menu : Bisa nasi, kentang, ubi, singkong atau jenis makanan yang mengandung karbohidrat"
                                    id="floatingTextarea2" style="height: 100px"><?=$diet_nutrisionist['carbohydrate_morning']?></textarea>

                                <div class="invalid-feedback">
                                    Karbohidrat pagi harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Protein pagi</label>

                                <textarea class="form-control mb-3" name="protein_morning" required=""
                                    placeholder="Contoh: Pilihan menu : Dada ayam tanpa lemak,Daging tanpa lemak, Telur atau jenis makanan yang mengandung protein"
                                    id="floatingTextarea2" style="height: 100px"> <?=$diet_nutrisionist['protein_morning']?></textarea>
                                <div class="invalid-feedback">
                                    Protein pagi harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Mineral pagi</label>

                                <textarea class="form-control mb-3" name="mineral_morning" required=""
                                    placeholder="Contoh: Pilihan menu : Buah dan Sayuran segar" id="floatingTextarea2"
                                    style="height: 100px"> <?=$diet_nutrisionist['mineral_morning']?></textarea>
                                <div class="invalid-feedback">
                                    Mineral pagi harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Susu pagi</label>

                                <textarea class="form-control mb-3" name="milks_morning" required=""
                                    placeholder="Pilihan susu yang dikonsumsi bebas. jika memiliki alergi terhadap susu bisa di tulis pada kolom"
                                    id="floatingTextarea2" style="height: 100px">  <?=$diet_nutrisionist['milks_morning']?></textarea>
                                <div class="invalid-feedback">
                                    Susu pagi harus diisi
                                </div>
                            </div>
                            <label for=""><span style="font-size:medium">Makan Siang</span></label>
                            <div class="form-group">
                                <label>Karbohidrat siang</label>

                                <textarea class="form-control mb-3" name="carbohydrate_afternoon" required=""
                                    placeholder="Contoh: Pilihan menu : Bisa nasi, kentang, ubi, singkong atau jenis makanan yang mengandung karbohidrat"
                                    id="floatingTextarea2" style="height: 100px"> <?=$diet_nutrisionist['carbohydrate_afternoon']?></textarea>
                                <div class="invalid-feedback">
                                    Karbohidrat siang harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Protein siang</label>

                                <textarea class="form-control mb-3" name="protein_afternoon" required=""
                                    placeholder="Contoh: Pilihan menu : Dada ayam tanpa lemak,Daging tanpa lemak, Telur atau jenis makanan yang mengandung protein"
                                    id="floatingTextarea2" style="height: 100px"><?=$diet_nutrisionist['protein_afternoon']?></textarea>
                                <div class="invalid-feedback">
                                Protein siang harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label> Mineral siang</label>

                                <textarea class="form-control mb-3" name="mineral_afternoon" required=""
                                    placeholder="Contoh: Pilihan menu : Buah dan Sayuran segar" id="floatingTextarea2"
                                    style="height: 100px"> <?=$diet_nutrisionist['mineral_afternoon']?></textarea>
                                <div class="invalid-feedback">
                                    Mineral siang harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Susu siang</label>

                                <textarea class="form-control mb-3" name="milks_afternoon" required=""
                                    placeholder="Pilihan susu yang dikonsumsi bebas. jika memiliki alergi terhadap susu bisa di tulis pada kolom"
                                    id="floatingTextarea2" style="height: 100px"><?=$diet_nutrisionist['milks_afternoon']?></textarea>
                                <div class="invalid-feedback">
                                    Susu siang harus diisi
                                </div>
                            </div>
                            <label for=""><span style="font-size:medium">Makan Sore</span></label>
                            <div class="form-group">
                                <label>Karbohidrat sore</label>

                                <textarea class="form-control" name="carbohydrate_evening" required=""
                                    placeholder="Contoh: Pilihan menu : Bisa nasi, kentang, ubi, singkong atau jenis makanan yang mengandung karbohidrat"
                                    id="floatingTextarea2" style="height: 100px"><?=$diet_nutrisionist['carbohydrate_evening']?></textarea>
                                <div class="invalid-feedback">
                                    Karbohidrat sore harus diisi
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Protein</label>

                                <textarea class="form-control" name="protein_evening" required=""
                                    placeholder="Contoh: Pilihan menu : Dada ayam tanpa lemak,Daging tanpa lemak, Telur atau jenis makanan yang mengandung protein"
                                    id="floatingTextarea2" style="height: 100px"> <?=$diet_nutrisionist['protein_evening']?></textarea>
                                <div class="invalid-feedback">
                                    Protein sore harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Mineral sore</label>

                                <textarea class="form-control" name="mineral_evening" required=""
                                    placeholder="Contoh: Pilihan menu : Buah dan Sayuran segar" id="floatingTextarea2"
                                    style="height: 100px"><?=$diet_nutrisionist['mineral_evening']?></textarea>
                                <div class="invalid-feedback">
                                    Mineral sore harus diisi
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Susu sore</label>

                                <textarea class="form-control" name="milks_evening" required=""
                                    placeholder="Pilihan susu yang dikonsumsi bebas. jika memiliki alergi terhadap susu bisa di tulis pada kolom"
                                    id="floatingTextarea2" style="height: 100px"><?=$diet_nutrisionist['milks_evening']?></textarea>
                                <div class="invalid-feedback">
                                    Susu sore harus diisi
                                </div>
                            </div>

                            <div class="col-lg" class="card-footer" style="justify-content: center;">
                                <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Simpan perubahan</button>
                                <!-- <a href="<?=base_url()?>pasien" style="color: white;" class="btn btn-danger ml-5"
                                        data-bs-dismiss="modal">Keluar</a> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>