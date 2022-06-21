<?php
    $filep = file("./movie.txt");

    if(!$filep) {
        die("파일을 열 수 없습니다.");
    }
    print "파일을 열었습니다. <br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>네이버 영화</title>
</head>
<body>
    <?php
    foreach($data as  $line) {
        //explode(기준 문자, 분리하려는 문자열) : 기준 문자를 잘라서 배열을 만들어줌 
        $div = explode(",", $line);
        $str = "https://movie.naver.com/";
        ?>
        <div><a href="<?=$str.$div[0]?>"><?=$div[1]?></a></div>
        <?php
    }
    fclose($files);
    ?>
</body>
</html>
