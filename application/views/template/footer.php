        </div>
    </div>
</div>
<script src="<?php echo base_url().'assets/admin/' ?>vendor/jquery/jquery.min.js"></script>
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
</body>
</html>