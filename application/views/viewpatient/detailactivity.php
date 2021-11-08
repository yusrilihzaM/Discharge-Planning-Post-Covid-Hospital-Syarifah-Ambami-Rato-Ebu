<div class="main-content">
    <section class="section">
        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

        </div>
        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
        </div>
        <div class="section-header">
            <h1>Riwayat Aktifitas : <?=$data['name_patient'];?> - Tanggal : <?=$data['name_patient'];?></h1>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <form method="post" action="Aktivitaspasien/save">
                            <?php

                                $menu=$this->db->query("SELECT * FROM activity_type  ORDER BY id_activity_type ASC")->result_array();
                                ?>
                            <div class="form-group">
                                <?php foreach ($menu as $m) : ?>
                                </br>
                                <h6><?=$m['activity_type']?></h6>

                                <?php
                                        $menuId = $m['id_activity_type'];
                                       
                                        $querySubMenu = "SELECT * FROM activity_answer NATURAL JOIN activity_question WHERE id_activity_type= $menuId AND id_activity_patient=$id_activity_patient
                                                        ";
                                        $subMenu = $this->db->query($querySubMenu)->result_array();
                                        
                                    ?>
                                <?php foreach ($subMenu as $sm) : ?>
                                <div class="form-check">

                                    <?php
                                         
                                            if($sm['answer']!=""):
                                        ?>
                                    <input class="form-check-input" type="checkbox" checked disabled
                                        id="<?= $sm['id_activity_question']; ?>"
                                        value="<?= $sm['activity_question']; ?>"
                                        name="<?= $sm['id_activity_question']; ?>">
                                    <label class="form-check-label"
                                        for="<?= $sm['id_activity_question']; ?>"><?=$sm['activity_question']?></label>
                                    <?php
                                         
                                            else:
                                     ?>
                                    <input class="form-check-input" type="checkbox" disabled
                                        id="<?= $sm['id_activity_question']; ?>"
                                        value="<?= $sm['activity_question']; ?>"
                                        name="<?= $sm['id_activity_question']; ?>">
                                    <label class="form-check-label"
                                        for="<?= $sm['id_activity_question']; ?>"><?=$sm['activity_question']?></label>
                                    <?php
                                         
                                            endif;
                                     ?>
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