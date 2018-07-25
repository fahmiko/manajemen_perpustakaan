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
            Tambah Pinjaman
        </div>
<div class="card-body">
<?php echo form_open('members/tambah_pinjaman'); ?>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
        </div>
        <input type="text" class="form-control" name="id_member" value="<?=$this->session->userdata('nama')?>" readonly="">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-book"></i></span>
        </div>
        <select class="form-control" name="id_buku">
            <option hidden="">Select Book</option>
            <?php 
                foreach ($buku->result() as $data) {
                    echo "<option value='$data->id_buku'>$data->id_buku | $data->judul </option>";
                }
            ?>
        </select>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-list-alt"></i></span>
        </div>
        <textarea class="form-control" name="catatan" rows="6" placeholder="Catatan"></textarea>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
        </div>
        <input type="text" class="form-control" name="tgl_kembali" value="<?=$tgl_kembali?>" readonly="">
    </div>
    <div class="input-group mb-3">
         <button type="submit" id="submitBtn" class="btn btn-primary">Save changes</button>
         <button type="reset" class="btn btn-warning">Reset</button>
    </div>

<?php form_close();
    if(validation_errors()){
        echo '
        <div class="alert alert-dismissible alert-danger" style="margin-top: 50px">
            <div class="panel-heading">Panel Info</div><hr>
            <div class="panel-body">'.validation_errors().'</div>
        </div>';
    }
 ?>
</div></div>
</div></div>
</div></div>
