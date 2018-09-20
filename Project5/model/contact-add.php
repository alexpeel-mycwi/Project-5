<?php
        // Add the customer to the database  
			function addCustomer($customerFirstName, $customerLastName, $customerEmail, $customerComments){
			global $db;
            $query = 'INSERT INTO contact
                         (customerFirstName, customerLastName, customerEmail, customerComments)
                      VALUES
                         (:customerFirstName, :customerLastName, :customerEmail, :customerComments)';
            $statement = $db->prepare($query);
            $statement->bindValue(':customerFirstName', $customerFirstName);
			$statement->bindValue(':customerLastName', $customerLastName);
            $statement->bindValue(':customerEmail', $customerEmail);
            $statement->bindValue(':customerComments', $customerComments);
            $statement->execute();
            $statement->closeCursor();
			}
?>