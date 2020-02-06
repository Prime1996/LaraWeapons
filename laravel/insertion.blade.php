
<?php

require('C:\xampp\htdocs\MyProject\resources\views\database_connection.blade.php');

$sql = "INSERT INTO institution_types (Type_Name) VALUES ('Seminar Room')";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'institution_types' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO institution_types (Type_Name) VALUES ('Conference Room')";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'institution_types' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO institution_types (Type_Name) VALUES ('Muktamancha')";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'institution_types' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO departments (Dept_Name) VALUES ('CSE')";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'departments' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO departments (Dept_Name) VALUES ('ME')";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'departments' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO departments (Dept_Name) VALUES ('EEE')";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'departments' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO managers (Manager_Name,Manager_Designation) VALUES ('Dr. Shibendra Shekher Sikder','Director')";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'managers' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO managers (Manager_Name,Manager_Designation) VALUES ('Shahrear Roman ','Assistant Director')";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'managers' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO managers (Manager_Name,Manager_Designation) VALUES ('Ashikur Rahman','Assistant Officer')";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'managers' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO access (Access_Date,Access_Time,Access_Duration) VALUES ('2019-6-02','10AM',3)";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'access' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO access (Access_Date,Access_Time,Access_Duration) VALUES ('2019-6-10','3PM',3)";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'access' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO access (Access_Date,Access_Time,Access_Duration) VALUES ('2019-6-25','5PM',3)";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'access' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO users (User_Name,User_Roll,User_Batch,Dept_ID) VALUES ('Muhiminul Islam',1607087,2016,1)";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'users' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}


$sql = "INSERT INTO users (User_Name,User_Roll,User_Batch,Dept_ID) VALUES ('Nazmus Sakib',1505089,2015,3)";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'users' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO users (User_Name,User_Roll,User_Batch,Dept_ID) VALUES ('Al Noman',1607031,2016,1)";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'users' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO users (User_Name,User_Roll,User_Batch,Dept_ID) VALUES ('Radi Rahman',1603084,2016,2)";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'users' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO institutions (Room_No,Type_ID,Access_ID,Manager_ID,User_ID) VALUES (201,1,1,2,1)";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'institutions' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO institutions (Room_No,Type_ID,Access_ID,Manager_ID,User_ID) VALUES (102,3,3,3,1)";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'institutions' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO institutions (Room_No,Type_ID,Access_ID,Manager_ID,User_ID) VALUES (102,3,2,3,3)";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'institutions' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

$sql = "INSERT INTO institutions (Room_No,Type_ID,Access_ID,Manager_ID,User_ID) VALUES (202,2,2,2,2)";

if ($link->query($sql) === TRUE) {
    echo "data inserted into 'institutions' successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}

?>