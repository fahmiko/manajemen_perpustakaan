        <div class="content" style="height: 5000px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-4">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="h4 d-block font-weight-normal mb-2"><?php echo $member->num_rows() ?></span>
                                    <span class="font-weight-light">Total Members</span>
                                </div>

                                <div class="h2 text-muted">
                                    <i class="icon icon-people"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card p-4">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="h4 d-block font-weight-normal mb-2"><?php echo $buku->num_rows() ?></span>
                                    <span class="font-weight-light">Total Buku</span>
                                </div>

                                <div class="h2 text-muted">
                                    <i class="fa fa-book"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card p-4">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="h4 d-block font-weight-normal mb-2"><?php echo $pinjaman->num_rows() ?></span>
                                    <span class="font-weight-light">Pinjaman</span>
                                </div>

                                <div class="h2 text-muted">
                                    <i class="icon icon-wallet"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card p-4">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="h4 d-block font-weight-normal mb-2"><?php echo $kategori->num_rows() ?></span>
                                    <span class="font-weight-light">Kategori</span>
                                </div>

                                <div class="h2 text-muted">
                                    <i class="fa fa-list-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-4">
                    	<div class="card text-white border-0">
                        	<div class="card-header bg-info">
                            	<b>Cara Peminjaman</b>
                        	</div>

                        	<div class="card-body bg-success">
                            	<ul>
                            		<li>Datang ke admin/operator</li>
                            		<li>Daftar Member(jika belum punya)</li>
                            		<li>Dapat meminjam buku dengan menyebutkan kode buku</li>
                                    <li>Member Login peminjaman</li>
                            	</ul>
                        	</div>
                    	</div>
                	</div>
                	<div class="col-md-4">
                    	<div class="card text-white border-0">
                        	<div class="card-header bg-info">
                            	<b>Admin</b>
                        	</div>

                        	<div class="card-body bg-danger">
                            	<ul>
                            		<li>Mendaftarkan Member Baru</li>
                                    <li>Mengganti tipe member(gold, silver)</li>
                            		<li>CRUD Buku</li>
                            		<li>Meminjamkan buku kepada member</li>
                            		<li>Transaksi Pengembalian Buku</li>
                            	</ul>
                        	</div>
                    	</div>
                	</div>
                	<div class="col-md-4">
                    	<div class="card text-white border-0">
                        	<div class="card-header bg-info">
                            	<b>Operator</b>
                        	</div>

                        	<div class="card-body bg-warning">
                            	<ul>
                            		<li>Tambah Member</li>
                            		<li>Tambah Buku</li>
                                    <li>Tambah Kategori</li>
                            		<li>Tambah Peminjaman</li>
                                    <li>Tidak dapat edit dan hapus</li>
                            	</ul>
                        	</div>
                    	</div>
                	</div>
                </div>
            </div>
                
            </div>
          </div>