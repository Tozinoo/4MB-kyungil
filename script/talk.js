const $loc = document.querySelector(".tk-first");
const $cl = document.querySelector(".tk-second");
const $tk = document.querySelector(".tk-third");
const $up = document.querySelector(".tk-fourth");

const $loctxt = document.querySelector(".tk-loc-text");
const $cltxt = document.querySelector(".tk-cl-text");
const $tktxt = document.querySelector(".tk-tt-text");
const $uptxt = document.querySelector(".tk-top-text");

const $popup = document.querySelector(".tk-call");



//위치
$loc.addEventListener("mouseover", () => {
  $loc.style.width = `120px`;
  $loc.style.height = `50px`;
  $loc.style.borderRadius = `50px`;
  $loctxt.style.opacity = `1`;
});
$loc.addEventListener("mouseout", () => {
  $loc.style.width = `50px`;
  $loc.style.height = `50px`;
  $loc.style.borderRadius = `50px`;
  $loctxt.style.opacity = `0`;
});


//전화
$cl.addEventListener("mouseover", () => {
  $cl.style.width = `120px`;
  $cl.style.height = `50px`;
  $cl.style.borderRadius = `50px`;
  $cltxt.style.opacity = `1`;
});
$cl.addEventListener("mouseout", () => {
  $cl.style.width = `50px`;
  $cl.style.height = `50px`;
  $cl.style.borderRadius = `50px`;
  $cltxt.style.opacity = `0`;
});


//톡톡
$tk.addEventListener("mouseover", () => {
  $tk.style.width = `120px`;
  $tk.style.height = `50px`;
  $tk.style.borderRadius = `50px`;
  $tktxt.style.opacity = `1`;
});
$tk.addEventListener("mouseout", () => {
  $tk.style.width = `50px`;
  $tk.style.height = `50px`;
  $tk.style.borderRadius = `50px`;
  $tktxt.style.opacity = `0`;
});


//TOP
$up.addEventListener("mouseover", () => {
  $up.style.width = `120px`;
  $up.style.height = `50px`;
  $up.style.borderRadius = `50px`;
  $uptxt.style.opacity = `1`;
});
$up.addEventListener("mouseout", () => {
  $up.style.width = `50px`;
  $up.style.height = `50px`;
  $up.style.borderRadius = `50px`;
  $uptxt.style.opacity = `0`;
});


//팝업
 function showPopup() {
  window.open("popup.html", "popup", "width=700,height=500,left=100%,top=100%");
 }


$popup.addEventListener("click", () => {
  document.addEventListener("click", showPopup());
});