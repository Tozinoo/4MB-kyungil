<!DOCTYPE html>
<?php session_start();?>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SurFaty_Room</title>
    <link rel="stylesheet" href="style/css.css">

    <!-- 톡톡이 불러오기 -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $(".tktk").load("talk.html");
    });
    </script>

    <script src="script/lib/jquery-3.1.1.min.js"></script>
    <script src="./script/lib/gambit-smoothscroll-min.js"></script>
</head>

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

    <div class="comment">
        <span>시간과 해<br>그리고 바람이 만든 담안의 공간</span>
        <p>SurFaty</p>
    </div>

    <!-- 콘텐츠 영역 -->
    <div class="content">
        <div class="recommend">
            <!-- 카테고리 부분 -->
            <div class="recom_tab cfix">
                <a href="#" class="btn_tab Act">독립실</a>
                <a href="#" class="btn_tab">여성 도미토리</a>
                <a href="#" class="btn_tab">남성 도미토리</a>
            </div>

            <div class="recom_list_wrap">
                <!-- 1번 -->
                <ul class="recom_list cfix On">
                    <li>
                        <div class="recom_img">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/IGCaPZsm5l.jpg" alt="01">
                        </div>
                        <div class="recom_name">
                            lorem ipsum
                        </div>
                        <div class="buy_view_layer">
                            <div class="buy_view_inner">
                                <a href="#" class="btn_view">자세히보기</a>
                                <a href="reservation.php" class="btn_view black">예약하러가기</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="recom_img">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/8O0VvLcd69.jpg" alt="02">
                        </div>
                        <div class="recom_name">
                            lorem ipsum
                        </div>
                        <div class="buy_view_layer">
                            <div class="buy_view_inner">
                                <a href="#" class="btn_view">자세히보기</a>
                                <a href="reservation.php" class="btn_view black">예약하러가기</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="recom_img">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/Opfmyd91sC.jpg" alt="03">
                        </div>
                        <div class="recom_name">
                            lorem ipsum
                        </div>
                        <div class="buy_view_layer">
                            <div class="buy_view_inner">
                                <a href="#" class="btn_view">자세히보기</a>
                                <a href="reservation.php" class="btn_view black">예약하러가기</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="recom_img">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/58GsasH3GO.jpg" alt="04">
                        </div>
                        <div class="recom_name">
                            lorem ipsum
                        </div>
                        <div class="buy_view_layer">
                            <div class="buy_view_inner">
                                <a href="#" class="btn_view">자세히보기</a>
                                <a href="reservation.php" class="btn_view black">예약하러가기</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- 2번 -->
                <ul class="recom_list cfix">
                    <li>
                        <div class="recom_img">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/Opfmyd91sC.jpg" alt="05">
                        </div>
                        <div class="recom_name">
                            lorem ipsum
                        </div>
                        <div class="buy_view_layer">
                            <div class="buy_view_inner">
                                <a href="#" class="btn_view">자세히보기</a>
                                <a href="reservation.php" class="btn_view black">예약하러가기</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="recom_img">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/58GsasH3GO.jpg" alt="06">
                        </div>
                        <div class="recom_name">
                            lorem ipsum
                        </div>
                        <div class="buy_view_layer">
                            <div class="buy_view_inner">
                                <a href="#" class="btn_view">자세히보기</a>
                                <a href="reservation.php" class="btn_view black">예약하러가기</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="recom_img">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/IGCaPZsm5l.jpg" alt="07">
                        </div>
                        <div class="recom_name">
                            lorem ipsum
                        </div>
                        <div class="buy_view_layer">
                            <div class="buy_view_inner">
                                <a href="#" class="btn_view">자세히보기</a>
                                <a href="reservation.php" class="btn_view black">예약하러가기</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="recom_img">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/8O0VvLcd69.jpg" alt="08">
                        </div>
                        <div class="recom_name">
                            lorem ipsum
                        </div>
                        <div class="buy_view_layer">
                            <div class="buy_view_inner">
                                <a href="#" class="btn_view">자세히보기</a>
                                <a href="reservation.php" class="btn_view black">예약하러가기</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- 3번 -->
                <ul class="recom_list cfix">
                    <li>
                        <div class="recom_img">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/8O0VvLcd69.jpg" alt="01">
                        </div>
                        <div class="recom_name">
                            lorem ipsum
                        </div>
                        <div class="buy_view_layer">
                            <div class="buy_view_inner">
                                <a href="#" class="btn_view">자세히보기</a>
                                <a href="reservation.php" class="btn_view black">예약하러가기</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="recom_img">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/IGCaPZsm5l.jpg" alt="10">
                        </div>
                        <div class="recom_name">
                            lorem ipsum
                        </div>
                        <div class="buy_view_layer">
                            <div class="buy_view_inner">
                                <a href="#" class="btn_view">자세히보기</a>
                                <a href="reservation.php" class="btn_view black">예약하러가기</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="recom_img">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/58GsasH3GO.jpg" alt="11">
                        </div>
                        <div class="recom_name">
                            lorem ipsum
                        </div>
                        <div class="buy_view_layer">
                            <div class="buy_view_inner">
                                <a href="#" class="btn_view">자세히보기</a>
                                <a href="reservation.php" class="btn_view black">예약하러가기</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="recom_img">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/Opfmyd91sC.jpg" alt="12">
                        </div>
                        <div class="recom_name">
                            lorem ipsum
                        </div>
                        <div class="buy_view_layer">
                            <div class="buy_view_inner">
                                <a href="#" class="btn_view">자세히보기</a>
                                <a href="#" class="btn_view black">예약하러가기</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!-- 외관, 내부 시설 추가 사진  -->
    <div class="photoBox">
        <p>SurFaty 숙박동</p>
        <p> SurFaty은 숙박동과 리빙동 두 개의 돌집과<br>
            수영장 있는 담 안의 독채 공간입니다.<br><br>
            숙박동에는 거실과 주방, 다락의 운치를<br>
            느낄 수 있는 '달락'이 있고, 리빙동에는<br>
            침실과 하늘이 보이는 돔 '소랑'이 있습니다.
        </p>
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