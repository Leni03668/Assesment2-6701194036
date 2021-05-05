<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>Dashboard</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/morrisjs/morris.css" />
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-black">
<!-- Page Loader -->
<div class="overlay_menu">
    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-close"></i></button>
    <div class="container">        
        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <div class="input-group m-b-0">                
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card links">
                <div class="body">
                    <div class="row">
                      
                        
                    </div>
                </div>
            </div>            
        </div>
        <div class="row clearfix">
           
            </div>
        </div>
    </div>
</div>
<div class="overlay"></div><!-- Overlay For Sidebars -->

<!-- Left Sidebar -->
<aside id="minileftbar" class="minileftbar">
    <ul class="menu_list">
        <li>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="dashboard.php"><img src="assets/images/tel-u.png" alt="Tel-U"></a>
        </li>
        
            <a href="sign-in.php" class="mega-menu"><i class="zmdi zmdi-power"></i></a>
        </li>
    </ul>    
</aside>

<aside class="right_menu">
    <div class="menu-app">
        <div class="slim_scroll">
           
        </div>
    </div>
   
    <div id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href="dashboard.php"><img src="assets/images/leni.jpeg" alt="User"></a>
                        </div>
                        <div class="detail">
                            <h6>Leni Suryani</h6>
                           
                  </div>
                    </div>
                </li>
                <li class="header">MAIN</li>
                <li class=""> <a href="dashboard.php"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                <li class="active open"> <a href="datanilai.php"><i class="glyphicon glyphicon-file"></i><span>Data Nilai</span></a></li>
                
              
                       
            </ul>
        </div>
    </div>
</aside>

<!-- Main Content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Tambah Semester</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item active">Tambah Semester</li>
                    </ul>
                </div>            
                
            </div>
        </div>
        <div class="row clearfix">
           
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                        
                       <!-- tempat edit -->
                       <section class="content page-calendar">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                   
                </div>            
             
            </div>
        </div>
       
            
            
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    
                    <div class="body">
                        <div class="table-responsive">
                       <a href="tambah.php" ><i class="zmdi zmdi-plus-circle"></i></a></li>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Senester</th>
                                        <th>IP</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php 
		include 'koneksi.php';
	
		$data = mysqli_query($koneksi,"select * from nilai");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
			
				<td><?php echo $d['semester']; ?></td>
				<td><?php echo $d['ip']; ?></td>
				
                <td>
                                            <button class="btn btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-edit"></i></button>
                                            <button class="btn btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-delete"></i></button>
                                        </td>
			</tr>
			<?php 
		}
		?>
                                </thead>                                
                                <tbody>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</section>


			
			
                       <!-- akhir edit -->
                    </div>
                </div>
            </div>
          
        </div>        
               
    </div>
</section>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/morrisscripts.bundle.js"></script> <!-- Morris Plugin Js --> 
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- sparkline Plugin Js --> 
<script src="assets/bundles/doughnut.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
</body>
</html>