<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style/register.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    <!-- register  -->
    <form id='register-form' name="form" method="POST" action="signup_process.php">
        <!-- register container -->
        <div class="register-container">
            <!-- 네모 박스 밖 -->
            <div id="register-user">
                <!-- 제목 -->
                <a href="index.php"><img src="https://i.esdrop.com/d/cl3pewp2aooj/3NraH0tYRB.png" alt="LOGO" /></a>
                <span class='register-top-title'>SurFaty</span> <span class='register-top-title-register'>회원가입</span>
            </div>
            <!-- 네모 박스 안 -->
            <div id="register-article">
                <div class="register-title">
                    <h2>계정 정보를 입력해 주세요.</h2>
                </div>
                <div class='register-notice'>
                    <span>(*)은 필수사항입니다.</span>
                </div>

                <!-- 아이디 부분 -->
                <strong class="register-tf">아이디</strong><span class='register-required'>*</span>
                <div class="register-subtitle">
                    <label for="user_id" class="register-lab"></label>
                    <!-- input -->
                    <input class="register-input" type="text" id="user_id" placeholder="아이디 입력" name="userId"
                        required />
                    <!-- error msg 출력 부분 -->
                    <div class='register-error-msg'></div>
                    <!-- 중복확인 버튼 -->
                    <div class="register-util">
                        <button class="register-btn-input" onclick="checkId()">
                            중복확인
                        </button>
                    </div>
                </div>

                <!-- 비밀번호 부분 -->
                <strong class="register-tf">비밀번호</strong><span class='register-required'>*</span>
                <div class="register-subtitle">
                    <label for="user_pwd" class="register-lab"></label>
                    <!-- input -->
                    <input class="register-input" type="password" id="user_pwd" placeholder="비밀번호 입력 (8~16자리)"
                        name="userPwd" />
                    <!-- error msg 출력 부분 -->
                    <div class='register-error-msg'></div>

                    <!-- 비밀번호 재입력 부분 -->
                    <input class="register-input" type="password" id="user_confirmPwd" placeholder="비밀번호 재입력"
                        name="confirmUserPwd" />

                    <div style="height: 15px;">
                        <!-- heigth로 간격 넓히기 -->
                    </div>
                    <div class="register-util"></div>
                </div>

                <!-- 이름 부분 -->
                <strong class="register-tf">이름</strong><span class='register-required'>*</span>
                <div class="register-subtitle">
                    <label for="user_name" class="register-lab"></label>
                    <!-- input -->
                    <input class="register-input" type="text" id="user_name" placeholder="이름 입력" name="userName" />
                    <!-- error msg 출력 부분 -->
                    <div class='register-error-msg'></div>
                    <div class="register-util"></div>
                </div>

                <!-- 생년월일 부분 -->
                <strong class="register-tf">생년월일</strong>
                <div class="register-subtitle">
                    <label for="user_date" class="register-lab"></label>
                    <!-- input -->
                    <input class="register-input date" type="text" id="user_date" placeholder="생년월일" name="userDate" />
                    <div class="register-util">
                    </div>
                </div>

                <!-- 전화번호 부분 -->
                <strong class="register-tf">전화번호</strong><span class='register-required'>*</span>
                <div class="register-subtitle">
                    <label for="user_tel" class="register-lab"></label>
                    <!-- input -->
                    <input class="register-input" type="tel" id="user_tel" placeholder="전화번호 입력" name="userTel" />
                    <!-- error msg 출력 부분 -->
                    <div class='register-error-msg'></div>
                    <!-- 중복확인 버튼 -->
                    <div class="register-util">
                        <button class="register-btn-input" onclick="checkTel1()">
                            중복확인
                        </button>

                    </div>
                </div>

                <!-- 이메일 부분 -->
                <strong class="register-tf">이메일</strong><span class='register-required'>*</span>
                <div class="register-subtitle">
                    <label for="user_mail" class="register-lab"></label>
                    <!-- input -->
                    <input class="register-input" type="email" id="user_mail" placeholder="이메일 입력" name="userMail" />
                    <!-- error msg 출력 부분 -->
                    <div class='register-error-msg'></div>
                    <!-- 중복확인 -->
                    <div class="register-util">
                        <button class="register-btn-input" onclick="checkMail1()">
                            중복확인
                        </button>
                    </div>
                </div>

                <!-- 성별 부분 -->
                <strong class="register-tf">성별</strong>
                <div class="register-subtitle" style="margin-top: 10px;margin-bottom: 60px;">
                    <!-- input radio / value 'M' -->
                    <label for="user_male" class="register-lab">남
                        <input class="register-input gender" type="radio" id="user_male" name="userGender" value="M"
                            style="width:15px;height:15px;" />
                    </label>
                    <!-- input radio / value 'F' -->
                    <label for="user_female" class="register-lab">여
                        <input class="register-input gender" type="radio" id="user_female" name="userGender" value='F'
                            style="width:15px;height:15px;" /></label>

                    <div class="register-util">
                    </div>
                </div>

                <!-- 제출 버튼 -->
                <div class="register-submit">
                    <button id="submit_all" type="submit" onclick="check()">
                        가입하기
                    </button>
                </div>
            </div>
        </div>
    </form>
    <script src="script/register.js"></script>
</body>

</html>