    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Aktivitas pasien</h1>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h4>Aktivitas Anda</h4>
                        </div>
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
                                        $querySubMenu = "SELECT * 
                                                            FROM activity_question 
                                                            WHERE id_activity_type = $menuId
                                                        ";
                                        $subMenu = $this->db->query($querySubMenu)->result_array();
                                    ?>
                                    <?php foreach ($subMenu as $sm) : ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                            id="<?= $sm['id_activity_question']; ?>"
                                            value="<?= $sm['activity_question']; ?>"
                                            name="<?= $sm['id_activity_question']; ?>">
                                        <label class="form-check-label"
                                            for="<?= $sm['id_activity_question']; ?>"><?=$sm['activity_question']?></label>
                                    </div>
                                    <?php endforeach; ?>
                                    <?php endforeach; ?>
                                    <label for="" class="mt-3"><span style="color :red">Catatan : Centang kegiatan yang
                                            anda lakukan</span></label>
                                </div>
                                <div class="modal-footer" style="justify-content: center;">
                                    <button type="submit" class="btn btn-success mr-5"
                                        data-bs-dismiss="modal">Simpan</button>
                                    <a href="<?=base_url()?>pasien" style="color: white;" class="btn btn-danger ml-5"
                                        data-bs-dismiss="modal">Keluar</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
    </div>
    </div>