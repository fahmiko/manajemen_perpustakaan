 <div class="content">
 <div class="container-fluid">
 <div class="row">
 <div class="col-md-12">
 <div class="card">
        <div class="card-header bg-light">
            Pengembalian
        </div>
<div class="card-body">
<?php echo form_open('pinjaman/pengembalian'); ?>
    <div class="input-group mb-3">
        <input type="text" name="id_pinjaman" class="form-control" required="" placeholder="id_pinjaman">
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Cari</button>
        </span>
    </div>
<hr>
<?php echo form_close();
if($pinjam == null){
    echo '<div class="alert alert-dismissible alert-info" style="margin-top: 50px">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="panel-heading">Panel Info</div><hr>
                <div class="panel-body">Cari Peminjaman</div>
            </div>';
}else if ($pinjam->num_rows() == 0) {
    echo '<div class="alert alert-dismissible alert-secondary" style="margin-top: 50px">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="panel-heading">Panel Info</div><hr>
                <div class="panel-body">MAAF DATA TIDAK DITEMUKAN</div>
            </div>';
}else{
    foreach ($pinjam->result() as $data) {
?>
<div class="col-md-12 mb-4">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Informasi</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Checkout</a>
        </li>
    </ul>

<div class="tab-content">
    <div class="tab-pane active" id="home" role="tabpanel">
        <div class="row">
            <div class="col-md-6">
                <p class="font-weight-bold mb-4">Informasi Member</p>
                <p class="mb-1"><?php echo $data->nama;?></p>
                <p><?php echo $data->alamat;?></p>
                <p class="mb-1"><?php echo $data->instansi;?></p>
            </div>
            <div class="col-md-6">
                <p class="font-weight-bold mb-4">Informasi Buku</p>
                <p class="mb-1"><?php echo $data->judul;?></p>
                <p>Tahun <?php echo $data->tahun_terbit;?></p>
                <p class="mb-1">Pengarang <?php echo $data->pengarang;?></p>
                <p class="mb-1">Penerbit <?php echo $data->penerbit;?></p>
            </div>
        </div>
    </div>

    <div class="tab-pane" id="profile" role="tabpanel">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <p class="font-weight-bold mb-4">Tanggal Kembali</p>
                    <input type="text" class="form-control" readonly="" value="<?php
                        echo $data->tgl_kembali;
                    ?>">
                </div>
                <p class="font-weight-bold mb-4">Denda Per Hari</p>
                <input type="text" class="form-control" readonly="" value="2000">
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <p class="font-weight-bold mb-4">Dikembalikan</p>
                    <input type="text" class="form-control" readonly="" value="<?php
                        echo date('Y-m-d');
                    ?>">
                </div>
                    <p class="font-weight-bold mb-4">Keterlambatan(hari)</p>
                    <input type="text" class="form-control" readonly="" value="<?php echo $hari ?>">
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <p class="font-weight-bold mb-4">Status</p>
                    <?php echo $status ?>
                </div>
                <p class="font-weight-bold mb-4">Total</p>
                <?php echo form_open('pinjaman/checkout'); ?>
                <input type="hidden" name="id_pinjaman" value="<?php echo $data->id_pinjaman?>">
                <input type="text" class="form-control" name="denda" readonly="" value="<?php echo $denda ?>">
            </div>
        </div>
    </div>
</div>
</div>
<div class="container-fluid" align="center">
    <button type="submit" class="btn btn-success"><i class="fa fa-print"></i> Checkout</button>
</div>
</div>
<?php
echo form_close();
}
}
?>

</div></div>
</div></div>
</div></div>
