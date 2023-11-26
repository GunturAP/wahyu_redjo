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
                        <label class="col-md-3 text-md-right" for="nama_rekening">Harga Jual 6K</label>
                        <div class="col-md-9">
                            <input value="<?= $harga['id']; ?>" name="id" id="nama_rekening" type="text"
                                class="form-control" hidden>
                            <input value="<?= $harga['jual_6']; ?>" name="jual_6" id="nama_rekening" type="text"
                                class="form-control" class="uang">
                            <?= form_error('harga_jual', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="bank">Harga Beli 6K</label>
                        <div class="col-md-9">
                            <input value="<?= $harga['beli_6']; ?>" name="beli_6" id="bank" type="text"
                                class="form-control" \>
                            <?= form_error('harga_beli', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="nama_rekening">Harga Jual 8K / 9K</label>
                        <div class="col-md-9">
                            <input value="<?= $harga['id']; ?>" name="id" id="nama_rekening" type="text"
                                class="form-control" hidden>
                            <input value="<?= $harga['jual_8']; ?>" name="jual_8" id="nama_rekening" type="text"
                                class="form-control" class="uang">
                            <?= form_error('harga_jual', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="bank">Harga Beli 8K / 9K</label>
                        <div class="col-md-9">
                            <input value="<?= $harga['beli_8']; ?>" name="beli_8" id="bank" type="text"
                                class="form-control" \>
                            <?= form_error('harga_beli', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="nama_rekening">Harga Jual 16K</label>
                        <div class="col-md-9">
                            <input value="<?= $harga['id']; ?>" name="id" id="nama_rekening" type="text"
                                class="form-control" hidden>
                            <input value="<?= $harga['jual_16']; ?>" name="jual_16" id="nama_rekening" type="text"
                                class="form-control" class="uang">
                            <?= form_error('harga_jual', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="bank">Harga Beli 16K</label>
                        <div class="col-md-9">
                            <input value="<?= $harga['beli_16']; ?>" name="beli_16" id="bank" type="text"
                                class="form-control" \>
                            <?= form_error('harga_beli', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="nama_rekening">Harga Jual 17K</label>
                        <div class="col-md-9">
                            <input value="<?= $harga['id']; ?>" name="id" id="nama_rekening" type="text"
                                class="form-control" hidden>
                            <input value="<?= $harga['jual_17']; ?>" name="jual_17" id="nama_rekening" type="text"
                                class="form-control" class="uang">
                            <?= form_error('harga_jual', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="bank">Harga Beli 17K</label>
                        <div class="col-md-9">
                            <input value="<?= $harga['beli_17']; ?>" name="beli_17" id="bank" type="text"
                                class="form-control" \>
                            <?= form_error('harga_beli', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="nama_rekening">Harga Jual 8K /9K P</label>
                        <div class="col-md-9">
                            <input value="<?= $harga['id']; ?>" name="id" id="nama_rekening" type="text"
                                class="form-control" hidden>
                            <input value="<?= $harga['jual_8_p']; ?>" name="jual_8_p" id="nama_rekening" type="text"
                                class="form-control" class="uang">
                            <?= form_error('harga_jual', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="bank">Harga Beli 8K /9K P</label>
                        <div class="col-md-9">
                            <input value="<?= $harga['beli_8_p']; ?>" name="beli_8_p" id="bank" type="text"
                                class="form-control" \>
                            <?= form_error('harga_beli', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="nama_rekening">Harga Jual 24K / HK</label>
                        <div class="col-md-9">
                            <input value="<?= $harga['id']; ?>" name="id" id="nama_rekening" type="text"
                                class="form-control" hidden>
                            <input value="<?= $harga['jual_24']; ?>" name="jual_24" id="nama_rekening" type="text"
                                class="form-control" class="uang">
                            <?= form_error('harga_jual', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="bank">Harga Beli 24K / HK</label>
                        <div class="col-md-9">
                            <input value="<?= $harga['beli_24']; ?>" name="beli_24" id="bank" type="text"
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
<br>
<div class="container-fluid">

    <div class="card shadow-sm border-bottom-primary">
        <div class="card-header bg-white py-3">
            <div class="row">
                <div class="col">
                    <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                        DATA RIWAYAT
                    </h4>
                </div>

            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100 dt-responsive " id="paket" cellspacing="0">
                    <thead>
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">Tanggal </th>
                            <th colspan="6" style="text-align: center;"> Harga Jual</th>
                            <th colspan="6" style="text-align: center;"> Harga Beli</th>
                        </tr>
                        <tr>
                            <th>6k</th>
                            <th>8K/9K</th>
                            <th>16K</th>
                            <th>17K</th>
                            <th>8K/9K P</th>
                            <th>24K/HK</th>
                            <th>6k</th>
                            <th>8K/9K</th>
                            <th>16K</th>
                            <th>17K</th>
                            <th>8K/9K P</th>
                            <th>24K/HK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                $no = 1;
                if ($riwayat) :
                    foreach ($riwayat as $rwyt) : ?>
                        <tr>
                            <td><?= date('j-m-Y',$rwyt->time) ?></td>
                            <td><?= $rwyt->jual_6?></td>
                            <td><?= $rwyt->jual_8?></td>
                            <td><?= $rwyt->jual_16?></td>
                            <td><?= $rwyt->jual_17?></td>
                            <td><?= $rwyt->jual_8_p?></td>
                            <td><?= $rwyt->jual_24?></td>
                            <td><?= $rwyt->beli_6?></td>
                            <td><?= $rwyt->beli_8?></td>
                            <td><?= $rwyt->beli_16?></td>
                            <td><?= $rwyt->beli_17?></td>
                            <td><?= $rwyt->beli_8_p?></td>
                            <td><?= $rwyt->beli_24?></td>
                        </tr>

                        <?php endforeach; ?>
                        <?php else : ?>
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
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