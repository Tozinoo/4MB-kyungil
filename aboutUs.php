<!DOCTYPE html>
<?php session_start();?>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SurFaty_aboutUs</title>
    <link rel="stylesheet" href="style/css.css">

    <!-- 톡톡이 불러오기 -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $(".tktk").load("talk.html");
    });
    </script>

</head>
<script src="script/lib/jquery-3.1.1.min.js"></script>
<script defer src="./script/lib/gambit-smoothscroll-min.js"></script>

<body>
    <!-- 모바일 헤더, 네비게이션, footer-->
    <div id="wrap">
        <nav class="mob_nav">
            <div class="m_nav_bg"></div>
            <div class="m_nav_wrap">
                <h2>
                    <a href="#">
                        <img src="https://i.esdrop.com/d/cl3pewp2aooj/vQtrWw2qNV.png" alt="logo" />
                    </a>
                </h2>
                <ul class="m_nav_list">
                    <li>
                        <a href="aboutUs.php" class="m_list_tit">ABOUT US</a>
                    </li>
                    <li>
                        <a href="room.php" class="m_list_tit">ROOM</a>
                    </li>
                    <li>
                        <a href="reservation.php" class="m_list_tit">RESERVATION</a>
                    </li>
                    <li>
                        <a href="http://board-3.blueweb.co.kr/board.cgi?id=woqsl156&bname=jumonso&action=list"
                            class="m_list_tit">NOTICE</a>
                    </li>
                    <li>
                        <a href="contact.php" class="m_list_tit">CONTACT US</a>
                    </li>
                    <li>
                        <a href="tourist.php" class="m_list_tit">TOURIST</a>
                    </li>
                </ul>
                <!-- 모바일 footer -->
                <div class="m_nav_btm">
                    <div class="m_nav_sitemap">
                        <!-- php 구문 시작 -->
                        <?php
                // $_SESSION['userId']에 값이 있을 시 실행
                if (isset($_SESSION['userId'])) {
                    // member_modify.html로 이동
                    echo "<a href='member_modify.php'>{$_SESSION['userName']}</a>" ;
                    
                    // logout_process.php로 이동
                    echo "<a href='logout_Process.php'>로그아웃</a>";
                    
                    
                } else {
                ?>
                        <!-- 이 부분 로그인 연결해주세요 -->
                        <a href="login.php">로그인</a>
                        <!-- 이 부분 회원가입 연결해주세요 -->
                        <a href="agreement.html">회원가입</a>
                        <?php
                }
                ?>
                    </div>
                    <div class="m_nav_cs">
                        <a href="#">고객상담팀 : (수신자요금부담) 000-0000-0000</a><br />
                        <span>월~금 : AM 09:00~PM 06:00</span>
                    </div>
                    <div class="m_nav_cp">
                        <p>
                            <a href="#">회사소개 |</a>
                            <a href="#">서비스이용약관 |</a>
                            <a href="#">개인정보저리방침</a>
                        </p>
                        <p>
                            <a href="#">영상정보처리방침 |</a>
                            <a href="#">가나다라마바사</a>
                        </p>
                    </div>
                    <div class="m_copy">
                        © SURFATY CORPORATION. All rights reserved.
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- 헤더, 네비게이션 영역 -->
    <header>
        <div class="header_wrap cont_wrap">
            <a href="#" class="mob_nav_btn">
                <i></i>
            </a>
            <h1 class="logo">
                <a href="index.php">
                    <img src="https://i.esdrop.com/d/cl3pewp2aooj/HbzYfSpOXj.png" alt="logo" />
                </a>
            </h1>

            <div class="header_links">
                <!-- php 구문 시작 -->
                <?php
                // $_SESSION['userId']에 값이 있을 시 실행
                if (isset($_SESSION['userId'])) {
                    // member_modify.html로 이동
                    echo "<a href='member_modify.php'>{$_SESSION['userName']}</a>" ;
                    
                    // logout_process.php로 이동
                    echo "<a href='logout_Process.php'>로그아웃</a>";
                    
                    
                } else {
                ?>
                <!-- 이 부분 로그인 연결해주세요 -->
                <a href="login.php">로그인</a>
                <!-- 이 부분 회원가입 연결해주세요 -->
                <a href="agreement.html">회원가입</a>
                <?php
                }
                ?>
            </div>
        </div>

        <!-- 네비게이션 바 -->
        <div class="gnb">
            <div class="cont_wrap">
                <ul class="gnb_menu">
                    <li class="nav_d1">
                        <a href="aboutUs.php" class="nav_d1_a">
                            ABOUT US
                        </a>
                    </li>
                    <li class="nav_d1">
                        <a href="room.php" class="nav_d1_a"> ROOM </a>
                    </li>
                    <li class="nav_d1">
                        <a href="reservation.php" class="nav_d1_a">
                            RESERVATION
                        </a>
                    </li>
                    <li class="nav_d1">
                        <a href="http://board-3.blueweb.co.kr/board.cgi?id=woqsl156&bname=jumonso&action=list"
                            class="nav_d1_a"> NOTICE </a>
                    </li>
                    <li class="nav_d1">
                        <a href="contact.php" class="nav_d1_a"> CONTACT US </a>
                    </li>
                    <li class="nav_d1">
                        <a href="tourist.php" class="nav_d1_a"> TOURIST </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- 게스트하우스 소개 & 부대시설 소개 영역 -->

    <!-- ABOUT US -->
    <div class="aboutUsBg">
        <div>
            <p>제주 동쪽, <br>반달 모양의 마을과 달이 떠오르는 바닷가 월정리에<br> 60년의 시간이 오롯이 담긴 돌집 'SurFaty' 가 있습니다.<br>
                오래전 다져놓았을 나무 기둥과 제주의 투박함이 담긴 돌을 없애지 않고<br>옛 돌집 그대로의 모습을 남겨두었습니다.<br>
                소란스러운 일상을 벗어나 제주스러운 삶을 보내고 싶을 때,<br>조용한 돌담길 따라 느릿하게 하루의 모습이 변화하는 곳<br>SurFaty 가 함께 하겠습니다.</p>


        </div>

    </div>

    <!-- 부대시설 영역 -->
    <div class="content fac">
        <!-- 부대시설 1 -->
        <div class="lounge lou01">
            <div class="lounge_cont">
                <div class="cont_table">
                    <div class="cont_cell animate">
                        <h3>커뮤니티 세미나실</h3>
                        <div class="lounge_img">
                            <a href="#">
                                <img src="https://i.esdrop.com/d/cl3pewp2aooj/SWJxxDF0tR.jpg" alt="01">
                            </a>
                        </div>
                        <div class="sub_tit">
                            LOREM IPSUM DOLOR<br>
                        </div>
                        <div class="desc">
                            간단한 설명 어쩌구 저쩌구 부대시설입니다요
                            <br>
                            어쩌구 저쩌구 어쩌구 저쩌구 블라블라 넣을 자리
                        </div>
                        <div class="btn_wrap">
                            <a href="#" class="btn_view">여기는 뭐 넣지</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 부대시설 2 -->
        <div class="lounge lou02">
            <div class="lounge_cont">
                <div class="cont_table">
                    <div class="cont_cell animate">
                        <h3>야외 수영장</h3>
                        <div class="lounge_img">
                            <a href="#">
                                <img src="https://i.esdrop.com/d/cl3pewp2aooj/pBWptxic7h.jpg" alt="01">
                            </a>
                        </div>

                        <div class="sub_tit">
                            LOREM IPSUM<br>
                        </div>
                        <div class="desc">
                            간단한 설명 어쩌구 저쩌구 뭐라고 <br>
                            뭐라고 써야할 지 모르겠어여 설명자리얍
                        </div>
                        <div class="btn_wrap">
                            <a href="#" class="btn_view">여기는 뭐넣지</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 부대시설 3 -->
        <div class="lounge lou01">
            <div class="lounge_cont">
                <div class="cont_table">
                    <div class="cont_cell animate">
                        <h3>든든한 조식 제공</h3>
                        <div class="lounge_img">
                            <a href="#">
                                <img src="https://i.esdrop.com/d/cl3pewp2aooj/0TelE9S2Ge.jpg" alt="01">
                            </a>
                        </div>
                        <div class="sub_tit">
                            LOREM IPSUM DOLOR<br>
                        </div>
                        <div class="desc">
                            설명 어쩌구 저쩌구 어쩌구 우리조
                            <br>
                            부대시설에 대한 간단한 설명
                        </div>
                        <div class="btn_wrap">
                            <a href="#" class="btn_view">여기는 뭐 넣지</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer 영역 -->
    <footer>
        <div class="cont_wrap">
            <div class="footer_links cfix">
                <!-- <div class="footer_link_left">
                  <a href="#" class="footer_item">사이트맵</a>
                  <a href="#" class="footer_item">로그인</a>
                  <a href="#" class="footer_item">회원가입</a>
                  <a href="#" class="footer_item">고객상담팀(수신자요금부담): 080-023-5454</a>
                  <span  class="footer_item time">[상담시간] 월~금:AM 09:00~PM 06:00</span>
                </div> -->
                <ul class="footer_mark">
                    <li>
                        <a href="index.php">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/7ZFv14Eiy7.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="index.php">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/hESd3hJxuw.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="index.php">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/N58MSBe8PA.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer_legal">
                <p class="footer_item copyright">
                    © SURFATY CORPORATION. All rights reserved.
                </p>
                <a href="#" class="footer_item company">회사소개</a>
                <a href="#" class="footer_item">서비스이용약관</a>
                <a href="#" class="footer_item">개인정보저리방침</a>
                <a href="#" class="footer_item">영상정보처리방침</a>
            </div>
        </div>
    </footer>

    <div class="loader"></div>
    <script>
    $(window).on('load', function() {
        $('.loader').fadeOut();
    });
    </script>

    <div class="tktk"></div>

    <!-- 스크립트 파일들 -->
    <script src="script/lib/jquery-3.1.1.min.js"></script>
    <script src="script/nav.js"></script>
    <script src="script/visu.js"></script>
    <script src="script/content.js"></script>

</body>

</html>