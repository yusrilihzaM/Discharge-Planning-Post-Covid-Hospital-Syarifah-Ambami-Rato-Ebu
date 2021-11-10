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
                $this->load->view('viewpatient/menu_riwayat_makanan_patient');
                ?>
                <div class="card">
                    <div class="card-body">
                        <table  class="table table-bordered table-striped table-responsive dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="2">No</th>
                                    <th scope="col" rowspan="2">Tanggal dan waktu</th>
                                    <th class="text-center" scope="col" colspan="3">Karbohidrat</th>
                                    <th class="text-center" scope="col" colspan="3">Protein</th>
                                    <th class="text-center" scope="col" colspan="3">Mineral</th>
                                    <th class="text-center" scope="col" colspan="3">Susu</th>
                                </tr>
                                <tr>
                                   
                                    <th scope="col">Karbohidrat Pagi</th>
                                    <th scope="col">Karbohidrat Siang</th>
                                    <th scope="col">Karbohidrat Malam</th>
                                    <th scope="col">Protein Pagi</th>
                                    <th scope="col">Protein Siang</th>
                                    <th scope="col">Protein Malam</th>
                                    <th scope="col">Mineral Pagi</th>
                                    <th scope="col">Mineral Siang</th>
                                    <th scope="col">Mineral Malam</th>
                                    <th scope="col">Susu Pagi</th>
                                    <th scope="col">Susu Siang</th>
                                    <th scope="col">Susu Malam</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $i=1;
                                    foreach($diet_patient as $diet_patient):
                                    ?>
                                <tr>
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$diet_patient['id_diet_patient']?>"><?=$i?></a></td>
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$diet_patient['id_diet_patient']?>"><?=$diet_patient['date_diet_nutrisionist']?></a></td>
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$diet_patient['id_diet_patient']?>"><?=$diet_patient['carbohydrate_morning']?></a></td>
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$diet_patient['id_diet_patient']?>"><?=$diet_patient['carbohydrate_afternoon']?></a></td>
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$diet_patient['id_diet_patient']?>"><?=$diet_patient['carbohydrate_evening']?></a></td>
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$diet_patient['id_diet_patient']?>"><?=$diet_patient['protein_morning']?></a></td>
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$diet_patient['id_diet_patient']?>"><?=$diet_patient['protein_afternoon']?></a></td>
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$diet_patient['id_diet_patient']?>"><?=$diet_patient['protein_evening']?></a></td>
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$diet_patient['id_diet_patient']?>"><?=$diet_patient['mineral_morning']?></a></td>
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$diet_patient['id_diet_patient']?>"><?=$diet_patient['mineral_afternoon']?></a></td>
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$diet_patient['id_diet_patient']?>"><?=$diet_patient['mineral_evening']?></a></td>
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$diet_patient['id_diet_patient']?>"><?=$diet_patient['milks_morning']?></a></td>
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$diet_patient['id_diet_patient']?>"><?=$diet_patient['milks_afternoon']?></a></td>
                                    <td><a href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$diet_patient['id_diet_patient']?>"><?=$diet_patient['milks_evening']?></a></td>
                                    <!-- <td>
                                        <a class="badge badge-success"
                                            href="<?= base_url()?>ViewPatient/detailnutrisionis/<?=$id_patient?>/<?=$diet_patient['id_diet_patient']?>">Lihat
                                            Menu Makanan Diet</a>
                                    </td> -->
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