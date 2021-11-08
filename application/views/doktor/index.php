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
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="<?= base_url('Dokter/resep')?>">
                    <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fas fa-pills"></i>
                            </div>
                        <div class="card-wrap">
                                <div class="card-header">
                                    <h4 mx-auto w-100 style="color: black;">Resep Dokter</h4>
                                </div>
                                <div class="card-body">
                                    <h4 class="mt-2" style="font-size: x-small;">Resep obat dari dokter</h4>
                                </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </section>
</div>