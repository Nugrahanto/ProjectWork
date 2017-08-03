          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <br>
            <?php
                if (!empty($notif)) {
                    echo '<div class="alert alert-success">'.$notif.'</div>';
                }
            ?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Siswa </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="<?php echo base_url();?>index.php/siswa/tambah_siswa"><i class="fa fa-refresh"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/siswa/simpan_siswa">

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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nis">NIS <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nis"" name="nis" required="required" placeholder="4811/1530.070" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_siswa">Nama Siswa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_siswa" name="nama_siswa" required="required" placeholder="Rianirsyah Dian Nugrahanto" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_lahir">Tempat Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="tempat_lahir" name="tempat_lahir" required="required" placeholder="Probolinggo" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_lahir">Tanggal Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="tanggal_lahir" name="tanggal_lahir" required="required" placeholder="2000-04-26" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_kelamin">Jenis Kelamin <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="jenis_kelamin" class="btn-group radio" data-toggle="buttons" required="required">
                             <p>
                              Laki-Laki:
                              <input type="radio" class="flat form-control" name="jenis_kelamin" id="jenis_kelaminLaki-Laki" value="Laki-Laki" checked=""/> 
                              Perempuan:
                              <input type="radio" class="flat form-control" name="jenis_kelamin" id="jenis_kelaminPerempuan" value="Perempuan" />
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="agama">Agama <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="jagama" class="btn-group radio" data-toggle="buttons" required="required">
                             <p>
                              <input type="radio" class="flat form-control" name="agama" id="agamaIslam" value="Islam" checked=""/> Islam
                              <br>
                              <input type="radio" class="flat form-control" name="agama" id="agamaProtestan" value="Protestan" /> Protestan
                              <br>
                              <input type="radio" class="flat form-control" name="agama" id="agamaKatolik" value="Katolik" /> Katolik
                              <br>
                              <input type="radio" class="flat form-control" name="agama" id="agamaHindu" value="Hindu" /> Hindu
                              <br>
                              <input type="radio" class="flat form-control" name="agama" id="agamaBuddha" value="Buddha" /> Buddha
                              <br>
                              <input type="radio" class="flat form-control" name="agama" id="agamaKongHuCu" value="Kong Hu Cu" /> Kong Hu Cu
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat Siswa<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="alamat" name="alamat" required="required" class="form-control" rows="5" placeholder='Jl. Danau Ranau G6B/2 Sawojajar, Malang, Jawa Timur, Indonesia'></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nomor_telp">Nomor Telepon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nomor_telp" name="no_telp" required="required" placeholder="0852xxxxxxxx" class="form-control col-md-7 col-xs-12">
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
                          <input type="reset" name="reset" value="Reset" class="btn btn-primary">
                          <input type="submit" name="submit" value="Submit" class="btn btn-success">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>