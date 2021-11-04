<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQMenuT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?=$title;?></h1>
        </div>
        <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Menu baru</h4>
                    </div>
                    <form action="<?= base_url('menu/add'); ?>" method="post">
                        <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                            <div class="form-group">
                                <label for="Menu">Menu</label>
                                <input id="Menu" type="text" class="form-control" name="Menu" tabindex="1" required placeholder="Masukan nama menu"
                                    autofocus>
                                <div class="invalid-feedback">
                                    Silahkan isi nama menu anda
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <button type="submmit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

    </section>
</div>