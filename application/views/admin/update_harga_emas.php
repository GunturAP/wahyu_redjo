<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Update Harga Emas Terkini
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('admin') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Back
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('admin/update_harga_emas')?>">


                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="nama_rekening">Harga Jual</label>
                        <div class="col-md-9">
                            <input value="<?= $harga['id']; ?>" name="id" id="nama_rekening" type="text"
                                class="form-control" hidden>
                            <input value="<?= $harga['harga_jual']; ?>" name="harga_jual" id="nama_rekening" type="text"
                                class="form-control" class="uang">
                            <?= form_error('harga_jual', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="bank">Harga Beli</label>
                        <div class="col-md-9">
                            <input value="<?= $harga['harga_beli']; ?>" name="harga_beli" id="bank" type="text"
                                class="form-control" \>
                            <?= form_error('harga_beli', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>




                    <div class="row form-group">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-primary">Update Harga</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {

    // Format mata uang.
    $('.uang').mask('000.000.000', {
        reverse: true
    });

})
</script>