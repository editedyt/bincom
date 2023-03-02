<?php
    require_once './connection.php';

    $post = json_decode(file_get_contents("php://input"));

    if(isset($post->result_id) && isset($post->polling_unit_uniqueId) && isset($post->party) && isset($post->party_score) && isset($post->entered_by))
        $res = $post->result_id;
        $puuid = $post->polling_unit_uniqueId;
        $party = $post->party;
        $party_score = $post->party_score;
        $entered_by = $post->entered_by;


        $sql = "INSERT INTO `new_poll_result` (
            result_id, polling_unit_uniqueid, party_abbreviation, party_score, entered_by_user)
            VALUES ('$res', '$puuid', '$party', '$party_score', '$entered_by')
            ";

        $res = mysqli_query($conn, $sql);

        if($res==TRUE){
            $data = Json_encode(["success"=>"success", "msg"=>"Data added successfully"]);

            exit($data);
        } else {
            $data = Json_encode(["failed"=>"failed", "msg"=>"Failed to result"]);
            exit($data);
    }
?>