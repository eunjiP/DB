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