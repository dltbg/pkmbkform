<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form Pendaftaran Camp 2018</title>

        <!-- Fonts -->
<!--        <link href="{{ URL::asset('public/img/philips-icon.png') }}" rel="icon" type="image/png" />-->
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
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <section class="col-lg-3 col-md-3 col-sm-1 col-xs-1"></section>
            <section class="content col-lg-6 col-md-6 col-sm-10 col-xs-10">
            <div class="box box-primary">
                <form action="{{ route('new_participant') }}" method="post" role="form" class="form-horizontal" name="formnewparticipant" id="formnewparticipant" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="box-header with-border">
                    <h2 style="text-align: center;">Pendaftaran Camp PKMBK 2018</h2>
                    <h3 style="text-align: center;">2-4 Februari 2018</h3>
                </div>
                <div class="box-body">
                @if (session('alert'))
                    <div class="alert alert-danger" id="success-alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('alert') }}
                    </div>
                @endif

                    {{-- part alert --}}
                @if (Session::has('after_save'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-dismissible alert-{{ Session::get('after_save.alert') }}">
                            <strong>{{ Session::get('after_save.title') }}</strong>
                            <a>{{ Session::get('after_save.text-1') }}</a> {{ Session::get('after_save.text-2') }}
                            </div>
                        </div>
                    </div>
                @endif
                    {{-- end part alert --}}
                    
                    <div class="col-md-12" align="left">
                        <div class="form-group">
                            <label class="col-md-4 control-label" style="color: red;"><small>* Wajib diisi</small></label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama*</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="nama" name="nama" required/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-4 control-label">NRP*</label>
                            <div class="col-md-4">
                                <input type="number" class="form-control" id="nrp" name="nrp" required/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Departemen*</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="departemen" name="departemen" required/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group required">
                            <label class="col-md-4 control-label">Posisi*</label>
                            <div class="col-md-4">
                                <select class="form-control" id="posisi" name="posisi" required>
                                    <option value="AKK">AKK</option>
                                    <option value="PKK">PKK</option>
                                    <option value="CPKK">CPKK</option>
                                    <option value="PELAYAN">PELAYAN</option>
                                    <option value="ALUMNI">ALUMNI</option>
                                    <option value="PANITIA">PANITIA</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama PKK</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="nama_pkk" name="nama_pkk"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Alergi</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="alergi" name="alergi"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Riwayat Penyakit</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="penyakit" name="penyakit"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-4 control-label">NO HP*</label>
                            <div class="col-md-4">
                                <input type="number" class="form-control" id="hp" name="hp" required/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-4 control-label">NO HP Orangtua*</label>
                            <div class="col-md-4">
                                <input type="number" class="form-control" id="hp_ortu" name="hp_ortu" required/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-4 control-label">ID Line</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="line" name="line"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group required">
                            <label class="col-md-4 control-label">Bukti Transfer*</label>
                            <div class="col-md-4">
                                <input type="file" accept="image/*" id="bukti_transfer" name="bukti_transfer" class="form-control custom-file-input" required>
                                <span class="custom-file-control"></span>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <div class="box-footer" align="right">
                    <button type="reset" class="btn btn-ok">Reset</button>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
                </form>
            </div>
        </section>
            <section class="col-lg-3 col-md-3 col-sm-1 col-xs-1"></section>
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