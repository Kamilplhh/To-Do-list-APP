import './bootstrap';
import jQuery from 'jquery';
window.$ = jQuery;

let mousePosition,
    offset = [0, 0],
    isDown = false;

const divs = document.getElementsByClassName("object"),
    width = divs.offsetWidth;

for (const div of divs) {
    setTimeout(() => {
    div.addEventListener('mousedown', function (e) {
        div.style.width = width;
        isDown = true;
        div.style.position = 'absolute';
        div.style.zIndex = '1';
        done.style.display = 'flex';
        remove.style.display = 'flex';
        offset = [
            60 - e.clientX,
            8 - e.clientY
        ];
    }, true);

    document.addEventListener('mouseup', function (e) {
        isDown = false;
        done.style.display = 'none';
        remove.style.display = 'none';
        
        if (e.clientX >= 334 && e.clientY >= 789) {
            if (e.clientX >= 1316) {
            } else if(e.clientX < 1316) {
            }
        } else {
            div.style.position = 'sticky';
        }


    }, true);

    document.addEventListener('mousemove', function (event) {
        event.preventDefault();
        if (isDown) {
            mousePosition = {

                x: event.clientX,
                y: event.clientY

            };
            div.style.left = (mousePosition.x + offset[0]);
            div.style.top = (mousePosition.y + offset[1]);
        }
    }, true);
    }, "1000");
}