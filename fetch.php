<?php
	include_once('connection.php');

	// $database = new Connection();
	// $db = $database->open();

	try{	
		$stmt = $db->prepare("SELECT * FROM members");
		$stmt->execute(array());
		$result = $stmt->fetchAll();
		$lenght_data = $stmt->rowCount();

	    // $sql = 'SELECT * FROM members';
		// $query = $db->query($sql)
		
		if($lenght_data != 0){
			foreach ($result as $row) {
				?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['firstname']; ?></td>
					<td><?php echo $row['lastname']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td>
						<button class="btn btn-success btn-sm edit" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</button>
						<button class="btn btn-danger btn-sm delete" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash"></span> Delete</button>
					</td>
				</tr>
				<?php 
			}
		}
		else{?>
			<tr> 
				<td> 0 result </td>
			</tr>
		<?php }
	    
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	//close connection
	$database->close();
	
?>