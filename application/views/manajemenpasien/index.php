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

                        <div class="flash-data-news" data-flashdata="">

                        </div>
                        <div class="flash-data-data" data-flashdata="">
                        </div>
                        <a href="<?= base_url('tambahdatapasien');?>" type="button p-1 mb-2 "
                            class="btn btn-success far fa-plus mx-auto">Tambah Data Pasien</a>
                        <br>
                        <br>

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
                                    <td style="width: 4%;"></td>
                                    <td>Nama</td>
                                    <td>NIK</td>
                                    <td>No Rekam Medis</td>
                                    <td>Umur</td>
                                    <td>Jenis Kelamin</td>
                                    <td>Alamat</td>

                                    <td style="width: 20%;">
                                        <a class="btn btn-success fas fa-eye" href=""
                                            style="color:white;"></a>
                                        <a class="btn btn-warning  fas fa-edit" href="" style=" color:white;"></a>
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