 <h4><small>Data Member</small></h4>
 <hr>
<table class="table table-responsive">
	<thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Instansi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($member->result() as $data) {
        	echo "<tr>";
        	echo "<td>$data->id_member</td>";
        	echo "<td>$data->nama</td>";
          echo "<td>$data->alamat</td>";
        	echo "<td>$data->instansi</td>";
          echo "<td>
                <a class='btn btn-primary btn-sm' href='Member/edit_member/".$data->id_member."'>Edit</a>
                <a class='btn btn-danger btn-sm' href='Member/delete_member/".$data->id_member."'>Delete</a>
          </td>";
        } ?>
    </tbody>
</table>
<a href="Member/tambah_member" class="btn btn-info">Tambah Member</a>