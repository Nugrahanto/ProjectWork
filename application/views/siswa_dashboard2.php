      <?php
        if (!empty($notif_sukses)) {
          echo '<div class="alert alert-success">'.$notif_sukses.'</div>';
        }
      ?>
        <?php
          if (!empty($notif_gagal)) {
            echo '<div class="alert alert-danger">'.$notif_gagal.'</div>';
        }
      ?>
      <?php
        if (!empty($notif_sukses_edit)) {
          echo '<div class="alert alert-success">'.$notif_sukses_edit.'</div>';
        }
      ?>

			<!-- resumt -->
	        <div class="panel panel-default">
	               <div class="panel-heading resume-heading">
	                  <div class="row">
	                     <div class="col-lg-12">
	                        <div class="col-xs-12 col-sm-4">
	                           <figure>
	                           <?php 
	                           		$foto = $this->session->userdata('foto');
	                           	?>
	                              <img class="foto img-responsive" alt="" src="<?php echo base_url('uploads/'.$foto.'');?>">
	                           </figure>
	                           <div class="row">
	                              <div class="col-xs-12 social-btns">
	                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
	                                    <a href="#" class="btn btn-social btn-block btn-google">
	                                    <i class="fa fa-google"></i> </a>
	                                 </div>
	                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
	                                    <a href="#" class="btn btn-social btn-block btn-facebook">
	                                    <i class="fa fa-facebook"></i> </a>
	                                 </div>
	                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
	                                    <a href="#" class="btn btn-social btn-block btn-twitter">
	                                    <i class="fa fa-twitter"></i> </a>
	                                 </div>
	                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
	                                    <a href="#" class="btn btn-social btn-block btn-linkedin">
	                                    <i class="fa fa-linkedin"></i> </a>
	                                 </div>
	                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
	                                    <a href="#" class="btn btn-social btn-block btn-github">
	                                    <i class="fa fa-github"></i> </a>
	                                 </div>
	                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
	                                    <a href="#" class="btn btn-social btn-block btn-stackoverflow">
	                                    <i class="fa fa-stack-overflow"></i> </a>
	                                 </div>
	                              </div>
	                              
	                              
	                           </div>
	                        </div>
	                        <div class="col-xs-12 col-sm-8">
	                           <ul class="list-group">
	                           	<div>
	                           	  <label class="col-sm-4 control-label">Nomor Induk Siswa</label>
	                              <li class="box col-md-8 list-group-item"><?php echo "".$siswa->nis."" ?></li>
	                            </div>
	                            
	                           </ul>
	                        </div>
	                     </div>
	                  </div>
	               </div>
	               
	               </div>
	            </div>
	         </div>
	        <!-- resume -->