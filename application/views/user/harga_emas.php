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
                        <h1 style="color:orange; font-size: 64px;">Rp. <?= number_format($harga['jual_6'],0)?></h1>
                        <br>
                        <!-- <br> -->
                        <h1><b> Harga Beli</b></h1>
                        <h1 style="color:orange; font-size: 64px;">Rp. <?= number_format($harga['beli_6'],0)?></h1>

                        <!-- <br> -->

                    </center>
                    <div class="text-center">
                        <a href="https://api.whatsapp.com/send?phone=6281937608593&text=Halo%20Wahyu%20Redjo">Beli
                            Sekarang</a>

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
<section class="ring_section layout_padding">
    <div class="design-box">
        <img src="images/design-1.png" alt="">
    </div>
    <div class="container">
        <div class="ring_container layout_padding2">
            <h2>Detail Harga Emas Hari Ini </h2>
            <span>Update Tanggal <?= tgl_indo(date('Y-m-d',$harga['time']))?></span>
            <div class="row">

                <div class="col-md-5">
                    <div class="detail-box">
                        <table class="table table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>Kadar</th>
                                    <th>Harga Jual</th>
                                    <th>Harga Beli</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>6K</td>
                                    <td>Rp. <?= number_format($harga['jual_6'],0)?></td>
                                    <td>Rp. <?= number_format($harga['beli_6'],0)?></td>
                                </tr>
                                <tr>
                                    <td>8K / 9K</td>
                                    <td>Rp. <?= number_format($harga['jual_8'],0)?></td>
                                    <td>Rp. <?= number_format($harga['beli_8'],0)?></td>
                                </tr>
                                <tr>
                                    <td>16K</td>
                                    <td>Rp. <?= number_format($harga['jual_16'],0)?></td>
                                    <td>Rp. <?= number_format($harga['beli_16'],0)?></td>
                                </tr>
                                <tr>
                                    <td>1K</td>
                                    <td>Rp. <?= number_format($harga['jual_17'],0)?></td>
                                    <td>Rp. <?= number_format($harga['beli_17'],0)?></td>
                                </tr>
                                <tr>
                                    <td>8K / 9K P</td>
                                    <td>Rp. <?= number_format($harga['jual_8_p'],0)?></td>
                                    <td>Rp. <?= number_format($harga['beli_8_p'],0)?></td>
                                </tr>
                                <tr>
                                    <td>24K / HK</td>
                                    <td>Rp. <?= number_format($harga['jual_24'],0)?></td>
                                    <td>Rp. <?= number_format($harga['beli_24'],0)?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="img-box">
                        <img src="<?= base_url()?>assets/images/ring-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>