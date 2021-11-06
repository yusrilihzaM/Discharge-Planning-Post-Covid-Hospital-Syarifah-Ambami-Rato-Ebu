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
        <div class="col-12 mb-4">
            <div class="hero align-items-center bg-success text-white">
                <div class="hero-inner text-center">
                    <h2>Hasil deteksi mandiri anda</h2>
                    <h1><?= $score?></h1>
                    <h3 style="background-color: red;"><?= $ket?></h3>
                    <p class="lead">Selanjutnya, silahkan klik tombol di bawah untuk masuk ke halaman beranda</p>
                    <div class="mt-4">
                        <a href="<?=base_url()?>pasien" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-sign-in-alt"></i>Pergi ke beranda pasien</a>
                    </div>
                </div>
            </div>
        </div>
