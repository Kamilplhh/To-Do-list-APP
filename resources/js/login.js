const button = document.getElementById("rotate");
const triangle = document.getElementById("triangle");

button.onclick = function(){
    triangle.classList.toggle('rotate');
}