<h4><small>Tambah Member</small></h4>
<hr>
<div class="container-fluid">
<?php echo form_open('Member/tambah_member')?>
<table class="table table-responsive">
	<tr>
		<td width="80">Nama</td>
		<td><input type="text" class="form-control" name="nama" value="<?php echo set_value('nama')?>"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" class="form-control" name="alamat" value="<?php echo set_value('alamat')?>"></td>
	</tr>
	<tr>
		<td>Instansi</td>
		<td><input type="text" class="form-control" name="instansi" value="<?php echo set_value('instansi')?>"></td>
	</tr>
</table>
<input type="submit" class="btn btn-success" value="tambah"> <input type="reset" class="btn btn-warning">
</div>
<?php form_close();
    if(validation_errors()){
        echo '
        <div class="panel panel-danger" style="margin-top: 50px">
            <div class="panel-heading">Panel Info</div>
            <div class="panel-body">'.validation_errors().'</div>
        </div>';
    }
 ?>