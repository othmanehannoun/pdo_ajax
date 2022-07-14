<?php
	include_once('connection.php');

	$output = array('error' => false);

	// $database = new Connection();
	// $db = $database->open();

	try{
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];

		$sql = "UPDATE members SET firstname = '$firstname', lastname = '$lastname', address = '$address' WHERE id = '$id'";
		//if-else statement in executing our query
		if($db->exec($sql)){
			$output['message'] = 'Partner updated successfully';
		} 
		else{
			$output['error'] = true;
			$output['message'] = 'Partner went wrong. Cannot update member';
		}

	}
	catch(PDOException $e){
		$output['error'] = true;
		$output['message'] = $e->getMessage();
	}


	echo json_encode($output);
	
?>