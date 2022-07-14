<?php
	include_once('connection.php');

	$output = array('error' => false);

	try{
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];

		//make use of prepared statement to prevent sql injection
		$query = $db->prepare("INSERT INTO members (firstname, lastname, address) VALUES (:firstname, :lastname, :address)");
    	$stmt = $query->execute(array(':firstname' => $firstname , ':lastname' => $lastname , ':address' => $address));

		// //if-else statement in executing our prepared statement
		if ($stmt){
			$output['message'] = 'Partner added successfully';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Something went wrong. Cannot add Partner';
		} 
		   
	}
	catch(PDOException $e){
		$output['error'] = true;
 		$output['message'] = $e->getMessage();
	}

	echo json_encode($output);

?>