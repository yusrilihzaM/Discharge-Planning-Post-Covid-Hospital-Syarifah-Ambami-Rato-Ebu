<div class="main-content">
    <section class="section">
        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

        </div>
        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
        </div>
        <div class="section-header">
            <h1>Obat yang sedang dikonsumsi : <?=$data['name_patient'];?></h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="section-title mt-0">Lihat obat yang sedang dikonsumsi :</div>
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link "
                                    href="<?=base_url()?>ViewPatient/detailpatient/<?=$data['id_patient']?>">Data
                                    Pribadi Pasien</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="<?=base_url()?>ViewPatient/resultdetection/<?=$data['id_patient']?>">Riwayat
                                    Deteksi Mandiri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="<?=base_url()?>ViewPatient/activitypatient/<?=$data['id_patient']?>">Riwayat
                                    Aktifitas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="<?=base_url()?>ViewPatient/historyprescription/<?=$data['id_patient']?>">Riwayat
                                    Resep Dokter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"
                                    href="<?=base_url()?>ViewPatient/medicine/<?=$data['id_patient']?>">Obat yang sedang
                                    dikonsumsi</a>
                            </li>
                            <li class="nav-item ml-2">
                                <a class="nav-lin btn btn-outline-danger" href="<?=base_url()?>ViewPatient/addprescription/<?=$data['id_patient']?>"><i
                                        class="fas fa-file-medical bg-outline-danger"></i> Beri Resep</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal dan waktu</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <?php
                            $id_patient=$data['id_patient'];
                            $i=1;
                            $data=$this->db->query("SELECT * FROM assessment_patient where id_patient=$id_patient")->result_array();
                            ?>
                            <tbody>
                                <?php
                                    $i=1;
                                    foreach($drugs_patient as $drugs_patient):
                                    ?>
                                <tr>

                                    <td><a href="<?= base_url()?>ViewPatient/detailmedicine/<?=$id_patient?>/<?=$drugs_patient['date_drugs_patient']?>"><?=$i?></a></td>
                                    <td><a
                                            href="<?= base_url()?>ViewPatient/detailmedicine/<?=$id_patient?>/<?=$drugs_patient['date_drugs_patient']?>"><?=$drugs_patient['date_drugs_patient']?></a>
                                    </td>
                                    <td><a class="badge badge-success" href="<?= base_url()?>ViewPatient/detailmedicine/<?=$id_patient?>/<?=$drugs_patient['date_drugs_patient']?>">Lihat Detail
                                            Obat</a></td>
                                </tr>
                                <?php
                                    $i=$i+1;
                                    endforeach;
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>

    </section>
</div>