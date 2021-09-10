<?php
    include_once('PHPMailer/mailer.lib.php');
   
    if($_GET["userid"] == "" || $_GET["email"] == "" ){
        echo '<script> alert("빈칸을 입력해 주세요."); history.back(); </script>';
        //종료
        exit;
        // preg_match(정규표현식,규칙적용할 값)
        // 리턴 : true false.
    } else{

        function get_random_string($type = '', $len = 12) {
            $lowercase = 'abcdefghijklmnopqrstuvwxyz';
            $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $numeric = '0123456789';
            $special = '`~!@#$%^&*()-_=+\\|[{]};:\'",<.>/?';
            $key = '';
            $token = '';
            if ($type == '') {
                $key = $lowercase.$uppercase.$numeric;
            } else {
                if (strpos($type,'09') > -1) $key .= $numeric;
                if (strpos($type,'az') > -1) $key .= $lowercase;
                if (strpos($type,'AZ') > -1) $key .= $uppercase;
                if (strpos($type,'$') > -1) $key .= $special;
            }
            for ($i = 0; $i < $len; $i++) {
                $token .= $key[mt_rand(0, strlen($key) - 1)];
            }
            return $token;
        }

        $newPassword = get_random_string('azAZ09$');
       
        $host='localhost';
        $user='shaut1234';
        $password = 'q1w2e3q1!';
        $database = 'shaut1234';
    
        $conn = mysqli_connect($host, $user, $password, $database);

        $userId = $_GET['userid'];
        $userMail = $_GET['email'];

        $sql="SELECT * FROM user WHERE userId='$userId' AND userMail='$userMail'";
        
        $sql2="UPDATE user SET userPwd='$newPassword' WHERE userId='$userId'";

        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);

        $result2=mysqli_query($conn,$sql2);
        
        mailer("SURFATY","goldboy122@naver.com","$userMail","비밀번호 안내","$newPassword",1);
        if($row>=1){
        echo "
    <script>
        location.href='login.php';
        alert('고객님의 비밀번호를 메일로 발송하였습니다! 로그인 후 비밀번호를 변경해 주세요! (네이버 메일만 가능. 타 메일은 관리자 문의!)');
    </script>";
} else{
    echo "
    <script>
        location.href='findpwd.php';
        alert('가입이력이 없습니다! 아이디와 메일을 다시한번 확인해 주세요!');
    </script>";
}

    }

?>