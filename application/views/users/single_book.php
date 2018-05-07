<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<p class="most" >Informasi Buku</p>			
		</div>
		<div class="col-lg-8">

		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4" style="margin-left: 50px">
			<a href="<?php echo site_url().'welcome/view/'.$buku['id_buku']?>">
				<img class="imgLine1" style="height: 300px;width: 200px" src="<?php echo base_url().'assets/img/'.$buku['gambar'] ?>">
			</a>
		</div>
		<div class="col-md-7">
			<p style="font-size: 40px"><?php echo $buku['judul']?></p>
			<hr style="background-color: orange">
			<p><?php echo $buku['keterangan'] ?></p>
			<hr style="background-color: orange">
		</div>
	</div>
</div>
<div class="container">
	
	<div class="row">
		<div class="col-md-4" style="margin-left: 50px">
		</div>
		<div class="col-md-3" style="margin-top: 5px">
			<label>ADDITIONAL INFORMATION</label>
			<h6>Penerbit</h6>
			<small><?php echo $buku['penerbit']?></small>
			<h6 style="margin-top: 5px">Bahasa</h6>
			<small><?php echo $buku['bahasa']?></small>
		</div>
		<div class="col-md-3" style="margin-top: 35px">
			<h6>Pengarang</h6>
			<small><?php echo $buku['pengarang']?></small>
			<h6 style="margin-top: 5px">Tahun</h6>
			<small><?php echo $buku['tahun_terbit']?></small>
		</div>
	</div>
</div>