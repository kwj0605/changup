<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/53735a2265.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <script src="script.js"></script>
    <div class="topbar">
      <div class="logo">
        <img src="img/logo.jpg">
        <p>CANDIT</p>
      </div>
      <div class="certification">
        <?php
        if (isset($_SESSION['nickname'])) {
        ?>
        <div class="logout">
          <button type="button" onClick="logout()">김우진 님</button>
        </div>
        <div class="upload">
          <button type="button" onClick="location.href='upload.html'">포인트: 20점</button>
        </div>
        <?php
        } else {
        ?>
       <div class="login">
          <button type="button" onClick="location.href='login.php'">
            로그인
          </button>
        </div>
        <div class="signUp">
          <button type="button" onClick="location.href='signup.php'">
            회원가입
          </button>
        </div>
        <?php
        }
        ?> 
        <script>
          function logout() {
            console.log("hello");
            const data = confirm("로그아웃 하시겠습니까?");
            if (data) {
              location.href = "logoutProcess.php";
            }
          }
        </script>
      </div>
    </div>
    <div class="main">
      <div class="season">
        <p>계절</p>
        <input class="a" type="button" value="봄" onclick="
        if(document.querySelector('.a').style.color === 'rgb(255, 147, 144)') {
            document.querySelector('.a').style.color = 'white';
            document.querySelector('.a').style.backgroundColor = 'rgb(255, 147, 144)';
        } else {
            document.querySelector('.a').style.color = 'rgb(255, 147, 144)';
            document.querySelector('.a').style.backgroundColor = 'white';
        }
        "/>
        <input class="b" type="button" value="여름" onclick="
      if(document.querySelector('.b').style.color === 'rgb(255, 147, 144)') {
          document.querySelector('.b').style.color = 'white';
          document.querySelector('.b').style.backgroundColor = 'rgb(255, 147, 144)';
      } else {
          document.querySelector('.b').style.color = 'rgb(255, 147, 144)';
          document.querySelector('.b').style.backgroundColor = 'white';
      }
      "/>
        <input class="c" type="button" value="가을" onclick="
      if(document.querySelector('.c').style.color === 'rgb(255, 147, 144)') {
          document.querySelector('.c').style.color = 'white';
          document.querySelector('.c').style.backgroundColor = 'rgb(255, 147, 144)';
      } else {
          document.querySelector('.c').style.color = 'rgb(255, 147, 144)';
          document.querySelector('.c').style.backgroundColor = 'white';
      }
      "/>
        <input class="d" type="button" value="겨울" onclick="
      if(document.querySelector('.d').style.color === 'rgb(255, 147, 144)') {
          document.querySelector('.d').style.color = 'white';
          document.querySelector('.d').style.backgroundColor = 'rgb(255, 147, 144)';
      } else {
          document.querySelector('.d').style.color = 'rgb(255, 147, 144)';
          document.querySelector('.d').style.backgroundColor = 'white';
      }
      "/>
      </div>
      <div class="age">
        <p>나이대</p>
        <input class="e" type="button" value="10대" onclick="
      if(document.querySelector('.e').style.color === 'rgb(255, 147, 144)') {
          document.querySelector('.e').style.color = 'white';
          document.querySelector('.e').style.backgroundColor = 'rgb(255, 147, 144)';
      } else {
          document.querySelector('.e').style.color = 'rgb(255, 147, 144)';
          document.querySelector('.e').style.backgroundColor = 'white';
      }
      "/>
        <input class="f" type="button" value="20대" onclick="
      if(document.querySelector('.f').style.color === 'rgb(255, 147, 144)') {
          document.querySelector('.f').style.color = 'white';
          document.querySelector('.f').style.backgroundColor = 'rgb(255, 147, 144)';
      } else {
          document.querySelector('.f').style.color = 'rgb(255, 147, 144)';
          document.querySelector('.f').style.backgroundColor = 'white';
      }
      "/>
        <input class="g" type="button" value="30대" onclick="
      if(document.querySelector('.g').style.color === 'rgb(255, 147, 144)') {
          document.querySelector('.g').style.color = 'white';
          document.querySelector('.g').style.backgroundColor = 'rgb(255, 147, 144)';
      } else {
          document.querySelector('.g').style.color = 'rgb(255, 147, 144)';
          document.querySelector('.g').style.backgroundColor = 'white';
      }
      "/>
      <input class="l" type="button" value="40대" onclick="
      if(document.querySelector('.l').style.color === 'rgb(255, 147, 144)') {
          document.querySelector('.l').style.color = 'white';
          document.querySelector('.l').style.backgroundColor = 'rgb(255, 147, 144)';
      } else {
          document.querySelector('.l').style.color = 'rgb(255, 147, 144)';
          document.querySelector('.l').style.backgroundColor = 'white';
      }
      "/>
      <input class="m" type="button" value="50대" onclick="
      if(document.querySelector('.m').style.color === 'rgb(255, 147, 144)') {
          document.querySelector('.m').style.color = 'white';
          document.querySelector('.m').style.backgroundColor = 'rgb(255, 147, 144)';
      } else {
          document.querySelector('.m').style.color = 'rgb(255, 147, 144)';
          document.querySelector('.m').style.backgroundColor = 'white';
      }
      "/>
<!--      <div class="child">
        <p>자식 유/무</p>
        <input class="h" type="button" value="유" 
      onclick="
        if(document.querySelector('.h').style.color === 'rgb(255, 147, 144)') {
            document.querySelector('.h').style.color = 'white';
            document.querySelector('.h').style.backgroundColor = 'rgb(255, 147, 144)';
        } else {
            document.querySelector('.h').style.color = 'rgb(255, 147, 144)';
            document.querySelector('.h').style.backgroundColor = 'white';
        }
        "/>
        <input class="i" type="button" value="무" onclick="
      if(document.querySelector('.i').style.color === 'rgb(255, 147, 144)') {
          document.querySelector('.i').style.color = 'white';
          document.querySelector('.i').style.backgroundColor = 'rgb(255, 147, 144)';
      } else {
          document.querySelector('.i').style.color = 'rgb(255, 147, 144)';
          document.querySelector('.i').style.backgroundColor = 'white';
      }
      "/>-->
      </div> 
      <div class="location">
        <p>실내/외</p>
        <input class="j" type="button" value="실내" onclick="
      if(document.querySelector('.j').style.color === 'rgb(255, 147, 144)') {
          document.querySelector('.j').style.color = 'white';
          document.querySelector('.j').style.backgroundColor = 'rgb(255, 147, 144)';
      } else {
          document.querySelector('.j').style.color = 'rgb(255, 147, 144)';
          document.querySelector('.j').style.backgroundColor = 'white';
      }
      "/>
        <input class="k" type="button" value="실외" onclick="
      if(document.querySelector('.k').style.color === 'rgb(255, 147, 144)') {
          document.querySelector('.k').style.color = 'white';
          document.querySelector('.k').style.backgroundColor = 'rgb(255, 147, 144)';
      } else {
          document.querySelector('.k').style.color = 'rgb(255, 147, 144)';
          document.querySelector('.k').style.backgroundColor = 'white';
      }
      "/>
      </div>
      <div class="enter">
        <input type="button" value="확인" onclick="location.href='1.php'">
      </div>
    </div>
  </body>
</html>
