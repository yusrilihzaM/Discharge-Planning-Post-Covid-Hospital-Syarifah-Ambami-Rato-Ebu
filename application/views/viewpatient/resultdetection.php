<div class="main-content">
    <section class="section">
        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

        </div>
        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
        </div>
        <div class="section-header">
            <h1>Riwayat deteksi mandiri : <?=$data['name_patient'];?></h1>
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
                                <a class="nav-link active"
                                    href="<?=base_url()?>ViewPatient/resultdetection/<?=$data['id_patient']?>">Riwayat
                                    Deteksi Mandiri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link "
                                    href="<?=base_url()?>ViewPatient/activitypatient/<?=$data['id_patient']?>">Riwayat
                                    Aktifitas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="<?=base_url()?>ViewPatient/historyprescription/<?=$data['id_patient']?>">Riwayat
                                    Resep Dokter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="<?=base_url()?>ViewPatient/medicine/<?=$data['id_patient']?>">Obat yang sedang
                                    dikonsumsi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-lin btn btn-outline-danger" href="<?=base_url()?>"><i
                                        class="fas fa-file-medical bg-outline-danger"></i> Beri Resep</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-responsive dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Skor akhir</th>
                                    <?php foreach ($deteksi as $deteksi) : ?>
                                    <th scope="col"><?=$deteksi['assessment_question']?></th>
                                    <?php endforeach; ?>
                                </tr>
                            </thead>
                            <?php
                            $id_patient=$data['id_patient'];
                            $i=1;
                            $data=$this->db->query("SELECT * FROM assessment_patient where id_patient=$id_patient")->result_array();
                            ?>
                            <tbody>
                                <?php foreach ($data as $m) : ?>
                                <tr>
                                    <td ><?=$i?></td>
                                    <td style="width:100px"><?= date('Y-m-d',strtotime($m['date_assessment_patient']))?></td>
                                    <td><?=$m['total_score']?></td>
                                <?php
                                    $menuId = $m['id_assessment_patient'];
                                    $querySubMenu = "SELECT * FROM assessment_answer WHERE id_assessment_patient=$menuId order by id_assessment_question asc";
                                    $subMenu = $this->db->query($querySubMenu)->result_array();
                                ?>
                                <?php foreach ($subMenu as $x) : ?>
                                    <td><?= $x['score_answer']?></td>
                                    <?php endforeach?>
                                </tr>

                                <?php 
                            $i=$i+1;
                            endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>

    </section>
</div>