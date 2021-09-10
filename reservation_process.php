<?php

$phonePattern = '/^01[016789]{1}-?([0-9]{3,4})-?([0-9]{4})$/';
$emailPattern = '/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{1,3}$/i';
// 아이디나 패스워드 둘중 하나라도 입력 안하면 알림
if($_GET["Available"] == "" || $_GET["Date"] == "" || $_GET["Name"]=="" || $_GET["Phone"] == "" ){
    echo '<script> alert("빈칸을 입력해 주세요."); history.back(); </script>';
    //종료
    exit;
    // preg_match(정규표현식,규칙적용할 값)
    // 리턴 : true false.
} elseif($_GET["IndependenceRoom"] == "" && $_GET["FemaleRoom"] == "" && $_GET["MaleRoom"] == ""){
    echo '<script> alert("방을 하나 이상 골라주세요."); history.back(); </script>';
    //종료
    exit;
} elseif (!preg_match($emailPattern,$_GET["Email"])) {
    echo'<script> alert("이메일 규칙을 지켜주세요."); history.back();</script>';
} elseif (!preg_match($phonePattern,$_GET["Phone"])) {
    echo'<script> alert("전화번호 규칙을 지켜주세요."); history.back();</script>';
} else{

    $host='localhost';
    $user='shaut1234';
    $password = 'q1w2e3q1!';
    $database = 'shaut1234';

    $conn = mysqli_connect($host, $user, $password, $database);
    $sql = "
        INSERT INTO reservation
        (userId, available, pet, independenceRoom, femaleRoom, maleRoom, date, name, tel, mail, text)
        VALUES('{$_GET['userid']}', '{$_GET['Available']}', '{$_GET['Pet']}', '{$_GET['IndependenceRoom']}', '{$_GET['FemaleRoom']}', '{$_GET['MaleRoom']}', '{$_GET['Date']}', '{$_GET['Name']}', '{$_GET['Phone']}', '{$_GET['Email']}', '{$_GET['Message']}'
        )";



    $result = mysqli_query($conn, $sql);

    if ($result === false) {
        echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
        echo mysqli_error($conn);
    } else {
?>
<script>
    alert("예약이 완료되었습니다.");
    location.href = "confirm_register.php";
</script>
<?php
}}
?>