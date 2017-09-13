      

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
                <h3 class="box-title">Data Siswa Kelas XI</h3>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a href="<?php echo base_url();?>index.php/siswa/kelas_11/"><i class="glyphicon glyphicon-refresh"></i></a></li>
                </ul>
              </div>
              <div class="col-xs-2">
                <button type="button" class="btn btn-block btn-primary"  data-toggle="modal" data-target="#myModal">
                <i class="glyphicon glyphicon-plus"></i>  Tambah Siswa
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
                            foreach ($XI as $data) {
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
                                  <td>
                                    <a href="'.base_url().'index.php/siswa/edit_siswa/'.$data->nis.'" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
                                  </td>
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
          <h4 class="modal-title">Tambah Data Siswa</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" id="form-pendaftaran" enctype="multipart/form-data" action="simpan_siswa"> 
              <div class="box-body">
                <div class="form-group">
                  <label class="control-label col-sm-2">Tingkat <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <select class="form-control" required="required" name="tingkat">
                      <option value="">[Pilih Tingkat]</option>
                      <option value="X">X</option>
                      <option value="XI">XI</option>
                      <option value="XII">XII</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Jurusan <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <select class="form-control" required="required" name="jurusan">
                      <option value="">[Pilih Jurusan]</option>
                      <option value="RPL">RPL</option>
                      <option value="TKJ">TKJ</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="kelas">Kelas <span class="required">*</span>
                  </label>

                  <div class="col-sm-10">
                    <select class="form-control" name="kelas">
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
                <div class="form-group">
                  <label class="control-label col-sm-2" for="nis">NIS <span class="required">*</span>
                  </label>

                  <div class="col-sm-10">
                    <input type="text" id="nis"" name="nis" required="required" placeholder="NIS" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                   <label class="control-label col-sm-2" for="nama_siswa">Nama Siswa <span class="required">*</span></label>

                    <div class="col-sm-10">
                      <input type="text" id="nama_siswa" name="nama_siswa" required="required" placeholder="Nama Siswa" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="tempat_lahir">Tempat Lahir <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" id="tempat_lahir" name="tempat_lahir" required="required" placeholder="Tempat Lahir" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="tanggal_lahir">Tanggal Lahir <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" id="tanggal_lahir" name="tanggal_lahir" required="required" placeholder="0000-01-01" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Jenis Kelamin <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <select class="form-control" required="required" name="jenis_kelamin">
                      <option value="">[Pilih Jenis Kelamin]</option>
                      <option value="Laki-Laki">Laki - Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                   <label class="control-label col-sm-2">Agama <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <select class="form-control" required="required" name="agama">
                      <option value="">[Pilih Agama]</option>
                      <option value="Islam">Islam</option>
                      <option value="Protestan">Protestan</option>
                      <option value="Katolik">katolik</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Buddha">Buddha</option>
                      <option value="Kong Hu Cu">Kong Hu Cu</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="alamat">Alamat Siswa<span class="required">*</span>
                  </label>
                  
                  <div class="col-sm-10">
                    <textarea id="alamat" name="alamat" required="required" class="form-control" rows="5" placeholder='Jl. Danau Ranau G6B/2 Sawojajar, Malang, Jawa Timur, Indonesia'></textarea>
                  </div>
                </div>
                <div class="form-group">
                 <label class="control-label col-sm-2">No. Telp <span class="required">*</span></label>
                    
                  <div class="col-sm-10">
                    <input type="text" id="nomor_telp" name="no_telp" required="required" placeholder="0852xxxxxxxx" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Angkatan <span class="required">*</span></label>
                    
                    <div class="col-sm-10">
                      <select class="form-control" required="required" name="angkatan">
                        <option value="">[Pilih Angkatan]</option>
                        <option value="26">26</option>
                        <option value="25">25</option>
                        <option value="24">24</option>
                      </select>
                    </div>
                </div>
                 <div class="form-group">
                  <label class="control-label col-sm-2">Foto Siswa <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="file" id="foto" name="foto" autofocus class="form-control" required />
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