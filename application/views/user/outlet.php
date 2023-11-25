<section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="design-box">
        <img src="<?= base_url()?>assets/images/design-2.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($outlet as $otl) : ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets/images/outlet/').$otl->foto?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Toko Mas Wahyu Redjo <?= $otl->kota?></h5>
                        <p class="card-text"><?= $otl->alamat?></p>
                        <a href="https://wa.me/62<?= $otl->no_tlp?>" class="btn btn-primary">Hubungi Outlet</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>