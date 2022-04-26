<?php
    define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "naver");
    
    function get_conn()
    {
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
    }

    function ins_join($param) {
        $user_id = $param['user_id'];
        $user_pw = $param['user_pw'];
        $user_name = $param['user_name'];
        $d_year = $param['d_year'];
        $d_month = $param['d_month'];
        $d_day = $param['d_day'];
        $gender = $param['gender'];
        $email = $param['email'];
        $hp = $param['hp'];

        $conn = get_conn();
        $sql = "INSERT INTO n_join
            (user_id, user_pw, user_name, d_year, d_month, d_day, gender, email, hp)
            VALUES
            ('$user_id', '$user_pw', '$user_name', '$d_year', '$d_month', '$d_day', '$gender', '$email', '$hp')";

        $result = mysqli_query($conn, $sql);
        return $result;
    }