<?php
    //db 호스트(주소)
    $host='localhost';
    $user='shaut1234';
    $password = 'q1w2e3q1!';
    $database = 'shaut1234';

    // mysqli_connect함수 사용하여
    // $conn에 mysqli로 연결한 것 담기 
    $conn = mysqli_connect($host, $user, $password, $database);
    
    //'$userId' 변수에 form에서 GET으로 가져온 값 담기
    $userId = $_GET['userid'];
    
    // DB에 사용하는 SQL문을 '$sql'에 담기
    $sql = "SELECT * FROM user WHERE userId='$userId'";

    // mysqli_query()를 사용해서
    // 아까 $conn으로 연결한 db에 $sql안에 들어있는 SQL문 실행
    $result=mysqli_query($conn,$sql);

    // mysqli_fetch_array를 사용하면 우리가 아는 배열로 만들어줌
    $member = mysqli_fetch_array($result);

    // $result에서 아무 값이 안나오면 $member에도 값이 0
    // 즉 안에 데이터베이스 값이 없음
    if($member==0)
    {
    
?>
<!-- 값이 없으니 사용 가능한 아이디-->
<div>
    <?php echo $userId; ?> 는 사용가능한 아이디입니다.
</div>

<!-- 값이 있으면 이미 있는 아이디이므로 사용 불가능 -->
<?php 
	} else{
?>

<div style='color:red;'><?php echo $userId; ?> 는 중복된 아이디입니다.<div>

        <?php }?>

        <!-- 닫기 버튼 -->
        <button value="닫기" onclick="return windowClose()" style="border:none; cursor:pointer;margin-top: 10px;
        background:#bbb; color:white; padding:5px; border-radius:3px;font-size:0.8em;">닫기</button>

        <script>
        function windowClose() {
            window.close();
        }
        </script>