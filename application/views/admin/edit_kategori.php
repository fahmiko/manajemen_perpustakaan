 <div class="content">
 <div class="container-fluid">
 <div class="row">
 <div class="col-md-12">
 <div class="card">
        <div class="card-header bg-light">
            Edit Kategori
        </div>
<div class="card-body">
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