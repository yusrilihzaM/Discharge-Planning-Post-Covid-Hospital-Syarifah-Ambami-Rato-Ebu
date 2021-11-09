<div class="card">
    <div class="card-body">
        <div class="section-title mt-0">Lihat Riwayat Pasien :</div>

        <?php
        if($cek_user['role']=="Admin" or $cek_user['role']=="Dokter"):
        ?>
        <ul class="nav nav-pills">

            <li class="nav-item">
                <a class="nav-link active" href="<?=base_url()?>ViewPatient/detailpatient/<?=$data['id_patient']?>">Data
                    Pribadi Pasien</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>ViewPatient/resultdetection/<?=$data['id_patient']?>">Riwayat
                    Deteksi Mandiri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?=base_url()?>ViewPatient/activitypatient/<?=$data['id_patient']?>">Riwayat
                    Aktifitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="<?=base_url()?>ViewPatient/historyprescription/<?=$data['id_patient']?>">Riwayat Resep
                    Dokter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>ViewPatient/medicine/<?=$data['id_patient']?>">Obat yang sedang
                    dikonsumsi</a>
            </li>
            <li class="nav-item">
                <a class="nav-lin btn btn-outline-danger"
                    href="<?=base_url()?>ViewPatient/addprescription/<?=$data['id_patient']?>"><i
                        class="fas fa-file-medical bg-outline-danger"></i> Beri Resep</a>
            </li>
        </ul>

        <?php
        elseif($cek_user['role']=="Nutritionist"):
        ?>
        <ul class="nav nav-pills">
            <li class="nav-item ">
                <a class="nav-link active" href="<?=base_url()?>ViewPatient/detailpatient/<?=$data['id_patient']?>">Data
                    Pribadi Pasien</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>ViewPatient/resultdetection/<?=$data['id_patient']?>">Riwayat
                    Deteksi Mandiri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?=base_url()?>ViewPatient/activitypatient/<?=$data['id_patient']?>">Riwayat
                    Aktifitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>ViewPatient/historymenu/<?=$data['id_patient']?>">Riwayat Menu
                    Diet</a>
            </li>

            <li class="nav-item">
                <a class="nav-lin btn btn-outline-danger"
                    href="<?=base_url()?>ViewPatient/adddietmenu/<?=$data['id_patient']?>"><i
                        class="fas fa-file-medical bg-outline-danger"></i> Beri Menu Diet</a>
            </li>
        </ul>

        <?php
        elseif($cek_user['role']=="Perawat"):
        ?>
        <ul class="nav nav-pills">

            <li class="nav-item">
                <a class="nav-link active" href="<?=base_url()?>ViewPatient/detailpatient/<?=$data['id_patient']?>">Data
                    Pribadi Pasien</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>ViewPatient/resultdetection/<?=$data['id_patient']?>">Riwayat
                    Deteksi Mandiri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?=base_url()?>ViewPatient/activitypatient/<?=$data['id_patient']?>">Riwayat
                    Aktifitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="<?=base_url()?>ViewPatient/historyprescription/<?=$data['id_patient']?>">Riwayat Resep
                    Dokter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>ViewPatient/medicine/<?=$data['id_patient']?>">Obat yang sedang
                    dikonsumsi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>ViewPatient/historymenu/<?=$data['id_patient']?>">Riwayat Menu
                    Diet</a>
            </li>
            <li class="nav-item">
                <a class="nav-lin btn btn-outline-danger"
                    href="<?=base_url()?>ViewPatient/controlpatient/<?=$data['id_patient']?>"><i
                        class="fas fa-file-medical bg-outline-danger"></i>Buat Jadwal Kontrol</a>
            </li>
        </ul>
        <?php
        endif;
        ?>
    </div>
</div>