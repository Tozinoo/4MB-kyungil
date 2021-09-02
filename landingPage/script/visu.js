$(document).ready(function(){

  // 1.첫번째 슬라이드 나오게 
  // 2.첫번째 슬라이드 나오는 함수
  // 3.함수 실행
  first_act();
  function first_act() {

   $('.visu_slide').eq(0).addClass('Active');
   $('.slide_btm_wrap>li').eq(0).addClass('Act')

    active();
 }

//4. slide에 class가 붙고 난후 벌어지는 일들
  function active() {

  $('.visu_slide.Active').children('.visu_veil').animate({'width':'44%'},1000);
  $('.visu_slide.Active').children('.visu_txt_wrap').delay(1500).animate({'opacity':'1'},1000);

  }

// 5 reset(초기화)버튼  - removeClass로 Ative랑 Act없애고, 다른 것들도 안 보이게!
  function reset() {
  $('.visu_slide').removeClass('Active');
  $('.slide_btm_wrap>li').removeClass('Act')
  $('.visu_slide').children('.visu_veil').animate({'width':'0%'},0);
  $('.visu_slide').children('.visu_txt_wrap').animate({'opacity':'0'},0);
}


  // 6.오른쪽 화살표 눌렀을 때
    $('.arr.right').click(function () {

        // active된 현재 순서값 변수로 저장
         var index = $('.visu_slide.Active').index();

         reset();
        if(index<2){//index가 2보다 작을때는 index값에 + 1 해줘

             $('.visu_slide').eq(index+1).addClass('Active');
             $('.slide_btm_wrap>li').eq(index+1).addClass('Act')

        }
        else if(index==2){//index가 2와 같아지면 index=0으로 다시 처음값 보여주셈
          $('.visu_slide').eq(0).addClass('Active');
          $('.slide_btm_wrap>li').eq(0).addClass('Act')

        }

      active()
    });

  // 7. 왼쪽 화살표 누르면
    $('.arr.left').click(function () {

          // active된 현재 순서값 변수로 저장
           var index = $('.visu_slide.Active').index();

           reset();
          if(index>0){//index가 0보다 클때 index값에 - 1

               $('.visu_slide').eq(index-1).addClass('Active');
               $('.silde_btm_wrap>li').eq(index-1).addClass('Act')

          }
          else if(index==0){//index가 0되면 index=2로 다시!
            $('.visu_slide').eq(2).addClass('Active');
            $('.slide_btm_wrap>li').eq(2).addClass('Act')

          }

        active()
      });


  // 8.슬라이드 밑에 동그란 버튼들
  $('.slide_btm_wrap li').not('.controls_wrap').click(function(e) {
    e.preventDefault();

       reset();//초기화
        var index= $(this).index();//현재순서값 저장
        $(this).addClass('Act');//나 자신 하단버튼 클래스 붙이기
        // 슬라이드 순서값에 맞늕 클래스 붙이기
        $('.visu_slide').eq(index).addClass('Active');
        // active함수
       active();


  })

  // 9.슬라이드가 계속 실행되게 함
    //9-1 오른쪽 버튼 클릭하는 내용을 함수로 만들기
    function play() {
      $('.arr.right').click();
    }
   //9-2 계속 실행되게 함을 변수로 대입한다
   var slider_play = setInterval(play,8000);

   // 9-3 멈추는 변수 정의
   var slider_stop;


   // 10.stop btn을 클릭했을때

   $('.controls_wrap .control.stop').click(function (e) {
     e.preventDefault();

     $(this).fadeOut(0);
     $('.controls_wrap .control.start').fadeIn(0);
     slider_stop=clearInterval(slider_play);
   })

   $('.controls_wrap .control.start').click(function (e) {
     e.preventDefault();
     $(this).fadeOut(0);
      $('.controls_wrap .control.stop').fadeIn(0);

     slider_play=setInterval(play,8000);
   })




})
