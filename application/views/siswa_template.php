<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <!-- custom css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/custom.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<!-- nav bar -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<div class="container padding">
	<div class="row">
	    <div class="col-sm-3">
	        <a href="<?php echo base_url(); ?>index.php/profil/" class="btn btn-danger btn-block btn-compose-email">
	        
	        <span class="logo-lg"><img class="logo_title_big" src="<?php echo base_url(); ?>assets/dist/img/ts.png">SMK TELKOM MALANG</span>

	        </a>
	        <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
	            <li>
	                <a href="<?php echo base_url(); ?>index.php/profil/">
	                    <i class="fa fa-inbox"></i> Profil Siswa <span class="label label-warning pull-right">7</span>
	                </a>
	            </li>
	            <li>
	                <a href="#mail-compose.html"><i class="fa fa-envelope-o"></i> Nilai Siswa</a>
	            </li>
	            <li>
	                <a href="#"><i class="fa fa-certificate"></i> Info Keuangan</a>
	            </li>
	            <li>
	                <a href="#">
	                    <i class="fa fa-file-text-o"></i> Catatan Siswa <span class="label label-info pull-right inbox-notification">35</span>
	                </a>
	            </li>
	        </ul><!-- /.nav -->

	        <h5 class="nav-email-subtitle">More</h5>
	        <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
	            <li>
	                <a href="<?php echo base_url()?>index.php/pengaturan/">
	                    <i class="fa fa-folder-open"></i> Pengaturan (Edit Data)
	                </a>
	            </li>
	            <li>
	                <a href="<?php echo base_url()?>index.php/login/keluar">
	                    <i class="fa fa-folder-open"></i> Sign Out
	                </a>
	            </li>
	        </ul><!-- /.nav -->
	    </div>
	    <div class="col-sm-9">
	        
	        <section class="content">

		    	<?php $this->load->view($main_view); ?>
		      
		    </section>

	    </div>
	</div>
	</div>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
