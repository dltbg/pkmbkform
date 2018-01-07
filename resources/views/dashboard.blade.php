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
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$peserta->count()}}</h3>

              <p>Terdaftar</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$verified->count()}}</h3>

              <p>Terverifikasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$unverified->count()}}</h3>

              <p>Belum Terverifikasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{$bus_ok}}</h3>

              <p>Dapat Bus</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$bus_no}}</h3>

              <p>Belum Dapat Bus</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
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
                        <h3>Data Pendaftar Belum Diverifikasi</h3>
                        <div class="table-responsive" style="overflow: auto">
                        <table id="alumni" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NRP</th>
                                <th>Posisi</th>
                                <th>ID Line</th>
                                <th>Konfirmasi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($unverified as $unverif)
                                  <tr>
                                    <td>{{$unverif->id}}</td>
                                    <td>{{$unverif->nama}}</td>
                                    <td>{{$unverif->nrp}}</td>
                                    <td>{{$unverif->posisi}}</td>
                                    <td>{{$unverif->line}}</td>
                                    <td>
                                        <a method="post"href="verified/<?php echo $unverif['nrp'];?>" class="btn btn-success" type="submit" onClick="return confirm('Lakukan verifikasi?')">Verifikasi</a>
                                    </td>
                                  </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div> 
                    </div>
                </div>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <h3>Data Pendaftar Sudah Diverifikasi</h3>
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
                              @foreach($verified as $verif)
                                  <tr>
                                    <td>{{$verif->id}}</td>
                                    <td>{{$verif->nama}}</td>
                                    <td>{{$verif->nrp}}</td>
                                    <td>{{$verif->posisi}}</td>
                                    <td>{{$verif->line}}</td>
                                    <td>
                                        <a method="post" href="unverified/<?php echo $verif['nrp'];?>" class="btn btn-danger" type="submit" onClick="return confirm('Batalkan verifikasi?')";>Batalkan</a>
                                    </td>
                                  </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
            <section class="col-lg-12">
                <div class="row">
                 @for($i=1; $i<=6; $i++)
                <div class="col-lg-2 col-xs-4">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                        @php $bus = 'bus'.$i; @endphp
                      <h3>{{${$bus}->count()}}</h3>

                      <p>BUS {{$i}}</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                  </div>
                </div>
                @endfor
                <!-- ./col -->
               </div>
          </section>
            <section class="row col-lg-12">
                @for($i=1; $i<=3; $i++)
                <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="box box-primary">
                        <div class="box-body">
                            @php $bus = 'bus'.$i; @endphp
                            <h3>Bus {{$i}}</h3>
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
                                @foreach(${$bus} as $buss)
                                    <tr>
                                        <td>{{$buss->id}}</td>
                                        <td>{{$buss->nama}}</td>
                                        <td>{{$buss->nrp}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div> 
                        </div>
                    </div>
                </div>
            @endfor
            </section>
            <section class="row col-lg-12">
                @for($i=4; $i<=6; $i++)
                <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="box box-primary">
                        <div class="box-body">
                            @php $bus = 'bus'.$i; @endphp
                            <h3>Bus {{$i}}</h3>
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
                                @foreach(${$bus} as $buss)
                                    <tr>
                                        <td>{{$buss->id}}</td>
                                        <td>{{$buss->nama}}</td>
                                        <td>{{$buss->nrp}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div> 
                        </div>
                    </div>
                </div>
            @endfor
            </section>
    
            <section class="col-lg-12">
                <div class="row">
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$akk}}</h3>

              <p>AKK</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$cpkk}}</h3>

              <p>CPKK</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$pkk}}</h3>

              <p>PKK</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{$pelayan}}</h3>

              <p>PELAYAN</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$panitia}}</h3>

              <p>PANITIA</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
              <h3>{{$alumni}}</h3>

              <p>ALUMNI</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
       </div>
            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <h3>Data Seluruh Peserta</h3>
                        <div class="table-responsive" style="overflow: auto">
                        <table id="alumni" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NRP</th>
                                <th>Posisi</th>
                                <th>Departemen</th>
                                <th>Nama PKK</th>
                                <th>Alergi</th>
                                <th>Riwayat Penyakit</th>
                                <th>No HP</th>
                                <th>No HP Ortu</th>
                                <th>ID Line</th>
                                <th>Bukti Transfer</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($peserta as $pesertas)
                              <tr>
                                <td>{{$pesertas->id}}</td>
                                <td>{{$pesertas->nama}}</td>
                                <td>{{$pesertas->nrp}}</td>
                                <td>{{$pesertas->posisi}}</td>
                                <td>{{$pesertas->departemen}}</td>
                                <td>{{$pesertas->nama_pkk}}</td>
                                <td>{{$pesertas->alergi}}</td>
                                <td>{{$pesertas->penyakit}}</td>
                                <td>{{$pesertas->hp}}</td>
                                <td>{{$pesertas->hp_ortu}}</td>
                                <td>{{$pesertas->line}}</td>
                                <td>@php 
                                    $url = 'storage/app/'.$pesertas->bukti_transfer;
                                    echo "<img src='$url' width='100' height='100'/>"; @endphp</td>
                              </tr>
                            @endforeach
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
</div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
    </div>
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