<?php
$_SESSION["page"]="home";
require_once "nav.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARCHIEXPO 2023</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- <header>
        <div class="logo">
            <a href=""><img src="assets/LOGO ARCHIEXPO.png" width="50px" height="50px" alt=""></a>
        </div>
        <nav>
            <ul>
                <li><a>Home</a></li>
                <li><a>Our Events</a></li>
                <li><a>Registration</a></li>
            </ul>
        </nav>
        
    </header> -->
    
    
    <section class="content" style="margin-top: 20px; overflow-x: hidden;">
        <div class="text">
            <h1 class="title">
                <span>Explore &</span><br>
                <span>Join us on</span><br>
                <span class="arc">Our Events</span>
            </h1>
        </div>
        <div class="img_group">
            <div class="img_group_inner">
                <img src="assets/Poster ARCHFEST .PNG" alt="">
                <img src="assets/POSTER ASF.png" alt="">
                <img src="assets/POSTER GADA 2023.png" alt="">
                <img src="assets/POSTER LKTI 2023.png" alt="">
                <img src="assets/poster archiexpo FIX.jpg" alt="">

            </div>
        </div>

   
    </section>
    <div class="spacer layer1"> </div>
    <section class="bubble">
           <div class="bottom_text">
            <h5>Welcome to archiexpo 2023</h5>
        </div>
    </section>
    <section class="dark">
      
        <div class="container">
        <div class="row">
              <div class="col-md-12 d-flex justify-content-center">
                <div class="card m-2 cb1 text-center" >
                    <div class="row">
                        <div class="col-md-6">
                        <img src="assets/LOGO ARCHIEXPO.png" width="100%" height="100%" alt="">
                        </div>
                        <div class="col-md-6">
                        <div class="card-body">
                        <span class="card-number fw-bold">About Us</span>
                      <h2 class="card-title mb-4">ARCHIEXPO 2023</h2>
                      <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quas dicta labore eaque incidunt, animi magnam ex nobis odit? Iure ex repellendus aliquid laboriosam officiis magni laborum sint facilis unde.
                      </p><br>
                      <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quas dicta labore eaque incidunt, 
                      </p>
                      <a href="#" class="btn btn-outline-light">Details</a>
                    </div>
                        </div>
                    </div>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    
                  </div>
            </div>
 
        </div>
    </div>
    </section>
    <section class="dark">
      
        <h1>Events</h1>
        <p>Nesciunt, distinctio itaque quam labore corporis architecto minima. Odit expedita incidunt ea corporis sunt
            molestiae neque earum, eos accusamus voluptatum nam dolorum alias repellendus cupiditate? Impedit delectus
            architecto laborum deserunt.</p>
    </section>

    <section class="dark">
      
        <h1>Contact Us</h1>
        <p>Nesciunt, distinctio itaque quam labore corporis architecto minima. Odit expedita incidunt ea corporis sunt
            molestiae neque earum, eos accusamus voluptatum nam dolorum alias repellendus cupiditate? Impedit delectus
            architecto laborum deserunt.</p>
    </section>
    





    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js" integrity="sha512-VJ/iYbiu1eJ6yLimfTi65t2R9TFcG5D9X8ZCfbbEFhTfPnKJh8byoKXEawi5ScJZBYL1eiirL1+MczZDx0Tz9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            $('.text h1 span,.bottom_text h5').lettering();
            var tl = gsap.timeline();
            tl.from(".text h1 span",{
                x:-20,
                duration:1,
                opacity: 0,
                stagger: .1
            })
            .from(".img_group img",{
                x:1100,
                duration: 1,
                opacity:0,
                stagger: .14
            })
            .to(".img_group img",{
                x:1100,
                margin: '0 -140px 0',
                duration: 1,
                opacity:1,
                rotate:15,
                stagger: .14
            },'-=1.4')
            .from(".bottom_text h5 span",{
                x:1100,
                duration: 1,
                opacity:0,
                stagger: .07
            })
            .from("header .logo",{
                y:-20,
                duration: 1,
                opacity:0,
            })
            .from("header nav li",{
                y:-20,
                duration: 1,
                opacity:0,
                stagger: .07

            })
            setTimeout(function(){
                $(".arc").mouseover(function(){
                    gsap.to(".img_group img",{
                        x:100,
                        margin: '0 10px 0',
                        duration: 1,
                        opacity:1,
                        rotate:0,
                        stagger: .14
                    })
                })
                $(".arc").mouseout(function(){
                    gsap.to(".img_group img",{
                        x:1100,
                        margin: '0 -140px 0',
                        duration: 1,
                        opacity:1,
                        rotate:15,
                        stagger: .14
                    })
                })
            }, 500)
        })
    </script>
</body>

</html>