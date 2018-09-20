<!--external header file-->
<?php include 'view/header.php';
 
//connection, validation and adding to database
require('model/database.php');
require('model/contact-add.php');
	
	$customerFirstName = filter_input(INPUT_POST, 'first_name');
	$customerLastName = filter_input(INPUT_POST, 'last_name');
    $customerEmail = filter_input(INPUT_POST, 'email');
    $customerComments = filter_input(INPUT_POST, 'comments');
    
    
    // Validate inputs
	try {
    if ($customerFirstName == null || $customerLastName == null || $customerEmail == null ||
        $customerComments == null) {
        $error = "Invalid input data. Check all fields and try again.";
		throw new Exception($error);
		}
	}
        catch (Exception $e) {
			echo "Form Data Error: " . $error; 
        exit();
		}

	if ($customerFirstName == null || $customerLastName == null || $customerEmail == null ||
        $customerComments == null) {
        $message = "We are experiencing technical difficulties. Please check back later.";
        } else {
        $customerName = addCustomer($customerFirstName, $customerLastName, $customerEmail, $customerComments);
		}

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
<link href="css/contact.css" rel="stylesheet">
<script src="js/contact.js"></script>

<main class="container">
<body>
<h1>Thank you for contacting us! We will get back to you shortly.</h1>
<h3>See what others are saying about Moonlight Cinema.</h3>
        <?php 
        while($res = mysqli_fetch_array($result)) {   
			echo "<div class='container well'>";
			echo "<img src='imgs/comment.png' class='comment'>";
            echo "<p style='font-size:18px;'>".$res['customerFirstName']. '&nbsp;' .$res['customerLastName']."</p>";
			echo "<p>".$res['customerComments']."</p>";
			echo "</div>";
        }
        ?>
</body>
</main>
</html>