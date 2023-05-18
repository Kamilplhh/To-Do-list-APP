import './bootstrap';
import jQuery from 'jquery';
window.$ = jQuery;

setInterval(() => document.getElementById("clock").innerHTML = (new Date().toLocaleTimeString()),1000);

document.getElementById("date").innerHTML = (new Date().toLocaleDateString());

datePickerId.min = new Date().toISOString().split("T")[0];