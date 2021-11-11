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
<div class="main-content">
    <section class="section">
    <div class="section-header">
            <h1><?=$title;?></h1>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('viewpatient')?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning"> 
                            <i class="fas fa-procedures"></i> 
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Lihat Pasien</h4>

                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Melihat data pasien secara lengkap meliputi kegiatan yang dilakukan, obat, menu diet pasien</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('manajemenpasien')?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-hospital-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Manajemen Pasien</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Melihat detail data diri pasien</h4>
                            </div>
                            
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('menu')?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-th-large"></i> 
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Manajemen Menu</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Mengelola manajemen menu</h4>
                            </div>
                            
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('submenu')?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-th"></i> 
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Manajemen Sub Menu</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Mengelola manajemen submenu</h4>
                            </div>
                            
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('role')?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class=" fas fa-universal-access"></i> 
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Manajemen Peran</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Mengelola manajemen peran</h4>
                            </div>
                            
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('Manajemenpegawai')?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class=" fas fa-user-tie"></i> 
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Manajemen Pegawai</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Mengelola manajemen pegawai</h4>
                            </div>
                            
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('AssessmentType')?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-secondary">
                            <i class="fas fa-quote-right"></i> 
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Tipe Pertanyaan</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Melihat pertanyaan deteksi mandiri pasien</h4>
                            </div>
                            
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('assessmentquestion')?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="fas fa-question"></i> 
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Pertanyaan Deteksi</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Mengelola pertanyaan deteksi mandiri pasien</h4>
                            </div>
                            
                        </div>
                    </div>
                </a>
            </div>

            <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-12"> 	
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="fas fa-pills"></i> 
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Resep obat pasien</h4>

                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Resep obat yang diberikan oleh dokter</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href=" <?= base_url('ActivityType')?>">
                    <div class="card card-statistic-1"> 
                        <div class="card-icon bg-danger">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Tipe Aktivitas</h4>

                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Mengelola kegiatan harian pasien</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url ('ActivityQuestion')?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-question"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Pertanyaan Aktivitas</h4>

                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Mengelola jadwal kegiatan harian pasien</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('obatpasien')?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-capsules"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Obat yang sedang pasien konsumsi</h4>

                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Input obat pasien yang dikonsumsi
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
                                <h4 class="mt-2" style="font-size: x-small;">Makanan harian yang pasien konsumsi</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('ControlPatient')?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4 mx-auto w-100 style="color: black;">Manajemen Jadwal Kontrol Pasien</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="mt-2" style="font-size: x-small;">Melihat dan mengatur jadawal kontrol pasien</h4>
                            </div>
                            
                        </div>
                    </div>
                </a>
            </div>

    </section>
</div>