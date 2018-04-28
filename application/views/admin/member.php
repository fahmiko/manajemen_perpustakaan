 <h4><small>Data Member</small></h4>
 <hr>
<table class="table table-responsive">
	<thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Instansi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($member->result() as $data) {
        	echo "<tr>";
        	echo "<td>$data->id_member</td>";
        	echo "<td>$data->nama</td>";
          echo "<td>$data->alamat</td>";
        	echo "<td>$data->instansi</td>";
        } ?>
    </tbody>
</table>