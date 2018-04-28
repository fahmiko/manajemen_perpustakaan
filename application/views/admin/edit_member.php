<h4><small>Edit Member</small></h4>
<hr>
<div class="container-fluid">
<?php echo form_open('Member/edit_member/'.$member['id_member'])?>
<table class="table table-responsive">
	<tr>
		<td width="80">Nama</td>
		<td><input type="text" class="form-control" name="nama" value="<?php echo $member['nama'] ?>"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" class="form-control" name="alamat" value="<?php echo $member['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Instansi</td>
		<td><input type="text" class="form-control" name="instansi" value="<?php echo $member['instansi'] ?>"></td>
	</tr>
</table>
<input type="submit" class="btn btn-success" value="save"> <input type="reset" class="btn btn-warning">
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