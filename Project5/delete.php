<?php
//including the database connection file
include("model/database.php");
 
//getting id of the data from url
$customerID = $_GET['customerID'];
 
//deleting the row from table
try {
	$result = mysqli_query($mysqli, "DELETE FROM contact WHERE customerID=$customerID");
	$error = "Unable to delete data from database.";
} catch(Exception $e){
	echo "Form Data Error: " . $error;
    //Failed
}
 
//redirecting to the display page
header("Location:admin.php");
?>