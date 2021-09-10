<?php

    if($_GET["name"] == "" || $_GET["email"] == "" ){
        echo '<script> alert("빈칸을 입력해 주세요."); history.back(); </script>';
        //종료
        exit;
        // preg_match(정규표현식,규칙적용할 값)
        // 리턴 : true false.
    } else{
       
        $host='localhost';
        $user='shaut1234';
        $password = 'q1w2e3q1!';
        $database = 'shaut1234';
    
        $conn = mysqli_connect($host, $user, $password, $database);

        $userName = $_GET['name'];
        $userMail = $_GET['email'];

        $sql="SELECT * FROM user WHERE userName='$userName' AND userMail='$userMail'";
        
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
        if($row>1){
        echo "
    <script>
        location.href='login.php';
        alert('고객님의 아이디는 {$row['userId']}입니다!');
    </script>";
} else{
    echo "
    <script>
        location.href='findid.php';
        alert('가입이력이 없습니다! 이름과 메일을 다시한번 확인해 주세요!');
    </script>";
}

    }

?>