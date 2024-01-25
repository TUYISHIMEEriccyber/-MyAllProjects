<?php
$name = $_POST['name'];
$registration = $_POST['registration'];
$college = $_POST['college'];
if (!empty($name) || !empty($registration) || !empty($college)){
$host = "localhost";
$dbUsername = "root";
$dbpassword = "";
$dbname = "eric";
$conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);
if (mysqli_connect_error()){
	die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	
}
else{
	$SELECT = "SELECT name From data Where email = ? Limit 1";
	$INSERT = "INSERT Into data (name,registration,college) values(?;?,?)";
	$stmt = $conn->prepere($SELECT);
	$stmt->bind_param("s",$name);
	$stmt->execute();
	sstmt->bind_result($name);
	$stmt->store_result();
	$rnum = $stmt->num_rows;
	
	if ($rnum==0){
		$stmt->close();
		$stmt = $conn->prepere($INSERT);
		$stmt->bind_param("ssssii", $registration, $college);
		$stmt->execute();
		echo "New record inserted successfully";
	}
	else{
		echo "someone already registered using this name";
	}
	$stmt->close();
	$conn->close();
}
	
}
else{
	echo "All fields are arequired";
	die();
}
?>