// buat news
const carousel = document.querySelector(".carousel"),
  firstImg = carousel.querySelectorAll("berita")[0],
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

// // buat stocks
const slider = document.querySelector(".slider"),
  Box1 = slider.querySelectorAll("InvestBox")[0];
let mulaiDrag = false,
  areDrag = false,
  befPageX,
  BefScrollKiri,
  selisih;

const Slideauto = () => {
  // if there is no image left to scroll then return from here
  if (slider.scrollLeft - (slider.scrollWidth - slider.clientWidth) > -1 || slider.scrollLeft <= 0) return;
  selisih = Math.abs(selisih); // making selisih value to positive
  let Box1Width = Box1.clientWidth + 14;
  // getting difference value that needs to add or reduce from slider left to take middle img center
  let SelisihCount = Box1Width - selisih;
  if (slider.scrollLeft > BefScrollKiri) {
    // if user is scrolling to the right
    return (slider.scrollLeft += selisih > Box1Width / 3 ? SelisihCount : -selisih);
  }
  // if user is scrolling to the left
  slider.scrollLeft -= selisih > Box1Width / 3 ? SelisihCount : -selisih;
};
const StartDrag = (e) => {
  // updatating global variables value on mouse down event
  mulaiDrag = true;
  befPageX = e.pageX || e.touches[0].pageX;
  BefScrollKiri = slider.scrollLeft;
};
const dragging1 = (e) => {
  // scrolling images/slider to left according to mouse pointer
  if (!mulaiDrag) return;
  e.preventDefault();
  areDrag = true;
  slider.classList.add("dragging1");
  selisih = (e.pageX || e.touches[0].pageX) - befPageX;
  slider.scrollLeft = BefScrollKiri - selisih;
  showHideIcons();
};
const stopDrag = () => {
  mulaiDrag = false;
  slider.classList.remove("dragging1");
  if (!areDrag) return;
  areDrag = false;
  Slideauto();
};
slider.addEventListener("mousedown", StartDrag);
slider.addEventListener("touchstart", StartDrag);
document.addEventListener("mousemove", dragging1);
slider.addEventListener("touchmove", dragging1);
document.addEventListener("mouseup", stopDrag);
slider.addEventListener("touchend", stopDrag);

// buat crypto
const slider2 = document.querySelector(".slider2"),
  Box2 = slider2.querySelectorAll("InvestBox2")[0];
let mulaiDrag2 = false,
  areDrag2 = false,
  befPageX2,
  BefScrollKiri2,
  selisih2;

const Slideauto2 = () => {
  // if there is no image left to scroll then return from here
  if (slider2.scrollLeft - (slider2.scrollWidth - slider2.clientWidth) > -1 || slider2.scrollLeft <= 0) return;
  selisih2 = Math.abs(selisih2); // making selisih2 value to positive
  let Box2Width = Box2.clientWidth + 14;
  // getting difference value that needs to add or reduce from slider2 left to take middle img center
  let selisih2Count = Box2Width - selisih2;
  if (slider2.scrollLeft > BefScrollKiri2) {
    // if user is scrolling to the right
    return (slider2.scrollLeft += selisih2 > Box2Width / 3 ? selisih2Count : -selisih2);
  }
  // if user is scrolling to the left
  slider2.scrollLeft -= selisih2 > Box2Width / 3 ? selisih2Count : -selisih2;
};
const StartDrag2 = (e) => {
  // updatating global variables value on mouse down event
  mulaiDrag2 = true;
  befPageX2 = e.pageX || e.touches[0].pageX;
  BefScrollKiri2 = slider2.scrollLeft;
};
const dragging2 = (e) => {
  // scrolling images/slider2 to left according to mouse pointer
  if (!mulaiDrag2) return;
  e.preventDefault();
  areDrag2 = true;
  slider2.classList.add("dragging2");
  selisih2 = (e.pageX || e.touches[0].pageX) - befPageX2;
  slider2.scrollLeft = BefScrollKiri2 - selisih2;
  showHideIcons();
};
const stopDrag2 = () => {
  mulaiDrag2 = false;
  slider2.classList.remove("dragging2");
  if (!areDrag2) return;
  areDrag2 = false;
  Slideauto2();
};
slider2.addEventListener("mousedown", StartDrag2);
slider2.addEventListener("touchstart", StartDrag2);
document.addEventListener("mousemove", dragging2);
slider2.addEventListener("touchmove", dragging2);
document.addEventListener("mouseup", stopDrag2);
slider2.addEventListener("touchend", stopDrag2);

// buat Forex
const slider3 = document.querySelector(".slider3"),
  Box3 = slider3.querySelectorAll("InvestBox3")[0];
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
