    
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
                <h1 class="box-title">Catatan Siswa</h1>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a href="<?php echo base_url();?>index.php/catatan/"><i class="glyphicon glyphicon-refresh"></i></a></li>
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

            <div class="box-body">
              <button class='btn btn-xs btn-info info-data-catatan' data-id="info"><i class='glyphicon  glyphicon-info-sign'></i> Info Pengisian Catatan</button>
              <table id="table-data example1" class="table table-bordered table-striped" style="margin-top: 20px;">
                <thead>
                        <tr>
                          <th>No.</th>
                          <th>NIS</th>                       
                          <th>Nama Siswa</th>
                          <th>Kelas</th>
                          <th>Catatan</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody id="table-body">
                        <?php 
                          $no = 1;
                          foreach ($catatan as $data) {
                            echo "
                              <tr class='td' data-id=".$data->id_catatan.">
                                <td class='col-md-1'>".$no."</td>
                                <td class='col-md-1'>".$data->nis."</td>
                                <td class='col-md-3'>".$data->nama_siswa."</td>
                                <td class='col-md-1'>".$data->kelas."</td>
                                <td>
                                  <span class='span-catatan caption' data-id=".$data->id_catatan.">".$data->catatan."</span>
                                  <input type='text' class='field-catatan form-control editor' value='' data-id=".$data->id_catatan." />
                                  <textarea class='field-catatan form-control editor' value='' data-id=".$data->id_catatan."></textarea>
                                </td>
                                <td class='col-md-1'>
                                  <button class='btn btn-xs btn-danger hapus-data-catatan' data-id=".$data->id_catatan."><i class='glyphicon glyphicon-remove'></i> Hapus</button>
                                </td>
                              </tr>
                              ";
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
        
       <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Siswa</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" id="form-pendaftaran" enctype="multipart/form-data" action="tambah_row_catatan"> 
              <div class="box-body">
                <div class="form-group">
                   <label class="control-label col-sm-2" for="nama_siswa">Nama Siswa <span class="required">*</span></label>

                    <div class="col-sm-10">
                      <select class="form-control" name="nama_siswa">
                      <option value="">[Pilih Siswa]</option>
                        <?php 
                            $siswa = $this->db->query("SELECT nis, nama_siswa FROM tb_siswa")
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
                  <label for="mata_pelajaran" class="col-sm-2 control-label"> Catatan <span class="required">*</span> </label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="uas2" placeholder=".."
                        name="uas2" value="-" disabled="">
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