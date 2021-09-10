<!DOCTYPE html>
<?php session_start();?>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="style/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700&display=swap" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>


</head>
<script src="script/lib/jquery-3.1.1.min.js"></script>
<script defer src="./script/lib/gambit-smoothscroll-min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(".tktk").load("talk.html");
});
</script>

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

    <!-- contact us 영역 -->
    <div id="main">
        <div id="map">
            <script type="text/javascript"
                src="//dapi.kakao.com/v2/maps/sdk.js?appkey=9ae417f5246ddfe2926366dbdba92d0a&libraries=services">
            </script>
        </div>

        <div class="list">
            <div class="location">
                <dl class="info-list">
                    <dt class="loc-title">
                        <i class="fas fa-map-marker-alt"></i> 위치
                    </dt>
                    <dd class="suf">SURFATY GUEST HOUSE</dd>
                    <dd>제주특별자치도 서귀포시 칠십리로 55</dd>
                    <dd>
                        55, Chilsimni-ro, Seogwipo-si, Jeju-do, Republic of
                        Korea
                    </dd>
                </dl>
                <div class="btn">
                    <dl>
                        <dd>
                            <a href="http://kko.to/8oee07t4p" target="_blank">
                                <button>
                                    <i class="fas fa-search"></i> 길찾기
                                </button>
                            </a>
                        </dd>
                        <dd>
                            <a href="http://kko.to/57KGjNtfB" target="_blank">
                                <button>
                                    <i class="fas fa-map-marker-alt"></i>
                                    지도보기
                                </button>
                            </a>
                        </dd>
                    </dl>
                </div>
            </div>

            <dl class="info-list">
                <dt><i class="fas fa-mobile-alt"></i> 전화번호</dt>
                <dd>010-3209-8979</dd>
            </dl>

            <div class="second">
                <dl class="info-list">
                    <dt><i class="far fa-clock"></i> 이용시간</dt>
                    <dd>08:00 - 22:00</dd>
                </dl>

                <dl class="info-list">
                    <dt><i class="far fa-clock"></i> 입실/퇴실</dt>
                    <dd>
                        <span class="info-list-items">입실(체크인)</span>14:00
                    </dd>
                    <dd>
                        <span class="info-list-items" style="padding-right: 23px">퇴실(체크아웃)</span>11:00
                    </dd>
                </dl>
            </div>

            <dl class="info-list">
                <dt><i class="fas fa-exclamation-circle"></i> 이용안내</dt>
                <dd><img src="https://i.esdrop.com/d/cl3pewp2aooj/Z5KGoKvgCi.png" /></dd>
            </dl>

            <div class="last">
                <dl class="info-list">
                    <dt><i class="far fa-user"></i> 사업자정보</dt>
                    <dd>
                        <span class="info-list-items">상호명</span>SURFATY
                        GUEST HOUSE
                    </dd>
                    <dd>
                        <span class="info-list-items">대표명</span>이동녘
                    </dd>
                    <dd>
                        <span class="info-list-items" style="padding-right: 31px">사업자번호</span>658-95-00145
                    </dd>
                    <dd>
                        <span class="info-list-items">이메일</span>surfaty0830@naver.com
                    </dd>
                </dl>

                <dl class="info-list">
                    <dt><i class="far fa-credit-card"></i> 입금계좌</dt>
                    <dd>
                        <span class="info-list-items">예금주</span>양닻별
                    </dd>
                    <dd>
                        <span class="info-list-items" style="padding-right: 47px">입금은행</span>신한
                    </dd>
                    <dd>
                        <span class="info-list-items" style="padding-right: 47px">계좌번호</span>110-846-957493
                    </dd>
                    <dd>
                        <span class="info-list-tc"><i class="far fa-check-circle"></i> 사업자정보
                            확인 후 이체해주세요.</span>
                    </dd>
                    <dd>
                        <span class="info-list-tc"><a href="https://search.naver.com/search.naver?sm
                                =tab_hty.top&where=nexearch&oquery=%EC%9D%B8%ED%84%B0%EB%84%B7+%EC%82%AC%EA%B8%B0%EC%A1%B0%ED%9A%8C&ie
                                =utf8&query=%EC%9D%B8%ED%84%B0%EB%84%B7+%EC%82%AC%EA%B8%B0%EC%A1%B0%ED%9A%8C"
                                target="_blank">
                                계좌 신고여부 확인</a></span>
                    </dd>
                </dl>
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

    <div class="loader"></div>
    <script>
    $(window).on('load', function() {
        $('.loader').fadeOut();
    });
    </script>

    <div class="tktk"></div>

    <script src="script/contact.js"></script>
</body>

</html>