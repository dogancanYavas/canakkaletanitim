<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>İlgi Alanlarım</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body style="background-color: lightblue;">
    <nav>
        <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="/">Hakkında</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cv.php">CV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sehrim.php">Şehrim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="takimimiz.php">Takımımız</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="ilgialanlarim.php">İlgi Alanlarım</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="girisyap.php">Giriş Yap</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="iletisim.php">İletişim</a>
            </li>
        </ul>
    </nav>

    <div id="icerik" class="container" align="center">
        <div align="center" class="row">
            <div class="col-1"></div>
            <div id="content-col" style="background-color:#d6b88f" class="col">
            <p>
    Sayfa her yenilendiğinde veya butona her basıldığında OMDb API kullanarak
    rastgele bir film hakkında bilgi ve filmin afişini getiren JQuery API Uygulamasıdır.
</p>
<h2>Filmin Adı: </h2><span id="fullName"></span>
<h2>Türü: </h2><span id="nickname"></span>
<h2>Yılı: </h2><span id="shortName"></span>
<h2>Afiş:</h2><br>
<img width="150px" class="img-fluid" id="logo" src="">
<br><br>
<button type="button" class="btn btn-primary btn-lg" onclick="filmBul()">Film Bul</button>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <script src="js/api.js"></script>
</body>

</html>
