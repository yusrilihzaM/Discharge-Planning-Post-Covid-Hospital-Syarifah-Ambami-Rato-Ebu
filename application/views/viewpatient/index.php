<div class="main-content">
    <section class="section">
        <div class="flash-data-news" data-flashdata="">

        </div>
        <div class="flash-data-data" data-flashdata="">
        </div>
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

                        <table id="datatable" class="table table-responsive table-bordered dt-responsive"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">No Rekam Medis</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                <?php $i = 1;?>
                                <?php foreach ($data as $m) : ?>
                                    <td style="width: 4%;"><?= $i; ?></td>
                                    <td><?= $m['name_patient']; ?></td>
                                    <td><?= $m['nik_patient']; ?></td>
                                    <td><?= $m['id_medical_record']; ?></td>
                                    <td><?= $m['age_patient']; ?></td>
                                    <td><?= $m['gender_patient']; ?></td>
                                    <td><?= $m['address_patient']; ?></td>

                                    <td style="width: 20%;">
                                        <a class="btn btn-success fas fa-eye" href="<?= base_url('ViewPatient/detailpatient/')?><?= $m['id_patient']; ?>"
                                            style="color:white;"></a>
                                    </td>

                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>

                            </tbody>


                        </table>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>

    </section>
</div>