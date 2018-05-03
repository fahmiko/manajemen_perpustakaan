 <div class="content">
 <div class="container-fluid">
 <div class="row">
 <div class="col-md-12">
 <div class="card">
        <div class="card-header bg-light">
            Edit Buku
        </div>
<div class="card-body">
<?php echo form_open_multipart('Buku/edit_buku/'.$buku['id_buku']) ?>
<input type="hidden" name="gambar" value="<?php echo $buku['gambar'] ?>">
<div class="form-group">
   <label>Kategori</label>
   <span class="input-group-addon" id="basic-addon1">Kategori</span>
  <?php echo form_dropdown('kategori', $dropdown, set_value('kategori',$buku['id_kategori']), 'class="form-control" required' ); ?>
</div>
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
   <input type="file" name="userfile" required="">
</div>
<input type="submit" class="btn btn-primary" value="Edit">
<hr>
<div class="container-fluid">
                    <?php
                        if(validation_errors()){
                            echo '
                            <div class="alert alert-dismissible alert-danger" style="margin-top: 50px">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                <div class="panel-heading">Panel Info</div><hr>
                                <div class="panel-body">'.validation_errors().'</div>
                            </div>';
                        }
                    ?>
                </div>
</div></div>
</div></div>
</div></div>