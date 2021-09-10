<!DOCTYPE html>
<?php session_start();?>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style/tourist.css" />
    <link rel="stylesheet" href="style/css.css" />

    <title>제주도메인</title>
</head>
<script src="script/lib/jquery-3.1.1.min.js"></script>
<script src="./script/lib/gambit-smoothscroll-min.js"></script>

<body>
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
                            class="nav_d1_a">
                            NOTICE
                        </a>
                    </li>
                    <li class="nav_d1">
                        <a href="contact.php" class="nav_d1_a hoverEft">
                            CONTACT US
                        </a>
                    </li>
                    <li class="nav_d1">
                        <a href="tourist.php" class="nav_d1_a">
                            TOURIST
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <section class="showcase">
        <video src="/video/jeju.mp4" autoplay controls></video>

        <div class="text">
            <h2>JEJU Isrand</h2>
            <h3>세계 7대 자연경관</h3>
            <p>
                제주도는 한국에서 가장 큰 섬입니다 제주도만의 환상적이고
                독특한 자연경관은 세계 어디서도 볼 수 없는 기가막힌
                아름다움을 자랑합니다 제주도는 비단 한국의 보물일뿐만아니라
                세계 7대 자연경관으로 선정된 곳입니다.
            </p>
            <a href="tourist_spot.php" data-transition="“slide”">Tourist spot</a>
        </div>
    </section>

    <div class="loader"></div>
    <script>
    $(window).on("load", function() {
        $(".loader").fadeOut();
    });
    </script>
</body>

</html>