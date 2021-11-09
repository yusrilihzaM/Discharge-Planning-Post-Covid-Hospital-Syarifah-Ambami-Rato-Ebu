<div class="main-content">
    <section class="section">
        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

        </div>
        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
        </div>
        <div class="section-header">
            <h1>Data Pribadi : <?=$data['name_patient'];?></h1>
        </div>

        <div class="row">
            <div class="col-12">
                <?php
                $this->load->view('viewpatient/menu_detail_patient');
                ?>
               
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted">Data pribadi</p>
                        <div class="form-group row align-items-center">
                            <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nama</label>
                            <div class="col-sm-6 col-md-9">
                                <input type="text" disabled name="name" class="form-control" id="site-title"
                                    placeholder="<?=$data['name_patient']?>">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="umur" class="form-control-label col-sm-3 text-md-right">Umur</label>
                            <div class="col-sm-6 col-md-9">
                                <input type="text" disabled name="name" class="form-control" id="umur"
                                    placeholder="<?=$data['age_patient']?>">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="site-description"
                                class="form-control-label col-sm-3 text-md-right">Alamat</label>
                            <div class="col-sm-6 col-md-9">
                                <textarea class="form-control" disabled name="site_description"
                                    id="site-description"><?=$data['address_patient']?></textarea>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>

    </section>
</div>