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
                <h3 class="box-title">Data Siswa Kelas XII</h3>
              </div>
              <div class="col-xs-2">
                <a href="<?php echo base_url();?>index.php/siswa/" class="btn btn-primary col-md-12"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
              </div>
            </div>
            <hr>
            <!-- /.box-header -->
            <div class="box-body">
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/siswa/do_edit_siswa/<?php echo $edit_siswa->nis; ?>">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nis">NIS <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nis" name="nis" required="required" value="<?php echo $edit_siswa->nis; ?>" class="form-control col-md-7 col-xs-12" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tingkat <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" required="required" name="tingkat">
                            <option value="">[Pilih Tingkat]</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" required="required" name="jurusan">
                            <option value="">[Pilih Jurusan]</option>
                            <option value="RPL">RPL</option>
                            <option value="TKJ">TKJ</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kelas">Kelas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_siswa">Nama Siswa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_siswa" name="nama_siswa" required="required" value="<?php echo $edit_siswa->nama_siswa; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_lahir">Tempat Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="tempat_lahir" name="tempat_lahir" required="required" value="<?php echo $edit_siswa->tempat_lahir; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_lahir">Tanggal Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="tanggal_lahir" name="tanggal_lahir" required="required" value="<?php echo $edit_siswa->tanggal_lahir; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin <span class="required">*</span></label>

                        <div class="col-sm-6 col-md-6 col-xs-12">
                          <select class="form-control" required="required" name="jenis_kelamin">
                            <option value="">[Pilih Jenis Kelamin]</option>
                            <option value="Laki-Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama <span class="required">*</span></label>

                        <div class="col-sm-6 col-md-6 col-xs-12">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat Siswa<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="alamat" name="alamat" required="required" class="form-control" rows="5"><?php echo $edit_siswa->alamat; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nomor_telp">Nomor Telepon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nomor_telp" name="no_telp" required="required" value="<?php echo $edit_siswa->no_telp; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Angkatan <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" required="required" name="angkatan">
                            <option value="">[Pilih Angkatan]</option>
                            <option value="26">26</option>
                            <option value="25">25</option>
                            <option value="24">24</option>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="submit" name="submit" value="Submit" class="btn btn-success">
                        </div>
                      </div>
                    </form>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>