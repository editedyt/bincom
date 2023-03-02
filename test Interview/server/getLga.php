<?php
    include_once './connection.php';

    $sql = 'SELECT * FROM lga';
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);

    $pollStats = array();
    if($res){

        $rows = mysqli_fetch_all($res);
        $data = Json_encode(["success"=>"lga", "data"=>$rows]);
        exit($data);
    } else {
        echo "No";
    }
?>