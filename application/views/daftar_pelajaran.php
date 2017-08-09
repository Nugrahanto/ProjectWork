      

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
                <h3 class="box-title">Daftar Pelajaran</h3>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a href="<?php echo base_url();?>index.php/pelajaran/"><i class="glyphicon glyphicon-refresh"></i></a></li>
                </ul>
              </div>
              <div class="col-xs-2">
                <button type="button" class="btn btn-block btn-primary"  data-toggle="modal" data-target="#myModal">
                <i class="glyphicon glyphicon-plus"></i>  Tambah Pelajaran
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
                          <th>Kode Pelajaran</th>
                          <th>Mata Pelajaran</th>
                          <th>Lama Jam/Minggu</th>
                          <th>Keterangan</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php 
                            $no = 1;
                            foreach ($pelajaran as $data) {
                              echo '
                                <tr class="odd gradeX">
                                  <td>'.$no.'</td>
                                  <td>'.$data->kode_pelajaran.'</td>
                                  <td>'.$data->mata_pelajaran.'</td>
                                  <td>'.$data->lama_jam.'</td>
                                  <td>'.$data->keterangan.'</td>
                                  <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#'.$data->kode_pelajaran.'">
                                    <i class="glyphicon glyphicon-pencil"></i> </button>
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
          <h4 class="modal-title">Tambah Data Pelajaran</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" id="form-pendaftaran" enctype="multipart/form-data" action="simpan_pelajaran"> 
              <div class="box-body">
                <div class="form-group">
                  <label for="tingkat" class="col-sm-2 control-label">Tingkat <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <select name="tingkat" class="form-control">
                      <option value="">[Pilih Tingkat]</option>
                      <option value="X">X</option>
                      <option value="XI">XI</option>
                      <option value="XII">XII</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="kode_pelajaran" class="col-sm-2 control-label">Kode Pelajaran <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kode_pelajaran" placeholder="Kode Pelajaran"
                    name="kode_pelajaran" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="mata_pelajaran" class="col-sm-2 control-label">Mata Pelajaran <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="mata_pelajaran" placeholder="Mata Pelajaran"
                    name="mata_pelajaran" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="lama_jam" class="col-sm-2 control-label">Lama Jam <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="lama_jam" placeholder="Lama Jam/Minggu"
                    name="lama_jam" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="keterangan" class="col-sm-2 control-label">Keterangan <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <select name="keterangan" class="form-control">
                      <option value="">[Pilih Keterangan]</option>
                      <option value="Kelompok A Wajib">Kelompok A Wajib</option>
                      <option value="Kelompok B Wajib">Kelompok B Wajib</option>
                      <option value="Kelompok C Peminatan">Kelompok C Peminatan</option>
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

      <?php
        foreach ($pelajaran as $data) {
          echo '

    <div class="modal fade" id="'.$data->kode_pelajaran.'" role="dialog">
    <div class="modal-dialog modal-lg">
    
       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data Pelajaran</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" id="form-pendaftaran" enctype="multipart/form-data" action="edit_pelajaran"> 
              <div class="box-body">
                <div class="form-group">
                  <label for="tingkat" class="col-sm-2 control-label">Tingkat <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <select name="tingkat" class="form-control">
                      <option value="">[Pilih Tingkat]</option>
                      <option value="X">X</option>
                      <option value="XI">XI</option>
                      <option value="XII">XII</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="kode_pelajaran" class="col-sm-2 control-label">Kode Pelajaran <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kode_pelajaran" placeholder="Kode Pelajaran"
                    name="kode_pelajaran" value="'.$data->kode_pelajaran.'" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="mata_pelajaran" class="col-sm-2 control-label">Mata Pelajaran <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="mata_pelajaran" placeholder="Mata Pelajaran"
                    name="mata_pelajaran" value="'.$data->mata_pelajaran.'">
                  </div>
                </div>
                <div class="form-group">
                  <label for="lama_jam" class="col-sm-2 control-label">Lama Jam <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="lama_jam" placeholder="Lama Jam/Minggu"
                    name="lama_jam" value="'.$data->lama_jam.'">
                  </div>
                </div>
                <div class="form-group">
                  <label for="keterangan" class="col-sm-2 control-label">Keterangan <span class="required">*</span></label>

                  <div class="col-sm-10">
                    <select name="keterangan" class="form-control">
                      <option value="">[Pilih Keterangan]</option>
                      <option value="Kelompok A Wajib">Kelompok A Wajib</option>
                      <option value="Kelompok B Wajib">Kelompok B Wajib</option>
                      <option value="Kelompok C Peminatan">Kelompok C Peminatan</option>
                  </select>
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