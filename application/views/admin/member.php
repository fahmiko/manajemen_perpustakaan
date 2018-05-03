 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Tabel Member
                    </div>
            <div class="card-body">
                <table class="table table-hover" id="myTable">
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
                                <a class='btn btn-primary btn-sm' href='member/edit_member/".$data->id_member."'><span class='fa fa-edit'></span></a>
                                <a class='btn btn-danger btn-sm' href='member/delete_member/".$data->id_member."'><span class='fa fa-trash' onclick=\"return confirm('ingin hapus member ?')\"></span></a>
                          </td>";
                        } ?>
                    </tbody>
                </table>
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
            </div>
        </div>
    </div>
</div>
</div></div>