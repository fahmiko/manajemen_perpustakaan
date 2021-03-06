 <div class="content">
 <div class="container-fluid">
 <div class="row">
 <div class="col-md-12">
 <div class="card">
        <div class="card-header bg-light">
            Tambah Pinjaman
        </div>
<div class="card-body">
<?php echo form_open( 'pinjaman/tambah_pinjaman', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">@</span>
        </div>
        <input type="text" id="read-only" class="form-control" value="<?php echo $this->session->userdata('username') ?>" readonly>
    </div>
	<div class="input-group mb-3">
 		<div class="input-group-prepend">
 	        <span class="input-group-text"><i class="fa fa-user"></i></span>
 	    </div>
 	    <select class="form-control" name="id_member">
            <option hidden="">Select Members</option>
            <?php 
                foreach ($member->result() as $data) {
                    echo "<option value='$data->id_member'>$data->id_member | $data->nama </option>";
                }
            ?>
        </select>
 	</div>
	<div class="input-group mb-3">
 		<div class="input-group-prepend">
 	        <span class="input-group-text"><i class="fa fa-book"></i></span>
 	    </div>
 	    <select class="form-control" name="id_buku">
            <option hidden="">Select Book</option>
            <?php 
                foreach ($buku->result() as $data) {
                    echo "<option value='$data->id_buku'>$data->id_buku | $data->judul </option>";
                }
            ?>
        </select>
 	    <div class="invalid-feedback">Isi Nama dulu</div>
 	</div>
 	<div class="input-group mb-3">
 	    <div class="input-group-prepend">
 	        <span class="input-group-text"><i class="fa fa-list-alt"></i></span>
 	    </div>
 	    <textarea class="form-control" name="catatan" rows="6" placeholder="Catatan"></textarea>
 	    <div class="invalid-feedback">Isi Catatan</div>
 	</div>
 	<div class="input-group mb-3">
 	    <div class="input-group-prepend">
 	        <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
 	    </div>
 	    <input type="date" class="form-control" name="tgl_kembali" required="">
 	    <div class="invalid-feedback">Isi Tanggal Kembali</div>
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
