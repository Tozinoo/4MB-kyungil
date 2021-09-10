// 정규표현식 선언
var idPattern = /^[A-Za-z]{1}[A-Za-z0-9]{5,16}$/;
var pwPattern = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,16}$/;
var emailPattern =
    /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{1,3}$/i;
var phonePattern = /^01[016789]{1}-?([0-9]{3,4})-?([0-9]{4})$/;
var namePattern = /^[가-힣]{2,5}$/;

// 요소 가져오기
const userId = document.getElementById("user_id");
const userPwd = document.getElementById("user_pwd");
const confirmUserPwd = document.getElementById("user_confirmPwd");
const userName = document.getElementById("user_name");
const userTel = document.getElementById("user_tel");
const userMail = document.getElementById("user_mail");
const btnSubmit = document.getElementById("submit_all");
const errorMsg = document.getElementsByClassName("register-error-msg");

// 텍스트 넣기
function text(elem, text) {
    elem.innerHTML = text;
}
// 공백 처리
function changeBlank(elem) {
    elem.innerHTML = "";
}

//공백확인 함수
function checkValue(value, dataName) {
    // 입력(value)로 들어온 값이 공백("")이면
    if (value == "") {
        // dataName을 입력해주세요 알림
        alert(dataName + " 입력해주세요!");
        // 함수 실행 중지
        return false;
    }
    return true;
}

// 생년월일 Datepicker 제이쿼리
$(function () {
    $("#user_date").datepicker({
        // 기본 속성 넣기 (규약이라고 한다.)
        dateFormat: "yy-mm-dd",
        prevText: "이전 달",
        nextText: "다음 달",
        monthNames: [
            "1월",
            "2월",
            "3월",
            "4월",
            "5월",
            "6월",
            "7월",
            "8월",
            "9월",
            "10월",
            "11월",
            "12월",
        ],
        monthNamesShort: [
            "1월",
            "2월",
            "3월",
            "4월",
            "5월",
            "6월",
            "7월",
            "8월",
            "9월",
            "10월",
            "11월",
            "12월",
        ],
        dayNames: ["일", "월", "화", "수", "목", "금", "토"],
        dayNamesShort: ["일", "월", "화", "수", "목", "금", "토"],
        dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
        showMonthAfterYear: true,
        changeMonth: true,
        changeYear: true,
        yearSuffix: "년",
        yearRange: "-100:+0",
        maxDate: "+0D",
    });
});

form.addEventListener("submit", (e) => e.preventDefault()); // 새로고침(submit) 되는 것 막음

function check() {
    // checkID값이 false일 시 return false로 함수 중지
    if (!checkID(userId)) return false;
    borderReturn(userId);
    changeBlank(errorMsg[0]);
    // 값이 잘 들어가는지 로그를 찍어보자
    console.log("아이디 확인");
    if (!checkPwd(userPwd, confirmUserPwd)) return false;
    borderReturn(userPwd);
    borderReturn(confirmUserPwd);
    changeBlank(errorMsg[1]);
    console.log("비밀번호 확인");

    if (!checkName(userName)) return false;
    borderReturn(userName);
    changeBlank(errorMsg[2]);
    console.log("이름 확인");

    if (!checkTel(userTel)) return false;
    borderReturn(userTel);
    changeBlank(errorMsg[3]);
    console.log("전화번호 확인");

    if (!checkMail(userMail)) return false;
    borderReturn(userMail);
    changeBlank(errorMsg[4]);
    console.log("메일 확인");

    $("#register-form").submit();
    return true;
}

//아이디 확인
function checkID(id) {
    // 들어온 값이 공백일 시 함수 실행 중지
    // !((checkValue 값): false) -> !false -> true / if문 실행
    // !((checkValue 값): true) -> !true -> false / if문 통과
    if (!checkValue(id.value, "아이디를")) {
        borderRed(id);
        return false;
    }
    // 정규표현식 유효성 검사
    // test는 유효성 검사 후 true, false 값을 반환한다.
    // test 값이 false일 시 실행
    if (!idPattern.test(id.value)) {
        // 경고창 발생
        text(errorMsg[0], "6 ~ 16자 영어로 적어주세요.");
        borderRed(id);
        // value값 초기화
        id.value = "";
        // 아이디 focus
        id.focus();
        // 함수 실행 중지
        return false;
    }
    //
    return true;
}

//비밀번호 확인
function checkPwd(pwd, confirmPwd) {
    // 공백확인
    if (!checkValue(pwd.value, "비밀번호를")) {
        borderRed(pwd);
        return false;
    }

    // 정규표현식 유효성 검사
    if (!pwPattern.test(pwd.value)) {
        text(
            errorMsg[1],
            "영문 대소문자와 숫자 및 특수문자를 포함한 8~16자리로 적어주세요."
        );
        borderRed(pwd);
        pwd.value = "";
        pwd.focus();
        return false;
    }

    // 재입력한 패스워드가 처음 입력한 패스워드와 다를 때 사용하는 함수
    if (pwd.value != confirmPwd.value) {
        text(errorMsg[1], "비밀번호가 같지 않습니다. 다시 입력해주세요.");
        borderRed(pwd);
        borderRed(confirmPwd);
        // value값 초기화
        pwd.value = "";
        confirmPwd.value = "";
        // focus
        pwd.focus();
        return false;
    }

    return true;
}

function checkName(name) {
    if (!checkValue(name.value, "이름을")) {
        borderRed(name);
        return false;
    }

    if (!namePattern.test(name.value)) {
        text(errorMsg[2], "2~5자 한글 이름을 적어주세요");
        borderRed(name);
        name.value = "";
        name.focus();
        return false;
    }
    //
    return true;
}

//전화번호 입력
function checkTel(tel) {
    if (!checkValue(tel.value, "전화번호를")) {
        borderRed(tel);
        return false;
    }

    if (!phonePattern.test(tel.value)) {
        text(errorMsg[3], "전화번호 형식을 지켜주세요.");
        borderRed(tel);
        tel.value = "";
        tel.focus();
        return false;
    }
    return true;
}
//메일 확인
function checkMail(mail) {
    if (!checkValue(mail.value, "메일을")) {
        borderRed(mail);
        return false;
    }

    if (!emailPattern.test(userMail.value)) {
        text(errorMsg[4], "메일 형식을 지켜주세요.");
        borderRed(mail);
        mail.value = "";
        mail.focus();
        return false;
    }
    return true;
}

// 오류 시 밑줄 빨강색
function borderRed(dataName) {
    dataName.style.borderBottomColor = "red";
}
// 정상 입력 시 밑줄 색 원상복구
function borderReturn(dataName) {
    dataName.style.borderBottomColor = "#cccccc";
}

// 중복확인
// 아이디 중복확인
function checkId() {
    // 값이 비어있으면 함수 중지
    if (!checkID(userId)) return false;
    // 에러 밑줄 및 문구 되돌리기
    borderReturn(userId);
    changeBlank(errorMsg[0]);
    // 입력되어 있는 value값 getId로 넣기
    const getId = userId.value;
    // 값이 있으면
    if (getId) {
        //url 저장
        url = "idcheck.php?userid=" + getId;
        // idcheck.php 페이지로 이동
        window.open(url, "chkid", "width=400,height=200");
    }
}
// 이하 내용 같음
function checkTel1() {
    if (!checkTel(userTel)) return false;
    borderReturn(userTel);
    changeBlank(errorMsg[3]);
    const getTel = userTel.value;
    if (getTel) {
        url = "telcheck.php?usertel=" + getTel;
        window.open(url, "chktel", "width=400,height=200");
    }
}

function checkMail1() {
    if (!checkMail(userMail)) return false;
    borderReturn(userMail);
    changeBlank(errorMsg[4]);
    const getMail = userMail.value;
    if (getMail) {
        url = "mailcheck.php?usermail=" + getMail;
        window.open(url, "chkmail", "width=400,height=200");
    }
}
