const showtext = document.getElementsByClassName('.text');
const hz = document.getElementById("pst"); 
const video1 = document.getElementById("pst");


(function() {
    var swiper = new Swiper(".slider1 .swiper-container", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        
    });
})();




$(document).ready(function(){

    // gnb_menu
    $('.gnb .nav_d1').mouseenter(function () {
       // 1. 순서값이 들어있는 변수 정의
         var idx= $(this).index();
       // 2.자식요소 ul을 모두 사라지게 함.
        $('.gnb .nav_d1').children('ul').fadeOut(0);
        // 3.gnb 에 클래스를 붙인다
        $('.gnb').addClass('Active');
         // 4.현재 순서값의 자식요소 ul 나타나게 함
        $('.gnb .nav_d1').eq(idx).children('ul').fadeIn(100);
        // 5.만약 순서값이 0이라면
       if(idx==0){
         $('.gnb .nav_d1').children('ul').fadeOut(0);
         $('.gnb').removeClass('Active');
 
       }
 
    })
 
     // mouseleave
     $('.nav_d2_box').mouseleave(function () {
 
       setTimeout(function () {
         $('.gnb .nav_d1').children('ul').fadeOut(0);
         $('.gnb').removeClass('Active');
 
 
       },1000);
 
 
     });
 
 
    $('.mob_nav_btn').click(function (e) {
      e.preventDefault();
      $('.mob_nav').addClass('left_move');
    })
 
 
   $('.m_nav_bg').click(function () {
     $('.mob_nav').removeClass('left_move');
 
   });
 
 
 
 
 
 });
 