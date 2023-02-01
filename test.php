<?php
    $host = "localhost:3308";
    $user = "root";
    $pw = "0000";
    $dbName = "member";

    $conn = new mysqli($host, $user, $pw, $dbName);
    
    /* DB 연결 확인 */
    if($conn){ echo "Connection established"."<br>"; }
    else{ die( 'Could not connect: ' . mysqli_error($conn) ); }
    
    mysqli_close($conn);
?>