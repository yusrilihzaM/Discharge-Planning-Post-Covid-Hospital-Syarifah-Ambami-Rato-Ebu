<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1> Menu Diet Pasien <?=$data['name_patient']?></h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Menu Diet</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="" class="needs-validation" novalidate="">
                            <label><span style="font-size:medium">Sarapan</span></label>


                            <div class="form-group">
                                <label>Karbohidrat</label>
                                <p>
                                    <?=$diet_nutrisionist['carbohydrate']?></p>

                            </div>

                            <div class="form-group">
                                <label>Protein</label>
                                <p>
                                    <?=$diet_nutrisionist['protein']?>
                                    </p>
                            </div>

                            <div class="form-group">
                                <label> Mineral</label>
                                <p>
                                    <?=$diet_nutrisionist['mineral']?></p>

                            </div>

                            <div class="form-group">
                                <label>Susu</label>
                                <p>
                                    <?=$diet_nutrisionist['milks']?></p>

                            </div>
                            

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>