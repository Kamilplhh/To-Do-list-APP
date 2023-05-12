import './bootstrap';
import jQuery from 'jquery';
window.$ = jQuery;

setInterval(() => document.getElementById("clock").innerHTML = (new Date().toLocaleTimeString()),1000);

document.getElementById("date").innerHTML = (new Date().toLocaleDateString());

const button = document.getElementById("rotate");
const triangle = document.getElementById("triangle");

button.onclick = function(){
    triangle.classList.toggle('rotate');
}