    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Obat pasien</h1>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Obat yang sedang anda konsumsi</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?=base_url()?>obatpasien/save" class="needs-validation"
                                novalidate="">
                                
                                <div class="form-group">
                                    <label for=""><span style="font-size:medium">Obat Pagi</span></label>
                                    <div class="row">
                                        <div class="col">
                                            <label>Masukkan nama obat</label>
                                            <div class="form-floating">
                                                <textarea class="form-control mb-3 summernote" name="obat_pagi" id="summernote"
                                                    placeholder="Contoh: 1. Paracetamol, aturan minum 3x1 hari"
                                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <label for=""><span style="font-size:medium">Obat Siang</span></label>
                                    <div class="row">
                                        <div class="col">
                                            <label>Masukkan nama obat</label>
                                            <div class="form-floating">
                                                <textarea class="form-control mb-3 summernote" name="obat_siang"
                                                    placeholder="Contoh: 1. Paracetamol, aturan minum 3x1 hari"
                                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <label for=""><span style="font-size:medium">Obat Malam</span></label>
                                    <div class="row">
                                        <div class="col">
                                            <label>Masukkan nama obat</label>
                                            <div class="form-floating">
                                                <textarea class="form-control summernote" name="obat_malam"
                                                    placeholder="Contoh: 1. Paracetamol, aturan minum 3x1 hari"
                                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <label for="" class="mt-3"><span style="color :red">Catatan : Tulis nama obat
                                            beserta aturan minum sesuai dengan resep obat dari dokter anda. Jika obat
                                            anda lebih dari satu tuliskan semua pada kolom</span></label>

                                </div>
                                <div class="col-lg" class="modal-footer" style="justify-content: center;">
                                    <button type="submit" class="btn btn-success"
                                        data-bs-dismiss="modal">Simpan</button>
                                    <!-- <a href="<?=base_url()?>pasien" style="color: white;" class="btn btn-danger ml-5"
                                        data-bs-dismiss="modal">Keluar</a> -->
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
    </div>