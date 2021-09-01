const form = document.querySelector('#agree-form');
const checkAll = document.querySelector('.agree-check-all input');
const checkBoxes = document.querySelectorAll('.agree-input-check input');
const submitButton = document.querySelector('button');

// 초기화
const agreements = {
  agreeService: false,
  agreePrivacyPolicy: false,
  agreeAllowPromotions: false,
};

form.addEventListener('submit', (e) => e.preventDefault()); // 새로고침(submit) 되는 것 막음

checkBoxes.forEach(
    (item) => item.addEventListener('input', toggleCheckbox)
    );

function toggleCheckbox(e) {
  const { checked, id } = e.target;  
  agreements[id] = checked;
  this.parentNode.classList.toggle('active');
  checkAllStatus();
  toggleSubmitButton();
}

function checkAllStatus() {
  const { agreeService, agreePrivacyPolicy, agreeAllowPromotions } = agreements;
  if (agreeService && agreePrivacyPolicy && agreeAllowPromotions) {
    checkAll.checked = true;
  } else {
    checkAll.checked = false;
  }
}

function toggleSubmitButton() {
  const { agreeService, agreePrivacyPolicy } = agreements;
  if (agreeService && agreePrivacyPolicy) {
    submitButton.disabled = false;
  } else {
    submitButton.disabled = true;
  }
}

checkAll.addEventListener('click', (e) => {
  const { checked } = e.target;
  if (checked) {
    checkBoxes.forEach((item) => {
      item.checked = true;
      agreements[item.id] = true;
      item.parentNode.classList.add('active');
    });
  } else {
    checkBoxes.forEach((item) => {
      item.checked = false;
      agreements[item.id] = false;
      item.parentNode.classList.remove('active');
    });
  }
  toggleSubmitButton();
});

submitButton.addEventListener('click',function(e){
    window.location.href='register.html';
})