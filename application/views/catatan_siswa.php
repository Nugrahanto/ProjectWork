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
	                    <div class="col-lg-12" style="text-align: center">
	                     	<h4>YAYASAN PENDIDIKAN TELKOM</h4>
	                        <h1>SMK TELKOM MALANG</h1>
	                        <p><b>Terakreditasi A</b></p>
	                        <p>
		                        <br>Program Studi Keahlian :
		                        <br>(1) Rekayasa Perangkat Lunak (2) Teknik Komputer Dan Jaringan
		                        <br>Jalan Danau Ranau Sawojajar, Malang, Jawa Timur 65139 - Telp/Faks : (0341)712500 / 712000
		                        <br>w : www.smktelkom-mlg.sch.id | e : info@smktelkom-mlg.sch.id
	                        </p>
	                    </div>
	                </div>
	            </div>
	            <div class="panel-body">
	            	<table id="example1" class="table table-bordered table-striped">
                <thead>
                        <tr>
                          <th>Catatan</th>
                        </tr>
                      </thead>

                      <tbody>
                            <tr>
                              <td>
                              <?php 
                                if (empty($catatan))
                                {
                                  echo '-' ;
                                }else{
                                  echo ''.$catatan->catatan.'' ;
                                }
                              ?>
                              </td>
                            </tr>
                      </tbody>
                </table>
	            </div>
	        </div>
	        <!-- resume -->