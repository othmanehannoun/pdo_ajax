<?php
	include '../_connexion.php';

	$output = array('error' => false);

	// $database = new Connection();
	// $db = $database->open();
	try{
		$id = $_POST['id'];
		// $sql = " DELETE FROM assurance WHERE id = $id ";

		
		$stmt1 = $db->prepare("DELETE FROM coverproposals
        WHERE id_Cover IN(
          SELECT id_cover FROM cover WHERE id_product IN(
          SELECT id_product FROM procuct WHERE id_assurance = $id
        ))
        OR 
        id_Proposals IN(
          SELECT id FROM proposals WHERE id_Contract IN(
          SELECT id FROM contracts WHERE product IN (
              SELECT id_product FROM procuct WHERE id_assurance = $id
              )
        ))");

		$stmt1->execute();

		$stmt2 = $db->prepare("DELETE FROM proposals
        WHERE id_Contract IN(
          SELECT id FROM contracts WHERE product IN (
          SELECT id_product FROM procuct WHERE id_assurance = $id
        ))");
		$stmt2->execute();

		$stmt3 = $db->prepare("  DELETE FROM cover
        WHERE id_product IN(
          SELECT id_product FROM procuct WHERE id_assurance = $id
        );");
		$stmt3->execute();


		$stmt4 = $db->prepare("DELETE FROM partner_commission
        WHERE id_product IN(
            SELECT id_product FROM procuct WHERE id_assurance = $id
        );");
		$stmt4->execute();

		$stmt5 = $db->prepare("DELETE FROM contracts WHERE partner = $id ");
		$stmt5->execute();

		$stmt6 = $db->prepare("DELETE FROM procuct WHERE id_assurance = $id");
		$stmt6->execute();

		$stmt7 = $db->prepare("DELETE FROM assurance WHERE id = $id");
		$stmt7->execute();

		
		if($stmt1 && $stmt2 && $stmt3 && $stmt4 && $stmt5 && $stmt6 && $stmt7){
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