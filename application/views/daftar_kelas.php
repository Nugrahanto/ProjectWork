      

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
                  <h3 class="box-title">Data Kelas</h3>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="<?php echo base_url();?>index.php/kelas/"><i class="glyphicon glyphicon-refresh"></i></a></li>
                  </ul>
                </div>
                <div class="col-xs-2">
                  <button type="button" class="btn btn-block btn-primary"  data-toggle="modal" data-target="#myModal">
                  <i class="glyphicon glyphicon-plus"></i>  Tambah Kelas
                  </button>
                </div>
              </div>
            </div>
            <hr>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
               <thead>
                        <tr>
                          <th>No.</th>
                          <th>Kode Kelas</th>
                          <th>Nama Kelas</th>                          
                          <th>Penanggung Jawab Kelas</th>
                          <th>Jumlah Siswa</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php 
                            $no = 1;
                            foreach ($kelas as $data) {
                              echo '
                                <tr class="odd gradeX">
                                  <td>'.$no.'</td>
                                  <td>'.$data->kode_kelas.'</td>
                                  <td>'.$data->nama_kelas.'</td>
                                  <td>'.$data->penanggung_jawab_kelas.'</td>
                                  <td>'.$data->jumlah_siswa.'</td>
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

      <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
        
          <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Kelas</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" id="form-pendaftaran" enctype="multipart/form-data" action="simpan_kelas"> 
              <div class="box-body">
                <div class="form-group">
                  <label for="kode_kelas" class="col-sm-2 control-label">Kode Kelas <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kode_kelas" placeholder="Kode Kelas"
                    name="kode_kelas" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="tingkat_kelas" class="col-sm-2 control-label">Tingkat Kelas <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <select name="tingkat_kelas" class="form-control">
                    <option value="">[Pilih Tingkat Kelas]</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_kelas" class="col-sm-2 control-label">Nama Kelas <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_kelas" placeholder="Nama Kelas"
                    name="nama_kelas" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="jumlah_siswa" class="col-sm-2 control-label">Jumlah Siswa <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="jumlah_siswa" placeholder="Jumlah Siswa"
                    name="jumlah_siswa" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="penanggung_jawab" class="col-sm-2 control-label">Penanggung Jawab Kelas <span class="required">*</span></label>

                  <div class="col-sm-10">
                  <select name="penanggung_jawab" class="form-control">
                    <option value="">[Pilih Wali Kelas]</option>
                        <?php 
                            $walikelas = $this->db->query("SELECT kode_karyawan, nama_karyawan FROM tb_karyawan")
                                                  ->result();

                            if (!empty($walikelas)) {
                              foreach ($walikelas as $data) {
                                echo "<option value='".$data->nama_karyawan."' >".$data->nama_karyawan."</option>";
                                }
                            }
                        ?>
                  </select>
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