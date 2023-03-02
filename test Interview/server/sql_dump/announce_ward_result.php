<?php

require_once '../connection.php';

    $drop_tbl = "DROP TABLE IF EXISTS `announced_ward_results`";
    $create_tbl = "CREATE TABLE IF NOT EXISTS `announced_ward_results` (
        `result_id` int(11) NOT NULL AUTO_INCREMENT,
        `ward_name` varchar(50) NOT NULL,
        `party_abbreviation` char(4) NOT NULL,
        `party_score` int(11) NOT NULL,
        `entered_by_user` varchar(50) NOT NULL,
        `date_entered` datetime NOT NULL,
        `user_ip_address` varchar(50) NOT NULL,
        PRIMARY KEY (`result_id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1" ;

    $conn->query($drop_tbl);
    if ($conn->query($create_tbl) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $insert_to_tbl = "INSERT INTO `agentname` (`name_id`, `firstname`, `lastname`, `email`, `phone`, `pollingunit_uniqueid`) VALUES
    (1, 'Christian', 'Emenike', 'christian@bincom.net', '08034699500', 1),
    (2, 'Ngozi', 'Emenike', 'biggysmalls@home.net', '08089003444', 2),
    (3, 'Chinyere', 'Emenike', 'chinyere@emenike.net', '07034532310', 1),
    (4, 'Chimezie', 'Emenike', 'chimezie@emenike.net', '07034532322', 2)";

    if ($conn->query($insert_to_tbl) === TRUE) {
        echo "Inserted successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
?>