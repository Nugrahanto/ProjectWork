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

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Guru Mata Pelajaran <small>X/XI/XII</small></h2>
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
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
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
                            foreach ($guru as $data) {
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
                                  <td><a href="'.base_url().'index.php/karyawan/edit_karyawan/'.$data->kode_karyawan.'"><i class="glyphicon glyphicon-pencil"></i></a></td>
                                </tr>
                                ';
                              $no++;
                            }
                          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>          
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tata Usaha <small></small></h2>
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
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
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
                            foreach ($tu as $data) {
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
                                  <td>'.$data->status.'</td>
                                  <td><a href="'.base_url().'index.php/karyawan/edit_karyawan/'.$data->kode_karyawan.'"><i class="glyphicon glyphicon-pencil"></i></a></td>
                                </tr>
                                ';
                            $no++;
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>          
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kesiswaan <small></small></h2>
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
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
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
                            $guru = "Guru";
                            $no = 1;
                            foreach ($kesiswaan as $data) {
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
                                  <td>'.$data->status.', '.$guru.' '.$data->mapel1.'</td>
                                  <td><a href="'.base_url().'index.php/karyawan/edit_karyawan/'.$data->kode_karyawan.'"><i class="glyphicon glyphicon-pencil"></i></a></td>
                                </tr>
                                ';
                            $no++;
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>          
            </div>
          </div>