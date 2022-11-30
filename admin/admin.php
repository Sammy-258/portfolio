<?php

include("connect.php");
include("functions.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="admin.css">
    <!-- <link rel="stylesheet" href="../index.css"> -->
    <title>Admin Sammy</title>
</head>
<body>


    <section class="project-section">

        <div class="container">
            <div class="row pt-5 pb-4">
                <div class="col-lg-5 m-auto">
                    <div class="d-flex justify-content-between">
                        <p class="text-links px-5 py-2" id="linkProject">project</p>
                        <p class="text-links px-5 py-2" id="linkSkills">skills</p>
                        <p class="text-links px-5 py-2" id="linkTestimonial">testimonial</p>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
        <!--project display  -->
        <div class="container-lg" id="project">
            <div class="d-flex justify-content-center">
                <p class="text-links text-center px-5 py-2" style="background:grey;" id="create">Create</p>
            </div>
            <div class="row">
                <?php
                    $sql="SELECT * FROM `project`";
                    $result=mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)){
                        while($row=mysqli_fetch_assoc($result)){
                            $name=$row["name"];
                            $image=$row["image"];
                            $id=$row["id"];
                            project($name, $image, $id);


                        
                        } 
                    }
                    
                ?>
                
            </div>
        </div>





        <!-- skills display -->


        <div class="container-lg d-none" id="skills">
            <div class="d-flex justify-content-center">
                <p class="text-links text-center" style="background:grey;" id="create-skills">Create</p>
            </div>
            <div class="row col-lg-10 m-auto">
                
                <?php
                    $sql="SELECT * FROM `code`";
                    $result=mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)){
                        while($row=mysqli_fetch_assoc($result)){
                            $name=$row["name"];
                            $code=$row["code"];
                            $description=$row["description"];
                            $first=$row["first"];
                            $second=$row["second"];
                            $third=$row["third"];
                            $id=$row["id"];
                            adminSkills($code, $name, $description, $first, $second, $third, $id);
                        }
                       
                        
                    }
                    
                ?>
                
            </div>
        </div>




        <!-- testimonail display -->
        <div class="container-lg d-none" id="testimonail">
            <div class="d-flex justify-content-center">
                <p class="text-links text-center px-5 py-2" style="background:grey;" id="create">Create</p>
            </div>
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <?php
                            $sql="SELECT * FROM `testimonail`";
                            $result=mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                                while($row=mysqli_fetch_assoc($result)){
                                    $name=$row["name"];
                                    $image=$row["image"];
                                    $testimonail=$row["testimonial"];
                                    
                                    testimonial($name, $image, $testimonail, $ajax);


                                
                                } 
                            }
                            
                        ?>
                    </div>
                    
                </div>
                
                
            </div>
        </div>
    </section>


    


    <!-- modal boxes -->

    <!-- project display -->
    <div class="modal-box m-auto d-none" id="modal-project-display">
        <div class="modal-box-two">
           
            <div class="row px-4 py-2">
                
                <?php

                    
                    projectModalAdmin();
        
                ?>
                
            </div>
            
        </div>
    </div>




    <!-- skills display -->
    <div class="modal-box m-auto d-none" id="modal-skills-display">
        <div class="modal-box-two" style="background-color:transparent;">
           
            <div class="row px-4 py-2">
                
                <?php

                    
                    skillsModalAdmin();
        
                ?>
                
            </div>
            
        </div>
    </div>








    
    <!-- create project  -->
    <div class="modal-box m-auto d-none" id="modalCreate">
        <div class="modal-box-one">
            <form action="create.php" method="post" class="form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between pt-3">
                        <p>&nbsp;</p>
                        <p class="text-center form-text">Create Form</p>
                        <p class="text-light text-end" id="trigger" style="cursor:pointer !important;">Big</p>
                    </div>
                    <div class="col-10 m-auto pb-4">
                        <input type="text" placeholder="Name here" name="name" class="form-control btn-general" required>
                        <textarea name="description" id="" cols="10" rows="2" class="mt-3 btn-general" required></textarea>
                        <input type="file" class="mt-3" name="image" required>
                        <div class="d-flex justify-content-between">
                            <input type="text" placeholder="First Point" name="first" class="form-control mt-3 btn-general" required>
                            <input type="text" placeholder="Second Point" name="second" class="form-control mt-3" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <input type="text" placeholder="Third Point" name="third" class="form-control mt-3 btn-general">
                            <input type="text" placeholder="Fourth Point" name="fourth" class="form-control mt-3 btn-general">
                        </div>
                        <button type="submit" name="submit" class="btn fs-5 mt-3 btn-general" style="width:100%;background:crimson;color:whitesmoke;">Submit</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
    <div class="modal-box m-auto d-none" id="modal-project-display">
        <div class="modal-box-one">
            <form action="create.php" method="post" class="form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between pt-3">
                        <p>&nbsp;</p>
                        <p class="text-center form-text">Create Form</p>
                        <p class="text-light text-end" id="trigger" style="cursor:pointer !important;">Big</p>
                    </div>
                    <div class="col-10 m-auto pb-4">
                        <input type="text" placeholder="Name here" name="name" class="form-control btn-general" required>
                        <textarea name="description" id="" cols="10" rows="2" class="mt-3 btn-general" required></textarea>
                        <input type="file" class="mt-3" name="image" required>
                        <div class="d-flex justify-content-between">
                            <input type="text" placeholder="First Point" name="first" class="form-control mt-3 btn-general" required>
                            <input type="text" placeholder="Second Point" name="second" class="form-control mt-3" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <input type="text" placeholder="Third Point" name="third" class="form-control mt-3 btn-general">
                            <input type="text" placeholder="Fourth Point" name="fourth" class="form-control mt-3 btn-general">
                        </div>
                        <button type="submit" name="submit" class="btn fs-5 mt-3 btn-general" style="width:100%;background:crimson;color:whitesmoke;">Submit</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>

    <!-- edit project -->
    <div class="modal-box m-auto d-none" id="modalEdit">
        <div class="modal-box-one">
            <form action="edit.php" method="post" class="form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between pt-3">
                        <p>&nbsp;</p>
                        <p class="text-center form-text">Edit Form</p>
                        <p class="text-light text-end" id="triggerEdit" style="cursor:pointer !important;">Big</p>
                    </div>
                    <div class="col-10 m-auto pb-4">
                        <input type="hidden" name="id" id="input-1">
                        <input type="text" placeholder="Name here" name="name" class="form-control btn-general" required>
                        <textarea name="description" id="" cols="10" rows="2" class="mt-3 btn-general" required></textarea>
                        <input type="file" class="mt-3" name="image" required>
                        <div class="d-flex justify-content-between">
                            <input type="text" placeholder="First Point" name="first" class="form-control mt-3 btn-general" required>
                            <input type="text" placeholder="Second Point" name="second" class="form-control mt-3" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <input type="text" placeholder="Third Point" name="third" class="form-control mt-3 btn-general">
                            <input type="text" placeholder="Fourth Point" name="fourth" class="form-control mt-3 btn-general">
                        </div>
                        <button type="submit" name="submit" class="btn fs-5 mt-3 btn-general" style="width:100%;background:crimson;color:whitesmoke;">Submit</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>


    <!--create  skills -->
    <div class="modal-box m-auto d-none" id="modalCreateSkills">
        <div class="modal-box-one">
            <form action="Skills.php" method="post" class="form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between pt-3">
                        <p>&nbsp;</p>
                        <p class="text-center form-text">Create Form</p>
                        <p class="text-light text-end" id="trigger-skills" style="cursor:pointer !important;">Big</p>
                    </div>
                    <div class="col-10 m-auto pb-4">
                        <input type="text" placeholder="Name here" name="name" class="form-control btn-general" required>
                        <textarea name="description" id="" cols="10" rows="2" class="mt-3 btn-general" required></textarea>
                        <input type="text" placeholder="icon code" name="code" class="form-control mt-3 btn-general">
                        <div class="d-flex justify-content-between">
                            <input type="text" placeholder="First Point" name="first" class="form-control mt-3 btn-general" required>
                            <input type="text" placeholder="Second Point" name="second" class="form-control mt-3" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <input type="text" placeholder="Third Point" name="third" class="form-control mt-3 btn-general">
                            
                        </div>
                        <button type="submit" name="submit" class="btn fs-5 mt-3 btn-general" style="width:100%;background:crimson;color:whitesmoke;">Submit</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>


    <div class="modal-box m-auto d-none" id="editModalskills">
        <div class="modal-box-one">
            <form action="editmodal.php" method="post" class="form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between pt-3">
                        <p>&nbsp;</p>
                        <p class="text-center form-text">Edit Form</p>
                        <p class="text-light text-end" id="edit-skills-modal" style="cursor:pointer !important;">Big</p>
                    </div>
                    <div class="col-10 m-auto pb-4">
                        <input type="hidden" name="id" id="input-2">
                        <input type="text" placeholder="Name here" name="name" class="form-control btn-general" required>
                        <textarea name="description" id="" cols="10" rows="2" class="mt-3 btn-general" required></textarea>
                        <input type="text" placeholder="icon code" name="code" class="form-control mt-3 btn-general">
                        <div class="d-flex justify-content-between">
                            <input type="text" placeholder="First Point" name="first" class="form-control mt-3 btn-general" required>
                            <input type="text" placeholder="Second Point" name="second" class="form-control mt-3" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <input type="text" placeholder="Third Point" name="third" class="form-control mt-3 btn-general">
                            
                        </div>
                        <button type="submit" name="submit" class="btn fs-5 mt-3 btn-general" style="width:100%;background:crimson;color:whitesmoke;">Submit</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>

    <script>

        
        const linkProject=document.getElementById("linkProject");
        const linkSkills=document.getElementById("linkSkills");
        const linkTestimonial=document.getElementById("linkTestimonial");
        const project=document.getElementById("project");
        const skills=document.getElementById("skills");
        const testimonail=document.getElementById("testimonail");
        const create=document.getElementById("create");
        const editLink=document.querySelectorAll(".editLink");
        const modalCreate=document.getElementById("modalCreate");
        const modalEdit=document.getElementById("modalEdit");
        const trigger=document.getElementById("trigger");
        const triggerEdit=document.getElementById("triggerEdit");
        
        const input=document.getElementById("input-1");

        // project only
        linkProject.addEventListener("click", ()=>{
            project.classList.remove("d-none");
            skills.classList.add("d-none");
            testimonail.classList.add("d-none");
        });
        linkSkills.addEventListener("click", ()=>{
            skills.classList.remove("d-none");
            project.classList.add("d-none");
            testimonail.classList.add("d-none");
        });
        linkTestimonial.addEventListener("click", ()=>{
            testimonail.classList.remove("d-none");
            skills.classList.add("d-none");
            project.classList.add("d-none");
        });
        create.addEventListener("click", ()=>{
            modalCreate.classList.remove("d-none");
        });
        trigger.addEventListener("click", ()=>{
            modalCreate.classList.add("d-none");
        });
        editLink.forEach((modal) =>{
            modal.addEventListener("click", (e)=>{
            modalEdit.classList.remove("d-none");
            
            var id=e.target.parentElement.id;
            
            input.value=id
            });
        });
        triggerEdit.addEventListener("click", ()=>{
            modalEdit.classList.add("d-none");
        });



        // skills only
        const createSkills = document.getElementById("create-skills");
        const modalCreateSkills = document.getElementById("modalCreateSkills");
        const triggerskills = document.getElementById("trigger-skills");
        const editskills = document.querySelectorAll(".edit-skills");
        const editModalSkills = document.getElementById("editModalskills");
        const modalRemove = document.getElementById("edit-skills-modal");
        const input2=document.getElementById("input-2");


        createSkills.addEventListener("click", ()=>{
            modalCreateSkills.classList.remove("d-none");
        });
        triggerskills.addEventListener("click", ()=>{
            modalCreateSkills.classList.add("d-none");
        });
        editskills.forEach((modal) =>{
            modal.addEventListener("click", (e)=>{
            editModalSkills.classList.remove("d-none");
            console.log("working");
            
            var id=e.target.parentElement.id;
            
            input2.value=id
            });
        });
        modalRemove.addEventListener("click", ()=>{
            editModalSkills.classList.add("d-none");
        });




        // project see more
        const projectSeeMore=document.querySelectorAll(".see-more-btn-admin");
        const SeeMoreProject=document.getElementById("modal-project-display");


        projectSeeMore.forEach((modal) => {
            modal.addEventListener("click", ()=>{
                 SeeMoreProject.classList.remove("d-none");
                var xhr = new XMLHttpRequest();
                var ajaxText =modal.innerHTML.replace('See more ','');
                
                
                xhr.open('GET', 'process.php?id='+ajaxText, true);
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
                    
                    imageProject.src = "../images/"+image;
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





        // project see less
        const adminCloseProject=document.querySelectorAll(".admin-close-btn-for-project");
        adminCloseProject.forEach((modal) =>{
            modal.addEventListener("click", ()=>{
                SeeMoreProject.classList.add("d-none");  
            })
        })







        // skills style
        const adminSkillsShow=document.querySelectorAll(".admin-skills-btn");
        const modalSkillsDisplay=document.getElementById("modal-skills-display");





        adminSkillsShow.forEach((modal) =>{
            modal.addEventListener("click", ()=>{
                modalSkillsDisplay.classList.remove("d-none");
                var xhr = new XMLHttpRequest();
                var ajaxText =modal.innerHTML.replace('See more ','');
                
                console.log(ajaxText);
                xhr.open('GET', 'process.php?pes='+ajaxText, true);
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