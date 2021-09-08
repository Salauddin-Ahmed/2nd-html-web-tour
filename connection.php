<?php
	$Email = $_POST['Email']
	$name = $_POST['name']
	$address = $_POST['address']
	$password = $_POST['password']
	$repassword = $_POST['repassword']


	$conn = new mysqli('localhost','root','','Tourism web project');
	if($conn->connection_error){
		die('connection Failed : '.$conn->connection_error);
	}
	else{
		$stmt = $conn->prepare("insert into REG(Email,name,address,password,repassword)value(?,?,?,?,?)");
		$stmt->bind_parm("sssss",$Email, $name, $address, $password, $repassword);
		$stmt->execute();
		echo"Registation sussessfully.......";
		$stmt->close();
		$conn->close();
	}
?>