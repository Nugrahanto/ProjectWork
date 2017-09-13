    
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
            <div class="box-header box-head">
              <div class="row">
              <div class="col-xs-10">
                <h1 class="box-title">Daftar Nilai</h1>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a href="<?php echo base_url();?>index.php/nilai/"><i class="glyphicon glyphicon-refresh"></i></a></li>
                </ul>
              </div>
              <div class="col-xs-2">
                <button type="button" class="btn btn-block btn-primary"  data-toggle="modal" data-target="#myModal">
                <i class="glyphicon glyphicon-plus"></i>  Tambah Data Siswa
                </button>
              </div>
              </div>
            </div>
            <hr>

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
            <!-- /.box-header -->
            <div class="box-body">
        
              <table id="table-data example1" class="table table-bordered table-striped">
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
                          <th></th>
                        </tr>
                      </thead>

                      <tbody id="table-body">
                        <?php 
                          $no = 1;
                          foreach ($nilai as $data) {
                            echo "
                            <tr class='td' data-id=".$data->id_nilai.">
                                <td>
                                  ".$no."
                                </td>
                                <td>
                                  ".$data->nis."
                                </td>
                                <td>
                                  ".$data->nama_siswa."
                                </td>
                                <td>
                                  ".$data->kelas."
                                </td>
                                <td>
                                  ".$data->mata_pelajaran."
                                </td>
                                <td>
                                  <span class='span-uh1 caption' data-id=".$data->id_nilai.">".$data->uh1."</span>
                                  <input type='text' class='field-uh1 form-control editor' value=".$data->uh1." data-id=".$data->id_nilai." />
                                </td>
                                <td>
                                  <span class='span-uh2 caption' data-id=".$data->id_nilai.">".$data->uh2."</span>
                                  <input type='text' class='field-uh2 form-control editor' value=".$data->uh2." data-id=".$data->id_nilai." />
                                </td>
                                <td>
                                  <span class='span-uh3 caption' data-id=".$data->id_nilai.">".$data->uh3."</span>
                                  <input type='text' class='field-uh3 form-control editor' value=".$data->uh3." data-id=".$data->id_nilai." />
                                </td>
                                <td>
                                  <span class='span-uh4 caption' data-id=".$data->id_nilai.">".$data->uh4."</span>
                                  <input type='text' class='field-uh4 form-control editor' value=".$data->uh4." data-id=".$data->id_nilai." />
                                </td>
                                <td>
                                  <span class='span-uh5 caption' data-id=".$data->id_nilai.">".$data->uh5."</span>
                                  <input type='text' class='field-uh5 form-control editor' value=".$data->uh5." data-id=".$data->id_nilai." />
                                </td>
                                <td>
                                  <span class='span-uts1 caption' data-id=".$data->id_nilai.">".$data->uts1."</span>
                                  <input type='text' class='field-uts1 form-control editor' value=".$data->uts1." data-id=".$data->id_nilai." />
                                </td>
                                <td>
                                  <span class='span-uts2 caption' data-id=".$data->id_nilai.">".$data->uts2."</span>
                                  <input type='text' class='field-uts2 form-control editor' value=".$data->uts2." data-id=".$data->id_nilai." />
                                </td>
                                <td>
                                  <span class='span-uas1 caption' data-id=".$data->id_nilai.">".$data->uas1."</span>
                                  <input type='text' class='field-uas1 form-control editor' value=".$data->uas1." data-id=".$data->id_nilai." />
                                </td>
                                <td>
                                  <span class='span-uas2 caption' data-id=".$data->id_nilai.">".$data->uas2."</span>
                                  <input type='text' class='field-uas2 form-control editor' value=".$data->uas2." data-id=".$data->id_nilai." />
                                </td>
                                <td>
                                  <button class='btn btn-xs btn-danger hapus-data-nilai' data-id=".$data->id_nilai."><i class='glyphicon glyphicon-remove'></i> Hapus</button>
                                </td>
                            </tr>";
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

      <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
        
       <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Siswa</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" id="form-pendaftaran" enctype="multipart/form-data" action="tambah_row_nilai"> 
              <div class="box-body">
                <div class="form-group">
                   <label class="control-label col-sm-2" for="nis">Nama Siswa <span class="required">*</span></label>

                    <div class="col-sm-10">
                      <select class="form-control" name="nis">
                      <option value="">[Pilih Siswa]</option>
                        <?php 
                            $siswa = $this->db->get('tb_siswa')
                                              ->result();

                              if (!empty($siswa)) {
                                foreach ($siswa as $data) {
                                    echo "<option value='".$data->nis."' >".$data->nis." (".$data->nama_siswa.")</option>";
                                  }
                              }
                        ?>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                  <label for="mata_pelajaran" class="col-sm-2 control-label">Mata Pelajaran <span class="required">*</span> </label>

                  <div class="col-sm-10">
                    <select name="mata_pelajaran" class="form-control">
                      <option value="">[Pilih Mata Pelajaran]</option>
                          <?php 
                              $pelajaran = $this->db->query("SELECT kode_pelajaran, mata_pelajaran FROM tb_pelajaran")
                                                    ->result();

                              if (!empty($pelajaran)) {
                                foreach ($pelajaran as $data) {
                                  echo "<option value='".$data->kode_pelajaran."' >".$data->mata_pelajaran."</option>";
                                  }
                              }
                          ?>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="uh1" class="col-sm-4 control-label">UH 1 </label>

                      <div class="col-sm-8">
                        <input type="number" class="form-control" id="uh1" placeholder="Ulangan Harian 1"
                        name="uh1" value="0" disabled="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="uh2" class="col-sm-4 control-label">UH 2 </label>

                      <div class="col-sm-8">
                        <input type="number" class="form-control" id="uh2" placeholder="Ulangan Harian 2"
                        name="uh2" value="0" disabled="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="uh3" class="col-sm-4 control-label">UH 3 </label>

                      <div class="col-sm-8">
                        <input type="number" class="form-control" id="uh3" placeholder="Ulangan Harian 3"
                        name="uh3" value="0" disabled="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="uh4" class="col-sm-4 control-label">UH 4 </label>

                      <div class="col-sm-8">
                        <input type="number" class="form-control" id="uh4" placeholder="Ulangan Harian 4"
                        name="uh4" value="0" disabled="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="uh5" class="col-sm-4 control-label">UH 5 </label>

                      <div class="col-sm-8">
                        <input type="number" class="form-control" id="uh5" placeholder="Ulangan Harian 5"
                        name="uh5" value="0" disabled="">
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="uts1" class="col-sm-4 control-label">UTS 1 </label>

                      <div class="col-sm-8">
                        <input type="number" class="form-control" id="uts1" placeholder="Ulangan Tengah Semester 1"
                        name="uts1" value="0" disabled="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="uts2" class="col-sm-4 control-label">UTS2 2 </label>

                      <div class="col-sm-8">
                        <input type="number" class="form-control" id="uts2" placeholder="Ulangan Tengah Semester 2"
                        name="uts2" value="0" disabled="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="uas1" class="col-sm-4 control-label">UAS 1 </label>

                      <div class="col-sm-8">
                        <input type="number" class="form-control" id="uas1" placeholder="Ulangan Akhir Semester 1"
                        name="uas1" value="0" disabled="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="uas2" class="col-sm-4 control-label">UAS 2 </label>

                      <div class="col-sm-8">
                        <input type="number" class="form-control" id="uas2" placeholder="Ulangan Akhir Semester"
                        name="uas2" value="0" disabled="">
                      </div>
                    </div>                    
                  </div>
                </div> 


              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="submit" name="submit" class="btn btn-info pull-right" value="Tambah"> 
              </div>
              <!-- /.box-footer -->
            </form>
        </div>
      </div>  
          
        </div>
      </div>