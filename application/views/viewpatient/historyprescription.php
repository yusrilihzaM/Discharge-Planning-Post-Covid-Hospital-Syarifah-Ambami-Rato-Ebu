<div class="main-content">
    <section class="section">
        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

        </div>
        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
        </div>
        <div class="section-header">
            <h1>Riwayat Aktifitas : <?=$data['name_patient'];?></h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="section-title mt-0">Lihat Riwayat Pasien :</div>
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
                                <a class="nav-link "
                                    href="<?=base_url()?>ViewPatient/activitypatient/<?=$data['id_patient']?>">Riwayat
                                    Aktifitas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"
                                    href="<?=base_url()?>ViewPatient/historyprescription/<?=$data['id_patient']?>">Riwayat
                                    Resep Dokter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="<?=base_url()?>ViewPatient/medicine/<?=$data['id_patient']?>">Obat yang sedang
                                    dikonsumsi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-lin btn btn-outline-danger"
                                    href="<?=base_url()?>ViewPatient/addprescription/<?=$data['id_patient']?>"><i
                                        class="fas fa-file-medical bg-outline-danger"></i> Beri Resep</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal dan waktu</th>
                                    <th scope="col">Resep</th>
                                    <th scope="col">Status</th>
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
                                    foreach($prescription_patient as $prescription_patient):
                                    ?>
                                <tr>

                                    <td style="width: 2%;"><a
                                            href="<?= base_url()?>ViewPatient/detailresep/<?=$id_patient?>/<?=$prescription_patient['id_prescription_patient']?>"><?=$i?></a>
                                    </td>
                                    <td><a
                                            href="<?= base_url()?>ViewPatient/detailresep/<?=$id_patient?>/<?=$prescription_patient['id_prescription_patient']?>"><?=$prescription_patient['date_prescription_patient']?></a>
                                    </td>
                                    <td><a
                                            href="<?= base_url()?>ViewPatient/detailresep/<?=$id_patient?>/<?=$prescription_patient['id_prescription_patient']?>"><?=$prescription_patient['prescription']?></a>
                                    </td>
                                    <td><a
                                            href="<?= base_url()?>ViewPatient/detailresep/<?=$id_patient?>/<?=$prescription_patient['id_prescription_patient']?>"><?=$prescription_patient['status']?></a>
                                    </td>
                                    <td>

                                        <a class="badge badge-success"
                                            href="<?= base_url()?>ViewPatient/detailprescription/<?=$id_patient?>/<?=$prescription_patient['id_prescription_patient']?>">
                                            Detail
                                        </a>
                                        <a class="badge badge-warning"
                                            href="<?= base_url()?>ViewPatient/updateprescription/<?=$id_patient?>/<?=$prescription_patient['id_prescription_patient']?>">
                                            Edit
                                        </a>
                                        <a class="badge badge-danger"
                                            href="<?= base_url()?>ViewPatient/hapusprescription/<?=$id_patient?>/<?=$prescription_patient['id_prescription_patient']?>">
                                            Hapus
                                        </a>
                                    </td>
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