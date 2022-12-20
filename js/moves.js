const img1 = document.getElementById("img1");
const img2 = document.getElementById("img2");
const img3 = document.getElementById("img3");
const img4 = document.getElementById("img4");
const img5 = document.getElementById("img5");
const img6 = document.getElementById("img6");

let moving = false;

img1.addEventListener("click", initialClick, false);
img2.addEventListener("click", initialClick, false);
img3.addEventListener("click", initialClick, false);
img4.addEventListener("click", initialClick, false);
img5.addEventListener("click", initialClick, false);
img6.addEventListener("click", initialClick, false);


function move(e) {
  const newX = e.clientX - 50;
  const newY = e.clientY - 50;
  image.style.left = `${newX}px`;
  image.style.top = `${newY}px`;
}

function initialClick(e) {
  if (moving) {
    document.removeEventListener("mousemove", move);
    moving = !moving;
    return;
  }
  moving = !moving;
  image = this;
  document.addEventListener("mousemove", move, false);
}
