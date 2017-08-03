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
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Karyawan </h2>
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
                      <li><a href="<?php echo base_url();?>index.php/karyawan"><i class="fa fa-arrow-left"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/karyawan/do_edit_karyawan/<?php echo $edit_karyawan->kode_karyawan; ?>">

                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_karyawan">Kode Karyawan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kode_karyawan" name="kode_karyawan" required="required" value="<?php echo $edit_karyawan->kode_karyawan; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">NIP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nip" name="nip" required="required" value="<?php echo $edit_karyawan->nip; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_karyawan">Nama Karyawan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_karyawan" name="nama_karyawan" required="required" value="<?php echo $edit_karyawan->nama_karyawan; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_lahir">Tempat Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="tempat_lahir" name="tempat_lahir" required="required" value="<?php echo $edit_karyawan->tempat_lahir; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_lahir">Tanggal Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="tanggal_lahir" name="tanggal_lahir" required="required" value="<?php echo $edit_karyawan->tanggal_lahir; ?>" class="form-control col-md-7 col-xs-12">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat Karyawan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="alamat" name="alamat_karyawan" required="required" class="form-control" rows="5"><?php echo $edit_karyawan->alamat_karyawan; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nomor_telp">Nomor Telepon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nomor_telp" name="no_telp" required="required" value="<?php echo $edit_karyawan->no_telp; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" required="required" name="status">
                            <option value="">[Pilih Status]</option>
                            <option value="Guru">Guru</option>
                            <option value="Tata Usaha">Karyawan TU</option>
                            <option value="Kesiswaan">Kesiswaan</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mapel1">Mata Pelajaran 1 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="mapel1" name="mapel1" value="<?php echo $edit_karyawan->mapel1; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mapel2">Mata Pelajaran 2 </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="mapel2" name="mapel2" value="<?php echo $edit_karyawan->mapel2; ?>" class="form-control col-md-7 col-xs-12">
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