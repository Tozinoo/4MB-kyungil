<!DOCTYPE html>
<?php session_start();?>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <title>reservation</title>
    <link rel="stylesheet" href="style/css.css" />
</head>

<script src="script/lib/jquery-3.1.1.min.js"></script>
<script src="./script/lib/gambit-smoothscroll-min.js"></script>
<link
            rel="stylesheet"
            href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"
        />
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        

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

    <div class="bookingBox">
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

        <div>
            <!-- 예약창 부분 -->
            <div class="booking-form-w3layouts">
                <form action="reservation_process.php" method="GET" id="reservationForm">
                <input type="hidden" name="userid" value="<?= $_SESSION['userId']?>" />
                    <h2 class="sub-heading-agileits">예약정보</h2>
                    <div class="main-flex-w3ls-sectns">
                        <div class="field-agileinfo-spc form-w3-agile-text1">
                            <select name="Available" class="form-control" form='reservationForm'>
                                <option>인원</option>
                                <option value="1인">1</option>
                                <option value="2인">2</option>
                                <option value="3인">3</option>
                                <option value="4인">4</option>
                                <option value="5인">5</option>
                                <option value="6인이상">
                                    6인 이상(문의 필수)
                                </option>
                            </select>
                        </div>
                        <div class="field-agileinfo-spc form-w3-agile-text2">
                            <select name="Pet" class="form-control" form='reservationForm'>
                                <option value="N">반려동물(유/무)</option>
                                <option value="Y">유</option>
                                <option value="N">무</option>
                            </select>
                        </div>
                    </div>

                    <!-- 방 선택 -->
                    <div class="triple-wthree">
                        <div class="field-agileinfo-spc form-w3-agile-text11">
                            <select name="IndependenceRoom" class="form-control" form='reservationForm'>
                                <option value="">독립실</option>
                                <option value="room1">1번방</option>
                                <option value="room2">2번방</option>
                                <option value="room3">3번방</option>
                                <option value="room4">4번방</option>
                            </select>
                        </div>
                        <div class="field-agileinfo-spc form-w3-agile-text22">
                            <select name="FemaleRoom" class="form-control" form='reservationForm'>
                                <option value="">여성 도미토리</option>
                                <option value="room1">1번방</option>
                                <option value="room2">2번방</option>
                                <option value="room3">3번방</option>
                                <option value="room4">4번방</option>
                            </select>
                        </div>
                        <div class="field-agileinfo-spc form-w3-agile-text33">
                            <select name="MaleRoom" class="form-control" form='reservationForm'>
                                <option value="">남성 도미토리</option>
                                <option value="room1">1번방</option>
                                <option value="room2">2번방</option>
                                <option value="room3">3번방</option>
                                <option value="room4">4번방</option>
                            </select>
                        </div>
                    </div>

                    <div class="main-flex-w3ls-sectns">
                        <div class="field-agileinfo-spc form-w3-agile-text1">
                            <input id="datepicker" name="Date" type="text" placeholder="날짜"  />
                        </div>

                    </div>

                    <h3 class="sub-heading-agileits">개인정보</h3>
                    <div class="main-flex-w3ls-sectns">
                        <div class="field-agileinfo-spc form-w3-agile-text1">
                            <input type="text" name="Name" placeholder="성함" required="" />
                        </div>
                        <div class="field-agileinfo-spc form-w3-agile-text2">
                            <input type="text" name="Phone" placeholder="연락처" required="" />
                        </div>
                    </div>
                    <div class="field-agileinfo-spc form-w3-agile-text">
                        <input type="email" name="Email" placeholder="이메일 주소" required="" />
                    </div>
                    <div class="clear"></div>

                    <div class="field-agileinfo-spc form-w3-agile-text">
                        <textarea name="Message" placeholder="기타 요청사항"></textarea>
                    </div>
                     <!-- php 구문 시작 -->
                     <?php
                // $_SESSION['userId']에 값이 있을 시 실행
                if (isset($_SESSION['userId'])) {
                    // member_modify.html로 이동
                    echo "<input type='submit' value='예약하기' />
                    <input type='reset' value='초기화' />" ;                    
                    
                } else {
                ?>
                    <!-- 이 부분 로그인 연결해주세요 -->
                    <a href="login.php" style="font-size: 2em;color:#ddd; font-weight:bold;">로그인</a> <span style="color:#ddd;">먼저 해주세요</span>
                    <?php
                }
                ?>

                    <div class="clear"></div>
                </form>
                <!--// Form starts here -->
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
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/7ZFv14Eiy7.png" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/hESd3hJxuw.png" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://i.esdrop.com/d/cl3pewp2aooj/N58MSBe8PA.png" alt="" />
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
    $(window).on("load", function() {
        $(".loader").fadeOut();
    });
    </script>
    <script src="script/reservation.js"></script>
</body>

</html>