<?php
        // Add the customer to the database 
			function addCustomer($customerFirstName, $customerLastName, $customerEmail){
			global $db;			
            $query = 'INSERT INTO newsletter
                         (customerFirstName, customerLastName, customerEmail)
                      VALUES
                         (:customerFirstName, :customerLastName, :customerEmail)';
            $statement = $db->prepare($query);
            $statement->bindValue(':customerFirstName', $customerFirstName);
			$statement->bindValue(':customerLastName', $customerLastName);
            $statement->bindValue(':customerEmail', $customerEmail);
            $statement->execute();
            $statement->closeCursor();
			}
?>