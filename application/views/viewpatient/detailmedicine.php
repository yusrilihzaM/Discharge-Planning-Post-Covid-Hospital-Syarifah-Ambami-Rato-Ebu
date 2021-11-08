<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Obat yang dikonsumsi pasien : <?=$data['name_patient']?></h1>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        
                        <div class="card-body">
                            <form method="POST" action="<?=base_url()?>obatpasien/save" class="needs-validation"
                                novalidate="">
                                
                                <div class="form-group">
                                    <label for=""><span style="font-size:medium">Obat Pagi</span></label>
                                    <div class="row">
                                        <div class="col">
                                            
                                            <?=$obat_pagi?>
                                        </div>
                                    </div>
                                    <hr class="mt-2 mb-3"/>
                                    <label for=""><span style="font-size:medium">Obat Siang</span></label>
                                    <div class="row">
                                        <div class="col">
                                        <?=$obat_siang?>
                                            
                                        </div>
                                    </div>
                                    <hr class="mt-2 mb-3"/>
                                    <label for=""><span style="font-size:medium">Obat Malam</span></label>
                                    <div class="row">
                                        <div class="col">
                                            
                                        <?=$obat_malam?>
                                        </div>
                                    </div>
                                    <hr class="mt-2 mb-3"/>
                                    
                                </div>
                              
                            </form>
                        </div>

                    </div>
                </div>
            </div>
    </div>