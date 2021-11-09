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
                $this->load->view('viewpatient/menu_riwayat_resep_dokter_patient');
                ?>
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal dan waktu</th>
                                    <th scope="col">Resep</th>
                                    <th scope="col">Status</th>
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
                                    foreach($prescription_patient as $prescription_patient):
                                    ?>
                                <tr>

                                    <td style="width: 2%;"><a
                                            href="<?= base_url()?>ViewPatient/detailresep/<?=$id_patient?>/<?=$prescription_patient['id_prescription_patient']?>"><?=$i?></a>
                                    </td>
                                    <td><a
                                            href="<?= base_url()?>ViewPatient/detailresep/<?=$id_patient?>/<?=$prescription_patient['id_prescription_patient']?>"><?=$prescription_patient['date_prescription_patient']?></a>
                                    </td>
                                    <td><a
                                            href="<?= base_url()?>ViewPatient/detailresep/<?=$id_patient?>/<?=$prescription_patient['id_prescription_patient']?>"><?=$prescription_patient['prescription']?></a>
                                    </td>
                                    <td><a
                                            href="<?= base_url()?>ViewPatient/detailresep/<?=$id_patient?>/<?=$prescription_patient['id_prescription_patient']?>"><?=$prescription_patient['status']?></a>
                                    </td>
                                    <td>

                                        <!-- <a class="badge badge-success"
                                            href="<?= base_url()?>ViewPatient/detailprescription/<?=$id_patient?>/<?=$prescription_patient['id_prescription_patient']?>">
                                            Detail
                                        </a> -->
                                        <a class="badge badge-warning"
                                            href="<?= base_url()?>ViewPatient/updateprescription/<?=$id_patient?>/<?=$prescription_patient['id_prescription_patient']?>">
                                            Edit
                                        </a>
                                        <a class="badge badge-danger"
                                            href="<?= base_url()?>ViewPatient/hapusprescription/<?=$id_patient?>/<?=$prescription_patient['id_prescription_patient']?>">
                                            Hapus
                                        </a>
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