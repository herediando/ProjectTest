<?php
	if (isset($_POST['tag'])) {
		try{
			$conn = require_once 'connect.php';
			
			$sql = "SELECT * FROM habitantes";
			$result = $conn->prepare($sql) or die ($sql);

			if (!$result->execute()) return false;

			if ($result->rowCount() > 0){
				$json = array();
				while ($row = $result->fetch()) {
					$json[] = array(
						'habcedula' => $row['habcedula'],
						'habnombre1' =>$row['habnombre1'],
						'habapellido1' => $row['habapellido1'],
						'habfechanacimiento' => $row['habfechanacimiento'],
						'habestadocivil' => $row['habestadocivil']
					);
				}
				$json['success'] = true;
				echo json_encode($json);
			}
		} catch (PDOException $e) {
			echo 'Error: '. $e->getMessage();
		}
	}
?>