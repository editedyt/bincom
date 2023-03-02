<?php
    include_once './connection.php';

    $post = json_decode(file_get_contents("php://input"));
    if(isset($post->id)){
        $trid = $post->id;
        $trid = array($trid);

        $sql = "SELECT * FROM `announced_pu_results` WHERE `polling_unit_uniqueid` IN (".implode(',',$trid).")";

        $res = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_all($res);

        if($rows)
        {
            $data = json_encode(["success" => "pu_result", "msg" => $rows]);
            exit($data);
        }
        else
        {
            $data = json_encode(["failed" => "pu_result", "msg" => "Failed to poll result"]);
            exit($data);
            // print("no");
        }
    }

?>