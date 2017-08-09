    
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
                <h1 class="box-title">Daftar Karyawan</h1>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a href="<?php echo base_url();?>index.php/karyawan/"><i class="glyphicon glyphicon-refresh"></i></a></li>
                </ul>
              </div>
              <div class="col-xs-2">
                <button type="button" class="btn btn-block btn-primary"  data-toggle="modal" data-target="#myModal">
                <i class="glyphicon glyphicon-plus"></i>  Tambah Karyawan
                </button>
              </div>
            </div>
            <hr>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                        <tr>
                          <th>No.</th>
                          <th>Kode Karyawan</th>
                          <th>NIP</th>                          
                          <th>Nama</th>
                          <th>Tempat, Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>No Telp</th>
                          <th>Keterangan</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>

                      <tbody>
                         <?php 
                            $no = 1;
                            foreach ($karyawan as $data) {
                              echo '
                                <tr class="odd gradeX">
                                  <td>'.$no.'</td>
                                  <td>'.$data->kode_karyawan.'</td>
                                  <td>'.$data->nip.'</td>
                                  <td>'.$data->nama_karyawan.'</td>
                                  <td>'.$data->tempat_lahir.', '.$data->tanggal_lahir.'</td>
                                  <td>'.$data->jenis_kelamin.'</td>
                                  <td>'.$data->alamat_karyawan.'</td>
                                  <td>'.$data->no_telp.'</td>
                                  <td>'.$data->status.' '.$data->mapel1.', '.$data->mapel2.' </td>
                                  <td>
                                    <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#'.$data->kode_karyawan.'">
                                    <i class="glyphicon glyphicon-pencil"></i> </button>
                                    <a href="'.base_url().'index.php/karyawan/hapus_karyawan/'.$data->kode_karyawan.'" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> </a>  
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
      </div>

      <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
        
          <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Karyawan</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" id="form-pendaftaran" enctype="multipart/form-data" action="simpan_karyawan"> 
              <div class="box-body">
                <div class="form-group">
                  <label for="kode_karyawan" class="col-sm-2 control-label">Kode Karyawan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kode_karyawan" placeholder="Kode Karyawan"
                    name="kode_karyawan" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nip" class="col-sm-2 control-label">NIP <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nip" placeholder="NIP"
                    name="nip" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_karyawan" class="col-sm-2 control-label">Nama Karyawan <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_karyawan" placeholder="Nama Karyawan"
                    name="nama_karyawan" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir"
                    name="tempat_lahir" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="tanggal_lahir" class="col-sm-2 control-label">Tanggal Lahir <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir"
                    name="tanggal_lahir" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <select name="jenis_kelamin" class="form-control">
                      <option value="">[Pilih Jenis Kelamin]</option>
                      <option value="Laki-Laki">Laki - Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat_karyawan" class="col-sm-2 control-label">Alamat <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <textarea id="alamat" name="alamat_karyawan" required="required" class="form-control" rows="5"></textarea>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="no_telp" class="col-sm-2 control-label">Nomor Telepon <span class="required">*</span></label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="no_telp" placeholder="Nomor Telepon"
                  name="no_telp" value="">
                </div>
              </div>
              <div class="form-group">
                <label for="status" class="col-sm-2 control-label">Status <span class="required">*</span></label>

                <div class="col-sm-10">
                <select name="status" class="form-control">
                  <option value="">[Pilih Status]</option>
                  <option value="Guru">Guru</option>
                  <option value="Tata Usaha">Karyawan TU</option>
                  <option value="Kesiswaan">Kesiswaan</option>
                </select>
                </div>
              </div>
              <div class="form-group">
                <label for="mapel1" class="col-sm-2 control-label">Mata Pelajaran 1 </label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="mapel1" placeholder="Mata Pelajaran 1"
                  name="mapel1" value="">
                </div>
              </div>
              <div class="form-group">
                <label for="mapel2" class="col-sm-2 control-label">Mata Pelajaran 2 </label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="mapel2" placeholder="Mata Pelajaran 2"
                  name="mapel2" value="">
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

      <?php
        foreach ($karyawan as $data) {
          echo '

    <div class="modal fade" id="'.$data->kode_karyawan.'" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data Karyawan</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" id="form-pendaftaran" enctype="multipart/form-data" action="edit_karyawan"> 
              <div class="box-body">
                <div class="form-group">
                  <label for="kode_karyawan" class="col-sm-2 control-label">Kode Karyawan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kode_karyawan" placeholder="Kode Karyawan"
                    name="kode_karyawan" value="'.$data->kode_karyawan.'" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nip" class="col-sm-2 control-label">NIP <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nip" placeholder="NIP"
                    name="nip" value="'.$data->nip.'">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_karyawan" class="col-sm-2 control-label">Nama Karyawan <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_karyawan" placeholder="Nama Karyawan"
                    name="nama_karyawan" value="'.$data->nama_karyawan.'">
                  </div>
                </div>
                <div class="form-group">
                  <label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir"
                    name="tempat_lahir" value="'.$data->tempat_lahir.'">
                  </div>
                </div>
                <div class="form-group">
                  <label for="tanggal_lahir" class="col-sm-2 control-label">Tanggal Lahir <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir"
                    name="tanggal_lahir" value="'.$data->tanggal_lahir.'">
                  </div>
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <select name="jenis_kelamin" class="form-control">
                    <option value="">[Pilih Jenis Kelamin]</option>
                    <option value="Laki-Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat_karyawan" class="col-sm-2 control-label">Alamat <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <textarea id="alamat" name="alamat_karyawan" required="required" class="form-control" rows="5">'.$data->alamat_karyawan.'</textarea>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="no_telp" class="col-sm-2 control-label">Nomor Telepon <span class="required">*</span></label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="no_telp" placeholder="Nomor Telepon"
                  name="no_telp" value="'.$data->no_telp.'">
                </div>
              </div>
              <div class="form-group">
                <label for="status" class="col-sm-2 control-label">Status <span class="required">*</span></label>

                <div class="col-sm-10">
                <select name="status" class="form-control">
                  <option value="">[Pilih Status]</option>
                  <option value="Guru">Guru</option>
                  <option value="Tata Usaha">Karyawan TU</option>
                  <option value="Kesiswaan">Kesiswaan</option>
                </select>
                </div>
              </div>
              <div class="form-group">
                <label for="mapel1" class="col-sm-2 control-label">Mata Pelajaran 1 </label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="mapel1" placeholder="Mata Pelajaran 1"
                  name="mapel1" value="'.$data->mapel1.'">
                </div>
              </div>
              <div class="form-group">
                <label for="mapel2" class="col-sm-2 control-label">Mata Pelajaran 2 </label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="mapel2" placeholder="Mata Pelajaran 2"
                  name="mapel2" value="'.$data->mapel2.'">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="submit" name="submit" class="btn btn-info pull-right" value="Update"> 
              </div>
              <!-- /.box-footer -->
            </form>
        </div>
      </div>  
   
    </div>
    </div>



    ';}
  ?>