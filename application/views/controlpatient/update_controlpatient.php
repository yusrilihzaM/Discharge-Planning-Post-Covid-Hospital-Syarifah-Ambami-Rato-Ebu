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
                        <h4>Buat Jadwal Kontrol Pasien</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="" class="needs-validation"
                            novalidate="">
                            <input type="text" name="id_control_patient" class="form-control" hidden  disable required
                                autofocus tabindex="1" value="<?= $data['id_control_patient']?>">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Menu</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="id_patient" id="id_patient" class="form-control">
                                        <option disabled selected>Pilih Pasien</option>
                                        <?php foreach($menu as $m): ?>
                                        <?php if($m['id_patient']==$data['id_patient']):?>
                                            <option value="<?= $m['id_patient']; ?>" selected><?= $m['name_patient']; ?></option>
                                        <?php else:?>
                                        <option value="<?= $m['id_patient']; ?>"><?= $m['name_patient']; ?></option>
                                        <?php endif?>
                                        <?php endforeach;?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Silahkan isi pasien terlebih dahulu
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal
                                    Kontrol</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="date" name="date_control_patient"
                                        value="<?= $data['date_control_patient']?>" class="form-control" required
                                        autofocus placeholder="Masukan nama sub menu" tabindex="1">
                                    <div class="invalid-feedback">
                                        Silahkan isi tanggal kontrol terlebih dahulu
                                    </div>
                                </div>
                            </div>



                            <div class="card-footer form-group row mb-4">
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