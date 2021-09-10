// REVIEW, 후기, 방 추천, 포토앨범 부분

$(document).ready(function(){

   $('.recom_tab .btn_tab').click(function (e) {
     e.preventDefault();
     $('.recom_tab .btn_tab').removeClass('Act');
     $(this).addClass('Act');

     var idx = $('.recom_tab .btn_tab.Act').index();
     $('.recom_list_wrap>ul').removeClass('On');
     $('.recom_list_wrap>ul').eq(idx).addClass('On');
   });







});
