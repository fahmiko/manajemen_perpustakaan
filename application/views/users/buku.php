<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<p class="most" >BOOKS</p>			
		</div>
		<!-- <div class="col-lg-3">
			<?php //echo form_open('welcome/books'); ?>
			<select name="sorting" class="form-control" style="margin-top: 30px">
				<option value="judul">Judul</option>
				<option value="tahun_terbit">Tahun</option>
				<option value="pengarang">Pengarang</option>
				<option value="penerbit">Penerbit</option>
			</select>
		</div>
		<div class="col-lg-3" style="margin-top: 30px">
			<button class="btn btn-default">Urutkan</button>
			<?php //echo form_close(); ?>
		</div> -->
	</div>
</div>
<div class="container">
	<div class="row">
		<?php foreach ($buku->result() as $data) {
		?>
		<div class="col-lg-3">
			<a href="<?php echo site_url().'welcome/details/'.$data->id_buku?>">
				<img class="imgLine1" style="height: 300px" src="<?php echo base_url().'assets/img/'.$data->gambar ?>">
			</a>
			<p class="ilmiah"><?php echo $data->judul ?></p>
			<p class="nama"><i><?php echo $data->pengarang ?></i></p>
		</div>

		<?php } ?>
	</div>	
</div>
<div class="container" align="center">
		<?php echo $pagination ?>
</div>