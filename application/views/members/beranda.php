        <div class="content" style="height: 5000px;">
            <div class="container-fluid">
                <div class="row">
                	<div class="col-md-12">
                    	<div class="card text-white border-0">
                        	<div class="card-header <?php
                                if($this->session->userdata('type')=='gold'){
                                    echo "bg-warning";
                                }else{
                                    echo "bg-success";
                                }
                             ?>">
                            	<?php
                                    if($this->session->userdata('type')=='gold'){
                                        echo "<b><font color='red'>Member Gold</font></b>";
                                    }else{
                                        echo "<b>Member Silver</b>";
                                    }
                                ?>
                        	</div>

                        	<div class="card-body bg-info">
                            	<ul>
                                    <?php 
                                        if($this->session->userdata('type')=='gold'){
                                            echo "
                                                <li>Sewa 7 Hari</li>
                                                <li>Denda 50%</li>
                                                <li>Pinjaman tak terbatas</li>";
                                        }else{
                                            echo "
                                                <li>Sewa 3 Hari</li>
                                                <li>Tidak ada diskon denda</li>
                                                <li>Batas Pinjaman 5</li>";
                                        }
                                    ?>
                            	</ul>
                        	</div>
                    	</div>
                	</div>
                </div>
            </div>
                
            </div>
          </div>