 <h4><small>Halaman Admin</small></h4>
 <hr>
<table class="table table-hover" id="myTable">
	<thead>
        <tr>
            <th>ID</th>
            <th>Member</th>
            <th>Buku</th>
            <th>Pinjam</th>
            <th>Kembali</th>
            <th>Denda</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pinjaman->result() as $data) {
        	echo "<tr>";
        	echo "<td>$data->id_pinjaman</td>";
        	echo "<td>$data->nama</td>";
        	echo "<td>$data->judul</td>";
        	echo "<td>$data->tgl_pinjam</td>";
        	echo "<td>$data->tgl_kembali</td>";
        	echo "<td>$data->denda</td>";
        	echo "</tr>";
        } ?>
    </tbody>
</table>
