<h4><small>Edit kategori</small></h4>
<hr>
<?php echo form_open_multipart('Buku/edit_kategori/'.$kategori['id_kategori']) ?>
<div class="form-group">
   <label>Nama</label>
   <input type="text" class="form-control" name="nama" value="<?php echo $kategori['nama'] ?>">
</div>
<div class="form-group">
   <label>Keterangan</label>
   <textarea class="form-control" name="keterangan"><?php echo $kategori['deskripsi'] ?></textarea>
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