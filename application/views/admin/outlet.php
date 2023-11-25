<?php error_reporting(0); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow-sm border-bottom-primary">
        <div class="card-header bg-white py-3">
            <div class="row">
                <div class="col">
                    <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                        DATA MASTER OUTLET
                    </h4>
                </div>
                <div class="col-auto">
                    <a href="<?= base_url('admin/tambah_outlet') ?>" class="btn btn-sm btn-primary btn-icon-split">
                        <span class="icon">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">
                            Tambah Outlet
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100 dt-responsive " id="paket" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Kota Outlet</th>
                            <th>Alamat Outlet</th>
                            <th>Nomor Handphone</th>
                            <th>Foto Outlet</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                $no = 1;
                if ($outlet) :
                    foreach ($outlet as $otl) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $otl->kota ?></td>
                            <td><?php echo $otl->alamat ?></td>
                            <td>+62 <?php echo $otl->no_tlp ?></td>
                            <td> <img height="100px" src="<?= base_url('assets/images/outlet/').$otl->foto?>" alt="">
                            </td>
                            <td>
                                <a href="<?= base_url('admin/edit_outlet//').$otl->id_outlet ?>"
                                    class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>

                                <a onclick="return confirm('Yakin ingin hapus?')"
                                    href="<?= base_url('admin/hapus_outlet//').$otl->id_outlet ?>"
                                    class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
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
<script>
<?php
        date_default_timezone_set('Asia/Jakarta');
        ?>
$(document).ready(function() {
    $('#paket').DataTable({

        columnDefs: [{
            targets: -1,
            className: 'dt-center'
        }],

        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    });
});
</script>