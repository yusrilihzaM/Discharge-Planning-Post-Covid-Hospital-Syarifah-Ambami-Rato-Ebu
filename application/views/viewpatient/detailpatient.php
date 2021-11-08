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
                <div class="card">
                    <div class="card-body">
                        <div class="section-title mt-0">Lihat Riwayat Pasien :</div>
                        <ul class="nav nav-pills">
                        <li class="nav-item">
                                <a class="nav-link active" href="<?=base_url()?>ViewPatient/detailpatient/<?=$data['id_patient']?>">Data Pribadi Pasien</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url()?>ViewPatient/resultdetection/<?=$data['id_patient']?>">Riwayat Deteksi Mandiri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="<?=base_url()?>ViewPatient/activitypatient/<?=$data['id_patient']?>">Riwayat Aktifitas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url()?>ViewPatient/historyprescription/<?=$data['id_patient']?>">Riwayat Resep Dokter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url()?>ViewPatient/medicine/<?=$data['id_patient']?>">Obat yang sedang dikonsumsi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-lin btn btn-outline-danger" href="<?=base_url()?>"><i class="fas fa-file-medical bg-outline-danger"></i> Beri Resep</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <p class="text-muted">Data pribadi</p>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nama</label>
                                    <div class="col-sm-6 col-md-9">
                                        <input type="text" disabled name="name" class="form-control" id="site-title" placeholder="<?=$data['name_patient']?>">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="umur" class="form-control-label col-sm-3 text-md-right">Umur</label>
                                    <div class="col-sm-6 col-md-9">
                                        <input type="text" disabled name="name" class="form-control" id="umur" placeholder="<?=$data['age_patient']?>">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-description" class="form-control-label col-sm-3 text-md-right">Alamat</label>
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