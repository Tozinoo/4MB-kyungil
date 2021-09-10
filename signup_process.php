<?php
        $host='localhost';
        $user='shaut1234';
        $password = 'q1w2e3q1!';
        $database = 'shaut1234';

$conn = mysqli_connect($host, $user, $password, $database);
$sql = "
    INSERT INTO user
    (userId, userPwd, userName, userDate, userTel, userMail, userGender, created)
    VALUES('{$_POST['userId']}', '{$_POST['userPwd']}', '{$_POST['userName']}', '{$_POST['userDate']}', '{$_POST['userTel']}','{$_POST['userMail']}','{$_POST['userGender']}',NOW()
    )";

$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
<script>
alert("회원가입이 완료되었습니다");
location.href = "index.php";
</script>
<?php
}
?>