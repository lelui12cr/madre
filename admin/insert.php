<?php
if (isset($_POST['name'])) {
	include('conec.php');

	// receive all input values from the form
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$phone = mysqli_real_escape_string($conn,$_POST['phone']);
	$email = strtolower(mysqli_real_escape_string($conn,$_POST['email']));
	$province = mysqli_real_escape_string($conn,$_POST['province_canton']);
	$mother_province = mysqli_real_escape_string($conn,$_POST['mother_province']);
	$reason = mysqli_real_escape_string($conn,$_POST['message']);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql_check = "SELECT * FROM competitors WHERE email = '".$email."'";
	$result = mysqli_query($conn, $sql_check);
	$data = array();
	$num_rows = mysqli_num_rows($result);

	if ($num_rows > 0) {
		echo json_encode(array('result' => 2, 'message' => "Ya estas participando."));
		exit;
	}

	$sql = "INSERT INTO competitors(name,email,phone,province,mother_province,reason) VALUES ('$name', '$email', '$phone', '$province', '$mother_province', '$reason')";

	if ($conn->query($sql) === TRUE) {
		$to      = $email;
		$subject = 'Información concurso';
		$message = ' Ya estas participando, estos son tus datos: <br><br>
 			<hr>
			<table border="1">
			    <tr>
			        <td>Nombre: </td><td>'.$name.'</td>
			    </tr>
			    <tr>
			        <td>Email:</td><td>'.$email.'</td>
			    </tr>
			    <tr>
			        <td>Teléfono</td><td>'.$phone.'</td>
			    </tr>
			    <tr>
			        <td>Provincia</td><td>'.$province.'</td>
			    </tr>
			    <tr>
			        <td>Provincia de la mamá</td><td>'.$mother_province.'</td>
			    </tr>
			    <tr>
			        <td>Razón</td><td>'.$reason.'</td>
			    </tr>
			</table>
		';
		// To send HTML mail, the Content-type header must be set
		$headers[] = 'MIME-Version: 1.0';
		$headers[] = 'Content-type: text/html; charset=iso-8859-1';

		// Additional headers
		$headers[] = 'To: Admin <info@admin.com>';
		$headers[] = 'From:  '.$name.' <'.$email.'>';
//		$headers[] = 'Cc: birthdayarchive@example.com';
//		$headers[] = 'Bcc: birthdaycheck@example.com';

		$response = mail($to, $subject, $message, implode("\r\n", $headers));

		$conn->close();
		echo json_encode(array('result' => $response, 'message' => "Gracias por participar."));
		exit;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}else{
	header('location: index.php');
	exit;
}
?>