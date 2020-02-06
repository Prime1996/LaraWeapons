<?php

require('C:\xampp\htdocs\MyProject\resources\views\database_connection.blade.php');

$q = "UPDATE managers SET Designation='Director' WHERE Manager_Name='Dr. Shibendra Shekher Sikder';";

if ($link->query($q) === TRUE) {
    echo "'Designation' updated successfully where Manager_Name is Dr. Shibendra Shekher Sikder";
    echo "<br><br>";
} else {
    echo "Error updating 'Designation' in managers: " . $link->error;
    echo "<br>";
}

$q = "UPDATE managers SET Designation='Assistant Director' WHERE Manager_Name='Shahrear Roman';";

if ($link->query($q) === TRUE) {
    echo "'Designation' updated successfully where Manager_Name is Ashikur Rahman";
    echo "<br><br>";
} else {
    echo "Error updating 'Designation' in managers: " . $link->error;
    echo "<br>";
}

$q = "UPDATE managers SET Designation='Assistant Officer' WHERE Manager_Name='Ashikur Rahman';";

if ($link->query($q) === TRUE) {
    echo "'Designation' updated successfully where Manager_Name is Ashikur Rahman";
    echo "<br><br>";
} else {
    echo "Error updating 'Designation' in managers: " . $link->error;
    echo "<br>";
}

$q = "UPDATE institutions SET Type_ID=1 WHERE Access_ID=1;";

if ($link->query($q) === TRUE) {
    echo "'Type_ID' updated successfully where Access_ID=1";
    echo "<br><br>";
} else {
    echo "Error updating 'Designation' in managers: " . $link->error;
    echo "<br>";
}

$q = "UPDATE institutions SET Type_ID=2 WHERE Access_ID=2;";

if ($link->query($q) === TRUE) {
    echo "'Type_ID' updated successfully where Access_ID=2";
    echo "<br><br>";
} else {
    echo "Error updating 'Designation' in managers: " . $link->error;
    echo "<br>";
}

$q = "DELETE from users WHERE User_Name='Radi Rahman';";

if ($link->query($q) === TRUE) {
    echo "row deleted successfully where User_Name is Radi Rahman";
    echo "<br><br>";
} else {
    echo "Error deleting a row in users: " . $link->error;
    echo "<br>";
}

?>