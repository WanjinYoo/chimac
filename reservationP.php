<?php
$Name = $Phonenumber =  $Email =  $Date = $Time = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
echo '<script language="javascript">';

	if(empty($_POST["Name"])||empty($_POST["Phonenumber"])||empty($_POST["Email"])||empty($_POST["Date"])||empty($_POST["Time"])){
		echo 'alert("All fields need to be filled.")';
		echo '</script>';

	}
	else{
	$message = '';
	unset($_POST['submit']);
	foreach($_POST as $key => $value){
		$message .= "$key: $value \n";
	}

	$to = 'dksladjsla@gmail.com';
	$subject = 'Confirmation Email';
	if (mail($to, $subject, $message)){
		echo 'alert("Thank you for contacting! Our staff member will receive your reservation shortly")';
		$message = '';
		echo '</script>';

	}
	else{
		echo 'alert("Problem with the website. Please, call us to make a reservation.")';
		echo '</script>';

	}


}
}

?>
