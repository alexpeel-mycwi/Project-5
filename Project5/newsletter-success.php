<!--external header file-->
<?php include 'view/header.php'; 

//connection and adding to newsletter database
require('model/database.php');
require('model/newsletter-add.php');

	$customerFirstName = filter_input(INPUT_POST, 'first_name');
	$customerLastName = filter_input(INPUT_POST, 'last_name');
    $customerEmail = filter_input(INPUT_POST, 'email');

	// Validate inputs
	try {
    if ($customerFirstName == null || $customerLastName == null || $customerEmail == null) {
        $error = "Invalid input data. Check all fields and try again.";
		throw new Exception($error);
		}
	}
        catch (Exception $e) {
			echo "Form Data Error: " . $error; 
        exit();
		}

	if ($customerFirstName == null || $customerLastName == null || $customerEmail == null) {
        $message = "We are experiencing technical difficulties. Please check back later.";
        } else {
        $customerName = addCustomer($customerFirstName, $customerLastName, $customerEmail);
		}
?>

<!--css and javascript specifically for this page-->
<link href="css/newsletter.css" rel="stylesheet">
<script src="js/newsletter.js"></script>

<body>
<main class="container">
    
    <div class="container well">
	<h1>Thank you for signing up, <?php echo $customerFirstName; ?>. You'll receive a newsletter every month!</h1>
    </div>
</main>
</body>
</html>