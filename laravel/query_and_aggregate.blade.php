
<?php

require('C:\xampp\htdocs\MyProject\resources\views\database_connection.blade.php');

$sql = "SELECT * FROM institutions;";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full Details about 'institutions' table";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table>"; 
	    echo "<tr>"; 
	    echo "<th>Institution_ID</th>"; 
	    echo "<th>Room_No</th>"; 
	    echo "<th>Access_ID</th>";
	    echo "<th>Manager_ID</th>"; 
	    echo "<th>User_ID</th>"; 
	    echo "<th>Type_ID</th>";  
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
	        echo "<td>".$row['Institution_ID']."</td>"; 
	        echo "<td>".$row['Room_No']."</td>"; 
	        echo "<td>".$row['Access_ID']."</td>"; 
	        echo "<td>".$row['Manager_ID']."</td>"; 
	        echo "<td>".$row['User_ID']."</td>"; 
	        echo "<td>".$row['Type_ID']."</td>";
	        echo "</tr>"; 
	    }
	    echo "</table>"; 
	} 
	else {
	    echo "0 results";
	}
}

echo "<br><br>";

$sql = "SELECT DISTINCT (Manager_ID) FROM institutions;";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Distinct Manager_ID of 'institutions' table";

if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table>"; 
	    echo "<tr>"; 
	    echo "<th>Manager_ID</th>";   
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
	        echo "<td>".$row['Manager_ID']."</td>"; 
	        echo "</tr>"; 
	    }
	    echo "</table>"; 
	} 
	else {
	    echo "0 results";
	}
}

echo "<br><br>";

$sql = "SELECT Institution_ID, Access_ID, Manager_ID, User_ID FROM institutions WHERE Room_No=201 OR Room_No=202;";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Details of 'institutions' table where Room_No is either 201 or 202";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table>"; 
	    echo "<tr>"; 
	    echo "<th>Institution_ID</th>"; 
	    echo "<th>Access_ID</th>";
	    echo "<th>Manager_ID</th>"; 
	    echo "<th>User_ID</th>";  
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
	        echo "<td>".$row['Institution_ID']."</td>"; 
	        echo "<td>".$row['Access_ID']."</td>"; 
	        echo "<td>".$row['Manager_ID']."</td>"; 
	        echo "<td>".$row['User_ID']."</td>"; 
	        echo "</tr>"; 
	    }
	    echo "</table>"; 
	} 
	else {
	    echo "0 results";
	}
}

echo "<br><br>";

$sql = "SELECT User_ID, Access_ID FROM users WHERE User_name like '%Muhiminul Islam%';";

echo "&nbsp;User_ID & Dept_ID of 'users' table where User_name is Muhiminul Islam";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table>"; 
	    echo "<tr>"; 
	    echo "<th>User_ID</th>"; 
	    echo "<th>Dept_ID</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
 			echo "<td>".$row['User_ID']."</td>";
	        echo "<td>".$row['Dept_ID']."</td>"; 
	        echo "</tr>"; 
	    }
	    echo "</table>"; 
	} 
	else {
	    echo "0 results";
	}
}

echo "<br><br>";

$sql = "SELECT User_ID, User_Name, Batch, Roll FROM users ORDER By Batch, Roll desc;";

echo "&nbsp;User_ID & User_name of 'users' table Ordered by Batch with Roll in descending order";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table>"; 
	    echo "<tr>"; 
	    echo "<th>User_ID</th>"; 
	    echo "<th>User_Name</th>";
	    echo "<th>Batch</th>";
	    echo "<th>Roll</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
 			echo "<td>".$row['User_ID']."</td>";
	        echo "<td>".$row['User_Name']."</td>"; 
	        echo "<td>".$row['Batch']."</td>";
	        echo "<td>".$row['Roll']."</td>";
	        echo "</tr>"; 
	    }
	    echo "</table>"; 
	} 
	else {
	    echo "0 results";
	}
}

echo "<br><br>";

$sql = "SELECT COUNT(ALL Manager_ID), COUNT(DISTINCT Manager_ID), COUNT(ALL Access_ID), COUNT(DISTINCT Access_ID) FROM institutions;";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of Distinct and All Values of Manager_ID & Access_ID in table 'institutions'";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table>"; 
	    echo "<tr>"; 
	    echo "<th>COUNT(ALL Manager_ID)</th>"; 
	    echo "<th>COUNT(DISTINCT Manager_ID)</th>";
	    echo "<th>COUNT(ALL Access_ID)</th>";
	    echo "<th>COUNT(DISTINCT Access_ID)</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
 			echo "<td>".$row['COUNT(ALL Manager_ID)']."</td>";
	        echo "<td>".$row['COUNT(DISTINCT Manager_ID)']."</td>"; 
	        echo "<td>".$row['COUNT(ALL Access_ID)']."</td>";
	        echo "<td>".$row['COUNT(DISTINCT Access_ID)']."</td>";
	        echo "</tr>"; 
	    }
	    echo "</table>"; 
	} 
	else {
	    echo "0 results";
	}
}

echo "<br><br>";

$sql = "SELECT Batch, COUNT(*) FROM users GROUP BY Batch;";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of Values in table 'users' Grouped By Batch";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table>"; 
	    echo "<tr>"; 
	    echo "<th>Batch</th>"; 
	    echo "<th>COUNT(Values)</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>"; 
 			echo "<td>".$row['Batch']."</td>";
	        echo "<td>".$row['COUNT(*)']."</td>"; 
	        echo "</tr>"; 
	    }
	    echo "</table>"; 
	} 
	else {
	    echo "0 results";
	}
}

echo "<br><br>";

?>