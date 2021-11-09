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
                $this->load->view('viewpatient/menu_riwayat_patient');
                ?>
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