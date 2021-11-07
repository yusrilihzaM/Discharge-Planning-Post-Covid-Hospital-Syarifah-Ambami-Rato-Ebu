    <div class="main-content">
        <section class="section">
                <div class="section-header">
                    <h1 style="color: red;"><?=$title;?></h1>
                </div>

                <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                
                        <?= $this->session->flashdata('message');?>
                        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                        </div>
                        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                        </div>

                        <!-- <a href="" class="btn btn-primary mb-3">Tambah data baru</a> -->

                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <th scope="row">1</th>
                                    <td><img src="assets/img/profil/default.jpg" class="img-thumbnail" style="width:120px;height:120px;"></td>
                                    <td>
                                        <a href="<?= base_url('Disclaimer/ubah'); ?>" class="badge badge-success">ubah</a>
                                        <a href="<?= base_url(); ?>"
                                            class="badge badge-danger hapus-news">hapus</a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            

        </div>
    </div>