<?php
$user= 'g201210093@ogr.sakarya.edu.tr';
$pass= 'g201210093';
if(isset($_POST['username'])){

    $username= $_POST['username'];
    $password=$_POST['password'];

    if($username==$user && $password==$pass){
        
        echo 'Giriş başarılı, hoşgeldiniz g201210093'; 
        echo ' Birkaç saniye içerisinde anasayfaya yönlendirileceksiniz..';
        header("Refresh: 3; url=http://127.0.0.1:5501/webtechproje/html-files/index.html");


    }
    else{
        echo('Giriş başarısız, bilgileri doğru girdiğinizden emin olunuz.'); 
        
        header("Refresh: 3; url=/webtechproje/login/index.php");
       
        
    }
}
?>