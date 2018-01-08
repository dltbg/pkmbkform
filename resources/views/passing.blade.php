<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Camp PKMBK 2018</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .likebd{
                font-weight: 600;
                letter-spacing: .1rem;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                Terima Kasih Telah Mendaftar!

                <div calss="flex-center likebd m-b-md" style="font-size: 30px;">
                    <p>
                    Kami akan melakukan validasi pembayaran,<br>
                    silahkan tunggu email konfirmasi sebagai peserta camp :)
                    </p>
                </div>
                <div class="title m-b-md">
                    Tuhan Yesus Memberkati !
                    </div>   
                </div>


                <div class="sub">
                    <a href="{{ route('/') }}">--->Daftar Kembali<---</a>
                </div>
            </div>
        </div>
    </body>
</html>
