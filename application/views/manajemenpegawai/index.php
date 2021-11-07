<div class="main-content">
    <section class="section">
        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

        </div>
        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
        </div>
        <div class="section-header">
            <h1><?=$title;?></h1>
        </div>
    
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                        </div>
                        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                        </div>
                        <a href="<?=base_url('manajemenpegawai/tambahdatapegawai');?>" type="button p-1 mb-2 "
                            class="btn btn-success far fa-plus mx-auto">Tambah Data Pegawai</a>
                        <br>
                        <br>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Peran</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;?>
                                <?php foreach ($data as $m) : ?>
                                <tr>
                                    <td style="width: 4%;"><?= $i; ?></td>
                                    <td><?= $m['name']; ?></td>
                                    <td><?= $m['username']; ?></td>
                                    <td><?= $m['date_of_birth']; ?></td>
                                    <td><?= $m['age']; ?></td>
                                    <td><?= $m['gender']; ?></td>
                                    <td><?= $m['role']; ?></td>

                                    <td style="width: 15%;">
                                        <a class="btn btn-warning  fas fa-edit" href="<?= base_url();?>manajemenpegawai/editdatapegawai/<?= $m['id_user']; ?>" style=" color:white;"></a>
                                        <a class="btn btn-danger fas fa-trash-alt hapus-news" href="<?= base_url();?>manajemenpegawai/hapus/<?= $m['id_user']; ?>"
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