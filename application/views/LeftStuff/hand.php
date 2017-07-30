<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>i-Lab | <?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <?php echo link_tag('assets/bootstrap/css/bootstrap.css');
        echo link_tag('assets/plugins/datepicker/datepicker3.css');
        echo link_tag('assets/plugins/datatables/jquery.dataTables.css"');
        echo link_tag('assets/plugins/datatables/dataTables.bootstrap.css');
  ?>
  <!-- Font Awesome -->
  <?php //echo link_tag('assets/lte/plugins/font-awesome/css/font-awesome.min.css');?>
  <?php echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'); ?>
  <!-- Theme style -->
  <?php echo link_tag('assets/dist/css/AdminLTE.min.css'); ?>
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <?php echo link_tag('assets/dist/css/skins/skin-blue.min.css'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo current_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>i-Lab</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Innovation Lab</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
               <img src="http://localhost/innovation-lab/assets/images/mahruskh.jpg" class="user-image" alt="User Image"/>
               <span class="hidden-xs">Mahrus Khomaini</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="http://localhost/innovation-lab/assets/images/mahruskh.jpg" class="img-circle" alt="User Image"/><p>
                Mahrus Khomaini - Web Developer</p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                   <a href="http://localhost/innovation-lab/login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php //echo img(array("src"=>"assets/images/mahruskh.jpg","class"=>"img-circle","alt"=>"User Image")); ?>
        </div>
        <div class="pull-left info">
          <p><?php //echo $nama; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href=""><i class="fa fa-dashboard"></i><span> Dashboard</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-graduation-cap"></i><span> Student</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('student-data/show')?>"><i class="fa fa-circle-o"></i> Student Data</a></li>
            <li><a href="<?php echo base_url('student-card/show')?>"><i class="fa fa-circle-o"></i> Student Card</a></li>
          </ul>
        </li>
        <li class="active"><a href="<?php echo base_url('left-stuff/show')?>"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span> Left Stuff</span></a></li>
        <li><a href=""><i class="fa fa-hdd-o" aria-hidden="true"></i><span> Repository</span></a></li>
        <li><a href="<?php echo base_url('certification/show') ?>"><i class="fa fa-certificate" aria-hidden="true"></i><span> Certification</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-edit"></i><span> Blogs</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Information</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Staff</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i><span> Users</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Admin</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Member</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="fa fa-id-card"></i> <?php echo $title ?></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $title ?></li>
      </ol>
    </section>
    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="info-box" id="taken_show">
          <span class="info-box-icon bg-green fa fa-check"></span>
          <div class="info-box-content">
            <span class="info-box-text">Taken</span>
            <span class="info-box-number"><div id="taken"></div></span>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="info-box">
          <span class="info-box-icon bg-blue fa fa-circle-o"></span>
          <div class="info-box-content">
            <span class="info-box-text">All</span>
            <span class="info-box-number"><div id="all"></div></span>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="info-box">
          <span class="info-box-icon bg-red fa fa-times"></span>
          <div class="info-box-content">
            <span class="info-box-text">Have Not Taken</span>
            <span class="info-box-number"><div id="have_not_taken"></div></span>
          </div>
        </div>
      </div>
    </div>
        <div class="box box-primary">
          <div class="box-header with-border">
            <h4 class="box-tittle"><i class="fa fa-shopping-basket"></i> Left Stuff Data</h4>
              <div class="box-tools pull-right">
                  <button type="button" class="btn btn-primary btn-sm" onclick=""><i class="fa fa-plus"></i> Add Left Stuff</button>
              </div>
          </div>
          <div class="box-body">
            <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id="left-stuff-dt">
                <thead>
                  <tr class="info">
                    <th>Stuff Name</th>
                    <th>Location</th>
                    <th>Posted At</th>
                    <th>Status</th>
                    <th>Tools</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
          </div>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">

    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="../assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>

<script src="../assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="../assets/plugins/datatables/jquery.dataTables.js"></script>


<!-- AdminLTE App -->
<script src="../assets/dist/js/app.min.js"></script>
</body>
</html>
<script type="text/javascript">
var leftstuff_dt ;
$(document).ready(function () {
  leftstuff_dt = $('#left-stuff-dt').DataTable({
                  "autoWidth": false,
                  "processing": true,
                  "serverSide": true,
                  "order": [[2,'asc']],
                  "ajax": {
                          "url": '<?php echo site_url('left-stuff/hand'); ?>',
                          "type": "POST"
                  },
                  "columns": [
                        {"data": "stuff_name"},
                        {"data": "location"},
                        {"data": "posted_at"},
                        {"data": "status", "class": "text-center"},
                        // {"data": "Tools", "class": "text-center"}
                  ],
               });

  $("#mahruskhomaini").click(function () {
    alert("OOO")
  });


  $("#trash").click(function () {
      $.ajax({
        type: "POST",
        url: "trash",
        data: {id_trash:$("#id_trash").val()},
        success: function (data) {
          $("#modal-trash").modal("hide")
          leftstuff_dt.ajax.reload(null,false)
        }
      });
  });

  $("#taken_show").click(function () {
      alert("oek")
  });

});
  function del(id) {
    $("#id_trash").val(id)
    $("#modal-trash").modal("show")
  };
</script>
