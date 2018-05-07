 <div class="content">
 <div class="container-fluid">
 <div class="row">
 <div class="col-md-12">
 <div class="card">
        <div class="card-header bg-light">
            Tabel Buku & Kategori
        </div>
<div class="card-body">
                <div class="col-md-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#buku" role="tab" aria-controls="home" aria-expanded="true"><i class="fa fa-book"></i> Buku &nbsp;<span class="badge badge-pill badge-info"><?php echo $buku->num_rows() ?></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tambah_buku" role="tab" aria-controls="profile" aria-expanded="false"><i class="fa fa-plus"></i> Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kategori" role="tab" aria-controls="messages"><i class="fa fa-list-alt"></i> Kategori &nbsp;<span class="badge badge-pill badge-warning"><?php echo $kategori->num_rows() ?></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tambah_kategori" role="tab" aria-controls="profile" aria-expanded="false"><i class="fa fa-plus"></i> Kategori</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="buku" role="tabpanel" aria-expanded="true">
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
                                        echo "<td>
                                                <a class='btn btn-primary btn-sm' href='buku/edit_buku/".$data->id_buku."'><span class='fa fa-edit'></span></a>
                                                <a class='btn btn-danger btn-sm' href='buku/delete_buku/".$data->id_buku."'><span class='fa fa-trash' onclick=\"return confirm('ingin hapus buku ?')\"></span></a>
                                              </td>";
                                      } ?>
                                  </tbody>
                                </table>
                        </div>

                        <div class="tab-pane" id="tambah_buku" role="tabpanel" aria-expanded="false">
                              <?php echo form_open_multipart('buku/tambah_buku') ?>
                                     <div class="form-group">
                                        <label>Kategori</label>
                                        <?php echo form_dropdown('kategori', $dropdown, set_value('kategori'), 'class="form-control" required' ); ?>
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
                                        <div class="invalid-feedback">Isi Penerbit</div>
                                     </div>
                                     <div class="form-group">
                                        <label>Gambar</label>
                                        <input type="file" name="userfile" required="">
                                     </div>
                                     <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <button class="btn btn-warning" type="reset">Reset</button>
                                        <?php echo form_close()?>
                                     </div>
                        </div>

                        <div class="tab-pane" id="kategori" role="tabpanel">
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
                                      echo "<td>
                                                <a class='btn btn-primary btn-sm' href='buku/edit_kategori/".$data->id_kategori."'><span class='fa fa-edit'></span></a>
                                                <a class='btn btn-danger btn-sm' href='buku/delete_kategori/".$data->id_kategori."'><span class='fa fa-trash' onclick=\"return confirm('ingin hapus kategori ?')\"></span></a>
                                              </td>";
                                    } ?>
                              </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="tambah_kategori" role="tabpanel">
                          <?php echo form_open('buku/tambah_kategori') ?>
                            <div class="form-group">
                               <label>Nama</label>
                               <input type="text" class="form-control" name="nama" required="" minlength="5" >
                               <div class="invalid-feedback">Check input</div>
                            </div>
                            <div class="form-group">
                               <label>Keterangan</label>
                               <textarea class="form-control" name="keterangan" required="" minlength="15"></textarea>
                               <div class="invalid-feedback">Check Input</div>
                            </div>
                            <div class="form-group">
                               <input type="submit" class="btn btn-primary" value="Tambah">
                               <input type="reset" class="btn btn-warning" value="Reset">
                            </div>
                          <?php echo form_close(); ?>
                        </div>
<div id="demo" class="collapse container" style="max-width: 100%;margin-bottom: 20%;">
<br><br>
 <h4><small>Data Kategori</small></h4>
 <hr>
<!-- Data tabel kategori -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalKategori"><span class="glyphicon glyphicon-plus"></span> Tabah Kategori</button>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
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
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>