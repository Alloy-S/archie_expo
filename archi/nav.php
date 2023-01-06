<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARCHIEXPO 2023</title>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<style>
    a {
        text-decoration: none;
      }

      body {
        background-color: black;
      }
      
      .navbar-custom {
        padding: 3px 12px;
        position: relative;
        height: 80px;
      }
      
      .navbar-custom .navbar-brand img {
        /* width: 70px;
        position: absolute;
        top: 4px; */
        transition: .5s linear;
      }

      .navbar-brand img:hover {
        box-shadow: 0px 0px 272px -10px rgba(255,255,255,0.23);
        -webkit-box-shadow: 0px 0px 272px -10px rgba(255,255,255,0.23);
        -moz-box-shadow: 0px 0px 272px -10px rgba(255,255,255,0.23);
        transition: .5s linear;
      }
      
      .navbar-custom .navbar-toggler {
        border: 1px solid #fff;
      }
      
      .navbar-custom .navbar-toggler span {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgb(255, 255, 255)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
      }
      
      .border-bottom-s {
        height: 20px;
      }
      
      .header-border {
        box-shadow: -1px 8px 15px -2px rgba(0, 0, 0, .5);
        /* border-bottom: 2px solid #fdc006; */
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
      }
      
      .navbar-custom .navbar-nav .nav-item {
        margin: 0 6px;
      }
      
      .navbar-custom .navbar-nav .nav-item .nav-link {
        text-align: center;
        color: #fff;
        padding: 12px;
        border-radius: 10px;
        position: relative;
        top: 0;
        font-family: 'Montserrat',sans-serif;
      }
      
      .navbar-custom .navbar-nav .nav-item .border-white {
        position: relative;
        border-radius: 10px;
      }

      .nav-item {
        transition: .5s linear;
      }

      .nav-item:hover {
        box-shadow: 0px 0px 272px -10px rgba(255,255,255,0.23);
        -webkit-box-shadow: 0px 0px 272px -10px rgba(255,255,255,0.23);
        -moz-box-shadow: 0px 0px 272px -10px rgba(255,255,255,0.23);
        transition: .5s linear;
      }


      .dropdown-menu {
        background: rgba(35, 49, 69, 1);
        box-shadow: 0px 0px 272px -10px rgba(255,255,255,0.23);
        -webkit-box-shadow: 0px 0px 272px -10px rgba(255,255,255,0.23);
        -moz-box-shadow: 0px 0px 272px -10px rgba(255,255,255,0.23);
                
        /* opacity: 0; */
        /* transition: .2 linear; */
        animation: showdropdown .5s linear;
        
      }

      a.dropdown-item {
        color: white;
        /* transition: .2 linear; */
      }

      @keyframes showdropdown {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }

      @media screen and (min-width: 991.9px)
      {
        .dropdown-menu#event {
            margin-left: -25px;
            margin-top: 10px;
        }
        .dropdown-menu#regist {
            margin-left: -50px;
            margin-top: 10px;
        }
      }

      @media screen and (max-width: 1150px) 
      {   
        .navbar-custom .navbar-nav .nav-item .nav-link {
            padding: 7px;
        }
      }

      @media screen and (max-width: 991.9px) 
      {
        .navbar-custom {
            padding: 0 6px
        }

        .navbar-custom .navbar-brand img.logo {
            position: relative;
            top: 0;
            left: -7px
        }

        .navbar-custom .navbar-collapse {
            margin-top: 50px;
            background: rgba(35, 49, 79, .5);
            border-radius: 8px;
            box-shadow: 0 0 5px #555;
        }
        
        .navbar-custom .navbar-toggler:focus {
            outline: none!important;
            box-shadow: none!important;
        }

        .navbar-custom .navbar-nav .nav-item .nav-link {
            border-radius: 12px;
            padding: 12px;
            text-align: left;
        }
      }

</style>
<body>
    <div class="header-border">
        <nav class="navbar navbar-expand-lg navbar-custom bg-transparent" style="background: #23314F;">
            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    <img src="assets/LOGO ARCHIEXPO.png" width="50px" height="50px" alt="">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

                    <ul class="navbar-nav mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">TIMELINE</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle navbar-to-about" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">OUR EVENTS</a>
                            <ul class="dropdown-menu" id="event">
                                <li><a class="dropdown-item" href="#">SAYEMBARA</a></li>
                                <li><a class="dropdown-item" href="#">Archfest</a></li>
                                <li><a class="dropdown-item" href="#">ASF</a></li>
                                <li><a class="dropdown-item" href="#">GADA</a></li>
                                <li><a class="dropdown-item" href="#">LKTI</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle navbar-to-about" role="button" data-bs-toggle="dropdown" aria-expanded="false" >REGISTRATION</a>
                            <ul class="dropdown-menu" id="regist">
                            <li><a class="dropdown-item" href="#"> REGIST SAYEMBARA</a></li>
                                <li><a class="dropdown-item" href="#">REGIST Archfest</a></li>
                                <li><a class="dropdown-item" href="#">REGIST ASF</a></li>
                                <li><a class="dropdown-item" href="#">REGIST GADA</a></li>
                                <li><a class="dropdown-item" href="#">REGIST LKTI</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>