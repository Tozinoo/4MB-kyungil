<?php
$pwPattern = '/^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,16}$/';
$phonePattern = '/^01[016789]{1}-?([0-9]{3,4})-?([0-9]{4})$/';
// 아이디나 패스워드 둘중 하나라도 입력 안하면 알림
if($_GET["userPwd"] == "" || $_GET["userPwd2"] == "" || $_GET["userTel"]==""){
    echo '<script> alert("빈칸을 입력해 주세요."); history.back(); </script>';
    //종료
    exit;
    // preg_match(정규표현식,규칙적용할 값)
    // 리턴 : true false.
} elseif (!preg_match($pwPattern,$_GET["userPwd"])) {
    echo'<script> alert("비밀번호 규칙을 지켜주세요."); history.back();</script>';
} elseif (!preg_match($phonePattern,$_GET["userTel"])) {
    echo'<script> alert("전화번호 규칙을 지켜주세요."); history.back();</script>';
} else{

    $host='localhost';
    $user='shaut1234';
    $password = 'q1w2e3q1!';
    $database = 'shaut1234';

    $conn = mysqli_connect($host, $user, $password, $database);
   
    $password=$_GET["userPwd"];
    $tel=$_GET["userTel"];

    $sql="UPDATE user SET userPwd='$password',userTel='$tel' WHERE userId='{$_GET['userid']}'";
    
    $result=mysqli_query($conn,$sql);
    

    ?>
<script>
location.href = "member_modify.php";
alert("변경이 완료되었습니다");
</script>
<?php
}
?>