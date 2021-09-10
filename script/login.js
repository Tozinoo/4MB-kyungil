const btnFindId = document.querySelector("#login-findId");
const btnFindPassword = document.querySelector("#login-findPassword");
const btnLogin = document.querySelector("#login-login");
const btnRegister = document.querySelector("#login-register");

//아이디 찾기 버튼 클릭 시
btnFindId.addEventListener("click", function (e) {
    window.location.href = "findid.php";
});

//비밀번호 찾기 클릭 시
btnFindPassword.addEventListener("click", function (e) {
    window.location.href = "findpwd.php";
});

// btnLogin.addEventListener("click", function (e) {
//     window.location.href = "index.php";
// });

// 회원가입 버튼 클릭 시
btnRegister.addEventListener("click", function (e) {
    window.location.href = "agreement.html";
});
