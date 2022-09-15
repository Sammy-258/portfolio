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
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
</head>
<body class="position-relative">


    <nav class="smallNav d-lg-none">
        
        <div class="d-flex justify-content-between px-4 align-items-center">
            <a href="#" class="fs-4 pt-2 sammy-link m-0" style="text-decoration:none;">Sammy</a>
            <p class="fs-5 m-0 pt-2" id="menu">You</p>
        </div>
        <div class="d-block  no-nav " id="mainNav">
            <div class="d-block m-auto" style="width:75%;">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="fs-3">b</p>
                    <p class="fs-3">c</p>
                    <p class="fs-3">d</p>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="fs-3">b</p>
                    <p class="fs-3">c</p>
                    <p class="fs-3">d</p>
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
                    <div class="d-block m-0">
                        <a href="#" class="fs-4 sammy-link" style="text-decoration:none;">Sammy</a>
                    </div>
                    <div class="d-block m-0 px-4">
                        <ul class="first-ul m-0">
                            <li class="px-3">
                                <a href="#" class="fs-5 fw-bold text-light fw-light" style="text-decoration:none;">About me</a>
                            </li>
                            <li class="px-3">
                                <a href="#" class="fs-5 fw-bold text-light fw-light" style="text-decoration:none;">Services</a>
                            </li>
                            <li class="px-3">
                                <a href="#" class="fs-5 fw-bold text-light fw-light" style="text-decoration:none;">Skills</a>
                            </li>
                            <li class="px-3">
                                <a href="#" class="fs-5 fw-bold text-light fw-light" style="text-decoration:none;">Gallery</a>
                            </li>
                            <li class="px-3">
                                <a href="#" class="fs-5 fw-bold text-light fw-light" style="text-decoration:none;">Testimonail</a>
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

                        <a href="" class="btn btn-general first-btn px-4 py-2 fs-4">Download cv</a>
                        <a href="" class="btn btn-general second-btn px-4 py-2 fs-4">Hire me</a>
                    </div>
                </div>
            </div>
            <div class="row pt-4 pt-lg-0">
                <div class="col-lg-8 col-12 pt-5 pt-lg-0 px-lg-4 p-1">
                    <div class="d-flex  pt-5">
                        <div class="d-flex align-items-center">
                            <p class="last-icon-in-fisrt-section"><i class="fa-brands fa-facebook" style="color:crimson;"></i></p>
                            <div class="d-block mx-2 m-0">
                                <span class="last-in-first-section-1 ">Messenger</span>
                                <p class="last-in-first-section-2">Ogunnaike sammy</p>

                            </div>
                        </div>
                        <div class="d-flex align-items-center mx-lg-5 mx-3 mx-md-4">
                            <p class="last-icon-in-fisrt-section"><i class="fa-brands fa-whatsapp" style="color:crimson;"></i></p>
                            <div class="d-block mx-2 m-0">
                                <span class="last-in-first-section-1">Whatsapp</span>
                                <p class="last-in-first-section-2">+23481-400-239-59</p>

                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="last-icon-in-fisrt-section"><i class="fa-solid fa-envelope" style="color:crimson;"></i></p>
                            <div class="d-block mx-2 m-0">
                                <span class="last-in-first-section-1 ">Gmail</span>
                                <p class="last-in-first-section-2">Ogunnaikesammy258@gmail.com</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>                       





    <!-- second section -->
    <section class="second-section">
        <div class="container-lg py-5">
            <div class="row">
                <div class="col-12">
                    <p class="fs-1 fw-bold text-center">About <span style="color: crimson;">Me</span></p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="img-box ms-auto">
                        <img src="images/me-one.png">
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
                            <a href="" class="btn btn-general second-btn px-4 py-2 fs-5 mx-1">Hire me</a>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>



    <!-- third section -->
    <section class="third-section">
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
    <section class="fourth-section">
        <div class="container">
            <div class="row py-4">
                <div class="col-12">
                    <p class="fs-1 fw-bold text-center"><span style="color: crimson;">My </span>SKills</p>
                </div>
               
                <div class="col-lg-5 col-md-5 col-5 ms-auto d-lg-block d-md-block d-none">
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
                <div class="col-lg-5 col-md-5 col-5 col-10 m-auto d-lg-none d-md-none d-block">
                    <div class="d-block fouth-section-ms m-auto" style="width:fit-content;">
                        
                        <div class="d-flex align-content-center" id="smallFrontend">
                            <p class="fs-4 m-0 mx-lg-3 mx-md-3 mx-4"><i class="fa-solid fa-code pt-2" style="color:crimson;"></i></p>
                            <div class="d-block m-0">
                                <span class="fs-5">Frontend</span>
                                <p style="font-size:0.7em;margin-top:-5px;">over year of experience</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-content-center" id="smallFullstack">
                            <p class="fs-4 m-0 mx-lg-3 mx-md-3 mx-4"><i class="fa-solid fa-laptop-code" style="color:crimson;"></i></p>
                            <div class="d-block m-0">
                                <span class="fs-5">Full-stack</span>
                                <p style="font-size:0.7em;margin-top:-5px;">over year of experience</p>
                            </div>
                        </div>
                        <div class="d-flex align-content-center" id="smallDatabase">
                            <p class="fs-4 m-0 mx-lg-3 mx-md-3 mx-4"><i class="fa-solid fa-database" style="color:crimson;"></i></p>
                            <div class="d-block m-0">
                                <span class="fs-5">Database</span>
                                <p style="font-size:0.7em;margin-top:-5px;">over year of experience</p>
                            </div>
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
                <div class="col-lg-6 col-md-7 col-10 d-lg-none d-md-none d-block m-auto pb-4">
                    <div class="d-block px-4" style="height:fit-content;border-top:1px solid rgb(40,40,40);border-radius:2px;" id="smallFrontenddisplay">
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
                    <div class="d-none px-4" style="height:fit-content;border-top:1px solid rgb(40,40,40);border-radius:2px;" id="smallFullstackdisplay">
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
                    <div class="d-none px-4" style="height:fit-content;border-top:1px solid rgb(40,40,40);border-radius:2px;" id="smallDatabasedisplay">
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
                            <a href="" class="btn btn-general second-btn px-4 py-2 fs-4 mx-1">Hire me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    

    <!--sixth section  -->
    <section class="sixth-section">
        <div class="container-lg">
            <div class="row">
                <div class="col-12 py-3">
                    <p class="fs-1 fw-bold text-center"><span style="color: crimson;">My </span>Projects</p>
                </div>
                <div class="col-lg-4 col-md-6 col-10 m-auto">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="px-3 py-2 project-filled" style="cursor:pointer !important;" id="projectAll">All</p>
                        <p class="px-3 py-2 project-outfilled" style="cursor:pointer !important;" id="projectFront">front-end</p>
                        <p class="px-3 py-2 project-outfilled" style="cursor:pointer !important;" id="projectFull">full-stack</p>
                    </div>
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
    <section class="seventh-section">
        <div class="container-lg">
            <div class="row">
                <div class="col-12 pt-3">
                    <p class="fs-1 fw-bold text-center"><span style="color: crimson;">T</span>estimonials</p>
                </div>
                
            </div>
            <div class="row col-lg-9 col-md-12 col-12  m-auto p-0 pb-5 gy-4">
                <div class="col-lg-6 col-md-6 col-12 m-auto">
                    <div class="card seventh-section-card">
                        <div class="d-flex px-4 pt-3 align-items-center">
                            <div class="img-box-seventh-section rounded-circle m-0">
                                <img src="sammy.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="name-section-seventh mt-3 mx-3">
                                <span>Samuel</span>
                                <p>Ogunnailke</p>
                            </div>
                        </div>
                        <div class="d-block">
                            <div class="text-area-seventh px-3">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis quae sit inventore repellat aliquid beatae!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 m-auto d-md-block d-lg-block d-none">
                    <div class="card seventh-section-card">
                        <div class="d-flex px-4 pt-3 align-items-center">
                            <div class="img-box-seventh-section rounded-circle m-0">
                                <img src="sammy.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class="name-section-seventh mt-3 mx-3">
                                <span>Samuel</span>
                                <p>Ogunnailke</p>
                            </div>
                        </div>
                        <div class="d-block">
                            <div class="text-area-seventh px-3">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis quae sit inventore repellat aliquid beatae!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Eight section -->
    <section class="eight-section">
        <div class="container-lg pb-5">
            <div class="col-12 py-3">
                <p class="fs-1 fw-bold text-center">Contact <span style="color: crimson;">Me</span></p>
            </div>    
            <div class="row pt-3">
                <div class="col-lg-6 col-md-6 col-11 m-auto m-md-0 m-lg-0">
                    <div class="card card-map">
                        <div class="map-box">
                            
                            <iframe width="550" height="400" frameborder="0" src="https://widgets.scribblemaps.com/sm/?d&z&l&gc&af&mc&lat=8.172046&lng=4.2681999&vz=15&type=hybrid&ti&s&width=550&height=400&id=YA0TNnSrKK" style="border:0; max-width: 100%;" allowfullscreen allow="geolocation" loading="lazy"></iframe>
                        </div>
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
    <footer class=" pb-lg-0">
        <div class="container pb-5 pb-lg-0">
            <div class="d-flex justify-content-between align-items-center">
                <a href="#" class="fs-4 sammy-link m-0" style="text-decoration:none;">Sammy</a>

                <p class="m-0 mt-2">&copy; copyright 2022</p>
                
                <div class="d-flex m-0">
                    <p class="mx-1 pt-3">me</p>
                    <p class="mx-1 pt-3">you</p>
                    <p class="mx-1 pt-3">us</p>
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




    <!-- only for small and medium screen -->
    <div class="" id="trigger"></div>
    
    
    <script src="index.js"></script>
    <script src="https://kit.fontawesome.com/d15ccd782a.js" crossorigin="anonymous"></script>
    <script>

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
    </script>
</body>
</html>