<div class="main-content">
    <section class="section">
        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

        </div>
        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
        </div>
        <div class="section-header">
            <h1>Detail Resep : <?=$data['name_patient'];?></h1>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-border table-striped">
                            <thead>

                                <tr>
                                    <th scope="col">Nama Dokter</th>
                                    <th scope="col">:</th>
                                    <th scope="col"><?=$prescription_patient['name']?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >Nama</td>
                                    <td >:</td>
                                    <td ><?=$data_patient['name_patient']?></td>
                                </tr>
                                <tr>
                                    <td >Nomor rekam medis</td>
                                    <td >:</td>
                                    <td ><?=$data_patient['id_patient']?></td>
                                </tr>
                                <tr>
                                    <td colspan="1">Resep obat</td>
                                    <td >:</td>
                                    <td ></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><?=$prescription_patient['prescription']?></td>
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