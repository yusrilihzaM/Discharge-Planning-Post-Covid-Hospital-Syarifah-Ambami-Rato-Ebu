    <div class="container">
        <div class="d-flex justify-content-center">
            <h3 class="mb-3 mt-5">Deteksi Mandiri <span style="color :red">COVID-19</span></h3>
        </div>
        <div class="d-flex justify-content-center">
            <img src="<?= base_url('assets/img/rslogo.png'); ?>" alt="" class="align-items-sm-center" width="100" height="125">
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
        <form>
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

            <!-- <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            Gejala Hipertensi :
                        </div>
                    </div>
                </div>
            </div> -->
            <label for="gejala hipertensi" ><h4>Tanda dan Gejala :<span class="label label-default"></span></h4></label>
            
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            Pusing berputar
                        </div>
                        <div class="col-md-2">
                            <div class="form-check">
                                <label class="radio-inline mr-3"><input type="radio" name="optradio" checked>Ya</label>
                                <label class="radio-inline"><input type="radio" name="optradio">Tidak</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 
            <label for="gejala hipertensi" ><h4>Tanda dan Gejala DM :<span class="label label-default"></span></h4></label>
            
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            Sering kencing terutama malam hari
                        </div>
                        <div class="col-md-2">
                            <div class="form-check">
                                <label class="radio-inline mr-3"><input type="radio" name="optradio" checked>Ya</label>
                                <label class="radio-inline"><input type="radio" name="optradio">Tidak</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <a href="<?= base_url('Deteksimandiri/hasil')?>" type="submit" class="btn btn-danger btn-lg btn-block">
                <h6>Cek Status</h6>
            </a>
        </form>
    </div>