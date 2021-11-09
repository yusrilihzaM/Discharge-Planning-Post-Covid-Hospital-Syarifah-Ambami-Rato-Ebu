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
            <?php
                $this->load->view('viewpatient/menu_riwayat_deteksi_patient');
                ?>
                <div class="card">
                    <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Skor akhir</th>
                                    <th scope="col">Aksi</th>
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
                                    <td style="width: 7%;"><?=$i?></td>
                                    <td ><a href="<?= base_url()?>ViewPatient/detaildetection/<?=$m['id_assessment_patient']?>"><?= date('Y-m-d',strtotime($m['date_assessment_patient']))?></a></td>
                                    <td ><a href="<?= base_url()?>ViewPatient/detaildetection/<?=$m['id_assessment_patient']?>"><?= $m['total_score']?></a></td>
                                    <td><a class="badge badge-success" href="<?= base_url()?>ViewPatient/detaildetection/<?=$m['id_assessment_patient']?>">Lihat Detail
                                            Deteksi Mandiri</a></td>
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