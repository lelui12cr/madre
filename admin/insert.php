<?php
if (isset($_POST['reg_p'])) {
	include('config.php');
	include('conec.php');

	// receive all input values from the form
	$name = mysqli_real_escape_string($conn,$_POST['pname']);
	$email = mysqli_real_escape_string($conn,$_POST['pirce']);
	$phone = mysqli_real_escape_string($conn,$_POST['pcat']);
	$province = mysqli_real_escape_string($conn,$_POST['pdetails']);
	$canton = mysqli_real_escape_string($conn,$_POST['pdetails']);
	$mother_province = mysqli_real_escape_string($conn,$_POST['pdetails']);
	$mother_canton = mysqli_real_escape_string($conn,$_POST['pdetails']);
	$reason = mysqli_real_escape_string($conn,$_POST['pdetails']);

// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO competitors VALUES ('$name', '$email', '$phone', '$province', '$canton', '$mother_province', '$mother_canton', '$reason')";



	if ($conn->query($sql) === TRUE) {
		$to      = 'nobody@example.com';
		$subject = 'Información';
		$message = '
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
                            <td>Canton</td><td>'.$canton.'</td>
                        </tr>
                        <tr>
                            <td>Provincia de la mamá</td><td>'.$mother_province.'</td>
                        </tr>
                        <tr>
                            <td>Canton de la mamá</td><td>'.$mother_canton.'</td>
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

		mail($to, $subject, $message, implode("\r\n", $headers));

		$conn->close();
		header('location: gracias.php');
		exit;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}else{
	header('location: index.php');
	exit;
}
?>