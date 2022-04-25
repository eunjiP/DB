<?php
    include_once "db.php";

    $user_id = $_POST['user_id'];
    $user_pw = $_POST['user_pw'];
    $user_repw = $_POST['user_repw'];
    $user_name = $_POST['user_name'];
    $d_year = $_POST['d_year'];
    $d_month = $_POST['d_month'];
    $d_day = $_POST['d_day'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <style>
        * {box-sizing: border-box; padding: 0; margin: 0;}
        .container {display: grid; grid-template-rows: 200px 1fr;}
        .container > header {display: flex; justify-content: center;}
        img { height: 200px;}
        main {display: flex; justify-content: center;}
        .size {width: 400px; height: 50px;}
        .ymd {width: 130px; height: 50px;}
        #button {width: 400px; height: 50px;}
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div id="logo"><a href="https://www.naver.com"><img src="img/logo.gif"></a></div>
        </header>
        <main>
            <form action="join.php" method="post">
                <div>아이디<br>
                    <input class="size" type="text" name="user_id" placeholder="@naver.com">
                </div>
                <div>비밀번호<br>
                    <input class="size" type="password" name="user_pw"></div>
                <div>비밀번호 재확인<br>
                    <input class="size" type="password" name="user_repw"></div>
                <div>생년월일<br>
                    <input class="ymd" type="text" name="d_year" placeholder="년(4자)">
                    <select class="ymd" name="d_month">
                        <option value="none">월</option>
                        <option value="01">1</option>
                        <option value="02">2</option>
                        <option value="03">3</option>
                        <option value="04">4</option>
                        <option value="05">5</option>
                        <option value="06">6</option>
                        <option value="07">7</option>
                        <option value="08">8</option>
                        <option value="09">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <input class="ymd" type="text" name="d_year" placeholder="일">
                </div>
                <div>성별<br>
                    <select class="size" name="gender">
                        <option value="none">성별</option>
                        <option value="남자">남자</option>
                        <option value="여자">여자</option>
                        <option value="선택안함">선택안함</option>
                    </select>
                </div>
                <div>본인 확인 이메일(선택)<br>
                    <input class="size" type="email" name="email" placeholder="선택입력">
                </div>
                <div>휴대전화<br>
                    <input class="size" type="text" name="hp">
                </div>
                <div><input id="button" type="submit" value="가입하기"></div>
            </form>
        </main>
    </div>
    <?php
            if($user_pw === $user_repw){
                $param = [
                    "user_id" => $user_id,
                    "user_pw" => $user_pw,
                    "user_name" => $user_name,
                    "d_year" => $d_year,
                    "d_month" => $d_month,
                    "d_day" => $d_day,
                    "gender" => $gender,
                    "email" => $email,
                    "hp" => $hp,
                ];
                $result = ins_join($param);
                header("Location: login.php");
            }
            elseif($user_pw !== $user_repw) {
                print "<div>입력하신 비밀번호가 다릅니다.</div>";
            }
        ?>
</body>
</html>