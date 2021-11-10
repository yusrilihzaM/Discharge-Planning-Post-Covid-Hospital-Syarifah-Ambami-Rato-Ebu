<div class="main-content">
    <section class="section">
        <div class="flash-data-news" data-flashdata="<?= $this->session->flashdata('flash') ?>">

        </div>
        <div class="flash-data-data" data-flashdata="<?= $this->session->flashdata('data') ?>">
        </div>
        <div class="section-header">
            <h1>Riwayat Aktifitas : <?=$data['name_patient'];?></h1>
        </div>

        <div class="row">
            <div class="col-12">
            <?php
                $this->load->view('viewpatient/menu_riwayat_menu_patient');
                ?>
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama nutrisionis</th>
                                    <th scope="col">Tanggal dan waktu</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <?php
                            $id_patient=$data['id_patient'];
                            $i=1;
                            $data=$this->db->query("SELECT * FROM assessment_patient where id_patient=$id_patient")->result_array();
                            ?>
                            <tbody>
                                <?php
                                    $i=1;
                                    foreach($nutrisionis_patient as $nutrisionis_patient):
                                    ?>
                                <tr>
                               
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$nutrisionis_patient['id_diet_nutrisionist']?>"><?=$i?></a></td>
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$nutrisionis_patient['name']?>"><?=$i?></a></td>
                                    <td><a
                                            href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$nutrisionis_patient['id_diet_nutrisionist']?>"><?=$nutrisionis_patient['date_diet_nutrisionist']?></a>
                                    </td>
                                    <td>
                                        <a class="badge badge-success" href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$nutrisionis_patient['id_diet_nutrisionist']?>">Lihat
                                            Menu Diet</a>
                                            <a class="badge badge-warning" href="<?= base_url()?>ViewPatient/editnutrisionis/<?=$id_patient?>/<?=$nutrisionis_patient['id_diet_nutrisionist']?>">edit</a>
                                            <a class="badge badge-danger" href="<?= base_url()?>ViewPatient/hapusnutrisionis/<?=$id_patient?>/<?=$nutrisionis_patient['id_diet_nutrisionist']?>">hapus</a>
                                        </td>
                                </tr>
                                <?php
                                    $i=$i+1;
                                    endforeach;
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>

    </section>
</div>