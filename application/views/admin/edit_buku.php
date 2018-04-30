<h4><small>Edit Buku</small></h4>
<hr>
<?php echo form_open_multipart('Buku/edit_buku/'.$buku['id_buku']) ?>
<div class="form-group">
   <label>Kategori</label>
   <select class="form-control" name="kategori">
       <?php
           foreach ($kategori->result() as $data){
               echo "<option value='$data->id_kategori'>$data->id_kategori | $data->nama</option>";
           }
       ?>
   </select>
</div>
<input type="hidden" name="id" value="<?php echo $buku['id_buku'] ?>">
<input type="hidden" name="gambar" value="<?php echo $buku['gambar'] ?>">
<div class="form-group">
   <label>Judul</label>
   <input type="text" class="form-control" name="judul" value="<?php echo $buku['judul'] ?>">
</div>
<div class="form-group">
   <label>Keterangan</label>
   <textarea class="form-control" name="keterangan"><?php echo $buku['keterangan'] ?></textarea>
</div>
<div class="form-group">
    <label>Tahun</label>
    <input type="text" class="form-control" name="tahun" required="" value="<?php echo $buku['tahun_terbit'] ?>">
</div>
<div class="form-group">
    <label>Bahasa</label>
    <input type="text" class="form-control" name="bahasa" required="" minlength="3" value="<?php echo $buku['bahasa'] ?>">
</div>
<div class="form-group">
    <label>Pengarang</label>
    <input type="text" class="form-control" name="pengarang" required="" minlength="5" value="<?php echo $buku['pengarang'] ?>">
</div>
<div class="form-group">
   <label>Penerbit</label>
   <input type="text" class="form-control" name="penerbit" value="<?php echo $buku['penerbit'] ?>">
</div>
<div class="form-group">
   <label>Gambar</label>
   <input type="file" name="userfile">
</div>
<input type="submit" class="btn btn-primary" value="Edit">
<hr>
 <?php
    if(validation_errors()){
        echo '
        <div class="panel panel-danger" style="margin-top: 50px">
            <div class="panel-heading">Panel Info</div>
            <div class="panel-body">'.validation_errors().'</div>
        </div>';
    }
 ?>