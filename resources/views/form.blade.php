<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Form Pendaftaran Camp 2019</title>

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

	<style>
		
		.tab {
			overflow: hidden;
			border: 1px solid #ccc;
			background-color: #f1f1f1;
		}
		
		.tab button {
			background-color: inherit;
			float: inherit;
			border: medium;
			outline: hidden;
			cursor: pointer;
			padding: 16px 16px;
			transition: 0.3s;
			font-size: 17px;
		}
		/* Change background color of buttons on hover */
		
		.tab button:hover {
			background-color: #ddd;
		}
		/* Create an active/current tablink class */
		
		.tab button.active {
			background-color: #ccc;
		}
		/* Style the tab content */
		
		.tabcontent {
			display: none;
			padding: 6px 12px;
			border: 0px solid #ccc;
			border-top: none;
		}
		
		.bg {
			
			background-image:url(public/backgroundweb.jpg);
			background-repeat:round;
			background-size:auto;
		}

	</style>

</head>

<body class="bg">
	<br>
	<br>
	<br>
	<br>
	<br>
	<!-- maaf bang gabisa styling :)) -->
	<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<section class="col-lg-3 col-md-3 col-sm-1 col-xs-1"></section>
		<section class="content col-lg-6 col-md-6 col-sm-10 col-xs-10">
			<div class="box box-primary">
				<form action="{{ route('new_participant') }}" method="post" role="form" class="form-horizontal" name="formnewparticipant" id="formnewparticipant" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="box-header with-border">
						<h2 style="text-align: center;">Pendaftaran Camp PKMBK 2019</h2>
						<h3 style="text-align: center;">1-3 Februari 2018</h3>
					</div>

					<div class="box-header with-border">
						<div style="text-align: center;">
							<p style="text-align: center;">
								Pastikan kalian telah melakukan pembayaran akomodasi CAMP<br> Rp 130.000,-/orang
								<br> ke rekening<br> (BNI) 0769583044 (a.n. Verlinna Lovely M)<br> (Mandiri) 0310012819259 (a.n. Verlinna Lovely M)
							</p>
							<small style="text-align: center; font-size: 15px; color: crimson;">----Bukti Pembayaran Upload di Form ini!!----</small>
						</div>
					</div>

					<div class="box-body">
						@if (session('alert'))
						<div class="alert alert-danger" id="success-alert">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert') }}
						</div>
						@endif {{-- part alert --}} @if (Session::has('after_save'))
						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-dismissible alert-{{ Session::get('after_save.alert') }}">
									<strong>{{ Session::get('after_save.title') }}</strong>
									<a>{{ Session::get('after_save.text-1') }}</a> {{ Session::get('after_save.text-2') }}
								</div>
							</div>
						</div>
						@endif {{-- end part alert --}}


						<div class="col-md-12" align="left">
							<div class="form-group">
								<label class="col-md-4 control-label" style="color: red;">
                            <small>* Wajib diisi<br></small>
                            </label>
							


							</div>
						</div>

						<div class="tab" align="center">
							<button class="tablinks" onclick="openTabs('DataDiri')">
							Data Diri</button>
							<button class="tablinks" onclick="openTabs2('Upload')">Upload</button>
						</div>

						<div id="DataDiri" class="tabcontent">
							<br>
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
										<input type="number" class="form-control" id="nrp" name="nrp" placeholder="NRP 14 digit." required/>
										<small style="color: red; font-size: 10px;">*Gunakan NRP baru!</small><br>
										<small style="color: red; font-size: 10px;">*NRP 10 Digit untuk alumni</small>
									</div>

								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label class="col-md-4 control-label">Email*</label>
									<div class="col-md-4">
										<input type="text" class="form-control" id="email" name="email" required/>
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
											<option value="AKK">AKK(2018)</option>
											<option value="PKK">PKK</option>
											<option value="CPKK">CPKK</option>
											<option value="PELAYAN">PELAYAN</option>
											<option value="ALUMNI">ALUMNI</option>
											<option value="PANITIA">PANITIA(NON PKK/CPKK)</option>
											
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
										<input type="text" class="form-control" id="alergi" placeholder="Kosongkan jika tidak ada." name="alergi"/>
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label class="col-md-4 control-label">Riwayat Penyakit</label>
									<div class="col-md-4">
										<input type="text" class="form-control" id="penyakit" placeholder="Kosongkan jika tidak ada." name="penyakit"/>
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
						</div>

						<div id="Upload" class="tabcontent">
							<br>
							<div class="col-md-12">
								<div class="form-group required">
									<label class="col-md-4 control-label">Foto Diri*</label>
									<div class="col-md-4">
										<input type="file" accept="image/*" id="foto" name="foto" class="form-control custom-file-input" required>
										<span class="custom-file-control"></span>
										<small style="color: red; font-size: 10px;">*Foto berupa pas foto dan hanya .jpg .jpeg dan .png<br>Maksimal file size 2MB</small>
										<small style="color: red; font-size: 10px;">Serta nama foto menggunakan NRP lengkap, contoh:"05211740000096.jpg"</small>
									</div>
								</div>
								<div class="form-group required">
									<label class="col-md-4 control-label">Bukti Transfer*</label>
									<div class="col-md-4">
										<input type="file" accept="image/*" id="bukti_transfer" name="bukti_transfer" class="form-control custom-file-input" required>
										<span class="custom-file-control"></span>
										<small style="color: red; font-size: 10px;">Hanya .jpg .jpeg dan .png<br>Maksimal file size 2MB</small>
									</div>
								</div>
								<div class="box-footer" align="right">
										<button type="reset" class="btn btn-ok">Reset</button>
										<button type="submit" class="btn btn-primary">Daftar</button>
									</div>
							</div>
						</div>


					</div>
				</form>
			</div>
		</section>
		<section class="col-lg-3 col-md-3 col-sm-1 col-xs-1"></section>
	</div>

	<script>
		function openTabs( bagianForm ) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName( "tabcontent" );
			for ( i = 0; i < tabcontent.length; i++ ) {
				tabcontent[ i ].style.display = "none";
			}
			tablinks = document.getElementsByClassName( "tablinks" );
			for ( i = 0; i < tablinks.length; i++ ) {
				tablinks[ i ].className = tablinks[ i ].className.replace( " active", "" );
			}
			document.getElementById( bagianForm ).style.display = "block";
			evt.currentTarget.className += " active";
		}
		function openTabs2( bagianForm ) {
			var i, tabcontent, tablinks;
			var nama 		= document.getElementById("nama").value;
			var nrp  		= document.getElementById("nrp").value;
			var email 		= document.getElementById("email").value;
			var departemen 	= document.getElementById("departemen").value;
			var posisi      = document.getElementById("posisi").value;
			var hp          = document.getElementById("hp").value;
			var hp_ortu     = document.getElementById("hp_ortu").value;
			
			if ( nama == "" || nrp == "" || email == "" || departemen == "" || posisi == "" || hp == "" || hp_ortu == "") {

				alert( "Data diri masih ada yang kosong." );
				return false;
			}
			
			
			tabcontent = document.getElementsByClassName( "tabcontent" );
			for ( i = 0; i < tabcontent.length; i++ ) {
				tabcontent[ i ].style.display = "none";
			}
			tablinks = document.getElementsByClassName( "tablinks" );
			for ( i = 0; i < tablinks.length; i++ ) {
				tablinks[ i ].className = tablinks[ i ].className.replace( " active", "" );
			}
			document.getElementById( bagianForm ).style.display = "block";
			evt.currentTarget.className += " active";
		}
		
	</script>
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