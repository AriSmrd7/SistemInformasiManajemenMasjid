<?php
include('koneksidb.php');
include('fungsi.php');
 
session_start(); // Menciptakan session
if(cek_login($mysqli) == true){
 header('location: home.php');
 exit(); 
}
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['username']) and isset($_POST['password'])){
        $username = $_POST['username'];
       $password = $_POST['password'];
       if(login($username, $password, $mysqli) == true){
           // Jika berhasil login alihkan ke home.php
           header('location: home.php');
         exit();
     }else{
          // Jika gagal login
			echo "<script>window.alert('Username atau password anda salah!');
						  window.location.href=('index.php')
				  </script>";
            exit(); 
        }
   }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Selamat Datang - Masjid Al-Ikhlas</title>
        
<!-- 

Sentra Template

http://www.templatemo.com/tm-518-sentra

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="assets/apple-touch-icon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/css/fontAwesome.css">
        <link rel="stylesheet" href="assets/css/light-box.css">
        <link rel="stylesheet" href="assets/css/owl-carousel.css">
        <link rel="stylesheet" href="assets/css/templatemo-style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
<body>



        <header class="nav-down responsive-nav hidden-lg hidden-md">
          <!-- untuk memanggil header.php-->
		 <?php  require_once "header.php"; ?>
        </header>

        <div class="sidebar-navigation hidde-sm hidden-xs">
           <!-- untuk memanggil sidebar.php-->
		 <?php  require_once "login.php"; ?>
        </div>

        <div class="slider">
           <!-- untuk memanggil sidebar.php-->
		 <?php  require_once "slider.php"; ?>		
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }
            
            lastScrollTop = st;
        }
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
</body>
</html>