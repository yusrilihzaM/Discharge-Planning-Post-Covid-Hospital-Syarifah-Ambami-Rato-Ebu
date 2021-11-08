<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Obat pasien : <?=$data['name_patient']?></h1>
        </div>
<?php

?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit resep  pasien : <?=$data['name_patient']?></h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="" class="needs-validation"
                            novalidate="">
                            <!-- <label for="id_patient"><span style="font-size:medium">Kode Pasien</span></label> -->
                            <input type="text" name="id_prescription_patient" name="id_prescription_patient" class="form-control" hidden disable required autofocus tabindex="1" value="<?= $data_resep['id_prescription_patient']?>">
                            <input type="text" name="id_user" name="id_user" class="form-control" hidden disable required autofocus tabindex="1" value="<?= $id_user?>">
                            <input type="text" name="id_patient" name="id_patient" class="form-control" hidden disable required autofocus tabindex="1" value="<?= $data_resep['id_patient']?>">
                            <div class="form-group">
                                <label for=""><span style="font-size:medium">Resep obat</span></label>
                                <div class="row">
                                    <div class="col">

                                        <div class="form-floating">
                                            <textarea class="form-control mb-3 summernote" name="prescription"
                                                id="summernote"
                                                placeholder="Contoh: 1. Paracetamol, aturan minum 3x1 hari"
                                                id="floatingTextarea2" style="height: 100px"><?= $data_resep['prescription']?></textarea>
                                        </div>
                                    </div>
                                </div>

                               

                                <label for="" class="mt-3"><span style="color :red">Catatan : Tulis nama obat
                                        beserta aturan minum sesuai, Jika obat
                                        anda lebih dari satu tuliskan semua pada kolom</span></label>

                            </div>
                            <div class="card-footer" style="justify-content: center;">
                                <button type="submit" class="btn btn-success mr-5"
                                    data-bs-dismiss="modal">Simpan</button>
                               
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
</div>