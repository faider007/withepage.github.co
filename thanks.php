<?php
//v5

session_start();
$_SESSION["pixel"]						= $_GET['pixel'] ?? '';
$_SESSION["name"]						= $_GET['name'] ?? '';
$_SESSION["phone"]						= $_GET['phone'] ?? '';


?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Terima kasih banyak - banyak</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?php echo $_SESSION["pixel"];?>');
        fbq('track', 'PageView');
        fbq('track', 'Lead');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $_SESSION["pixel"];?>&ev=PageView&noscript=1" /></noscript>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        html {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        body {
            font-family: Roboto, Arial, sans-serif;
            line-height: 1.6;
            color: #545454;
            background: url("images/bg.jpg") center center no-repeat;
            background-size: cover;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .container {
            box-sizing: border-box;
            display: flex;
            width: 100%;
            height: 100%;
            margin: 0 auto;
            justify-content: center;
            align-content: center
        }

        .container .wrap {
            font-size: 18px;
            width: 740px;
            padding-top: 30px
        }

        .container h1 {
            font-size: 24px;
            font-weight: 400;
            font-style: italic;
            color: #333;
            text-align: center;
            margin-bottom: .8em
        }

        .container h2 {
            font-size: 18px;
            color: #689f38;
            font-weight: 400;
            margin-bottom: .8em
        }

        .container p {
            margin-bottom: 0.8em
        }

        .container .features {
            padding: 30px 0;
            border-top: 1px solid #CBCBCB;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .container .features > div {
            display: flex;
            text-align: center;
            flex-direction: column;
            justify-content: flex-start;
        }

        .container .features > div > div:first-child {
            height: 80px;
        }

        .container .features img {
            display: block;
            margin: 0 auto;
        }

        .container .features p {
            font-size: 14px;
        }

        .container .features p span {
            display: block;
            font-size: 17px;
            color: #000;
        }


        @media (max-width: 739px) {
            .container {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="wrap">
        <h1><span class="name"><?php echo $_SESSION["name"]; ?></span>, Terima kasih atas pesanan anda!</h1>
        <p>Tahniah pesanan anda berjaya.
            Perunding kesihatan akan dihubungi tidak lama lagi, sila pantau telefon anda.</p>
        <p>Sila semak semula maklumat pendaftaran anda supaya perunding boleh menghubungi anda semula.</p>
        <p>Nama: <span class="name"><?php echo $_SESSION["name"]; ?></span></p>
        <p>Nombor telefon: <span class="phone"><?php echo $_SESSION["phone"]; ?></span></p>
        <h2>Sila beri perhatian kepada telefon anda, perunding akan menghubungi anda dalam masa 15 minit, dalam masa <b>
                dari 7:00 hingga 22:00</b></h2>
        <div class="features">
            <div>
                <div>
                    <img src="images/01.png" width="60px"/>
                </div>
                <div>
                    <p>
                        <span>Produk ini adalah </span>
                        100% produk asli
                    </p>
                </div>
            </div>
            <div>
                <div>
                    <img src="images/02.png" width="50px"/>
                </div>
                <div>
                    <p>
                        Produk sudah
                        <span>berdaftar dengan  <b>BPOM</b></span>
                    </p>
                </div>
            </div>
            <div>
                <div>
                    <img src="images/03.png" width="85px"/>
                </div>
                <div>
                    <p>
                        <span><b>Penghantaran percuma</b></span>
                        terima barang anda,<br/> semak produk kemudian bayar
                    </p>
                </div>
            </div>
            <div>
                <div>
                    <img src="images/04.png" width="60px"/>
                </div>
                <div>
                    <p>
                        <span>
                        Diskaun tambahan  <b>10%</b></span>
                        untuk transaksi<br/> pembayaran pindahan
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
