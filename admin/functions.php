<?php

function project($name, $image, $id){

    $element='

        <div class="col-lg-3">
            <div class="card project-display">
                <div class="project-display-img-box">
                    <img src="../images/'.$image.'">
                </div>
                <div class="project-display-text-area ">
                    <p class="text-center project-first-text">'.$name.'</p>
                    
                </div>
                <div class="d-flex justify-content-between px-4" >
                    <p class="position-relative" style="width:100%;height:100%;color:crimson;">See more <p class="text-start project-second-text see-more-btn-admin position-absolute" style="color:crimson;opacity:0;">See more '.$id.'</p></p>
                    <div class="d-flex" id="'.$id.'">
                    <p class="text-light mx-3 editLink" style="cursor:pointer;">Edit</p>
                    <a href="#" class="text-light" style="text-decoration:none;">delete</a>
                    </div>
                </div>
            </div>
        </div>




';
echo $element;
}


function mainproject($name, $image, $id){

    $element='

    <div class="col-lg-3 col-md-4 col-10 mx-auto m-lg-0 m-md-0">
        <div class="card gallery-card p-1" style="height:fit-content !important;">
            <div class="gallery-image-box">
                <img src="images/'.$image.'" alt="">
            </div>
            <div class="text-area-sixth-section px-lg-3 pt-3" id="'.$id.'">
                <p class="text-center text-sixth">'.$name.'</p>
                <p class="position-relative" style="width:100%;height:100%;color:crimson;font-size:0.8rem;">learn more <i class="fa-solid fa-arrow-right mx-1" style="color:crimson;"></i><p class="text-start project-second-text see-more-btn-admin position-absolute" style="color:crimson;opacity:0;bottom:-8px;cursor:pointer;font-size:0.8rem;">learn more '.$id.'</p></p>
            
            </div>
        </div>
    </div>




';

echo $element;

}

function projectModal(){
    $element='
       <div class="container pb-4" style="border:1px solid rgb(10,10,10);border-radius:10px;">
        <div class="row" style="width:100% !important;">
            <div class="col-12 d-flex justify-content-between">
                
                <p>&nbsp;</p>
                
                <p class="text-light text-end modal-two-close pt-2"  style="cursor:pointer;"><i class="fa-solid fa-xmark fs-1"></i></p>
            </div>
            <div class="col-lg-6 col-md-6 col-12" style="max-height:300px;">
                <div class="modal-img-box">
                <img src="" id="imageProject" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 p-0">
            <p class="text-center modal-two-heading" id="projectAdminName"></p>
            <p class="opacity-75" id="projectAdminDescription">
            
            </p>
            <ul class="ul-link-modal  px-3 ">
            <li class="text-start text-light opacity-50" id="firstAdminSolution" style="font-size:0.8rem;"></li>
            <li class="text-light opacity-50" id="secondAdminSolution" style="font-size:0.8rem;"></li>
            <li class="text-light opacity-50" id="thirdAdminSolution" style="font-size:0.8rem;"></li>
            <li class="text-light opacity-50" id="fourthAdminSolution" style="font-size:0.8rem;"></li>
            </ul>
            </div>
        </div>
       </div>
    ';

    echo $element;
}
function projectModalAdmin(){
    $element='
       <div class="container pb-4">
        <div class="row" style="width:100% !important;">
            <div class="col-12 d-flex justify-content-between">
                
                <p>&nbsp;</p>
                
                <p class="text-light text-end admin-close-btn-for-project" id="modal-two-close" style="cursor:pointer;">Biggy</p>
            </div>
            <div class="col-lg-6 col-md-6 col-12" style="max-height:300px;">
                <div class="modal-img-box">
                    <img src="" id="imageProject" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 p-0">
                <p class="text-center modal-two-heading" id="projectAdminName"></p>
                <p class="opacity-75" id="projectAdminDescription">
                
                </p>
                <ul class="ul-link-modal  px-3 ">
                <li class="text-start text-light opacity-50" id="firstAdminSolution" style="font-size:0.8rem;"></li>
                <li class="text-light opacity-50" id="secondAdminSolution" style="font-size:0.8rem;"></li>
                <li class="text-light opacity-50" id="thirdAdminSolution" style="font-size:0.8rem;"></li>
                <li class="text-light opacity-50" id="fourthAdminSolution" style="font-size:0.8rem;"></li>
                <p class="text-start mt-2">Click here to <span>hire</span> me</p>
            </ul>
            </div>
        </div>
       </div>
    ';

    echo $element;
}


function adminSkills($code, $name, $description, $first, $second, $third, $id){
    $element='
        <div class="col-lg-4 col-md-4 col-10  m-auto">
            <div class="card skills-display">
                <div class="d-flex justify-content-center">
                    <i '.$code.' style="color:crimson;font-size:3rem;"></i>
                </div>
                <div class="skills-display-text-area ">
                    <p class="text-center skills-first-text">'.$name.'</p>
                    <div class="d-flex justify-content-between align-items-center" id="'.$id.'">
                       
                        <p class="position-relative px-4" style="width:100%;height:100%;color:crimson;">See more <p class="text-start project-second-text admin-skills-btn position-absolute" style="color:crimson;opacity:0;">See more '.$id.'</p></p>
                        <p class="text-start skills-second-text px-4 edit-skills" style="color:whitesmoke;cursor:pointer;">Edit</p>
                        <p class="text-start skills-second-text px-4" style="color:grey;cursor:pointer;">delete</p>
                    </div>
                    
                </div>
            </div>
        </div>
       
    ';

    echo $element;
}

// view skills

function skillsModalAdmin(){
    $element='
       <div class="container pb-4">
        <div class="row" style="width:100% !important;">            
            <div class="col-lg-6 m-auto">
            <div class="main-modal-box p-3" style="background: rgba(20, 25, 25);">
            <div class="d-block px-3">
              <div class="text-end text-light skills-admin-modal-close" style="cursor:pointer !important;">big</div>
              <p class="modal-text-one pt-3 fs-3 text-center text-light " id="heading1"></p>
              <p class="text-start opacity-75" id="heading2" style="font-size:1.1rem;"></p>
              <ul class="ul-link-modal">
                  <li class="text-light opacity-50" id="heading3" style="font-size:1rem;"></li>
                  <li class="text-light opacity-50" id="heading4" style="font-size:1rem;"></li>
                  <li class="text-light opacity-50" id="heading5" style="font-size:1rem;"></li>
                  <p class="text-start mt-2 class="text-light opacity-50 " style="font-size:1rem;">Click here to <span>hire</span> me</p>
              </ul>
            </div>
         </div>
            </div>
        </div>
       </div>
    ';

    echo $element;
}

function skillsModal(){
    $element='
   <div class="main-modal-box d-block" style="height:fit-content !important;border:1px solid rgb(5,5,5);border-radius:20px;">
   <div class="text-end text-light position-relative" id="modal-close" style="cursor:pointer !important;left:-10px !important; top:10px;"><i class="fa-solid fa-xmark fa-2x opacity-75" style="z-index:100;"></i></div>
          <div class="d-block p-2 position-relative " style="top: -30px;z-index:-1;">
            
            <p class="modal-text-one pt-3 text-center" id="heading1"></p>
            <p class="text-start opacity-75 text-center" id="heading2"></p>
            <ul class="ul-link-modal">
                <li id="heading3">I develop the Interface</li>
                <li id="heading4">Basic/complex layout (pending on your choice)</li>
                <li id="heading5">Then The development aspect</li>
                <p class="text-start mt-2"></p>
            </ul>
          </div>
       </div>
    ';

    echo $element;
}

function indexskills($code, $name, $description, $first, $second, $third, $id){
    $element='
        <div class="col-lg-4 col-md-4 col-6 m-auto gy-4 p-1 p-md-2 p-lg-3">
            <div class="card icon-card-1" id="fullstack">
                <div class="icon-box d-flex justify-content-center m-auto my-4">
                    <i class="'.$code.'" style="color:crimson;font-size:3rem;"></i>
                    
                </div>
                <p class="fs-5 text-center">'.$name.'</p>
                <p class="position-relative px-4" style="width:100%;height:100%;color:crimson;">learn more <i class="fa-solid fa-arrow-right mx-1" style="color:crimson;"></i> <p class="text-start project-second-text admin-skills-btn position-absolute" style="color:crimson;opacity:0;bottom:15px;left:16px;">learn more '.$id.'</p></p>
                
            </div>
        </div>
    ';
    echo $element;
}

function testimonial($name, $image, $testimonail){
    $element='
        <div class="col-lg-6 col-md-6 col-12 swiper-slide">
            <div class="d-block">
                <div class="card seventh-section-card" style="width: 100%;height: fit-content;background: rgb(12, 12, 12) !important;">
                    <div class="d-block  p-3">
                        <div class="d-flex">
                            <div class="img-box-seventh-section rounded-circle m-0">
                               <img src="mine.jpg">
                            </div>
                            <div class="name-section-seventh mt-3 mx-3">
                                <span>name</span>
                                <p>mine</p>
                                
                            </div>
                        </div>
                        <div class="d-block">
                            <div class="text-area-seventh px-3">
                                <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis quae sit inventore repellat aliquid beatae!</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    ';
    echo $element;
}



function indexTestimonial($firstname, $lastname, $testimonail, $image){
    $element='
        <div class="col-lg-6 col-md-6 col-12 swiper-slide">
            <div class="d-block" style="width:100%;">
                <div class="card seventh-section-card" style="width: 100%;height: fit-content;background: rgb(12, 12, 12) !important;">
                    <div class="d-block  p-3">
                        <div class="d-flex">
                            <div class="img-box-seventh-section rounded-circle m-0">
                               <img src="images/'.$image.'">
                            </div>
                            <div class="name-section-seventh mt-3 mx-3">
                            <span>'.$firstname.'</span>
                            <p>'.$lastname.'</p>
                                
                            </div>
                        </div>
                        <div class="d-block">
                            <div class="text-area-seventh px-3">
                                <p class="text-light">'.$testimonail.'</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    ';
    echo $element;
}




?>
    
