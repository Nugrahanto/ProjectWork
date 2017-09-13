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
	                        <hr style="border-color: red;">
	                        <h2>CAPAIAN HASIL BELAJAR
	                        <br>PESERTA DIDIK SMK TELKOM MALANG</h2>
	                    </div>
	                </div>
	            </div>
	            <div class="panel-body">
	            	<table id="example1" class="table table-bordered table-striped">
                <thead>
                        <tr>
                          <th>No.</th>
                          <th>Mata Pelajaran</th>
                          <th>KKM</th>                          
                          <th>UH 1</th>
                          <th>UH 2</th>
                          <th>UH 3</th>
                          <th>UH 4</th>
                          <th>UH 5</th>
                          <th>UTS 1</th>
                          <th>UTS 2</th>
                          <th>UAS 1</th>
                          <th>UAS 2</th>
                        </tr>
                      </thead>

                      <tbody>
                            <tr>
                              <td></td>
                              <td><?php if (empty($matematika)) { echo '-' ;} else{ echo ''.$matematika->mata_pelajaran.'' ;} ?></td>
                              <td style="background-color: pink;">75</td>
                              <td><?php if (empty($matematika)) { echo '-' ;} else{ echo ''.$matematika->uh1.'' ;} ?></td>
                              <td><?php if (empty($matematika)) { echo '-' ;} else{ echo ''.$matematika->uh2.'' ;} ?></td>
                              <td><?php if (empty($matematika)) { echo '-' ;} else{ echo ''.$matematika->uh3.'' ;} ?></td>
                              <td><?php if (empty($matematika)) { echo '-' ;} else{ echo ''.$matematika->uh4.'' ;} ?></td>
                              <td><?php if (empty($matematika)) { echo '-' ;} else{ echo ''.$matematika->uh5.'' ;} ?></td>
                              <td><?php if (empty($matematika)) { echo '-' ;} else{ echo ''.$matematika->uts1.'' ;} ?></td>
                              <td><?php if (empty($matematika)) { echo '-' ;} else{ echo ''.$matematika->uts2.'' ;} ?></td>
                              <td><?php if (empty($matematika)) { echo '-' ;} else{ echo ''.$matematika->uas1.'' ;} ?></td>
                              <td><?php if (empty($matematika)) { echo '-' ;} else{ echo ''.$matematika->uas2.'' ;} ?></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><?php if (empty($fisika)) { echo '-' ;} else{ echo ''.$fisika->mata_pelajaran.'' ;} ?></td>
                              <td style="background-color: pink;">75</td>
                              <td><?php if (empty($fisika)) { echo '-' ;} else{ echo ''.$fisika->uh1.'' ;} ?></td>
                              <td><?php if (empty($fisika)) { echo '-' ;} else{ echo ''.$fisika->uh2.'' ;} ?></td>
                              <td><?php if (empty($fisika)) { echo '-' ;} else{ echo ''.$fisika->uh3.'' ;} ?></td>
                              <td><?php if (empty($fisika)) { echo '-' ;} else{ echo ''.$fisika->uh4.'' ;} ?></td>
                              <td><?php if (empty($fisika)) { echo '-' ;} else{ echo ''.$fisika->uh5.'' ;} ?></td>
                              <td><?php if (empty($fisika)) { echo '-' ;} else{ echo ''.$fisika->uts1.'' ;} ?></td>
                              <td><?php if (empty($fisika)) { echo '-' ;} else{ echo ''.$fisika->uts2.'' ;} ?></td>
                              <td><?php if (empty($fisika)) { echo '-' ;} else{ echo ''.$fisika->uas1.'' ;} ?></td>
                              <td><?php if (empty($fisika)) { echo '-' ;} else{ echo ''.$fisika->uas2.'' ;} ?></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><?php if (empty($bing)) { echo '-' ;} else{ echo ''.$bing->mata_pelajaran.'' ;} ?></td>
                              <td style="background-color: pink;">75</td>
                              <td><?php if (empty($bing)) { echo '-' ;} else{ echo ''.$bing->uh1.'' ;} ?></td>
                              <td><?php if (empty($bing)) { echo '-' ;} else{ echo ''.$bing->uh2.'' ;} ?></td>
                              <td><?php if (empty($bing)) { echo '-' ;} else{ echo ''.$bing->uh3.'' ;} ?></td>
                              <td><?php if (empty($bing)) { echo '-' ;} else{ echo ''.$bing->uh4.'' ;} ?></td>
                              <td><?php if (empty($bing)) { echo '-' ;} else{ echo ''.$bing->uh5.'' ;} ?></td>
                              <td><?php if (empty($bing)) { echo '-' ;} else{ echo ''.$bing->uts1.'' ;} ?></td>
                              <td><?php if (empty($bing)) { echo '-' ;} else{ echo ''.$bing->uts2.'' ;} ?></td>
                              <td><?php if (empty($bing)) { echo '-' ;} else{ echo ''.$bing->uas1.'' ;} ?></td>
                              <td><?php if (empty($bing)) { echo '-' ;} else{ echo ''.$bing->uas2.'' ;} ?></td>
                            </tr>
                      </tbody>
                </table>
	            </div>
	        </div>
	        <!-- resume -->