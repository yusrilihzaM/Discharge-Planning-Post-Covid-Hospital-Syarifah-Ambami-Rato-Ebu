<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    $("#disclaimer").modal('show');
});
</script>
<div class="modal fade" tabindex="-1" role="dialog" id="disclaimer">
    <div class="modal-dialog modal-xl modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-content-center" style="background-color:#c0392b;">
                <h5 class="modal-title" style="text-align: center;color:white;">Petunjuk Harian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-responsive-md"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>

                            <th scope="col" style="background-color: #27ae60;color:white">Aktifitas Harian</th>
                            <th scope="col" style="background-color: #27ae60;color:white">Obat dan Vitamin</th>
                            <th scope="col" style="background-color: #27ae60;color:white">Menu Diet</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $menu=$this->db->query("SELECT * FROM activity_type  ORDER BY id_activity_type ASC")->result_array();
                        ?>
                        <tr>

                            <td>
                                <?php foreach ($menu as $m) : ?>
                                <h6 class="mt-2"><?=$m['activity_type']?></h6>
                                <?php
                                $menuId = $m['id_activity_type'];
                                $querySubMenu = "SELECT * from activity_question WHERE id_activity_type= $menuId";
                                $subMenu = $this->db->query($querySubMenu)->result_array();      
                            ?>
                                <ul>
                                    <?php foreach ($subMenu as $sm) : ?>
                                    <li><?= $sm['activity_question']; ?></li>
                                    <?php endforeach; ?>
                                </ul>

                                <?php endforeach; ?>
                            </td>

                            <td>
                                    <label>Tanggal : <?=$resep_dokter['date_prescription_patient']?></label><br>
                                    <label>Dokter :<?=$resep_dokter['name']?></label><br>
                                    <h6>Resep obat anda :</h6>
                                    <p> <?=$resep_dokter['prescription']?></p>
                                    <p style="color: red;">Obat dapat di beli di apotek terdekat</p>
                                
                            </td>
                            <td>
                                <h6>Menu Makanan:</h6>
                                <h7>Karbohidrat:</h7>
                                <?=$menu_diet['carbohydrate']?>
                                <h7>Protein    :</h7>
                                <?=$menu_diet['protein']?>
                                <h7>Mineral    :</h7>
                                <?=$menu_diet['mineral']?>
                                <h7>Susu       :</h7>
                                <?=$menu_diet['milks']?>
                            </td>
                        </tr>


                    </tbody>
                </table>


            </div>
            <div class="modal-body d-flex justify-content-center" style="background-color:#c0392b;">
                <h6 class="modal-title " style="color:white;">JANGAN LUPA UNTUK MASUK KEMBALI PUKUL 20.00 WIB </h6>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Mengerti</button>
            </div>
        </div>
    </div>
</div>