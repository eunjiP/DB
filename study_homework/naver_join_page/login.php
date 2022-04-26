<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>naver</title>
    <style>
         * {box-sizing: border-box; padding: 0; margin: 0;}
        a {text-decoration: none; color: #ccc;}
        #container {display: grid; grid-template-rows: 300px 1fr 100px;}
        header, footer {text-align: center;}
        img {height: 300px;}
        #main {width: 400px; height: 250px; text-align: center; border: 1px solid #ccc; margin-top: 20px;}
        main {display: flex; justify-content: center; align-items: center;}
        h1 {color: greenyellow; text-shadow: 2px 2px 1px green;}
        h1, form {margin-top: 20px;}
        .size { height: 40px; width: 300px;}
        #login {margin-top: 20px; font-size: 1.2rem; font-weight: bolder;
            color: #fff; background-color: greenyellow;}
        #login:hover {background-color: green; cursor: pointer;}
        #bottom{color: #ccc; margin-top: 20px;}
        #bottom a {margin: 0 10px;}
    </style>
</head>
<body>
    <div id="container">
        <header>
            <div><img src="img/logo.gif"></div>
        </header>
        <main>
            <div id="main">
                <h1>로그인</h1>
                <form action="main.php" method="post">
                    <div><input class="size" type="text" name="user_id" placeholder="아이디"></div>
                    <div><input class="size" type="password" name="user_pw" placeholder="비밀번호"></div>
                    <div><input class="size" id = "login" type="submit" value="로그인"></div>
                </form>
            </div>
        </main>
        <footer>
            <div id="bottom">
                <a href="#">비밀번호찾기</a><span> | </span>
                <a href="#">아이디찾기</a><span> | </span>
                <a href="join.php">회원가입</a>
            </div>
        </footer>
    </div>
</body>
</html>