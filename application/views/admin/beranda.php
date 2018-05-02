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
                            	Cara Peminjaman
                        	</div>

                        	<div class="card-body bg-info">
                            	<ul>
                            		<li>Datang ke admin</li>
                            		<li>Harus Terdaftar sebagai member</li>
                            		<li>Dapat meminjam buku dengan menyebutkan kode buku</li>
                            	</ul>
                        	</div>
                    	</div>
                	</div>
                	<div class="col-md-4">
                    	<div class="card text-white border-0">
                        	<div class="card-header bg-success">
                            	Tugas Admin
                        	</div>

                        	<div class="card-body bg-success">
                            	<ul>
                            		<li>Mendaftarkan Member Baru</li>
                            		<li>CRUD Buku</li>
                            		<li>Meminjamkan buku kepada member</li>
                            		<li>Rekap Pinjaman</li>
                            	</ul>
                        	</div>
                    	</div>
                	</div>
                	<div class="col-md-4">
                    	<div class="card text-white border-0">
                        	<div class="card-header bg-danger">
                            	Peraturan
                        	</div>

                        	<div class="card-body bg-danger">
                            	<ul>
                            		<li>Member harus mengembalikan buku sebelum jatuh tempo</li>
                            		<li>Member terkena denda jika terlambat</li>
                            		<li>Data pinjaman tidak dapat di hapus</li>
                            	</ul>
                        	</div>
                    	</div>
                	</div>
                </div>
            </div>
                
            </div>
          </div>