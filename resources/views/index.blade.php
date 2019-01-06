<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Camp PKMBK 2019</title>

      
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
            }

            .sub > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 10px;
                font-weight: 300;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .likebd{
                font-weight: 300;
                letter-spacing: .1rem;
                text-align: center;
            }
            
            .bg {
			
			background-image:url(public/backgroundweb.jpg);
			background-repeat:round;
			background-size:auto;
	        	}
	        	
	        .bgwhite{
	            background-color: white;
	            margin: 20px;
  				padding: 20px;
	        }
	        
	        p{
	           font-family: "Trebuchet MS", Helvetica, sans-serif;
	           
	        }
        </style>
    </head>
    <body class="bg">
        <div class="flex-center position-ref full-height">
            <div class="bgwhite">
                <div class="title s-b-md" style="font-size: 20px;">
                <p style="text-align: center;">
                Selamat Datang !
                </p>
                <div calal="flex-center likebd m-b-md" style="font-size: 15px;">
                    <p style="text-align: center;">
                    Berikut merupakan form pendaftaran untuk Camp PKMBK 2019 !<br>
                    Camp tahun ini bertemakan "I Choose Jesus" <br>
                    yang akan diadakan pada tanggal 1-3 Februari <br>
                    di Lembah Karmel Malang.
                    </p>
                    <p style="text-align: center;">
								Pastikan kalian telah melakukan pembayaran akomodasi CAMP<br> Rp 130.000,-/orang
								<br> REKENING :<br> (BNI) 0769583044 (a.n. Verlinna Lovely M)<br> (Mandiri) 0310012819259 (a.n. Verlinna Lovely M)
					</p>
					<p style="text-align: center;"> 
                    Sebelum mengisi form diminta untuk menyiapkan<br>
                    <u>bukti transfer</u> dan <u>pas foto</u> ya !<br>
                    </p style="text-align: center;">
                </div>
                <div  style="font-size: 15px;">
                    <p style="text-align: center;"> 
                    Silahkan klik tombol di bawah ini untuk melakukan pendaftaran !
                    </p>
                    </div>   
                </div>
                <div class="sub">
                <p style="text-align: center;">
                    <a href="{{ route('/form') }}">--->Daftar<---</a>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
