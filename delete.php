<?php
	include_once('connection.php');

	$output = array('error' => false);

	// $database = new Connection();
	// $db = $database->open();
	try{
		$id = $_POST['id'];
		$sql = "DELETE FROM members WHERE id = $id ";
		//if-else statement in executing our query
		if($db->exec($sql)){
			$output['message'] = 'Partner deleted successfully';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Something went wrong. Cannot delete Partner';
		} 
	}
	catch(PDOException $e){
		$output['error'] = true;
		$output['message'] = $e->getMessage();
	}

	//close connection
	// $database->close();

	echo json_encode($output);

?>