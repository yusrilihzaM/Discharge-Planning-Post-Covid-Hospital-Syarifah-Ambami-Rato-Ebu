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
                        <a href="<?=base_url()?>submenu/add" type="button p-1 mb-2 "
                            class="btn btn-success far fa-plus mx-auto">Tambah Sub Menu</a>
                        <br>
                        <br>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Aktif</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $n0 = 1; ?>
                                <?php foreach ($data as $data) : ?>
                                <tr>
                                    <td style="width: 4%;"><?= $n0?></td>
                                    <td><?= $data['title']; ?></td>
                                    <td><?= $data['menu']; ?></td>
                                    <td><?= $data['url']; ?></td>
                                    <td><?= $data['icon']; ?></td>
                                    <td><?= $data['is_active']; ?></td>
                                    <td style="width: 15%;">
                                        <a class="btn btn-warning  fas fa-edit" href="<?= base_url(); ?>submenu/edit/<?= $data['id_user_sub_menu']; ?>" style=" color:white;"></a>
                                        <a class="btn btn-danger fas fa-trash-alt hapus-news" href="<?= base_url(); ?>submenu/hapus/<?= $data['id_user_sub_menu']; ?>"
                                            style="color:white;"></a>
                                    </td>

                                </tr>
                                <?php $n0++ ?>
                                <?php endforeach ?>

                            </tbody>


                        </table>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>

    </section>
</div>