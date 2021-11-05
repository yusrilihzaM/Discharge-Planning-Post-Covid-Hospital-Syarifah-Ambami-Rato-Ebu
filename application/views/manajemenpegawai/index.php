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
                                    <th scope="col">Password</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td style="width: 4%;"></td>
                                    <td>name</td>
                                    <td>username</td>
                                    <td>password</td>
                                    <td>date_of_birth</td>
                                    <td>age</td>
                                    <td>gender</td>
                                    <td>address</td>

                                    <td style="width: 15%;">
                                        <a class="btn btn-warning  fas fa-edit" href="<?= base_url();?>" style=" color:white;"></a>
                                        <a class="btn btn-danger fas fa-trash-alt hapus-news" href=""
                                            style="color:white;"></a>
                                    </td>

                                </tr>
                                

                            </tbody>


                        </table>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>

    </section>
</div>