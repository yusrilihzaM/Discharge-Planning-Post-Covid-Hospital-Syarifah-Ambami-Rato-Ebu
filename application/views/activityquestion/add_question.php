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
                        <h4>Tambah Pertanyaan Baru</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?=base_url()?>activityquestion/add" class="needs-validation"
                            novalidate="">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Tipe
                                    Pertanyaan</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="id_activity_type" id="id_activity_type" class="form-control">
                                        <option disabled selected>Pilih Tipe Pertanyaan</option>
                                        <?php foreach($tipe_pertanyaan as $m): ?>
                                        <option value="<?= $m['id_activity_type']; ?>"><?= $m['activity_type']; ?>
                                        </option>
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
                                    <input type="text" name="activity_question" class="form-control"
                                        placeholder="Masukan  pertanyaan" required autofocus tabindex="1">
                                    <div class="invalid-feedback">
                                        Silahkan isi pertanyaan terlebih dahulu
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