 <div class="content">
 <div class="container-fluid">
 <div class="row">
 <div class="col-md-12">
 <div class="card">
        <div class="card-header bg-light">
            Edit Member
        </div>
<div class="card-body">
<?php echo form_open_multipart( 'member/edit_member/'.$member['id_member'], array('class' => 'needs-validation', 'novalidate' => '') ); ?>
	<div class="input-group mb-3">
 		<div class="input-group-prepend">
 	        <span class="input-group-text">@</span>
 	    </div>
 	    <input type="text" id="read-only" class="form-control" value="<?php echo $member['id_member'] ?>" readonly>
 	</div>
	<div class="input-group mb-3">
 		<div class="input-group-prepend">
 	        <span class="input-group-text"><i class="fa fa-user"></i></span>
 	    </div>
 	    <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $member['nama'] ?>" required="">
 	    <div class="invalid-feedback">Isi Nama dulu</div>
 	</div>
 	<div class="input-group mb-3">
 	    <div class="input-group-prepend">
 	        <span class="input-group-text"><i class="fa fa-address-card"></i></span>
 	    </div>
 	    <textarea class="form-control" name="alamat" rows="6" placeholder="Alamat" required=""><?php echo $member['alamat'] ?></textarea>
 	    <div class="invalid-feedback">Isi Alamat</div>
 	</div>
 	<div class="input-group mb-3">
 	    <div class="input-group-prepend">
 	        <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
 	    </div>
 	    <input type="text" class="form-control" name="instansi" placeholder="Instansi" required="" value="<?php echo $member['instansi'] ?>">
 	    <div class="invalid-feedback">Isi instansi dulu</div>
 	</div>
 	<div class="input-group mb-3">
 		 <button type="submit" id="submitBtn" class="btn btn-primary">Save changes</button>
 		 <button type="reset" class="btn btn-warning">Reset</button>
 	</div>

<?php form_close();
    if(validation_errors()){
        echo '
        <div class="alert alert-dismissible alert-danger" style="margin-top: 50px">
            <div class="panel-heading">Panel Info</div><hr>
            <div class="panel-body">'.validation_errors().'</div>
        </div>';
    }
 ?>
</div></div>
</div></div>
</div></div>
