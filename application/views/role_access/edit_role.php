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
                        <h4>Edit Peran</h4>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="" class="needs-validation" novalidate="">
                    <input type="text" hidden disable name="role_id" class="form-control"
                        value="<?=$data_role['role_id']?>">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama peran</label>
                                
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="role" class="form-control" required autofocus tabindex="1" placeholder="Masukan nama peran" value="<?=$data_role['role']?>">
                                    <div class="invalid-feedback">
                                    Silahkan isi nama peran terlebih dahulu
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