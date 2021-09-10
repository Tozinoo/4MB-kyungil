<?php

// 아이디나 패스워드 둘중 하나라도 입력 안하면 알림
if($_POST["userId"] == "" || $_POST["userPwd"] == ""){
    echo '<script> alert("아이디나 패스워드 입력하세요"); history.back(); </script>';
    //종료
    exit;
}else{

    $host='localhost';
    $user='shaut1234';
    $password = 'q1w2e3q1!';
    $database = 'shaut1234';

    $conn = mysqli_connect($host, $user, $password, $database);
   
    //login.php에서 가져온 id,password를 변수에 넣는다.
    $userId = $_POST['userId'];
    $password = $_POST['userPwd'];

    // DB 정보 가져오기 
    $sql = "SELECT * FROM user WHERE userId ='$userId'&& userPwd='$password'";

    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);

    if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
        session_start();
      
        $_SESSION['userId'] = $userId;
        $_SESSION['userPwd']=$row['userPwd'];
        $_SESSION['userName']=$row['userName'];
        $_SESSION['userDate']=$row['userDate'];
        $_SESSION['userTel']=$row['userTel'];
        $_SESSION['userMail']=$row['userMail'];
        $_SESSION['userGender']=$row['userGender'];
        
        ?>
<script>
location.href = "index.php";
</script>
<?php
    }
    else{
        // 로그인 실패 
    ?>
<script>
alert("로그인에 실패하였습니다. 다시 입력해 주세요");
location.href = "login.php";
</script>
<?php
    }
    
}
?>