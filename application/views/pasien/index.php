<!-- Main Content -->
<style>
.card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
}
</style>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?=$title;?></h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">

                <?= $this->session->flashdata('message');?>
                <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                </div>
                <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                </div>
                <div class="card card-statistic-1" type="button" data-bs-toggle="modal" data-bs-target="#kontrolModal">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4 mx-auto w-100 style="color: black;">Jadwal Kontrol</h4>

                        </div>
                        <div class="card-body">
                            <h4 class="mt-2" style="font-size: x-small;">Jadwal Kontrol ke rumah sakit</h4>
                        </div>
                    </div>
                    </a>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('obatpasien')?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="fas fa-pills"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Resep obat anda</h4>

                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Resep obat yang diberikan oleh dokter</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <?php

            
        date_default_timezone_set('Asia/Jakarta');

            $time=date("h:i:sa");
            if(date("h")>=$time_limit):
        ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('aktivitaspasien')?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-walking"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Aktivitas</h4>

                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Kegiatan harian anda</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('obatpasien')?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-capsules"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Obat yang anda konsumsi</h4>

                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Obat yang di konsumsi
                                    selama ini</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('dietpasien')?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Menu Diet</h4>

                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Makanan harian yang anda konsumsi</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php
            else:
            ?>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a data-bs-toggle="modal" data-bs-target="#warning">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-walking"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Aktivitas</h4>

                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Kegiatan harian anda</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a data-bs-toggle="modal" data-bs-target="#warning">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-capsules"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Obat yang anda konsumsi</h4>

                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Memasukan obat-obat yang anda konsumsi
                                    selama ini</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a data-bs-toggle="modal" data-bs-target="#warning">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Menu Diet</h4>

                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Makanan harian yang anda konsumsi</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php
            endif;
            ?>

    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="kontrolModal" tabindex="-1" aria-labelledby="kontrolModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kontrolModalLabel">Jadwal Kontrol Anda</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <?php
           
             
                $hari = date ("D",strtotime($jadwal_kontrol_terbaru['date_control_patient']));
                $tanggal = date ("d F Y",strtotime($jadwal_kontrol_terbaru['date_control_patient']));
                switch($hari){
                    case 'Sun':
                        $hari_ini = "Minggu";
                    break;
             
                    case 'Mon':			
                        $hari_ini = "Senin";
                    break;
             
                    case 'Tue':
                        $hari_ini = "Selasa";
                    break;
             
                    case 'Wed':
                        $hari_ini = "Rabu";
                    break;
             
                    case 'Thu':
                        $hari_ini = "Kamis";
                    break;
             
                    case 'Fri':
                        $hari_ini = "Jumat";
                    break;
             
                    case 'Sat':
                        $hari_ini = "Sabtu";
                    break;
                    
                    default:
                        $hari_ini = "Tidak di ketahui";		
                    break;
                    }
             
               
             
            
            ?>
            <div class="modal-body">
                <?php
                if($jadwal_kontrol_terbaru['name_patient']):
                ?>
                Hai <?=$jadwal_kontrol_terbaru['name_patient']?><br> Jadwal kontrol terbaru anda pada hari
                <?=$hari_ini?>, <?=$tanggal?><br>
                Silakan menuju RSUD Syarifah Ambami Rato Ebu
                <?php
               else:
                ?>
                Mohon maaf jadwal kontrol terbaru anda masih belum tersedia harap tunggu
                <?php
               endif;
                ?>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
                <!-- <button type="button" class="btn btn-danger ml-5" data-bs-dismiss="modal">Keluar</button> -->
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="warning" tabindex="-1" aria-labelledby="warningLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: red;">
                <h5 class="modal-title" id="warningLabel" style="color: white;">Pengumuman</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>

            <div class="modal-body">
                <h4>Menu ini hanya bisa dibuka pada jam 20.00 WIB</h4>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Mengerti</button>
                <!-- <button type="button" class="btn btn-danger ml-5" data-bs-dismiss="modal">Keluar</button> -->
            </div>
        </div>
    </div>
</div>