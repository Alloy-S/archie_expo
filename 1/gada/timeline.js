 
     "use strict";

function qs(selector, all = false) {
  return all ? document.querySelectorAll(selector) : document.querySelector(selector);
}

// const childern = document.querySelectorAll(".container-timeline");
const parent = document.querySelector(".container-timeline");

// parent.addEventListener("scroll", () => {
//   prevScrollY = parent.scrollTop;
//   console.log(parent.scrollTop); //I need to change this
// });
const style = window.getComputedStyle(document.getElementById("timeline"), null);
const sections = qs('.section', true);
const timeline = qs('.timeline');
const line = qs('.line');
line.style.bottom = `calc(100% - 20px)`;
let prevScrollY = parent.scrollTop;
let up, down;
let full = false;
let set = 0;
const targetY =  parseInt(style.getPropertyValue('height')) * .8;
console.log(prevScrollY);
console.log(targetY);

function scrollHandler(e) {
  const {
    scrollY
  } = window;
  up = scrollY < prevScrollY;
  down = !up;
  const timelineRect = timeline.getBoundingClientRect();
  const lineRect = line.getBoundingClientRect(); // const lineHeight = lineRect.bottom - lineRect.top;

  const dist = targetY - timelineRect.top;
  console.log("dist " + dist);

  if (down && !full) {
    set = Math.max(set, dist);
    line.style.bottom = `calc(100% - ${set}px)`;
  }

  if (dist > timeline.offsetHeight + 50 && !full) {
    full = true;
    line.style.bottom = `-50px`;
  }

  sections.forEach(item => {
    // console.log(item);
    const rect = item.getBoundingClientRect(); //     console.log(rect);

    if (rect.top + item.offsetHeight / 5 < targetY) {
      item.classList.add('show-me');
    }
  }); // console.log(up, down);

  prevScrollY = parent.scrollTop;
}

scrollHandler();
line.style.display = 'block';
parent.addEventListener('scroll', scrollHandler);