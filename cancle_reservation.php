<?php
    session_start();

    $userId=$_SESSION['userId'];

    $host='localhost';
    $user='shaut1234';
    $password = 'q1w2e3q1!';
    $database = 'shaut1234';

    $conn = mysqli_connect($host, $user, $password, $database);
   

    // DB 정보 가져오기 
    $sql = "DELETE FROM reservation WHERE userId='$userId';";

    $result=mysqli_query($conn,$sql);
?>
   
<script>
alert("예약을 취소하였습니다");
location.href = "index.php";
</script>
