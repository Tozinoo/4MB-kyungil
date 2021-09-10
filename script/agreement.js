// 선언
const form = document.querySelector("#agree-form");
const checkAll = document.querySelector(".agree-check-all input");
const checkBoxes = document.querySelectorAll(".agree-input-check input");
const submitButton = document.querySelector("button");

// 객체 생성 및 초기화
const agreements = {
    agreeService: false,
    agreePrivacyPolicy: false,
    agreeAllowPromotions: false,
};

form.addEventListener("submit", (e) => e.preventDefault()); // 버튼 클릭하여 제출할 때 새로고침(submit) 되는 것 막음

checkBoxes.forEach((item) => item.addEventListener("input", toggleCheckbox));

// 모든 checkbox 체크
function checkAllStatus() {
    // agreements에 값 대입
    const { agreeService, agreePrivacyPolicy, agreeAllowPromotions } =
        agreements;
    // agreeService, agreePrivacyPolicy, agreeAllowPromotions
    // 3가지 다 true면 .agree-check-all input 값 true
    if (agreeService && agreePrivacyPolicy && agreeAllowPromotions) {
        checkAll.checked = true;
    } else {
        // 아니면 false
        checkAll.checked = false;
    }
}

function toggleSubmitButton() {
    const { agreeService, agreePrivacyPolicy } = agreements;
    // agreeService, agreePrivacyPolicy 값 true면 버튼 활성화
    if (agreeService && agreePrivacyPolicy) {
        submitButton.disabled = false;
    } else {
        // 아니면 비활성화
        submitButton.disabled = true;
    }
}

// 모두 체크 박스
checkAll.addEventListener("click", (e) => {
    // 클릭한 타겟에 checked값 대입
    const { checked } = e.target;
    // 체크되어 있으면
    if (checked) {
        //각 체크박스 .agree-input-check input에 대입
        checkBoxes.forEach((item) => {
            // 체크 true
            item.checked = true;
            // id값 true로 변경
            agreements[item.id] = true;
            //togle에 쓸 classList active 생성
            item.parentNode.classList.add("active");
        });
    } else {
        //체크되어 있지않으면 반대로
        checkBoxes.forEach((item) => {
            item.checked = false;
            agreements[item.id] = false;
            item.parentNode.classList.remove("active");
        });
    }
    // toggleSubmitButton()
    toggleSubmitButton();
});

submitButton.addEventListener("click", function (e) {
    // 확인버튼 클릭 시 이동
    location.href = "register.php";
});
//
function toggleCheckbox(e) {
    const { checked, id } = e.target;
    agreements[id] = checked;
    // toggle() : 선택한 요소가 보이면 보이지 않게, 보이지 않으면 보이게
    this.parentNode.classList.toggle("active");
    checkAllStatus();
    toggleSubmitButton();
}

// toggle checkbox를 검색하면 더 많은 예제와 설명이 적혀있다!
