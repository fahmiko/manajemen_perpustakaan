 <h4><small>Data Buku</small></h4>
 <hr>
<table class="table table-hover" id="myTable">
	<thead>
        <tr>
            <th>ID</th>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Penerbit</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($buku->result() as $data) {
        	echo "<tr>";
        	echo "<td>$data->id_buku</td>";
        	echo "<td>$data->nama</td>";
        	echo "<td>$data->judul</td>";
            echo "<td>$data->penerbit</td>";
        	echo "<td>$data->gambar</td>";
            echo "<td><a href='".site_url().'Buku/edit_buku/'.$data->id_buku."' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span></a> ";
            echo "<a href='".site_url().'Buku/delete_buku/'.$data->id_buku."' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a></td>";
        	echo "</tr>";
        } ?>
    </tbody>

</table>

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success" style="margin-left: 15px;" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Tambah Buku</button>
<br><br>

<button data-toggle="collapse" class="btn btn-pimary" style="margin-left: 15px;" data-target="#demo"><span class="glyphicon glyphicon-tag"></span> Data Kategori</button>

<div id="demo" class="collapse container" style="max-width: 100%;margin-bottom: 20%;">
<br><br>
 <h4><small>Data Kategori</small></h4>
 <hr>
<!-- Data tabel kategori -->
<table class="table table-hover" id="tableKategori">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kategori->result() as $data) {
            echo "<tr>";
            echo "<td>$data->id_kategori</td>";
            echo "<td>$data->nama</td>";
            echo "<td><a href='".site_url().'Buku/edit_kategori/'.$data->id_kategori."' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span></a> ";
            echo "<a href='".site_url().'Buku/delete_kategori/'.$data->id_kategori."' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a></td>";
            echo "</tr>";
        } ?>
    </tbody>

</table>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalKategori"><span class="glyphicon glyphicon-plus"></span> Tabah Kategori</button>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Buku</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open_multipart('Buku/tambah_buku') ?>
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
             <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" required="" minlength="5" >
             </div>
             <div class="form-group">
                <label>Keterangan</label>
                <textarea class="form-control" name="keterangan" required="" minlength="15"></textarea>
             </div>
             <div class="form-group">
                <label>Tahun</label>
                <input type="text" class="form-control" name="tahun" required="">
             </div>
             <div class="form-group">
                <label>Bahasa</label>
                <input type="text" class="form-control" name="bahasa" required="" minlength="3">
             </div>
             <div class="form-group">
                <label>Pengarang</label>
                <input type="text" class="form-control" name="pengarang" required="" minlength="5">
             </div>
             <div class="form-group">
                <label>Penerbit</label>
                <input type="text" class="form-control" name="penerbit" required="" minlength="5">
             </div>
             <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="userfile" required="">
             </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Tambah">
        <?php echo form_close()?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Kategori -->
<div id="modalKategori" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Kategori</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open_multipart('Buku/tambah_kategori') ?>
             <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" required="" minlength="5" >
             </div>
             <div class="form-group">
                <label>Keterangan</label>
                <textarea class="form-control" name="keterangan" required="" minlength="15"></textarea>
             </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Tambah">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>