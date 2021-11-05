    <div class="container">
        <div class="d-flex justify-content-center">
            <h3 class="mb-3 mt-5">Deteksi Mandiri <span style="color :red">COVID-19</span></h3>
        </div>
        <div class="d-flex justify-content-center">
            <img src="<?= base_url('assets/img/rslogo.png'); ?>" alt="" class="align-items-sm-center" width="100"
                height="125">
        </div>
        <div>
            <h6 class="d-flex justify-content-center mb-2 mt-2 ">Deteksi Mandiri Cepat COVID-19 adalah salah satu cara
                untuk membantu mempercepat tindakan</h6>
            <h6 class="d-flex justify-content-center mb-4">apakah Anda sehat atau memiliki gejala yang memerlukan
                pemeriksaan dan pengujian lebih lanjut mengenai COVID-19</h6>
        </div>
        <h5 class="d-flex justify-content-center mb-4 mt-2 ">Jawab Pertanyaan Berikut Untuk Memulai Deteksi Mandiri</h5>
        <div>

        </div>
        <form method="post" action="Deteksimandiri/hitung">

            <div class="card bg-success text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            Gejala yang dirasakan
                        </div>
                        <div class="col-md-2">
                            Jawab
                        </div>
                    </div>
                </div>
            </div>
            <?php
          

            $menu=$this->db->query("SELECT * FROM assessment_type  ORDER BY id_assessment_type ASC")->result_array();
        ?>
            <?php foreach ($menu as $m) : ?>
            <label for="gejala hipertensi">
                <h4>Tanda dan Gejala :<span class="label label-default"> <?=$m['assessment_type']?></span></h4>
            </label>
            <?php
            $menuId = $m['id_assessment_type'];
            $querySubMenu = "SELECT * 
                                FROM assessment_question 
                                WHERE id_assessment_type = $menuId
                            ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
        ?>
         <?php foreach ($subMenu as $sm) : ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p><?= $sm['assessment_question']; ?></p>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check">
                                <label class="radio-inline"><input type="radio" value="<?= $sm['weight_yes']; ?>" name="<?= $sm['id_assessment_question']; ?>" >Ya</label>
                                <label class="radio-inline"><input type="radio" value="<?= $sm['weight_no']; ?>"name="<?= $sm['id_assessment_question']; ?>">Tidak</label>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-danger btn-lg btn-block">Cek Status</button>
        </form>
    </div>