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
                    
                        <div class="card">
                            <div class="card-body">

                                <div class="card-header">
                                    
                                    <div class="form-group row">
                                        
                                        <div class="col-1">
                                                <img src="assets/img/profil/" class="img-thumbnail" alt="">
                                        </div>

                                            <div class="col-sm-11">
                                                <form action="/action_page.php">
                                                    <input type="file" class="form-input" id="image" name="image">
                                                    <a href="<?= base_url('Disclaimer');?>" class="btn btn-success" type="submit">Simpan</a>
                                                </form>
                                            </div>

                                            <!-- <div class="col-sm-11">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image" name="image">
                                                    <label class="custom-file-label" for="image">Pilih file</label>
                                                </div> -->
                                                
                                            </div>

                                            
                                    </div>
                                </div>

                            </div>
                        </div>
                    
                </div>
        </div>

    </div>
</div>