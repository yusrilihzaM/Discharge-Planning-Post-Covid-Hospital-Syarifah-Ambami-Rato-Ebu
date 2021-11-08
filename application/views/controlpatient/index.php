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


                        <?= $this->session->flashdata('message');?>
                        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

                        </div>
                        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
                        </div>

                        <a href="<?= base_url()?>ControlPatient/add" class="btn btn-primary mb-3">Tambah menu baru</a>

                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Id Pasien</th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">Jadwal Kontrol</th>
                                
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=1;
                                foreach($data as $data):
                                ?>
                                <tr>
                                <td ><?=$i?></td>
                                  
                                    <td ><?=$data['id_patient']?></td>
                                    <td ><?=$data['name_patient']?></td>
                                    <td ><?=$data['date_control_patient']?></td>
                                    <td > 
                                        <!-- <a class="badge badge-success"
                                            href="<?= base_url()?>ControlPatient/detail/<?=$data['id_control_patient']?>">
                                            Detail
                                        </a> -->
                                        <a class="badge badge-warning"
                                        href="<?= base_url()?>ControlPatient/edit/<?=$data['id_control_patient']?>">
                                            Edit
                                        </a>
                                        <a class="badge badge-danger"
                                        href="<?= base_url()?>ControlPatient/delete/<?=$data['id_control_patient']?>">
                                            Hapus
                                        </a></td>
                                </tr>
                                <?php
                                endforeach
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>