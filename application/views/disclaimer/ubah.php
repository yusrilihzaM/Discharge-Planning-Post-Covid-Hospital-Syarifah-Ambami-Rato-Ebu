<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="color: red;"><?=$title;?></h1>
        </div>

        <div class="row">
                <div class="col-12">

                    <?= form_open_multipart('disclaimer');?>
                    
                        <div class="card">
                            <div class="card-body">

                                <div class="card-header">
                                    
                                    <div class="form-group row">
                                        
                                        <div class="col-1">
                                                <img src="<?= base_url('assets/img/profil/')?><?=$disclaimer['img_name']?>" class="img-thumbnail" alt="">
                                        </div>

                                            <div class="col-sm-11">
                                                <form action="/action_page.php">
                                                    <input type="file" class="form-input" id="img_name" name="img_name">
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                    <!-- <a href="" class="btn btn-success" type="submit">Ubah</a> -->
                                                    <!-- 'Disclaimer' masuk ke dalam base url -->
                                                </form>
                                            </div>
                                                
                                            </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </form>
                    
                </div>
        </div>

    </div>
</div>