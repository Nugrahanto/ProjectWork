    
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
                <h1 class="box-title">Daftar Nilai</h1>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a href="<?php echo base_url();?>index.php/karyawan/"><i class="glyphicon glyphicon-refresh"></i></a></li>
                </ul>
              </div>
              <div class="col-xs-2">
                <button type="button" class="btn btn-block btn-primary"  data-toggle="modal" data-target="#myModal">
                <i class="glyphicon glyphicon-plus"></i>  Tambah Nilai
                </button>
              </div>
            </div>
            <hr>
            <!-- /.box-header -->
            <div class="box-body">

            <div class="row">
              <div class="col-sm-4">
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Kelas</label>

                      <div class="col-sm-6">
                        <select class="form-control">
                        <option value="">[Pilih Kelas]</option>
                        <?php 
                            $kelas = $this->db->query("SELECT nama_kelas FROM tb_kelas")
                                                  ->result();

                            if (!empty($kelas)) {
                              foreach ($kelas as $data) {
                                echo "<option value='".$data->nama_kelas."' >".$data->nama_kelas."</option>";
                                }
                            }
                        ?>
                      </select>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-sm-4">
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Mata Pelajaran</label>

                      <div class="col-sm-8">
                        <select class="form-control">
                        <option value="">[Pilih Mata Pelajaran]</option>
                        <?php 
                            $pelajaran = $this->db->query("SELECT mata_pelajaran FROM tb_pelajaran")
                                                  ->result();

                            if (!empty($pelajaran)) {
                              foreach ($pelajaran as $data) {
                                echo "<option value='".$data->mata_pelajaran."' >".$data->mata_pelajaran."</option>";
                                }
                            }
                        ?>
                      </select>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-sm-4"></div>
            </div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                        <tr>
                          <th>No.</th>
                          <th>NIS</th>                          
                          <th>Nama Siswa</th>
                          <th>Kelas</th>
                          <th>Mata Pelajaran</th>
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
                      <?php 
                       $no = 1;
                        foreach ($nilai as $data) {
                        echo '
                        <tr>
                          <td>'.$no.'</td>
                          <td>'.$data->nis.'</td>
                          <td>'.$data->nama_siswa.'</td>
                          <td>'.$data->kelas.'</td>
                          <td>'.$data->mata_pelajaran.'</td>
                          <td>'.$data->uh1.'</td>
                          <td>'.$data->uh2.'</td>
                          <td>'.$data->uh3.'</td>
                          <td>'.$data->uh4.'</td>
                          <td>'.$data->uh5.'</td>
                          <td>'.$data->uts1.'</td>
                          <td>'.$data->uts2.'</td>
                          <td>'.$data->uas1.'</td>
                          <td>'.$data->uas2.'</td>
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

      