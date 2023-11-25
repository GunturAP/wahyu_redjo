<!-- about section -->
<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
<section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="design-box">
        <img src="<?= base_url()?>assets/images/design-2.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            Harga Emas <?= tgl_indo(date('Y-m-d',$harga['time']))?>
                        </h2>
                        <!-- <span>Harge Beli Per Gram</span> -->

                    </div>
                    <center>

                        <h1><b> Harga Jual</b></h1>
                        <h1 style="color:orange; font-size: 64px;">Rp. <?= number_format($harga['harga_jual'],0)?></h1>
                        <br>
                        <!-- <br> -->
                        <h1><b> Harga Beli</b></h1>
                        <h1 style="color:orange; font-size: 64px;">Rp. <?= number_format($harga['harga_beli'],0)?></h1>

                        <!-- <br> -->

                    </center>
                    <div class="text-center">
                    <a href="https://api.whatsapp.com/send?phone=6281937608593&text=Halo%20Wahyu%20Redjo">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="<?= base_url()?>assets/images/about-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>