    
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

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="row">
              <div class="col-xs-10">
                <h1 class="box-title">Daftar Siswa</h1>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a href="<?php echo base_url();?>index.php/siswa/"><i class="glyphicon glyphicon-refresh"></i></a></li>
                </ul>
              </div>
            </div>
            <hr>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                        <tr>
                          <th>No.</th>
                          <th>NIS</th>                          
                          <th>Nama Siswa</th>
                          <th>Kelas</th>
                          <th>Jenis Kelamin</th>
                          <th>Agama</th>
                          <th>Tempat, Tanggal Lahir</th>
                          <th>Alamat</th>
                          <th>No Telp</th>
                          <th>Angkatan</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php 
                            $no = 1;
                            foreach ($siswa as $data) {
                              echo '
                                <tr class="odd gradeX">
                                  <td>'.$no.'</td>
                                  <td>'.$data->nis.'</td>
                                  <td>'.$data->nama_siswa.'</td>
                                  <td>'.$data->kelas.'</td>
                                  <td>'.$data->jenis_kelamin.'</td>
                                  <td>'.$data->agama.'</td>
                                  <td>'.$data->tempat_lahir.', '.$data->tanggal_lahir.'</td>
                                  <td>'.$data->alamat.'</td>
                                  <td>'.$data->no_telp.'</td>
                                  <td>'.$data->angkatan.'</td>
                                  <td>-</td>
                                </tr>
                                ';
                              $no++;
                            }
                          ?>
                      </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
        </div>
      </div>