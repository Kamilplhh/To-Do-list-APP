import './bootstrap';

let bucket = document.getElementById('bucket'),
    mousePosition,
    offset = [0, 0],
    isDown = false

const divs = document.getElementsByClassName("object"),
    width = divs.offsetWidth

for (const div of divs) {
    div.addEventListener('mousedown', function (e) {
        div.style.width = width;
        isDown = true;
        div.style.position = 'absolute';
        div.style.zIndex = '1';
        bucket.style.display = 'block';
        offset = [
            div.offsetLeft - e.clientX,
            div.offsetTop - e.clientY
        ];
    }, true);

    document.addEventListener('mouseup', function () {
        isDown = false;
        bucket.style.display = 'none';
        div.style.position = 'sticky';
        offset = [0, 0]
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
}