<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Tabel Peminjaman
                    </div>
            <div class="card-body">
            <table class="table table-hover" id="myTable">
            	<thead>
                    <tr>
                        <th>ID</th>
                        <th>Member</th>
                        <th>Buku</th>
                        <th>Pinjam</th>
                        <th>Kembali</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pinjaman->result() as $data) {
                    	echo "<tr>";
                    	echo "<td>$data->id_pinjaman</td>";
                    	echo "<td>$data->nama</td>";
                    	echo "<td>$data->judul</td>";
                    	echo "<td>$data->tgl_pinjam</td>";
                    	echo "<td>$data->tgl_kembali</td><td>";
                    	if ($data->status == "dipinjam" ){
                            echo "<span class='badge badge-warning'>dipinjam</span>'"; 
                        }else{
                            echo "<span class='badge badge-success'>kembali</span>";
                        }
                    	echo "</td></tr>";
                    } ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
</div>