<!DOCTYPE html>
<?php session_start();?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style/reset.css" />
    <link rel="stylesheet" href="style/index.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <link rel="stylesheet" href="style/findpwd.css" />
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

    <!-- findpwd container -->

    <div class="findpwd-container">
        <div class="findpwd-article">
            <div class="findpwd-title">비밀번호 찾기</div>
            <div class="findpwd-form">
                <form action="findpwd_process.php" method="GET">
                    <p class="findpwd-subtitle">
                        <span>아이디 :</span>
                        <input type="text" name="userid" size="30" />
                    </p>
                    <p class="findpwd-subtitle">
                        <span>이메일 :</span>
                        <input type="text" name="email" size="30" />
                    </p>
                    <div class="findpwd-findMenu">
                        <button id="findid-findid" onclick="location.href='findid.php'">
                            아이디 찾기
                        </button>
                        <button onclick="location.href='findpwd.php'">
                            비밀번호 찾기
                        </button>
                    </div>
                    <div class="findpwd-btn-find">
                        <input type="submit" value="찾기" id="find-btn" />
                        <input type="button" value="취소" onclick="history.back(1)" />
                        <!-- history.back(1) : 이전페이지로 이동 -->
                    </div>
                </form>
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

</body>

</html>