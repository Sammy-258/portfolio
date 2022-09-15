// small nav
const menu = document.getElementById("menu");
const mainNav = document.getElementById("mainNav");
const trigger = document.getElementById("trigger");

menu.addEventListener('click', function() {
    mainNav.classList.add("small-nav");
    mainNav.classList.remove("no-nav");
    trigger.classList.add("trigger-none");

});
trigger.addEventListener('click', function() {
    mainNav.classList.remove("small-nav");
    mainNav.classList.add("no-nav");
    trigger.classList.remove("trigger-none");


});






// text writer

const text = ["Front-end developer", "Full-stack designer", "Data-base manager"];

let count = 0;
let index = 0;
let currentText = "";
let letter = "";

console.log(text.length);

(function type() {
    if (count === text.length) {
        count = 0;
    }

    currentText = text[count];
    letter = currentText.slice(0, ++index);


    document.querySelector(".texting").innerText = letter;

    if (letter.length === currentText.length) {
        count++;

        index = 0;
    }
    setTimeout(type, 300);
}());





// skills section

const frontend = document.getElementById("frontend");
const fullstack = document.getElementById("fullstack");
const dataBase = document.getElementById("dataBase");
const frontendDisplay = document.getElementById("frontendDisplay");
const fullstackDisplay = document.getElementById("fullstackDisplay");
const databaseDisplay = document.getElementById("databaseDisplay");


frontend.addEventListener("click", () => {
    frontendDisplay.classList.add("d-block");
    frontendDisplay.classList.remove("d-none");
    fullstackDisplay.classList.add("d-none");
    fullstackDisplay.classList.remove("d-block");
    databaseDisplay.classList.add("d-none");
    databaseDisplay.classList.remove("d-block");
});
fullstack.addEventListener("click", () => {
    fullstackDisplay.classList.add("d-block");
    fullstackDisplay.classList.remove("d-none");
    frontendDisplay.classList.add("d-none");
    frontendDisplay.classList.remove("d-block");
    databaseDisplay.classList.add("d-none");
    databaseDisplay.classList.remove("d-block");
});

dataBase.addEventListener("click", () => {
    databaseDisplay.classList.add("d-block");
    databaseDisplay.classList.remove("d-none");
    frontendDisplay.classList.add("d-none");
    frontendDisplay.classList.remove("d-block");
    fullstackDisplay.classList.add("d-none");
    fullstackDisplay.classList.remove("d-block");

});


const smallFrontend = document.getElementById("smallFrontend");
const smallFullstack = document.getElementById("smallFullstack");
const smallDatabase = document.getElementById("smallDatabase");
const smallFrontenddisplay = document.getElementById("smallFrontenddisplay");
const smallFullstackdisplay = document.getElementById("smallFullstackdisplay");
const smallDatabasedisplay = document.getElementById("smallDatabasedisplay");


smallFrontend.addEventListener("click", () => {
    smallFrontenddisplay.classList.add("d-block");
    smallFrontenddisplay.classList.remove("d-none");
    smallFullstackdisplay.classList.add("d-none");
    smallFullstackdisplay.classList.remove("d-block");
    smallDatabasedisplay.classList.add("d-none");
    smallDatabasedisplay.classList.remove("d-block");
});
smallFullstack.addEventListener("click", () => {
    smallFullstackdisplay.classList.add("d-block");
    smallFullstackdisplay.classList.remove("d-none");
    smallFrontenddisplay.classList.add("d-none");
    smallFrontenddisplay.classList.remove("d-block");
    smallDatabasedisplay.classList.add("d-none");
    smallDatabasedisplay.classList.remove("d-block");
});
smallDatabase.addEventListener("click", () => {
    smallDatabasedisplay.classList.add("d-block");
    smallDatabasedisplay.classList.remove("d-none");
    smallFrontenddisplay.classList.add("d-none");
    smallFrontenddisplay.classList.remove("d-block");
    smallFullstackdisplay.classList.add("d-none");
    smallFullstackdisplay.classList.remove("d-block");
});




// my services

const serviceLearn = document.querySelectorAll(".thirdSectionLearn");
const closeFirst = document.getElementById("modal-close");
const modalOne = document.querySelector(".modal-one");



serviceLearn.forEach((modal) => {
    modal.addEventListener("click", (event) => {
        modalOne.classList.remove("d-none");
        modalOne.classList.add("modal-active");
        console.log(event.target.parentElement.id);


    })
})
closeFirst.addEventListener("click", () => {
    modalOne.classList.add("d-none");
    modalOne.classList.remove("modal-active");

})




//my project section






const projectAll = document.getElementById("projectAll");
const projectFront = document.getElementById("projectFront");
const projectFull = document.getElementById("projectFull");