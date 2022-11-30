<?php

include("admin/connect.php");
include("admin/functions.php");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Sammy</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/x-icon" href="images/sammy_logo_1.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<style>
    .swiper-pagination-bullet-active {
        background-color:crimson !important;
    }
    .swiper-pagination-bullet {
        background-color:crimson !important;
    }
    @media(max-width:500px){
        .about-small-pix{
            height:500px !important;
        }
        .about-small-pix .img-box{
            height:100% !important;
        }
        .about-small-pix .img-box img{
            height:100% !important;
        }
    }
    p{
        font-family: 'Ubuntu', sans-serif;
    }
    span{
        font-family: 'Ubuntu', sans-serif;
    }
    body .second-section {
        width: 100% !important;
        background: rgb(20, 20, 20);
    }
    .col-lg-4 .icon-card-1 {
        width: 100%;
        height: fit-content;
        background: rgb(20, 20, 20);
    }
    .logo-small-box{
        width:150px;
        height:40px;
    }
    .logo-small-box img{
        width:100%;
        height:100%;
        object-fit:contain;
    }
    .logo-small{
        width:150px;
        height:50px;
    }
    .logo-small img{
        width:100%;
        height:100%;
        object-fit:contain;
    }
    body .smallNav {
        position: fixed;
        width: 100% !important;
        bottom: 0;
        left: 0;
        z-index: 100 !important;
        box-shadow: 0px -1px 2px white;
        background-color: black;
        height: fit-content;
    }

</style>
<body class="position-relative">


    <nav class="smallNav d-lg-none">
        
        <div class="d-flex justify-content-between align-items-center py-2">
            <a href="#" class="fs-4 pt-2 sammy-link m-0" style="text-decoration:none;"><div class="logo-small-box"><img src="images/sammy_logo_1.png" alt="" srcset=""></div></a>
            <p class="fs-5 m-0 pt-2 px-4" id="menu"><i class="fa-solid fa-bars" style="font-size:1.5rem;"></i></p>
        </div>
        <div class="d-block  no-nav" id="mainNav">
            <div class="d-block m-auto py-3" style="width:75%;">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="small-links-close d-block" style="text-decoration:none;width:fit-content;"><i class="fa-solid fa-house d-flex justify-content-center" style="color:white;font-size:1.4rem;"></i><p class="" id="smalllinksone">Home</p></a>
                    <a href="#about" class="small-links-close" style="text-decoration:none;"><i class="fa-solid fa-address-card d-flex justify-content-center" style="color:white;font-size:1.4rem;"></i><p class="" id="smalllinksone">About me</p></a>
                    <a href="#services" class="small-links-close" style="text-decoration:none;"><i class="fa-brands fa-servicestack d-flex justify-content-center" style="color:white;font-size:1.4rem;"></i><p class="" id="smalllinksone">Services</p></a>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <a href="#skills" class="small-links-close" style="text-decoration:none;"><i class="fa-solid fa-laptop-code d-flex justify-content-center" style="color:white;font-size:1.4rem;"></i><p class="" id="smalllinksone">Skills</p></a>
                    <a href="#project" class="small-links-close" style="text-decoration:none;"><i class="fa-solid fa-laptop-file d-flex justify-content-center" style="color:white;font-size:1.4rem;"></i><p class="" id="smalllinksone">Project</p></a>
                    <a href="#testimonial" class="small-links-close" style="text-decoration:none;"><i class="fa-solid fa-comment d-flex justify-content-center" style="color:white;font-size:1.4rem;"></i><p class="" id="smalllinksone">Testimonail</p></a>
                </div>
            </div>
        </div>
        
    </nav>

    

    <!-- first section -->
    <section class="first-section">
        <!-- nav bar -->
        
        <nav class="d-lg-block d-none">
            <div class="container-fluid py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-block m-0 px-5">
                        <a href="#" class="fs-4 sammy-link" style="text-decoration:none;">
                            <div class="logo-small"><img src="images/sammy_logo_1.png" alt="" srcset=""></div>
                        </a>
                    </div>
                    <div class="d-block m-0 px-4">
                        <ul class="first-ul m-0">
                            <li class="px-3">
                                <a href="#about" class="fs-6 fw-bold text-light fw-light" style="text-decoration:none;">About me</a>
                            </li>
                            <li class="px-3">
                                <a href="#services" class="fs-6 fw-bold text-light fw-light" style="text-decoration:none;">Services</a>
                            </li>
                            <li class="px-3">
                                <a href="#skills" class="fs-6 fw-bold text-light fw-light" style="text-decoration:none;">Skills</a>
                            </li>
                            <li class="px-3">
                                <a href="#project" class="fs-6 fw-bold text-light fw-light" style="text-decoration:none;">Project</a>
                            </li>
                            <li class="px-3">
                                <a href="#testimonial" class="fs-6 fw-bold text-light fw-light" style="text-decoration:none;">Testimonail</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- inside first -->
        <div class="container-fluid">
            <div class="row pb-5">
                <div class="col-lg-7 col-md-8 col-12 first-column px-lg-5">
                    <div class="d-block">
                        <span class="fs-4 text-start px-1 opacity-75">Hi there</span>
                        <p class="text-start sammy-text" style="">I'm  <span class="sammy-block fw-bold">Sammy</span></p>
                        <span class="text-start px-1 sammy-text-one my-4">and I'm a <span class="texting"> web developer</span></span>
                        <p class="fs-5 opacity-75 sammy-text-two" >with a high level of programming language skills and an experience to help you with your project</p>

                        <a href="" class="btn btn-general first-btn px-4 py-2 fs-4" download>Download cv</a>
                        <a href="#contact" class="btn btn-general second-btn px-4 py-2 fs-4">Hire me</a>
                    </div>
                </div>
            </div>
            <div class="row pt-4 pt-lg-0">
                <div class="col-lg-8 col-12 pt-5 pt-lg-0 px-lg-4 p-1">
                    <div class="d-flex  pt-5">
                        <!-- <div class="d-flex align-items-center">
                            <p class="last-icon-in-fisrt-section"><i class="fa-brands fa-facebook" style="color:crimson;"></i></p>
                            <div class="d-block mx-2 m-0">
                                <span class="last-in-first-section-1 ">Messenger</span>
                                <p class="last-in-first-section-2">Ogunnaike sammy</p>

                            </div>
                        </div> -->
                        <div class="d-flex align-items-center mx-lg-5 mx-3 mx-md-4">
                            <p class="last-icon-in-fisrt-section"><i class="fa-brands fa-whatsapp" style="color:crimson;"></i></p>
                            <a href="https://wa.me/+2348140023959" class="d-block mx-2 m-0" style="text-decoration:none;">
                                <span class="last-in-first-section-1">Whatsapp</span>
                                <p class="last-in-first-section-2">+23481-400-239-59</p>

                            </a>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="last-icon-in-fisrt-section"><i class="fa-solid fa-envelope" style="color:crimson;"></i></p>
                            <a href="mailto:ogunnaikesammy258@gmail.com" class="d-block mx-2 m-0" style="text-decoration:none;">
                                <span class="last-in-first-section-1 ">Gmail</span>
                                <p class="last-in-first-section-2">Ogunnaikesammy258@gmail.com</p>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>                       





    <!-- second section -->
    <section class="second-section" id="about">
        <div class="container-lg py-5">
            <div class="row">
                <div class="col-12">
                    <p class="fs-1 fw-bold text-center">About <span style="color: crimson;">Me</span></p>
                </div>
                <div class="col-lg-6 col-md-6 about-small-pix">
                    <div class="img-box ms-auto" style="border:10px solid black;border-radius:10px;">
                        <img src="images/me-only.png" style="border-radius:10px;">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="text-area">
                        <p class="fs-6 pass">I'm sammy and my full name is Ogunnaike samuel am a full-stack developer with over
                            a year of quality experience. I'm am a young lad but am qualified to get your work done . I'm am
                            fully backed up with some couple of skills  in frontend development(i.e html, css, javascript, bootstrap),
                            backend development(i.e php, mysql, laravel, javascript) and am good at making your project a lively one, 
                            I've worked on some couple of project and ve gooten nice testimonial from my client , And would like to work
                            on your project . kindly hire me thanks.
                        </p>
                        <div class="d-lg-flex d-md-flex d-none">
                            <a href="" class="btn btn-general first-btn px-4 py-2 fs-5 mx-1">Download cv</a>
                            <a href="" class="btn btn-general second-btn px-4 py-2 fs-5 mx-1">Hire me</a>
                        </div>
                        <div class="d-flex d-md-none d-lg-none justify-content-center">
                            <a href="" class="btn btn-general first-btn px-4 py-2 fs-5 mx-1">Download cv</a>
                            <a href="#contact" class="btn btn-general second-btn px-4 py-2 fs-5 mx-1">Hire me</a>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>



    <!-- third section -->
    <section class="third-section" id="services">
        <div class="container-lg py-5">
            <div class="row px-lg-5">
                <div class="col-12">
                    <p class="fs-1 fw-bold text-center"><span style="color: crimson;">My </span>Services</p>
                </div>
                

                <?php
                    
                    $sql="SELECT * FROM `code`";
                    $result=mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)){
                        while($row=mysqli_fetch_assoc($result)){
                            $name=$row["name"];
                            $code=$row["code"];
                            $id=$row["id"];
                            $description=$row["description"];
                            $first=$row["first"];
                            $second=$row["second"];
                            $third=$row["third"];
                            indexskills($code, $name, $description, $first, $second, $third, $id);
                        }
                       
                        
                    }
                    
                ?>

                
            </div>
        </div>
    </section>




    <!-- fourth section -->
    <section class="fourth-section" id="skills">
        <div class="container-lg">
            <div class="row py-4">
                <div class="col-12">
                    <p class="fs-1 fw-bold text-center"><span style="color: crimson;">My </span>SKills</p>
                </div>
               
                <div class="col-lg-5 col-md-5 col-6 ms-auto d-lg-block d-md-block d-none">
                    <div class="d-block fouth-section-ms" style="width:fit-content;">
                        
                        <div class="d-flex align-content-center" id="frontend">
                            <p class="fs-4 m-0 mx-lg-3 mx-md-3 mx-2"><i class="fa-solid fa-code pt-2" style="color:crimson;"></i></p>
                            <div class="d-block m-0" style="pointer-event:none;">
                                <span class="fs-5">Frontend</span>
                                <p style="font-size:0.7em;margin-top:-5px;">over year of experience</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-content-center" id="fullstack">
                            <p class="fs-4 m-0 mx-lg-3 mx-md-3 mx-2"><i class="fa-solid fa-laptop-code" style="color:crimson;"></i></p>
                            <div class="d-block m-0">
                                <span class="fs-5">Full-stack</span>
                                <p style="font-size:0.7em;margin-top:-5px;">over year of experience</p>
                            </div>
                        </div>
                        <div class="d-flex align-content-center" id="dataBase" style="cursor:pointer !important;">
                            <p class="fs-4 m-0 mx-lg-3 mx-md-3 mx-2"><i class="fa-solid fa-database" style="color:crimson;"></i></p>
                            <div class="d-block m-0">
                                <span class="fs-5">Database</span>
                                <p style="font-size:0.7em;margin-top:-5px;">over year of experience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-5 d-lg-none d-md-none d-block">
                    <div class="d-block fouth-section-ms m-auto" style="width:fit-content;">
                        <div class="d-block" style="width:fit-content;" id="smallFrontend">
                            <div class="d-flex align-content-center">
                                <p class="fs-4 m-0 mx-lg-3 mx-md-3"><i class="fa-solid fa-code pt-2" style="color:crimson;"></i></p>
                                <div class="d-block m-0" style="padding-left:5px;">
                                    <span class="" style="font-size:1.1rem;">Frontend</span>   
                                </div>
                                <i class="fa-solid fa-chevron-right mt-2" style="margin-left:20px;color:crimson;" id="smallFrontend_iconone"></i>
                                <i class="fa-solid fa-angles-right mt-2 d-none" style="margin-left:20px;color:crimson;" id="smallFullstack_icontwo"></i>
                                
                            </div>
                            <p class="position-relative" style="font-size:0.7em;top:-10px;left:30px;">over year of experience</p>
                        </div>
                       <div class="d-block" style="width:fit-content;" id="smallFullstack">
                            <div class="d-flex align-content-center">
                                <p class="fs-4 m-0 mx-lg-3 mx-md-3"><i class="fa-solid fa-laptop-code" style="color:crimson;"></i></p>
                                <div class="d-block m-0" style="padding-left:5px;">
                                    <span class="d-flex" style="font-size:1.1rem;">Full_stack</span>   
                                </div>
                                <i class="fa-solid fa-chevron-right mt-2" id="smallFullstack_iconone" style="margin-left:15px;color:crimson;"></i>
                                <i class="fa-solid fa-angles-right mt-2 d-none" id="smallFullstack_icontwo" style="margin-left:15px;color:crimson;"></i>
                            </div>
                            <p class="position-relative" style="font-size:0.7em;top:-10px;left:30px;">over year of experience</p>
                       </div>
                       <div class="d-block" style="width:fit-content;" id="smallDatabase">
                            <div class="d-flex align-content-center">
                                <p class="fs-4 m-0 mx-lg-3 mx-md-3"><i class="fa-solid fa-database" style="color:crimson;"></i></p>
                                <div class="d-block m-0" style="padding-left:6px;">
                                    <span class="" style="font-size:1.1rem;">Database</span> 
                                </div>
                                <i class="fa-solid fa-chevron-right mt-2" style="margin-left:20px;color:crimson;" id="smallDatabase_iconone"></i>
                                <i class="fa-solid fa-angles-right mt-2 d-none" style="margin-left:20px;color:crimson;" id="smallDatabase_icontwo"></i>
                            </div>
                            <p class="position-relative" style="font-size:0.7em;top:-10px;left:30px;">over year of experience</p>
                       </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 d-lg-block d-md-block d-none">
                    <div class="d-block px-4" style="height:fit-content;border-left:1px solid rgb(40,40,40);border-radius:2px;" id="frontendDisplay">
                        <div class="display">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">Html</span>
                                <span class="fs-6 m-0">100%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:100%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        <div class="display mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">css</span>
                                <span class="fs-6 m-0">90%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:90%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        <div class="display mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">javascript</span>
                                <span class="fs-6 m-0">70%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:70%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        <div class="display mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">Bootstrap</span>
                                <span class="fs-6 m-0">85%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:85%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none px-4" style="height:fit-content;border-left:1px solid rgb(40,40,40);border-radius:2px;" id="fullstackDisplay">
                        <div class="display">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">Javascript</span>
                                <span class="fs-6 m-0">70%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:70%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        <div class="display mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">PHP</span>
                                <span class="fs-6 m-0">90%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:90%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        <div class="display mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">Laravel</span>
                                <span class="fs-6 m-0">50%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:50%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="d-none px-4" style="height:fit-content;border-left:1px solid rgb(40,40,40);border-radius:2px;" id="databaseDisplay">
                        <div class="display">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">Mysql</span>
                                <span class="fs-6 m-0">90%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:90%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        <div class="display mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">MangoDB</span>
                                <span class="fs-6 m-0">30%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:30%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        <div class="display mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">Excel</span>
                                <span class="fs-6 m-0">70%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:70%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 col-7 d-lg-none d-md-none d-block m-auto pb-4">
                    <div class="d-block" style="height:fit-content;border-left:1px solid rgb(40,40,40);border-radius:2px;padding-left:18px;" id="smallFrontenddisplay">
                        <div class="display">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">Html</span>
                                <span class="fs-6 m-0">100%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:100%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        <div class="display mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">css</span>
                                <span class="fs-6 m-0">90%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:90%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        <div class="display mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">javascript</span>
                                <span class="fs-6 m-0">70%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:70%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        <div class="display mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">Bootstrap</span>
                                <span class="fs-6 m-0">85%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:85%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none px-4" style="height:fit-content;border-left:1px solid rgb(40,40,40);border-radius:2px;padding-left:18px;" id="smallFullstackdisplay">
                        <div class="display">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">Javascript</span>
                                <span class="fs-6 m-0">70%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:70%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        <div class="display mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">PHP</span>
                                <span class="fs-6 m-0">90%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:90%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        <div class="display mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">Laravel</span>
                                <span class="fs-6 m-0">50%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:50%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="d-none px-4" style="height:fit-content;border-left:1px solid rgb(40,40,40);border-radius:2px;padding-left:18px;" id="smallDatabasedisplay">
                        <div class="display">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">Mysql</span>
                                <span class="fs-6 m-0">90%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:90%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        <div class="display mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">MangoDB</span>
                                <span class="fs-6 m-0">30%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:30%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                        <div class="display mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-6 m-0">Excel</span>
                                <span class="fs-6 m-0">70%</span>
                            </div>
                            <div class="progress-bar bg-light">
                                <div class="inside" style="width:70%;height:100%;background:crimson;"></div>
                            </div>
                        </div>
                       
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!-- fifth section -->
    <section class="fifth-section py-5">
        <div class="container py-4">

            <div class="row px-lg-4 px-md-2 px-0">
                <div class="col-lg-6 col-md-8 col-12 pt-5 p-0 p-md-2 p-lg-3">
                    <div class="d-flex justify-content-between align-items-center px-3 px-lg-0 px-md-0">
                        <div class="d-block m-0">
                            <p class="fifth-experience text-center" style="line-height:5px;">01+</p>
                            <p class="fifth-experience-1 opacity-75 text-center">years of experience</p>
                        </div>
                        <div class="d-block m-0">
                            <p class="fifth-experience text-center" style="line-height:5px;">08+</p>
                            <p class="fifth-experience-1 opacity-75">Completed project</p>
                        </div>
                        <div class="d-block m-0">
                            <p class="fifth-experience text-center" style="line-height:5px;">02+</p>
                            <p class="fifth-experience-1 opacity-75">pending project</p>
                        </div>
                    </div>
                    <div class="d-block">
                        <div class="text-area ">
                            <p class=" text-center fifth-pass">I believe I'm the best person for your job so pls 
                                search nomore amd kindly place your order, And i will be glad to work for you , 
                                still waiting for your order
                            </p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-general first-btn px-4 py-2 fs-4 mx-1">Download cv</a>
                            <a href="#contact" class="btn btn-general second-btn px-4 py-2 fs-4 mx-1">Hire me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    

    <!--sixth section  -->
    <section class="sixth-section" id="project">
        <div class="container-lg">
            <div class="row">
                <div class="col-12 py-3">
                    <p class="fs-1 fw-bold text-center"><span style="color: crimson;">My </span>Projects</p>
                </div>
                <div class="col-lg-4 col-md-6 col-10 m-auto">
                    <!-- <div class="d-flex justify-content-between align-items-center">
                        <p class="px-3 py-2 project-filled" style="cursor:pointer !important;" id="projectAll">All</p>
                        <p class="px-3 py-2 project-outfilled" style="cursor:pointer !important;" id="projectFront">front-end</p>
                        <p class="px-3 py-2 project-outfilled" style="cursor:pointer !important;" id="projectFull">full-stack</p>
                    </div> -->
                </div>
            </div>
            <div class="row p-0 pb-5 gy-4">
                
                <?php
                    
                    $sql="SELECT * FROM `project`";
                    $result=mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)){
                        while($row=mysqli_fetch_assoc($result)){
                            $name=$row["name"];
                            $image=$row["image"];
                            $id=$row["id"];
                            mainproject($name, $image, $id);
                        }
                       
                        
                    }
                    
                ?>
            </div>
        </div>
    </section>





    <!-- seventh section -->
    <section class="seventh-section" id="testimonial">
        <div class="container-lg">
            <div class="row">
                <div class="col-12 pt-3">
                    <p class="fs-1 fw-bold text-center"><span style="color: crimson;">T</span>estimonials</p>
                </div>
            </div>
            <div class="position-relative swiper tesSwipersmall m-auto px-lg-0 mt-4 pb-5 d-lg-none d-md-none d-block" style="width:80% !important;">
    
                <div class="swiper-wrapper">
                    <?php
                                
                        $sql="SELECT * FROM `testimonail`";
                        $result=mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)){
                            while($row=mysqli_fetch_assoc($result)){
                                $firstname=$row["firstname"];
                                $lastname=$row["lastname"];
                                $testimonail=$row["testimonial"];
                                $image=$row["image"];
                                indexTestimonial($firstname, $lastname, $testimonail, $image);
                            }
                        
                            
                        }
                        
                    ?>
                </div>
                
                <div class="swiper-pagination"></div>
                </div>
    
            </div>
            <div class="position-relative swiper tesSwiper m-auto px-lg-0 mt-4 pb-5 d-lg-block d-md-block d-none" style="width:80% !important;">

                <div class="swiper-wrapper">
                    <?php
                                
                        $sql="SELECT * FROM `testimonail`";
                        $result=mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)){
                            while($row=mysqli_fetch_assoc($result)){
                                $firstname=$row["firstname"];
                                $lastname=$row["lastname"];
                                $testimonail=$row["testimonial"];
                                $image=$row["image"];
                                indexTestimonial($firstname, $lastname, $testimonail, $image);
                            }
                        
                            
                        }
                        
                    ?>
                </div>
                <!-- <span class="fine-boi position-absolute" style="right:1%;top:25%;z-index:10;"><i class="fa-solid fa-angle-right fs-3 text-light px-3 py-2 rounded-circle"style="background-color:rgb(50, 73, 72);"></i></span>
                <span class="ugly-boi position-absolute" style="top:25%;left:1%;z-index:10;"><i class="fa-solid fa-angle-left fs-3 text-light px-3 py-2 rounded-circle"style="background-color:rgb(50, 73, 72);"></i></span> -->
                <div class="swiper-pagination"></div>
                <div class="col-10 m-auto mt-3">
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-general py-2 px-4 text-light" style="background-color:crimson;" id="testimony-btn">Add To Testimonial</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Eight section -->
    <section class="eight-section" id="contact">
        <div class="container-lg pb-5">
            <div class="col-12 py-3">
                <p class="fs-1 fw-bold text-center">Contact <span style="color: crimson;">Me</span></p>
            </div>    
            <div class="row pt-3">
                <div class="col-lg-6 col-md-6 col-11 m-auto m-md-0 m-lg-0">
                    <div class="card card-map" style="height:fit-content;">
                        <!-- <div class="map-box">
                            
                            <iframe width="550" height="400" frameborder="0" src="https://widgets.scribblemaps.com/sm/?d&z&l&gc&af&mc&lat=8.172046&lng=4.2681999&vz=15&type=hybrid&ti&s&width=550&height=400&id=YA0TNnSrKK" style="border:0; max-width: 100%;" allowfullscreen allow="geolocation" loading="lazy"></iframe>
                        </div> -->
                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=blue house, adenike ,ogbomosho&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebay-proxys.com/">Piratebay</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-11 mt-4 mt-lg-0 mt-md-0 m-auto">
                    <form action="" class="eight-form px-lg-5">
                        <input type="text" class="px-3" placeholder="Full-name here">
                        <input type="text" class="px-3 mt-3" placeholder="Email here">
                        <select name="" id="" class="px-3 mt-3">
                            <option value="" selected>---Project Type--</option>
                            <option value="">commercial website</option>
                            <option value="">Personal website</option>
                            <option value="">bussiness website</option>
                            <option value="">social website</option>
                            <option value="">Non-Governmental website</option>
                            <option value="">others</option>
                        </select>
                        <input type="text" class="px-3 mt-3" placeholder="project name">
                        <textarea name="" placeholder="Project Description" class="px-3 mt-3 pt-3" id="" cols="46" rows="6"></textarea>
                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-general first-btn px-5 py-2 fs-4" style="width:100%;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- footer -->
    <footer class="pb-5 pb-lg-0">
        <div class="container pb-5 pb-lg-0">
            <div class="d-flex justify-content-between align-items-center">
                <a href="#" class="fs-4 sammy-link m-0 d-lg-block-d-md-block d-none" style="text-decoration:none;">
                    <div class="logo-small-box"><img src="images/sammy_logo_1.png" alt="" srcset=""></div>
                </a>

                <p class="m-0 mt-2">&copy; copyright 2022</p>
                
                <div class="d-flex m-0">
                    <a href="https://www.linkedin.com/in/ogunnaike-samuel-7b4693237" class="mx-2 pt-3" style="text-decoration:none;"><i class="fa-brands fa-linkedin" style="color:crimson;font-size:1.5rem;"></i></a>
                    <a href="https://twitter.com/dev_sammy123?t=YrNvFQeDYUslanxfG6xx4w&s=09" class="mx-2 pt-3" style="text-decoration:none;"><i class="fa-brands fa-twitter" style="color:crimson;font-size:1.5rem;"></i></a>
                    <a href="https://github.com/Sammy-258/Sammy-258.git" class="mx-2 pt-3" style="text-decoration:none;"><i class="fa-brands fa-github " style="color:crimson;font-size:1.5rem;"></i></a>
                </div>
            </div>
        </div>
    </footer>




    <!-- all modal box -->
    <div class="modal-one m-auto d-none" id="modal-skills-display" style="height:fit-content !important;">

        <?php
           
            
            


           skillsModal();
           
        ?>
    </div>



    <div class="modal-two m-auto d-none project-modal" id="modal-two">

        <?php
           
            
            


            projectModal();
            
        ?>
        
    </div>


    <!-- add to testimonail -->
    <div class="modal-testimonial d-none" id="modal-testimony">
       <div class="modal-box-testimonial">
            <div class="d-block m-auto px-5 py-4">
                <div class="d-flex justify-content-end">
                    <p class="fs-6 text-end" id="testimonailBtn" style="cursor:pointer;">biggy</p>
                </div>
                <form action="testimonial.php" method="post" enctype="multipart/form-data">
                    <p class="fs-5 text-center">Add Your Testimonial Here</p>
                    <input type="text" placeholder="Enter Firstname here" class="form-control btn-general testimonial-input text-light input-btn my-4" name="firstname">
                    <input type="text" placeholder="Enter Lastname here" class="form-control btn-general testimonial-input text-light my-4 input-btn" name="lastname">
                    <input type="file"  name="image" class="form-control btn-general testimonial-input my-4 input-btn text-light">
                    <textarea name="description" placeholder="Enter description here"class="testimonial-textarea form-control input-btn text-light" cols="34" rows="3"></textarea>
                    <div class="d-flex justify-content-center mt-4">
                        <button name="submit" class="btn btn-general text-light px-5 py-2 w-100 text-light" style="background-color:crimson;">Submit</button>
                    </div>
                    
                </form>
            </div>
       </div>
    </div>



    <!-- only for small and medium screen -->
    <div class="" id="trigger"></div>
    
    
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/d15ccd782a.js" crossorigin="anonymous"></script>
    <script>


        var swiper = new Swiper(".tesSwiper", {
            slidesPerView: 2,
            spaceBetween: 30,
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },
        });
        var swiper = new Swiper(".tesSwipersmall", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },
        });
        // project links
        const projectSeeMore=document.querySelectorAll(".see-more-btn-admin");
        



        // project close
        const closeSecond1 = document.querySelectorAll(".modal-two-close");
        
      

        // modal itself
        const modalTwo = document.getElementById("modal-two");
        


        projectSeeMore.forEach((modal) => {
            modal.addEventListener("click", ()=>{
                modalTwo.classList.remove("d-none");
                modalTwo.classList.add("modal-two-active");
                var xhr = new XMLHttpRequest();
                var ajaxText =modal.innerHTML.replace('learn more ','');
                
                
                xhr.open('GET', 'admin/process.php?id='+ajaxText, true);
                xhr.send();
                
                xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    
                    var user = JSON.parse(this.responseText);
                    var image = user[0].image;
                    var name = user[0].name;
                    var description = user[0].description;
                    var first = user[0].first;
                    var second = user[0].second;
                    var third = user[0].third;
                    var fourth = user[0].fourth;
                    console.log(user);
                    var imageProject=document.getElementById("imageProject");
                    var projectAdminName=document.getElementById("projectAdminName");
                    var projectAdminDescription=document.getElementById("projectAdminDescription");
                    var firstAdminSolution=document.getElementById("firstAdminSolution");
                    var secondAdminSolution=document.getElementById("secondAdminSolution");
                    var thirdAdminSolution=document.getElementById("thirdAdminSolution");
                    var fourthAdminSolution=document.getElementById("fourthAdminSolution");
                    
                    imageProject.src = "images/"+image;
                    projectAdminName.innerHTML = name;
                    projectAdminDescription.innerHTML = description;
                    firstAdminSolution.innerHTML = first;
                    secondAdminSolution.innerHTML = second;
                    thirdAdminSolution.innerHTML = third;
                    fourthAdminSolution.innerHTML = fourth;
                    console.log(image);
                }
            }

            })



        })
        
        
        closeSecond1.forEach((modal) => {
            modal.addEventListener("click", ()=>{
                modalTwo.classList.add("d-none");
                modalTwo.classList.remove("modal-two-active");
            })
        })






        // skills display
        const adminSkillsShow=document.querySelectorAll(".admin-skills-btn");
        const modalSkillsDisplay=document.getElementById("modal-skills-display");





        adminSkillsShow.forEach((modal) =>{
            modal.addEventListener("click", ()=>{
                console.log("working");
                modalSkillsDisplay.classList.remove("d-none");
                var xhr = new XMLHttpRequest();
                var ajaxText =modal.innerHTML.replace('learn more ','');
                
                console.log(ajaxText);
                xhr.open('GET', 'admin/process.php?pes='+ajaxText, true);
                xhr.send();
                xhr.onreadystatechange = function() {
                    var user = JSON.parse(this.responseText);
                    console.log(user);
                    var name = user[0].name;
                    var description = user[0].description;
                    var first = user[0].first;
                    var second = user[0].second;
                    var third = user[0].third;



                    var heading1=document.getElementById("heading1");
                    var heading2=document.getElementById("heading2");
                    var heading3=document.getElementById("heading3");
                    var heading4=document.getElementById("heading4");
                    var heading5=document.getElementById("heading5");

                    heading1.innerHTML = name;
                    heading2.innerHTML=description;
                    heading3.innerHTML=first;
                    heading4.innerHTML=second;
                    heading5.innerHTML=third;
                }
                
            })
        })


        // skills see less
        const adminCloseSkills=document.querySelectorAll(".skills-admin-modal-close");
        adminCloseSkills.forEach((modal) =>{
            modal.addEventListener("click", ()=>{
                modalSkillsDisplay.classList.add("d-none");  
            })
        })




        // testimony
        const testimonyBtn=document.getElementById("testimony-btn");
        const modalTestimony=document.getElementById("modal-testimony");
        const modalTestimonyBtn=document.getElementById("testimonailBtn");


        testimonyBtn.addEventListener("click", ()=>{
            modalTestimony.classList.remove("d-none");
        });
        modalTestimonyBtn.addEventListener("click", ()=>{  
            modalTestimony.classList.add("d-none");
        });



        // swiper js
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 24,
            freeMode: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        var swiper = new Swiper(".mineSwiper", {
            slidesPerView: 1.1,
            spaceBetween: 24,
            freeMode: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });


        // small-links-close

        const smalllinks=document.querySelectorAll(".small-links-close");

        smalllinks.forEach((event)=>{
            event.addEventListener("click", ()=>{
                // console.log("working");
                var mainNav=document.getElementById("mainNav");
                var triggerry=document.getElementById("trigger");
                mainNav.classList.add("no-nav");
                mainNav.classList.remove("small-nav");
                triggerry.classList.remove("trigger-none");
                
            });
        });



        

        
    </script>
</body>
</html>