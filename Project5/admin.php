<!--external header file-->
<?php include 'view/header.php'; 

//including the database connection file
include_once("model/database.php");
 
//fetching data from contact
try {
    $result = mysqli_query($mysqli, "SELECT * FROM contact");
	$error = "Unable to retrieve data from database.";
} catch(Exception $e){
	echo "Form Data Error: " . $error;
    //Failed
}
?>

<!--css and javascript specifically for this page--> 
<link href="css/admin.css" rel="stylesheet">

<div class="container well">
<h1>Admin Comment Control</h1> 
<a href="logout.php" class="logout">Logout</a>
    <table class ="data-table" style="width:100%">
			<td style="font-size:18px;">ID</td>
            <td style="font-size:18px;">First Name</td>
            <td style="font-size:18px;">Last Name</td>
            <td style="font-size:18px;">Email</td>
            <td style="font-size:18px;">Comments</td>
			<td style="font-size:18px;">Date</td>
        </tr>
        <?php 
        
        while($res = mysqli_fetch_array($result)) {  
            echo "<tr>";
			echo "<td>".$res['customerID']."</td>";
            echo "<td>".$res['customerFirstName']."</td>";
            echo "<td>".$res['customerLastName']."</td>";
            echo "<td>".$res['customerEmail']."</td>"; 
			echo "<td>".$res['customerComments']."</td>";
			echo "<td>".$res['date']."</td>";
            echo "<td><a href=\"delete.php?customerID=$res[customerID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";  			
        }
        ?>
		
    </table>
	</div>
</body>
</html>