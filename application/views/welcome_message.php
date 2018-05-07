<div class="img2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
			</div>
		</div>
	</div>
</div>
<div class="back3">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<p class="terjun">PLUNGE INTO THE WONDERFUL<br>WORLD OF READING</p>
			</div>
		</div>
	</div>
</div>

<div class="container space1">
	<div class="row">

		<div class="col-lg-4">
			<p class="most" >MOST POPULAR</p>			
		</div>
		<div class="col-lg-8">

		</div>
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
<div class=" block1">

	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<p class="title2" align="center">Books</p>
				<center><img class="boom" src="<?php echo base_url('assets/images/books.png') ?>"></center>
				<!-- <p align="justify">LOREM IPSUM DOLOR SIT AMET JOS BLOSS</p> -->
				<p align="center">Daftar koleksi buku</p>
				<center><p class="more btn">READ MORE</p></center>
			</div>
			<div class="col-lg-3">
				<p class="title2" align="center">Loan</p>
				<center><img class="boom" src="<?php echo base_url('assets/images/loan.png') ?>"></center>
				<!-- <p align="justify">LOREM IPSUM DOLOR SIT AMET JOS BLOSS</p> -->
				<p align="center">Syarat syarat peminjaman.</p>		
				<center><p class="more btn">READ MORE</p></center>
			</div>
			<div class="col-lg-3">
				<p class="title2" align="center">Members</p>
				<center><img class="boom" src="<?php echo base_url('assets/images/members.png') ?>"></center>
				<!-- <p align="justify">LOREM IPSUM DOLOR SIT AMET JOS BLOSS</p> -->
				<p align="center">Daftar member perpustakaan</p>				
				<center><p class="more btn">READ MORE</p></center>
			</div>
			<div class="col-lg-3">
				<p class="title2" align="center">Help</p>
				<center><img class="boom" src="<?php echo base_url('assets/images/help.png') ?>"></center>
				<!-- <p align="justify">LOREM IPSUM DOLOR SIT AMET JOS BLOSS</p> -->
				<p align="center">Bantuan mengenai aplikasi.</p>				
				<center><p class="more btn">READ MORE</p></center>
			</div>
		</div>
	</div>
</div>