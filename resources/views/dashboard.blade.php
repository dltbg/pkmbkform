<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ URL::asset('public/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
          <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::asset('public/adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}">
          <!-- Ionicons -->
    <link rel="stylesheet" href="{{ URL::asset('public/adminlte/bower_components/Ionicons/css/ionicons.min.css') }}">
      <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('public/adminlte/dist/css/AdminLTE.min.css') }}">
            <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::asset('public/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
          <!-- AdminLTE Skins. Choose a skin from the css/skins
               folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ URL::asset('public/adminlte/dist/css/skins/_all-skins.min.css') }}">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      

      </nav>
  </header>
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Terdaftar</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53</h3>

              <p>Terverifikasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Belum Terverifikasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
       </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <section class="col-lg-12">
            <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <h3>Data Pendaftar Belum Diverifikasi
                        <div class="table-responsive" style="overflow: auto">
                        <table id="alumni" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NRP</th>
                                <th>Status</th>
                                <th>ID Line</th>
                                <th>Konfirmasi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Prasetyo Nugrohadi</td>
                                <td>05111440000070</td>
                                <td>Kuli Coding</td>
                                <td>prasetyonz</td>
                                <td>
                                    <a class="btn btn-primary" type="submit">Konfirmasi</a>
                                </td>
                              </tr>
                            </tbody>
                        </table>
                        </div> 
                    </div>
                </div>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <h3>Data Pendaftar Sudah Diverifikasi
                        <div class="table-responsive" style="overflow: auto">
                        <table id="alumni" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NRP</th>
                                <th>Status</th>
                                <th>ID Line</th>
                                <th>Batalkan</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Prasetyo Nugrohadi</td>
                                <td>05111440000070</td>
                                <td>Kuli Coding</td>
                                <td>prasetyonz</td>
                                <td>
                                    <a class="btn btn-danger" type="submit">Batalkan</a>
                                </td>
                              </tr>
                            </tbody>
                        </table>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
            <section class="col-lg-12">
                @for($i=1; $i<=6; $i++)
                <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="box box-primary">
                        <div class="box-body">
                            <h3>Bus {{$i}}
                            <div class="table-responsive" style="overflow: auto">
                            <table id="alumni" class="table table-bordered table-striped">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>NRP</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>Prasetyo Nugrohadi</td>
                                    <td>05111440000070</td>
                                  </tr>
                                </tbody>
                            </table>
                            </div> 
                        </div>
                    </div>
                </div>
                @endfor
            </section>
            <section class="col-lg-12">
            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <h3>Data Seluruh Peserta
                        <div class="table-responsive" style="overflow: auto">
                        <table id="alumni" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NRP</th>
                                <th>Status</th>
                                <th>Departemen</th>
                                <th>Nama PKK</th>
                                <th>Alergi</th>
                                <th>Riwayat Penyakit</th>
                                <th>No HP</th>
                                <th>No HP Ortu</th>
                                <th>ID Line</th>
                                <th>Konfirmasi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Prasetyo Nugrohadi</td>
                                <td>05111440000070</td>
                                <td>Kuli Coding</td>
                                <td>Informatika</td>
                                <td>-</td>
                                <td>Seafood</td>
                                <td>Asma ulhusna</td>
                                <td>087854444653</td>
                                <td>0818589290</td>
                                <td>prasetyonz</td>
                                <td>Sudah / Belum</td>
                              </tr>
                            </tbody>
                        </table>
                        </div> 
                    </div>
                </div>
            </div>
              <table class="col-lg-12"></table>
        </section>

    <!-- /.content -->
    </div>
  </section>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
</div>
<!-- ./wrapper -->

</body>
</html>

<!-- jQuery 3 -->
<script src="{{ URL::asset('public/adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('public/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ URL::asset('public/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('public/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ URL::asset('public/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('public/adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('public/adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('public/adminlte/dist/js/demo.js') }}"></script>