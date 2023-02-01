<?php
$server = "localhost:3308";
$user = "root";
$password = "0000";
$dbname = "member";
$conn = mysqli_connect($server, $user, $password, $dbname);
$user_id=$_POST['id'];
$user_pw=$_POST['pw'];

$query = "SELECT * FROM member_table WHERE user_id = '$user_id' AND user_pw = '$user_pw'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$row['id'];

if($row != null) {
    session_start();
    $_SESSION['nickname'] = $row['nickname'];
    print_r($_SESSION);
    echo $_SESSION['nickname'];
?>
    <script> alert('로그인이 완료되었습니다.'); location.href="index.php"; </script> 
<?php
} else {?>
    <script> alert('로그인에 실패했습니다.\n다시 시도해 주세요.'); location.href="login.php"; </script>
<?php } ?>