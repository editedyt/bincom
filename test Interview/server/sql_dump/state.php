<?php

require_once '../connection.php';

    $drop_tbl = "DROP TABLE IF EXISTS `states`";
    $create_tbl = "CREATE TABLE IF NOT EXISTS `states` (
        `state_id` int(11) NOT NULL,
        `state_name` varchar(50) NOT NULL,
        PRIMARY KEY (`state_id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=latin1" ;

    $conn->query($drop_tbl);
    if ($conn->query($create_tbl) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $insert_to_tbl = "INSERT INTO `states` (`state_id`, `state_name`) VALUES
    (1, 'Abuja'),
    (2, 'Abia'),
    (3, 'Anambra'),
    (4, 'Akwa Ibom'),
    (5, 'Adamawa'),
    (6, 'Bauchi'),
    (7, 'Bayelsa'),
    (8, 'Benue'),
    (9, 'Borno'),
    (10, 'Cross River'),
    (12, 'Ebonyi'),
    (13, 'Edo'),
    (14, 'Ekiti'),
    (15, 'Enugu'),
    (16, 'Gombe'),
    (17, 'Imo'),
    (18, 'Jigawa'),
    (19, 'Kaduna'),
    (20, 'Kano'),
    (21, 'Katsina'),
    (22, 'Kebbi'),
    (23, 'Kogi'),
    (24, 'Kwara'),
    (25, 'Delta'),
    (26, 'Nasarawa'),
    (27, 'Niger'),
    (28, 'Ogun'),
    (29, 'Ondo'),
    (30, 'Osun'),
    (31, 'Oyo'),
    (32, 'Plateau'),
    (33, 'Rivers'),
    (34, 'Sokoto'),
    (35, 'Taraba'),
    (36, 'Yobe'),
    (37, 'Zamfara'),
    (251, 'Lagos')";

    if ($conn->query($insert_to_tbl) === TRUE) {
        echo "Inserted successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
?>