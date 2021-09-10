<!DOCTYPE html>
<!-- 초전역변수 session start -->
<?php session_start();?>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay Surfaty</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
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


    <!-- 메인 슬라이더 영역 -->
    <div class="visual">
        <!-- 화살표 버튼 영역 -->
        <button class="arr left">left</button>
        <button class="arr right">right</button>
        <!-- 메인 이미지 영역 -->
        <ul class="visual_wrap">
            <!-- 이미지 1 -->
            <li class="visu_slide">
                <!-- 나중에 스스륵 나오는 배경 -->
                <div class="visu_veil"></div>
                <!-- 텍스트 영역 -->
                <div class="visu_txt_wrap">
                    <!-- 영역 잡아주는 박스 -->
                    <div class="visu_txt_cont">
                        <div class="visu_txt_cont_cell">
                            <div class="visu_tit">
                                Lorem ipsum dolor
                            </div>
                            <p class="visu_txt_sub01">Lorem ipsum dolor sit amet</p>
                            <p class="visu_txt_sub02">
                                가나다라마바<br>
                                사아자차카타파하입니다
                            </p>
                            <div class="visu_btn_wrap">
                                <a href="#" class="btn_view">예약하기</a>
                                <a href="#" class="btn_view">상담하기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- 이미지 2 -->
            <li class="visu_slide">
                <!-- 나중에 스스륵 나오는 배경 -->
                <div class="visu_veil"></div>
                <!-- 텍스트 영역 -->
                <div class="visu_txt_wrap">
                    <!-- 영역 잡아주는 박스 -->
                    <div class="visu_txt_cont">
                        <div class="visu_txt_cont_cell">
                            <div class="visu_tit">
                                Lorem ipsum dolor
                            </div>
                            <p class="visu_txt_sub01">Lorem ipsum dolor sit amet</p>
                            <p class="visu_txt_sub02">
                                가나다라마바<br>
                                사아자차카타파하입니다
                            </p>
                            <div class="visu_btn_wrap">
                                <a href="#" class="btn_view">예약하기</a>
                                <a href="#" class="btn_view">상담하기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- 이미지 3 -->
            <li class="visu_slide">
                <!-- 나중에 스스륵 나오는 배경 -->
                <div class="visu_veil"></div>
                <!-- 텍스트 영역 -->
                <div class="visu_txt_wrap">
                    <!-- 영역 잡아주는 박스 -->
                    <div class="visu_txt_cont">
                        <div class="visu_txt_cont_cell">
                            <div class="visu_tit">
                                Lorem ipsum dolor
                            </div>
                            <p class="visu_txt_sub01">Lorem ipsum dolor sit amet</p>
                            <p class="visu_txt_sub02">
                                가나다라마바<br>
                                사아자차카타파하입니다
                            </p>
                            <div class="visu_btn_wrap">
                                <a href="#" class="btn_view">예약하기</a>
                                <a href="#" class="btn_view">상담하기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <!-- 동그란 버튼 영역 -->
        <ul class="slide_btm_wrap">
            <li><a href="#">btn01</a></li>
            <li><a href="#">btn02</a></li>
            <li><a href="#">btn03</a></li>
            <li class="controls_wrap">
                <button class="control start">start</button>
                <button class="control stop">stop</button>
            </li>
        </ul>
    </div>

    <!-- 이벤트 프로모션 영역 -->
    <div id="eventBox">
        <div class="wrap_about_us cfix">

            <div class="us_box01 cfix">
                <div class="us_box01_bg"></div>
                <img src="https://i.esdrop.com/d/cl3pewp2aooj/TucearAdYV.png" alt="01">
                <h2>
                    SurFaty
                </h2>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>
                    It has survived not only five centuries, but also the leap into electronic typesetting,<br>remaining essentially unchanged.
                    and more recently with publishing software like Aldus PageMaker <br>including versions of Ipsum.
                </p>

            </div>

            <div class="us_box02">
                <h2>News Letter</h2>
                <p class="box02_p">
                    SurFaty 의 다양한 이벤트 소식을 받아보세요!
                </p>
                <div class="news_letter">
                    <a href="notice.php">
                        SUBSCRIBE NOW
                    </a>
                </div>

            </div>

            <div class="us_box3">
                <div class="us_box3_hoverEft">
                    <p>자세히 보기</p>
                </div>
                <img src="https://i.esdrop.com/d/cl3pewp2aooj/rTkIJUGfQl.png" alt="">
            </div>

            <div class="us_box4">
                <div class="us_box4_hoverEft">
                    <p>자세히 보기</p>
                </div>

                <img src="https://i.esdrop.com/d/cl3pewp2aooj/nJOfkDj2zC.png" alt="">
            </div>

            <div class="us_box5">
                <div class="us_box5_hoverEft">
                    <p>자세히 보기</p>
                </div>

                <img src="https://i.esdrop.com/d/cl3pewp2aooj/1rsOXxZAv9.png" alt="">
            </div>

        </div>

    </div>


    <!-- footer 영역 -->
    <footer>
        <div class="cont_wrap">
            <div class="footer_links cfix">
                <ul class="footer_mark">
                    <li>
                        <a href="#">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/7ZFv14Eiy7.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/hESd3hJxuw.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
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

    <div class="tktk"></div>

    <div class="loader"></div>
    <script>
    $(window).on('load', function() {
        $('.loader').fadeOut();
    });
    </script>

    <!-- 스크립트 파일들 -->
    <script src="script/lib/jquery-3.1.1.min.js"></script>
    <script src="script/nav.js"></script>
    <script src="script/visu.js"></script>
    <script src="script/content.js"></script>


</body>

</html>