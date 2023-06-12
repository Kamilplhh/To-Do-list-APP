const buttonR = document.getElementById("rotateR");
const buttonL = document.getElementById("rotateL");
const triangle = document.getElementById("triangle");


buttonR.onclick = function(){
    triangle.classList.toggle('rotateR');
}


buttonL.onclick = function(){
    triangle.classList.toggle('rotateL');
}

datePickerId.min = new Date().toISOString().split("T")[0];