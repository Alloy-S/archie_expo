<?php
$_SESSION["page"] = "home";
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
    <link rel="stylesheet" href="card.css">
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
                <div class="col-md-12 d-flex  justify-content-center ">
                    <div class="card m-2 cb1 text-center">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="assets/LOGO ARCHIEXPO.png" width="100%" height="100%" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <span class="card-number fw-bold">About Us</span>
                                    <h2 class="card-title mb-4">ARCHIEXPO 2023</h2>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quas dicta
                                        labore eaque incidunt, animi magnam ex nobis odit? Iure ex repellendus aliquid
                                        laboriosam officiis magni laborum sint facilis unde.
                                    </p><br>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quas dicta
                                        labore eaque incidunt,
                                    </p>
                                    <a href="#" class="btn btn-outline-light">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="dark">

        <h1>Events</h1>
        <div class="d-flex flex-wrap justify-content-center event">
            <div class="cardm">
                <img src="assets/POSTER ASF.png" alt="">
                <div class="content">
                    <H1>ASF</H1>
                    <button class="btn" id="ASF-btn"><a class="regist">More Information</a></button>
                    <button class="btn"><a href="#" class="regist">Registration</a></button>
                </div>
            </div>
            <div class="cardm">
                <img src="assets/Poster ARCHFEST .PNG" alt="">
                <div class="content">
                    <H1>ARCHFEST</H1>
                    <button class="btn" id="Archfest-btn"><a class="regist">More Information</a></button>
                    <button class="btn"><a href="#" class="regist">Registration</a></button>
                </div>
            </div>
            <div class="cardm">
                <img src="assets/POSTER GADA 2023.png" alt="">
                <div class="content">
                    <H1>GADA</H1>
                    <button class="btn" id="GADA-btn"><a class="regist">More Information</a></button>
                    <button class="btn"><a href="#" class="regist">Registration</a></button>
                </div>
            </div>
            <div class="cardm">
                <img src="assets/POSTER LKTI 2023.png" alt="">
                <div class="content">
                    <H1>SANKLTI</H1>
                    <button class="btn" id="SANKLTI-btn"><a class="regist">More Information</a></button>
                    <button class="btn"><a href="#" class="regist">Registration</a></button>
                </div>
            </div>
            <div class="cardm">
                <img src="assets/poster archiexpo FIX.jpg" alt="">
                <div class="content">
                    <H1>EXPO</H1>
                    <button class="btn" id="EXPO-btn"><a class="regist">More Information</a></button>
                    <button class="btn"><a href="#" class="regist">Registration</a></button>
                </div>
            </div>
        </div>
    </section>

    <section class="dark">

        <h1>Contact Us</h1>
        <p>Nesciunt, distinctio itaque quam labore corporis architecto minima. Odit expedita incidunt ea corporis sunt
            molestiae neque earum, eos accusamus voluptatum nam dolorum alias repellendus cupiditate? Impedit delectus
            architecto laborum deserunt.</p>
    </section>

    <div id="ASF-modal" class="modal" active="false">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="menu">
                <div class="container-timeline" id="timeline">
                    <div class="top-section">
                        <h1>ASF Timeline</h1>
                    </div>
                    <div class="timeline">
                        <div class="line"></div>
                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>December 16, 2022 - January 8, 2023</h2>
                                <p>
                                    EARLY BIRD REGISTRATION
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>January 9, 2023 - January 31, 2023</h2>
                                <p>
                                    NORMAL REGISTRATION
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>February 1, 2023 - March 3, 2023</h2>
                                <p>
                                    PROJECT SUBMISSION
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>May 14, 2023</h2>
                                <p>
                                    AWARDING NIGHT
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="Archfest-modal" class="modal" active="false">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="menu">
                <div class="container-timeline" id="timeline">
                    <div class="top-section">
                        <h1>ARCHFEST Timeline</h1>
                    </div>
                    <div class="timeline">
                        <div class="line"></div>
                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>December 19, 2022 - January 31, 2022</h2>
                                <p>
                                    Pendaftaran Early Bird Architecture Festival Ke-16
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>January 1, 2023 - January 31, 2023</h2>
                                <p>
                                    Pendaftaran Normal Architecture Festival Ke-16
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>January 1, 2023 - Februari 11, 2023</h2>
                                <p>
                                    Pengumpulan Karya (Online) Architecture Festival Ke-16
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>February 21, 2023</h2>
                                <p>
                                    Penjurian Tertutup Architecture Festival Ke-16
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>February 23, 2023</h2>
                                <p>
                                    Pengumuman Top 25 Architecture Festival Ke-16
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>February 25, 2023</h2>
                                <p>
                                    Pengumuman Top 5 Architecture Festival Ke-16
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>March 11, 2023</h2>
                                <p>
                                    Presentasi Final Architecture festival Ke-16
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>May 14, 2023</h2>
                                <p>
                                    Pengumuman Pemenang Architecture Festival Ke-16
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="GADA-modal" class="modal" active="false">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="menu">
                <div class="container-timeline" id="timeline">
                    <div class="top-section">
                        <h1>GADA Timeline</h1>
                    </div>
                    <div class="timeline">
                        <div class="line"></div>
                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>December 19, 2022 - January 8, 2023</h2>
                                <p>
                                    ONLINE REGISTRATION (EARLY BIRD)
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>January 9, 2023 - February 5, 2023</h2>
                                <p>
                                    ONLINE REGISTRATION (NORMAL)
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>January 16, 2023 - February 11, 2023</h2>
                                <p>
                                    FINAL SUBMISSION
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>February 17, 2023</h2>
                                <p>
                                    CLOSSED ASSESSMENT
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>February 25, 2023</h2>
                                <p>
                                    TOP 10 ANNOUNCEMENT
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>February 21, 2023</h2>
                                <p>
                                    TOP 30 ANNOUNCEMENT
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>March 11, 2023</h2>
                                <p>
                                    FINAL ROUND
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>May 14, 2023</h2>
                                <p>
                                    BEDAH KARYA & ANNOUNCEMENT
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="SANKLTI-modal" class="modal" active="false">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="menu">
                <div class="container-timeline" id="timeline">
                    <div class="top-section">
                        <h1>SANKLTI Timeline</h1>
                    </div>
                    <div class="timeline">
                        <div class="line"></div>
                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>December 19, 2022 - January 6, 2023</h2>
                                <p>
                                    EARLY BIRD REGISTRATION LKTI
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>January 7, 2023 - February 1, 2023</h2>
                                <p>
                                    NORMAL REGISTRATION LKTI
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>December 22, 2023 - February 4, 2023</h2>
                                <p>
                                    PENGUMPULAN ABSTRAK
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>February 2, 2023 - February 11, 2023</h2>
                                <p>
                                    PENJUARIAN ABSTRAK
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>February 13, 2023</h2>
                                <p>
                                    PENGUMUMAN LOLOS
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>February 17, 2023 - March 10, 2023</h2>
                                <p>
                                    PENGUMPULAN FULL PAPER
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>March 1, 2023 - March 12, 2023</h2>
                                <p>
                                    EARLY BIRD REGISTRATION SAN
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>March 11, 2023 - March 20, 2023</h2>
                                <p>
                                    PENJUARIAN TERTUTUP
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>March 13, 2023 - April 11, 2023</h2>
                                <p>
                                    NORMAL REGISTRATION SAN
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>March 21, 2023</h2>
                                <p>
                                    PENGUMUMAN FINALIS
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>April 15, 2023</h2>
                                <p>
                                    SEMINAR ARSITEKTUR NASIONAL (7:45 - 11:15 WIB)
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>April 15, 2023</h2>
                                <p>
                                    LOMBA KARYA TULIS ILMIAH (12.00 - 18:00 WIB)
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>May 14, 2023</h2>
                                <p>
                                    PENGUMUMAN PEMENANG
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="EXPO-modal" class="modal" active="false">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="menu">
                <div class="container-timeline" id="timeline">
                    <div class="top-section">
                        <h1>EXPO Timeline</h1>
                    </div>
                    <div class="timeline">
                        <div class="line"></div>
                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>December 19, 2022 - January 31, 2023</h2>
                                <p>
                                    Open Registration Sayembara Desain Exhibition Architecture Expo 2022/2023
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>December 19, 2022 - January 31, 2023</h2>
                                <p>
                                    Pengumpulan Karya Sayembara Desain Exhibition Architecture Expo 2022/2023
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>February 1, 2023</h2>
                                <p>
                                    Penjurian Tertutup Sayembara Desain Exhibition Architecture Expo 2022/2023
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>February 4, 2023</h2>
                                <p>
                                    Penjurian Terbuka Sayembara Desain Exhibition Architecture Expo 2022/2023
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>February 11, 2023</h2>
                                <p>
                                    Pengumuman Sayembara Desain Exhibition Architecture Expo 2022/2023
                                </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>March 6, 2023 - May 10, 2023</h2>
                                <p>
                                    Open Registration Architalk Series and Workshop Architecture Expo 2022/2023 </p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>May 12, 2023</h2>
                                <p>
                                    Day 1 ( Opening Ceremony, Seminar Arsitektur Nasional, LKTI x Expo )
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>May 13, 2023</h2>
                                <p>
                                    Day 2 ( Bedah Karya dan Workshop ) Architecture Expo 2022/2023
                            </div>
                        </div>

                        <div class="section">
                            <div class="bead"></div>
                            <div class="content-timeline">
                                <h2>May 14, 2023</h2>
                                <p>
                                    Day 3 ( Bedah Karya dan Awarding Night ) Architecture Expo 2022/2023
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js" integrity="sha512-VJ/iYbiu1eJ6yLimfTi65t2R9TFcG5D9X8ZCfbbEFhTfPnKJh8byoKXEawi5ScJZBYL1eiirL1+MczZDx0Tz9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('.text h1 span,.bottom_text h5').lettering();
            var tl = gsap.timeline();


            $('#ASF-btn').click(function() {
                $("#ASF-modal").css("display", "block");
            });

            $('#Archfest-btn').click(function() {
                $("#Archfest-modal").css("display", "block");
            });

            $('#GADA-btn').click(function() {
                $("#GADA-modal").css("display", "block");
            });

            $('#SANKLTI-btn').click(function() {
                $("#SANKLTI-modal").css("display", "block");
            });

            $('#EXPO-btn').click(function() {
                $("#EXPO-modal").css("display", "block");
            });

            $('.close').click(function() {
                $(".modal").css("display", "none");
            });

            $(document).click(function(e) {
                if (e.target == $("#ASF-modal")) {
                    $("#ASF-modal").css("display", "none");
                }
            })
            // window.onclick = function(event) {
            //     if (event.target == modal) {
            //         modal.style.display = "none";
            //     }
            // }

            tl.from(".text h1 span", {
                    x: -20,
                    duration: 1,
                    opacity: 0,
                    stagger: .1
                })
                .from(".img_group img", {
                    x: 1100,
                    duration: 1,
                    opacity: 0,
                    stagger: .14
                })
                .to(".img_group img", {
                    x: 1100,
                    margin: '0 -140px 0',
                    duration: 1,
                    opacity: 1,
                    rotate: 15,
                    stagger: .14
                }, '-=1.4')
                .from(".bottom_text h5 span", {
                    x: 1100,
                    duration: 1,
                    opacity: 0,
                    stagger: .07
                })
                .from("header .logo", {
                    y: -20,
                    duration: 1,
                    opacity: 0,
                })
                .from("header nav li", {
                    y: -20,
                    duration: 1,
                    opacity: 0,
                    stagger: .07

                })
            setTimeout(function() {
                $(".arc").mouseover(function() {
                    gsap.to(".img_group img", {
                        x: 100,
                        margin: '0 10px 0',
                        duration: 1,
                        opacity: 1,
                        rotate: 0,
                        stagger: .14
                    })
                })
                $(".arc").mouseout(function() {
                    gsap.to(".img_group img", {
                        x: 1100,
                        margin: '0 -140px 0',
                        duration: 1,
                        opacity: 1,
                        rotate: 15,
                        stagger: .14
                    })
                })
            }, 500)
        })
    </script>
</body>

</html>