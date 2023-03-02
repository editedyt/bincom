<?php

require_once '../connection.php';

    $drop_tbl = "DROP TABLE IF EXISTS `party`";
    $create_tbl = "CREATE TABLE IF NOT EXISTS `party` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `partyid` varchar(11) NOT NULL,
        `partyname` varchar(11) NOT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10" ;

    $conn->query($drop_tbl);
    if ($conn->query($create_tbl) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $insert_to_tbl = "INSERT INTO `party` (`id`, `partyid`, `partyname`) VALUES
    (1, 'PDP', 'PDP'),
    (2, 'DPP', 'DPP'),
    (3, 'ACN', 'ACN'),
    (4, 'PPA', 'PPA'),
    (5, 'CDC', 'CDC'),
    (6, 'JP', 'JP'),
    (7, 'ANPP', 'ANPP'),
    (8, 'LABOUR', 'LABOUR'),
    (9, 'CPP', 'CPP')";

    if ($conn->query($insert_to_tbl) === TRUE) {
        echo "Inserted successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
?>