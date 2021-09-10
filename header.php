<?php session_start();?>
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
<script src='nav.js'></script>