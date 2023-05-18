import './bootstrap';
import jQuery from 'jquery';
window.$ = jQuery;

let mousePosition,
    offset = [0, 0],
    isDown = false;

const divs = document.getElementsByClassName("object"),
    width = divs.offsetWidth;

const doneY = $(window).height() * 0.9;
const doneX = $(window).width() * 0.17;
const removeX = $(window).width() * 0.57;

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
        let value = div.getAttribute('value');
        isDown = false;
        done.style.display = 'none';
        remove.style.display = 'none';
        
        if (e.clientX >= doneX && e.clientY >= doneY) {
            if (e.clientX >= removeX ) {
                location.href = '/deleteplan/' + value;
            } else if(e.clientX < removeX ) {
                location.href = '/plandone/' + value;
            }
        } else {
            location.reload();
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