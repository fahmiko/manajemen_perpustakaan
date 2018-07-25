<?php
if($this->session->flashdata('msg') != null){
    echo "
        <script>alert('".$this->session->flashdata('msg')."')</script>
    ";
}
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Tabel Peminjaman
                    </div>
            <div class="card-body">
            <table class="table table-hover" id="tb_pinjaman">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Buku</th>
                        <th>Pinjam</th>
                        <th>Kembali</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <!-- <tbody> -->
                    <?php /*
                    foreach ($pinjaman->result() as $data) {
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
                    } */
                    ?>
                <!-- </tbody> -->
            </table>
        </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="md_invoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary border-0">
                <h5 class="modal-title text-white" id="iv_id"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <p class="font-weight-bold mb-4">Informasi Member</p>
                        <p class="mb-1" id="iv_nama"></p>
                        <p id="iv_alamat"></p>
                        <p class="mb-1" id="iv_instansi"></p>
                    </div>
                    <div class="col-md-6">
                        <p class="font-weight-bold mb-4">Informasi Buku</p>
                        <p class="mb-1" id="iv_judul"></p>
                        <p id="iv_tahun_terbit"></p>
                        <p class="mb-1" id="iv_pengarang"></p>
                        <p class="mb-1" id="iv_penerbit"></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <p class="font-weight-bold mb-4">Informasi Pinjaman</p>
                        <p class="mb-1" id="iv_tglp">Sewa 1 Juli 2018</p>
                        <p class="mb-1" id="iv_tglk">Kembali 3 Juli 2018</p>
                    </div>
                    <div class="col-md-6">
                        <p class="font-weight-bold mb-4">Denda</p>
                        <p class="mb-1" id="iv_total"></p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>