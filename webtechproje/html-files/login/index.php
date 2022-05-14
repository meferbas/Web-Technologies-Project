<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/webtechproje/css-files/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@200&display=swap" rel="stylesheet">    <link rel="stylesheet" href="/css-files/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="design1.css">
    <link rel="stylesheet" href="login.css">

</head>
<body>
<nav class="navbar navbar-expand-md">
    <div class="container" >
        </div>
      </nav>
  
  <ul class="navbar-nav uste">
    <li class="nav-item">
      <a class="nav-link " href="http://127.0.0.1:5501/webtechproje/html-files/index.html"><i class="fas fa-home"></i>Ana Sayfa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://127.0.0.1:5501/webtechproje/html-files/hakkimda.html"><i class="fas fa-user"></i>Hakkımda</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://127.0.0.1:5501/webtechproje/html-files/sehrim.html"><i class="fas fa-city"></i>Şehrim</a>
    </li>
    <li class="nav-item"> 
      <a class="nav-link" href="http://127.0.0.1:5501/webtechproje/html-files/mirasım.html"><i class="fas fa-landmark"></i>Mirasım</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:5501/webtechproje/html-files/cv.html"><i class="fas fa-book"></i></i>Özgeçmişim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:5501/webtechproje/html-files/hobilerim.html"><i class="fas fa-guitar"></i>Hobilerim</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="http://127.0.0.1:5501/webtechproje/html-files/iletisim.html"><i class="fas fa-phone"></i>İletişim</a>
    </li>
    
    <li class="buttonplace">
      <button type="button" class="btn btn-outline-warning btn-lg">Giriş Yap</button> 
    </li>
  </ul>
 
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex h-100 style">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white style2" >
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">GIRIŞ</h2>
              <p class="text-white-50 mb-5">Lütfen mail adresinizi ve şifrenizi giriniz</p>
              <form action="islem.php" method="POST">
              <div class="form-outline form-white mb-4">
                <input type="email" required name="username" placeholder="Mailinizi Giriniz.." id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password"  required name="password" placeholder="Şifrenizi Giriniz.." id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Şifre</label>
              </div>
              <button class="btn btn-outline-light btn-lg px-5 login" type="submit">Giriş Yap</button>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>