<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $("#disclaimer").modal('show');
    });
    </script>
    <div class="modal fade" tabindex="-1" role="dialog" id="disclaimer">
        <div class="modal-dialog modal-lg modal-fullscreen" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-content-center"style="background-color:#c0392b;">
                    <h5 class="modal-title"  style="text-align: center;color:white;">DISCLAIMER </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <img src="<?=base_url()?>/assets_user/img/disclaimer.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="modal-body d-flex justify-content-center" style="background-color:#c0392b;">
                    <h6 class="modal-title "  style="color:white;">JANGAN LUPA UNTUK MASUK KEMBALI PUKUL 20.00 WIB </h6>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>
