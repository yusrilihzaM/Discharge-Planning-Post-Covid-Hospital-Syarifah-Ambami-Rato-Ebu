<div class="main-content">
    <section class="section">
        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

        </div>
        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
        </div>
        <div class="section-header">
            <h1>Detail Riwayat Deteksi Mandiri : <?=$data['name_patient'];?> - Tanggal : <?=$tanggal;?></h1>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="card" style="background-color: #ecf0f1;">
                    <div class="card-body">
                        <form method="post" action="Aktivitaspasien/save">
                            <?php

                                $menu=$this->db->query("SELECT * FROM assessment_type  ORDER BY id_assessment_type ASC")->result_array();
                                ?>
                            <div class="form-group">
                                <?php foreach ($menu as $m) : ?>
                                </br>
                                <h6 ><?=$m['assessment_type']?></h6>

                                <?php
                                        $menuId = $m['id_assessment_type'];
                                      
                                        $querySubMenu = "SELECT * FROM assessment_answer NATURAL JOIN assessment_question WHERE id_assessment_type= $menuId AND id_assessment_patient=$id_assessment_patient
                                                        ";
                                        $subMenu = $this->db->query($querySubMenu)->result_array();
                                        
                                    ?>
                                <?php foreach ($subMenu as $sm) : ?>
                                <div class="form-check">
                                    <div class="row" >
                                        <div class="col-md-7">
                                        <ul style="background-color: white;">
                                            <li class="mb-2" ><?= $sm['assessment_question']; ?></li>
                                        </ul>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-check" style="background-color: white;">
                                          
                                            <p class="mb-2" ><?= $sm['score_answer']; ?></p>
                                       
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php endforeach; ?>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>

    </section>
</div>