<div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Dashboard
              </h1>
            </div>
            <div class="row row-cards">
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="h1 m-0"><?=$total_pinjaman?></div>
                    <div class="text-muted mb-4">Pinjaman</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="h1 m-0"><?=$total_member?></div>
                    <div class="text-muted mb-4">Member</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="h1 m-0"><?=$total_gold?></div>
                    <div class="text-muted mb-4">Gold Member</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="h1 m-0"><?=$total_silver?></div>
                    <div class="text-muted mb-4">Silver Member</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="h1 m-0"><?=$total_buku?></div>
                    <div class="text-muted mb-4">Buku</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="h1 m-0"><?=$total_kategori?></div>
                    <div class="text-muted mb-4">Kategori</div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Invoices</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">ID</th>
                          <th>Member</th>
                          <th>Buku</th>
                          <th>Pinjam</th>
                          <th>Kembali</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($pinjaman->result() as $row) : ?>
                        <tr>
                          <td><span class="text-muted"><?=$row->id_pinjaman?></span></td>
                          <td><a href="invoice.html" class="text-inherit"><?=$row->nama?></a></td>
                          <td>
                            <?=$row->judul?>
                          </td>
                          <td>
                            <?=$row->tgl_pinjam?>
                          </td>
                          <td>
                            <?=$row->tgl_kembali?>
                          </td>
                          <td>
                            <?php
                              if($row->status == 'dipinjam'){
                                  echo "<span class='status-icon bg-success'></span>".$row->status;
                              }else{
                                  echo "<span class='status-icon bg-warning'></span>".$row->status;
                              }

                             ?>
                            
                          </td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-12" id="member">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Top Member</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">ID</th>
                          <th>Nama</th>
                          <th>Instansi</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($member->result() as $row) : ?>
                        <tr>
                          <td><span class="text-muted"><?=$row->id_member?></span></td>
                          <td><a href="invoice.html" class="text-inherit"><?=$row->nama?></a></td>
                          <td><?=$row->instansi?></td>
                          <td><?=$row->total?></td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-12" id="buku">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Poppular Book</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">ID</th>
                          <th>Judul</th>
                          <th>Pengarang</th>
                          <th>Penerbit</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($buku->result() as $row) : ?>
                        <tr>
                          <td><span class="text-muted"><?=$row->id_buku?></span></td>
                          <td><a href="invoice.html" class="text-inherit"><?=$row->judul?></a></td>
                          <td><?=$row->pengarang?></td>
                          <td><?=$row->penerbit?></td>
                          <td><?=$row->total?></td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
  </div></div>