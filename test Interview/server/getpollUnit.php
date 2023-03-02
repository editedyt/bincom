<?php
    include_once './connection.php';

    $post = json_decode(file_get_contents("php://input"));
    

    if(isset($post->select))
    {
        $selectId = $post->select;

        $sql = "SELECT * FROM polling_unit WHERE polling_unit_id = '$selectId'";

        $res = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_all($res);

        if($rows)
        {
            $data = json_encode(["success" => "poll_result", "msg" => $rows]);
            exit($data);
        }
        else
        {
            $data = json_encode(["failed" => "poll_result", "msg" => "Failed to poll result"]);
            exit($data);
        }
    }

    if(isset($post->trid)){
        $trid = $post-trid;
        var_dump($trid);
    }
?>