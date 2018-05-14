        </div>
    </div>
</div>
<script src="<?php echo base_url().'assets/admin/' ?>vendor/jquery/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url().'assets/admin/' ?>vendor/popper.js/popper.min.js"></script>
<script src="<?php echo base_url().'assets/admin/' ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url().'assets/admin/' ?>vendor/chart.js/chart.min.js"></script>
<script src="<?php echo base_url().'assets/admin/' ?>js/carbon.js"></script>
<script src="<?php echo base_url().'assets/admin/' ?>js/demo.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable();
} );

$(document).ready( function () {
    $('#tableKategori').DataTable();
} );

</script>
<script type="text/javascript">
	$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
</script>
<script type="text/javascript">
$(document).ready(function () {
    $("#submitBtn").click(function () {

        var form = $(".needs-validation")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');
    });
});
</script>
<!-- Pinjaman Jquery -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#tb_pinjaman').DataTable({
            "ajax":"<?php echo site_url('pinjaman/json_pinjaman') ?>",
            "columns":[
                {"data":"id_pinjaman"},
                {"data":"nama"},
                {"data":"judul"},
                {"data":"tgl_pinjam"},
                {"data":"tgl_kembali"},
                {
                    "data":null,
                    "render":function(data){
                       return (data.status == 'dipinjam') ? "<span class='badge badge-warning'>dipinjam</span>" : "<span class='badge badge-success'>kembali</span>"
                    }
                },
                {
                    "data":null,
                    "render":function(data){
                        return "<a class='btn btn-default btn-xs' onclick='(invoice("+data.id_pinjaman+"))'><span class='fa fa-print'></span> tampil</a>"
                    }
                },
            ],
        });
    });

function invoice(id){
    $.ajax({
        url: "<?php echo site_url('pinjaman/json_pinjaman_by_id/') ?>"+id,
        dataType: "JSON",
        success: function(data){
            $('#iv_id').html("Pinjaman #"+id);
            $('#iv_judul').html(data.judul);
            $('#iv_tahun_terbit').html(data.tahun_terbit);
            $('#iv_pengarang').html(data.pengarang);
            $('#iv_penerbit').html(data.penerbit);
            $('#iv_nama').html(data.nama);
            $('#iv_alamat').html(data.alamat);
            $('#iv_instansi').html(data.instansi);
            $('#iv_tglp').html("Pinjam "+data.tgl_pinjam);
            $('#iv_tglk').html("Kembali "+data.tgl_kembali);
            $('#iv_total').html("Rp "+data.denda);
            $('#md_invoice').modal('show');
        }
    });
}
</script>
</body>
</html>