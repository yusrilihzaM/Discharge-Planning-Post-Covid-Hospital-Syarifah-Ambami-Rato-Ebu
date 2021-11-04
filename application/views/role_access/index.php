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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>');?>

                        <?= $this->session->flashdata('message');?>
                        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                        </div>
                        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                        </div>

                        <a href="<?= base_url(); ?>menu/add" class="btn btn-primary mb-3">Tambah menu baru</a>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Peran</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
                                <?php foreach ($data as $m) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $m['role']; ?></td>
                                    <td>
                                    <a href="<?= base_url(); ?>role/edit/<?= $m['role_id']; ?>"
                                            class="badge badge-warning">hak akses</a>
                                        <a href="<?= base_url(); ?>role/edit/<?= $m['role_id']; ?>"
                                            class="badge badge-success">ubah</a>
                                        <a href="<?= base_url(); ?>role/hapus/<?= $m['role_id']; ?>"
                                            class="badge badge-danger hapus-news">hapus</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>