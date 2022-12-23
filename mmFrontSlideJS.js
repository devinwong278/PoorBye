const carousel = document.querySelector(".carousel"),
  firstImg = carousel.querySelectorAll("boxBawah")[0],
  arrowIcons = document.querySelectorAll(".newsBox i");
let isDragStart = false,
  isDragging = false,
  prevPageX,
  prevScrollLeft,
  positionDiff;

const autoSlide = () => {
  // if there is no image left to scroll then return from here
  if (carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;
  positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
  let firstImgWidth = firstImg.clientWidth + 14;
  // getting difference value that needs to add or reduce from carousel left to take middle img center
  let valDifference = firstImgWidth - positionDiff;
  if (carousel.scrollLeft > prevScrollLeft) {
    // if user is scrolling to the right
    return (carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff);
  }
  // if user is scrolling to the left
  carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
};
const dragStart = (e) => {
  // updatating global variables value on mouse down event
  isDragStart = true;
  prevPageX = e.pageX || e.touches[0].pageX;
  prevScrollLeft = carousel.scrollLeft;
};
const dragging = (e) => {
  // scrolling images/carousel to left according to mouse pointer
  if (!isDragStart) return;
  e.preventDefault();
  isDragging = true;
  carousel.classList.add("dragging");
  positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
  carousel.scrollLeft = prevScrollLeft - positionDiff;
  showHideIcons();
};
const dragStop = () => {
  isDragStart = false;
  carousel.classList.remove("dragging");
  if (!isDragging) return;
  isDragging = false;
  autoSlide();
};
carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);
document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);

const slider3 = document.querySelector(".carousel2"),
  Box3 = slider3.querySelectorAll("boxBawah")[0];
let mulaiDrag3 = false,
  areDrag3 = false,
  befPageX3,
  BefScrollKiri3,
  selisih3;

const Slideauto3 = () => {
  // if there is no image left to scroll then return from here
  if (slider3.scrollLeft - (slider3.scrollWidth - slider3.clientWidth) > -1 || slider3.scrollLeft <= 0) return;
  selisih3 = Math.abs(selisih3); // making selisih3 value to positive
  let Box3Width = Box3.clientWidth + 14;
  // getting difference value that needs to add or reduce from slider3 left to take middle img center
  let selisih3Count = Box3Width - selisih3;
  if (slider3.scrollLeft > BefScrollKiri3) {
    // if user is scrolling to the right
    return (slider3.scrollLeft += selisih3 > Box3Width / 3 ? selisih3Count : -selisih3);
  }
  // if user is scrolling to the left
  slider3.scrollLeft -= selisih3 > Box3Width / 3 ? selisih3Count : -selisih3;
};
const StartDrag3 = (e) => {
  // updatating global variables value on mouse down event
  mulaiDrag3 = true;
  befPageX3 = e.pageX || e.touches[0].pageX;
  BefScrollKiri3 = slider3.scrollLeft;
};
const dragging3 = (e) => {
  // scrolling images/slider3 to left according to mouse pointer
  if (!mulaiDrag3) return;
  e.preventDefault();
  areDrag3 = true;
  slider3.classList.add("dragging3");
  selisih3 = (e.pageX || e.touches[0].pageX) - befPageX3;
  slider3.scrollLeft = BefScrollKiri3 - selisih3;
  showHideIcons();
};
const stopDrag3 = () => {
  mulaiDrag3 = false;
  slider3.classList.remove("dragging3");
  if (!areDrag3) return;
  areDrag3 = false;
  Slideauto3();
};
slider3.addEventListener("mousedown", StartDrag3);
slider3.addEventListener("touchstart", StartDrag3);
document.addEventListener("mousemove", dragging3);
slider3.addEventListener("touchmove", dragging3);
document.addEventListener("mouseup", stopDrag3);
slider3.addEventListener("touchend", stopDrag3);
