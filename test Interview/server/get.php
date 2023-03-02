<?php
    include_once './connection.php';

    $sql = 'SELECT * FROM `announced_pu_results` WHERE `polling_unit_uniqueid` = 19';
    $res = mysqli_query($conn, $sql);
    // $count = mysqli_num_rows($res);

    $pollStats = array();
    if($res){

        $rows = mysqli_fetch_all($res);
        $data = Json_encode(["success"=>"poll units", "data"=>$rows]);
        exit($data);
    } else {
        echo "No";
    }
?>