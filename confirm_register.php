<!DOCTYPE html>
<!-- 초전역변수 session start -->
<?php 
session_start();

$host='localhost';
    $user='shaut1234';
    $password = 'q1w2e3q1!';
    $database = 'shaut1234';

    $conn = mysqli_connect($host, $user, $password, $database);

    $sql3="SELECT * FROM reservation";
    $result3=mysqli_query($conn,$sql3);

    $row3=mysqli_fetch_array($result3);
?>

<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Stay Surfaty</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
        <link rel="stylesheet" href="style/css.css" />
        <link rel="stylesheet" href="style/confirm_register.css" />
        <script src="script/reservation.js"></script>
    </head>

    <body>

        <!-- 모바일 헤더, 네비게이션, footer-->
        <div id="wrap">
            <nav class="mob_nav">
                <div class="m_nav_bg"></div>
                <div class="m_nav_wrap">
                    <h2>
                        <a href="#">
                            <img
                                src="https://i.esdrop.com/d/cl3pewp2aooj/vQtrWw2qNV.png"
                                alt="logo"
                            />
                        </a>
                    </h2>
                    <ul class="m_nav_list">
                        <li>
                            <a href="aboutUs.php" class="m_list_tit"
                                >ABOUT US</a
                            >
                        </li>
                        <li>
                            <a href="room.php" class="m_list_tit">ROOM</a>
                        </li>
                        <li>
                            <a href="reservation.php" class="m_list_tit"
                                >RESERVATION</a
                            >
                        </li>
                        <li>
                            <a
                                href="http://board-3.blueweb.co.kr/board.cgi?id=woqsl156&bname=jumonso&action=list"
                                class="m_list_tit"
                                >NOTICE</a
                            >
                        </li>
                        <li>
                            <a href="contact.php" class="m_list_tit"
                                >CONTACT US</a
                            >
                        </li>
                        <li>
                            <a href="tourist.php" class="m_list_tit">TOURIST</a>
                        </li>
                    </ul>
                    <!-- 모바일 footer -->
                    <div class="m_nav_btm">
                        <div class="m_nav_sitemap">
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
                            <a href="#"
                                >고객상담팀 : (수신자요금부담) 000-0000-0000</a
                            ><br />
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
                        <img
                            src="https://i.esdrop.com/d/cl3pewp2aooj/HbzYfSpOXj.png"
                            alt="logo"
                        />
                    </a>
                </h1>

                <div class="header_links">
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
                            <a
                                href="http://board-3.blueweb.co.kr/board.cgi?id=woqsl156&bname=jumonso&action=list"
                                class="nav_d1_a"
                            >
                                NOTICE
                            </a>
                        </li>
                        <li class="nav_d1">
                            <a href="contact.php" class="nav_d1_a">
                                CONTACT US
                            </a>
                        </li>
                        <li class="nav_d1">
                            <a href="tourist.php" class="nav_d1_a"> TOURIST </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <div id="confirm-container">
            <div class="confirm-article">
                <div class="confirm-title">
                    <div class="confirm-title-name"></div>
                    <div class="confirm-title-content"><?= $_SESSION['userId']?>님의 예약</div>
                </div>
                <div class="confirm-reservation">
                    <div class="confirm-contents">
                        <div class="confirm-subtitle">날짜</div>
                        <div class="confirm-content"><?php 
                        if(isset($row3['date'])){
                            echo "<span>{$row3['date']}</span>";
                        } else{ echo "예약된 내역이 없습니다";}
                      ?></div>
                    </div>
                    <div class="confirm-contents">
                        <div class="confirm-subtitle">인원</div>
                        <div class="confirm-content"><?php 
                        if(isset($row3['available'])){
                            echo "<span>{$row3['available']}</span>";
                        } else{echo "";}
                      ?></div>
                    </div>
                    <div class="confirm-contents">
                        <div class="confirm-subtitle">방</div>
                        <div class="confirm-content">
                            <?php
                            if(!empty($row3['independenceRoom'])){
                                echo "<span>독립실 : {$row3['independenceRoom']}</span>&nbsp;&nbsp;";
                            } else{echo "";}
                            if(!empty($row3['femaleRoom'])){
                                echo "<span>여자도미토리 : {$row3['femaleRoom']}</span>&nbsp;&nbsp;";
                            }else{echo "";}
                            if(!empty($row3['maleRoom'])){
                                echo "<span>남자도미토리 : {$row3['maleRoom']}</span>&nbsp;&nbsp;";
                            } else{}
                            ?>
                        </div>
                    </div>
                    <div class="confirm-contents">
                        <div class="confirm-subtitle">예약자 성함</div>
                        <div class="confirm-content"><?php 
                        if(isset($row3['name'])){
                            echo "<span>{$row3['name']}</span>";
                        } else{echo "";}
                      ?></div>
                    </div>
                    <div class="confirm-contents">
                        <div class="confirm-subtitle">예약자 연락처</div>
                        <div class="confirm-content"><?php 
                        if(isset($row3['tel'])){
                            echo "<span>{$row3['tel']}</span>";
                        } else{echo "";}
                      ?></div>
                    </div>
                    <div class="confirm-contents">
                        <div class="confirm-subtitle">예약자 이메일 주소</div>
                        <div class="confirm-content"><?php 
                        if(isset($row3['mail'])){
                            echo "<span>{$row3['mail']}</span>";
                        } else{echo "";}
                      ?></div>
                    </div>
                    <div class="confirm-contents last-contents">
                        <div
                            class="confirm-subtitle"
                            style="border: none; display: block"
                        >
                            * 기타 요청사항
                        </div>
                        <div class="confirm-content-content">
                        <?php 
                        if(isset($row3['text'])){
                            echo "<span>{$row3['text']}</span>";
                        } else{echo "";}
                      ?>
                        </div>
                    </div>
                </div>
                <div class="confirm-btn">
                    <div class="confirm-cancle-btn">
                        <input type="button" value="예약취소" onclick="location.href='cancle_reservation.php'"/>
                    </div>
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
                                <img
                                    src="https://i.esdrop.com/d/cl3pewp2aooj/7ZFv14Eiy7.png"
                                    alt=""
                                />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img
                                    src="https://i.esdrop.com/d/cl3pewp2aooj/hESd3hJxuw.png"
                                    alt=""
                                />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img
                                    src="https://i.esdrop.com/d/cl3pewp2aooj/N58MSBe8PA.png"
                                    alt=""
                                />
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
