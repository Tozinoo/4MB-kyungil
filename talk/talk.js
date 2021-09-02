
const $loc = document.querySelector('.first');
const $tk = document.querySelector('.second');
const $up = document.querySelector('.third');

$loc.addEventListener('mouseover', () =>{
    $loc.style.width= `160px`;
    $loc.style.height= `80px`;
    $loc.style.borderRadius = `50px`;
});
$loc.addEventListener('mouseout', () =>{
     $loc.style.width= `80px`;
    $loc.style.height= `80px`;
    $loc.style.borderRadius = `50px`;
});

$tk.addEventListener('mouseover', () =>{
    $tk.style.width= `160px`;
    $tk.style.height= `80px`;
    $tk.style.borderRadius = `50px`;
});
$tk.addEventListener('mouseout', () =>{
     $tk.style.width= `80px`;
    $tk.style.height= `80px`;
    $tk.style.borderRadius = `50px`;
});

$up.addEventListener('mouseover', () =>{
    $up.style.width= `160px`;
    $up.style.height= `80px`;
    $up.style.borderRadius = `50px`;
});
$up.addEventListener('mouseout', () =>{
     $up.style.width= `80px`;
    $up.style.height= `80px`;
    $up.style.borderRadius = `50px`;
});