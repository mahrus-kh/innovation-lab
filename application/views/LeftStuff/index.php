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
        <li><a href="<?php echo base_url('student-card/show')?>"><i class="fa fa-id-card" aria-hidden="true"></i><span> Student Card</span></a></li>
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
      <h1><i class="fa fa-shopping-basket"></i> <?php echo $title ?></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $title ?></li>
      </ol>
    </section>
    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="info-box">
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
            <h4 class="box-tittle">Left Stuff Data</h4>
              <div class="box-tools pull-right">
                  <button type="button" class="btn btn-primary btn-sm" onclick="add()"><span class="glyphicon glyphicon-plus"></span> Left Stuff</button>
              </div>
          </div>
          <div class="box-body">
            <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id="left-stuff-dt">
                <thead>
                  <tr class="info">
                    <th>Stuf Name</th>
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
    <strong>Copyright &copy; 2017<a href="#"></a></strong>
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
var leftstuff_dt;
var method;
$(document).ready(function () {
  count_stuff();
  leftstuff_dt = $('#left-stuff-dt').DataTable({
                  "autoWidth": false,
                  "processing": true,
                  "serverSide": true,
                  "order": [[2,'desc'],[3,'asc']],
                  "ajax": "show_data",
                  "columns": [
                        {"data": "stuff_name"},
                        {"data": "location"},
                        {"data": "posted_at", "class": "text-center"},
                        {"data": "status", "class": "text-center"},
                        {"data": "tools", "class": "text-center","orderable": false}
                  ],
               });

  $("#trash").click(function () {
      $.ajax({
        type: "POST",
        url: "trash",
        data: {id_trash:$("#id_trash").val()},
        success: function (data) {
        $("#modal-trash").modal("hide")
        count_stuff()
        leftstuff_dt.ajax.reload(null,false)
        }
      });
  });
});

function add() {
    method = "add"
    $("#id_update").html("")
    $("#posted_at").html("")
    $("#status").html("")
    $("#taken_at").html("")
    $("#who_taken").html("")
    $('.modal-title').text("Add Left Stuff")
    $("#act").text("SAVE")
    $("#act").attr('class','btn btn-primary')
    $("#form-left-stuff")[0].reset()
    $("#modal-left-stuff").modal("show")
};

function edit(id) {
    method = "update"
    $("#id_update").html('<input type="text" name="id_left_stuff" class="hidden" readonly="readonly">')
    $("#posted_at").html('<div class="form-group"><label for="" class="col-sm-3 control-label">Posted At</label><div class="col-sm-5"><input type="text" class="form-control" name="posted_at" readonly="readonly"></div></div>')
    $("#status").html('<div class="form-group"><label for="" class="col-sm-3 control-label">Status</label><div class="col-sm-7"><label class="radio-inline"><input type="radio" name="status" value="Taken" id="status_taken">Taken</label><label class="radio-inline"><input type="radio" name="status" value="Have Not Taken" id="status_have_not_taken">Have Not Taken</label></div></div>')
    $("#taken_at").html('<div class="form-group"><label for="" class="col-sm-3 control-label">Taken At</label><div class="col-sm-5"><input type="text" class="form-control" name="taken_at" readonly="readonly"></div></div>')
    $("#who_taken").html('<div class="form-group"><label for="" class="col-sm-3 control-label">Who Taken</label><div class="col-sm-8"><input type="text" class="form-control" name="who_taken"></div></div>')
    $('.modal-title').text("Update Left Stuff")
    $("#act").text("UPDATE")
    $("#act").attr('class','btn btn-success')
    $("#form-left-stuff")[0].reset()

    $.ajax({
        type: "POST",
        url: "edit",
        dataType: "json",
        data: {id:id},
        success: function (data) {
          $('[name="id_left_stuff"]').val(data.id_left_stuff)
          $('[name="stuff_name"]').val(data.stuff_name)
          $('[name="location"]').val(data.location)
          $('[name="posted_at"]').val(data.posted_at + " WIB")
          $('[name="who_posted"]').val(data.who_posted)
          $('[name="etc"]').val(data.etc)
          if (data.status == '<label class="text-danger">Have Not Taken</label>') {
              $("#status_have_not_taken").attr('checked',true)
          }
          else if(data.status== '<label class="text-success">Taken</label>') {
              $("#status_taken").attr('checked',true)
          }
          $('[name="taken_at"]').val(data.taken_at + " WIB")
          $('[name="who_taken"]').val(data.who_taken)
          $("#modal-left-stuff").modal("show")
        }
    });
};

  function save() {
      $.ajax({
        type: "POST",
        url: method,
        data: $("#form-left-stuff").serialize(),
        success: function (data) {        
          if (data == 1) {
            $("#form-left-stuff")[0].reset()
            $("#modal-left-stuff").modal("hide")
            count_stuff()
            leftstuff_dt.ajax.reload(null,false)
          }
          else {
            alert("Left Stuff Data is Invalid")
          }
        }
      });
  };

  function del(id) {
    $("#id_trash").val(id)
    $("#modal-trash").modal("show")
  };

  function count_stuff() {
    $.ajax({
        type: "POST",
        url: "count_stuff",
        dataType: "json",
        success: function (data) {
            $("#all").html(data.all)
            $("#taken").html(data.taken)
            $("#have_not_taken").html(data.nottaken)
        }
    });
  };
</script>
