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
                            <label><span style="font-size:medium">Sarapan Pagi</span></label>


                            <div class="form-group">
                                <label>Karbohidrat pagi</label>
                                <p>
                                    <?=$diet_nutrisionist['carbohydrate_morning']?></p>

                            </div>

                            <div class="form-group">
                                <label>Protein pagi</label>
                                <p>
                                    <?=$diet_nutrisionist['protein_morning']?>
                                    </p>
                            </div>

                            <div class="form-group">
                                <label> Mineral pagi</label>
                                <p>
                                    <?=$diet_nutrisionist['mineral_morning']?></p>

                            </div>

                            <div class="form-group">
                                <label>Susu pagi</label>
                                <p>
                                    <?=$diet_nutrisionist['milks_morning']?></p>

                            </div>
                            <label for=""><span style="font-size:medium">Makan Siang</span></label>
                            <p>
                            <div class="form-group">
                                <label> Karbohidrat siang</label>
                                <p>

                                    <?=$diet_nutrisionist['carbohydrate_afternoon']?> </p>
                            </div>

                            <div class="form-group">
                                <label> Protein siang</label>
                                <p>

                                    <?=$diet_nutrisionist['protein_afternoon']?> </p>
                            </div>

                            <div class="form-group">
                                <label> Mineral siang</label>
                                <p>
                                    <?=$diet_nutrisionist['mineral_afternoon']?></p>

                            </div>

                            <div class="form-group">
                                <label>Susu siang</label>
                                <p>
                                    <?=$diet_nutrisionist['milks_afternoon']?></p>

                            </div>
                            <label for=""><span style="font-size:medium">Makan Sore</span></label>
                            <p>
                            <div class="form-group">
                                <label> Karbohidrat sore</label>
                                <p>
                                    <?=$diet_nutrisionist['carbohydrate_evening']?></p>

                            </div>
                            <div class="form-group">
                                <label>Protein sore</label>
                                <p>
                                    <?=$diet_nutrisionist['protein_evening']?> </p>
                            </div>

                            <div class="form-group">
                                <label>Mineral sore</label>
                                <p>

                                    <?=$diet_nutrisionist['mineral_evening']?> </p>
                            </div>

                            <div class="form-group">
                                <label>Susu sore</label>
                                <p>

                                    <?=$diet_nutrisionist['milks_evening']?> </p>
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>