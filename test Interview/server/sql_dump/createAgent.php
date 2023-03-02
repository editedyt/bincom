<?php

require_once '../connection.php';

    $drop_tbl = "DROP TABLE IF EXISTS `agentname`";
    $create_tbl = "CREATE TABLE IF NOT EXISTS `agentname` (
    `name_id` int(11) NOT NULL AUTO_INCREMENT,
    `firstname` varchar(255) NOT NULL,
    `lastname` varchar(255) NOT NULL,
    `email` varchar(255) DEFAULT NULL,
    `phone` char(13) NOT NULL,
    `pollingunit_uniqueid` int(11) NOT NULL,
    PRIMARY KEY (`name_id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5" ;

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