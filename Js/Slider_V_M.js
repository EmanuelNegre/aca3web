const slider = document.querySelector('.slider');
let counter = 1;

setInterval(() => {
  slider.style.transform = `translateX(${-counter * 100}%)`;
  counter++;
  if (counter >= slider.children.length) {
    counter = 0;
  }
}, 3000);
