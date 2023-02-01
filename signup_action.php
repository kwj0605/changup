<?php
$server = "localhost:3308";
$user = "root";
$password = "0000";
$dbname = "member";
$user_id=$_POST['id'];
$user_pw=$_POST['pw'];
$user_name=$_POST['name'];
$nickname=$_POST['nickname'];
$age=$_POST['age'];
$conn = mysqli_connect($server, $user, $password, $dbname);
$query = "insert into member_table (user_id,user_pw,user_name,nickname,age) values('".$user_id."','".$user_pw."','".$user_name."','".$nickname."','".$age."')";
$result = mysqli_query($conn,$query);
if($result) 
{?>
    <script> alert('회원가입이 완료되었습니다.'); location.href="index.php"; </script> 
<?php
} else {?>
    <script> alert('회원가입에 실패했습니다.\n다시 시도해 주세요.'); location.href="signup.php"; </script>
<?php } ?>
