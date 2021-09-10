<!DOCTYPE html>
<!-- 초전역변수 session start -->
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
    <link rel="stylesheet" href="style/login.css" />

</head>

<body>
    <!-- 모바일 헤더, 네비게이션, footer-->
    <div data-include-path="header.php"></div>
    <script src='script/include.js'></script>

    <!-- login container -->
    <div id="login-container">
        <!-- login form / method = POST -->
        <form action="login_process.php" method="POST">
            <div class='login-img'>

            </div>
            <!-- 로그인 폼 -->
            <div class='login-form'>
                <!-- 아이디 입력 -->
                <div class="login-input-box">
                    <label for="userId" class="form-label">아이디</label>
                    <input id="userId" type="text" name="userId" placeholder="아이디" />
                </div>
                <!-- 비밀번호 입력 -->
                <div class="login-input-box">
                    <label for="userPwd" class="form-label">비밀번호</label>
                    <input id="userPwd" type="password" name="userPwd" placeholder="비밀번호" />
                </div>
                <!-- logint btn items -->
                <div class="login-btn-items">
                    <!-- 아이디 찾기 버튼 -->
                    <button type="button" id="login-findId" class="login-find">
                        아이디 찾기
                    </button>
                    <!-- 비밀번호 찾기 버튼 -->
                    <button type="button" id="login-findPassword" class="login-find">
                        비밀번호 찾기
                    </button>
                    <!-- submit 제출 / 로그인 버튼  -->
                    <button type="submit" id="login-login" class="login-btn">
                        로그인
                    </button>
                    <!-- 회원가입 버튼 -->
                    <button type="button" id="login-register" class="login-btn">
                        회원가입
                    </button>
                </div>
            </div>
        </form>
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
    <script src='script/login.js'></script>
</body>

</html>