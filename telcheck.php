<?php

$host='localhost';
$user='shaut1234';
$password = 'q1w2e3q1!';
$database = 'shaut1234';

    $conn = mysqli_connect($host, $user, $password, $database);
   
    
    $userTel = $_GET['usertel'];
    $sql = "SELECT * FROM user WHERE userTel='$userTel'";

    $result=mysqli_query($conn,$sql);
    $member = mysqli_fetch_array($result);

    if($member==0)
    {
    
?>

<div>
    <?php echo $userTel; ?> 는 사용 가능한 전화번호입니다.
</div>

<?php 
	} else{
?>

<div style='color:red;'><?php echo $userTel; ?> 는 이미 등록된 전화번호입니다.<div>

        <?php }?>

        <button value="닫기" onclick="return windowClose()" style="border:none; cursor:pointer;margin-top: 10px;
        background:#bbb; color:white; padding:5px; border-radius:3px;font-size:0.8em;">닫기</button>

        <script>
        function windowClose() {
            window.close();
        }
        </script>