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
                        <h4>Edit Pertanyaan Baru</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="" class="needs-validation"
                            novalidate="">
                            <input type="text" name="id_assessment_question" class="form-control" hidden disable
                                required autofocus tabindex="1" value="<?= $data['id_assessment_question']?>">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Tipe
                                    Pertanyaan</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="id_assessment_type" id="id_assessment_type" class="form-control">
                                        <option disabled selected>Pilih Tipe Pertanyaan</option>
                                        <?php foreach($tipe_pertanyaan as $m): ?>
                                        <?php if($data['id_assessment_type']==$m['id_assessment_type']):?>
                                        <option value="<?= $m['id_assessment_type']; ?>" selected><?= $m['assessment_type']; ?> </option>
                                        <?php else:?>
                                            <option value="<?= $m['id_assessment_type']; ?>"><?= $m['assessment_type']; ?>
                                        </option>
                                        <?php endif;?>
                                        <?php endforeach;?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Silahkan isi Tipe Pertanyaan terlebih dahulu
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pertanyaan</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="assessment_question" class="form-control"
                                        value="<?= $data['assessment_question']?>" placeholder="Masukan  pertanyaan"
                                        required autofocus tabindex="1">
                                    <div class="invalid-feedback">
                                        Silahkan isi pertanyaan terlebih dahulu
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bobot jawaban
                                    "Ya"</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" name="weight_yes" class="form-control"
                                        placeholder="Masukan  Bobot jawaban 'Ya'" required autofocus tabindex="1"
                                        value="<?= $data['weight_yes']?>">
                                    <div class="invalid-feedback">
                                        Silahkan isi Bobot jawaban "Ya" terlebih dahulu
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bobot jawaban
                                    "Tidak"</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" name="weight_no" class="form-control"
                                        placeholder="Masukan  Bobot jawaban 'Tidak'" required autofocus tabindex="1"
                                        value="<?= $data['weight_no']?>">
                                    <div class="invalid-feedback">
                                        Silahkan isi Bobot jawaban "Tidak" terlebih dahulu
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
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