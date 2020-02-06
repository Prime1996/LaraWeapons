<?php

require('C:\xampp\htdocs\MyProject\resources\views\database_connection.blade.php');

$q = "ALTER TABLE managers
DROP COLUMN Manager_Designation;";

if ($link->query($q) === TRUE) {
    echo "'Manager Designation' column deleted from managers successfully";
    echo "<br><br>";
} else {
    echo "Error deleting column 'Manager_Designation' from table: " . $link->error;
    echo "<br>";
}

$q = "ALTER TABLE managers
ADD Designation VARCHAR(25);";

if ($link->query($q) === TRUE) {
    echo "'Designation' column added to managers successfully";
    echo "<br><br>";
} else {
    echo "Error adding column 'Manager_Designation' into table: " . $link->error;
    echo "<br>";
}

$q = "ALTER TABLE users
CHANGE User_Roll Roll INT(10);";

if ($link->query($q) === TRUE) {
    echo "'User_Roll' column changed to 'Roll' in users successfully";
    echo "<br><br>";
} else {
    echo "Error changing column name 'User_Roll': " . $link->error;
    echo "<br>";
}

$q = "ALTER TABLE users
CHANGE User_Batch Batch INT(10);";

if ($link->query($q) === TRUE) {
    echo "'User_Batch' column changed to 'Batch' in users successfully";
    echo "<br><br>";
} else {
    echo "Error changing column name 'User_Batch': " . $link->error;
    echo "<br>";
}

$q = "ALTER TABLE users
MODIFY COLUMN Batch INT(5);";

if ($link->query($q) === TRUE) {
    echo "'Batch' column in users modified successfully";
    echo "<br><br>";
} else {
    echo "Error modifying column 'Batch': " . $link->error;
    echo "<br>";
}

$q = "ALTER TABLE institutions
DROP FOREIGN KEY constraint1;";

if ($link->query($q) === TRUE) {
    echo "'constraint1' deleted from institutions successfully";
    echo "<br><br>";
} else {
    echo "Error deleting 'constrant1' from institutions: " . $link->error;
    echo "<br>";
}

$q = "ALTER TABLE institutions
DROP COLUMN Type_ID;";

if ($link->query($q) === TRUE) {
    echo "'Type_ID' column deleted from institutions successfully";
    echo "<br><br>";
} else {
    echo "Error deleting column 'Type_ID' from institutions: " . $link->error;
    echo "<br>";
}


$q = "ALTER TABLE institutions
ADD Type_ID INT(10) UNSIGNED;";

if ($link->query($q) === TRUE) {
    echo "'Type_ID' column added to institutions successfully";
    echo "<br><br>";
} else {
    echo "Error adding column 'Type_ID' into institutions: " . $link->error;
    echo "<br>";
}

$q = "ALTER TABLE institutions ADD CONSTRAINT constraint1
FOREIGN KEY (Type_ID) REFERENCES institution_types (Type_ID) ON DELETE CASCADE ON UPDATE CASCADE";

if ($link->query($q) === TRUE) {
    echo "'Type_ID' column added to institutions successfully";
    echo "<br><br>";
} else {
    echo "Error adding column 'Type_ID' into institutions: " . $link->error;
    echo "<br>";
}



?>