<?php
$servername = "localhost";
$username ="root";
$pass = "";
$db_mame = "test1";
$conn = new mysqli($servername,$username,$pass,$db_mame);
if ($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}
	if(isset($_POST["submit"])){
		$motor1 = $_POST['motor1'];
	    $motor2 = $_POST['motor2'];
		$motor3 = $_POST['motor3'];
		$motor4 = $_POST['motor4'];
		$motor5 = $_POST['motor5'];
		$motor6 = $_POST['motor6'];
		$my_query ="INSERT INTO motors (motor1,motor2,motor3,motor4,motor5,motor6)
		VALUES('$motor1','$motor2','$motor3','$motor4','$motor5','$motor6')";
	if(	mysqli_query($conn,$my_query))
		{
			echo "New Details Enter inserted successfule!";
		}
	else
		{ 
	echo "ERROR:" . $sql . "" . mysqli_error($conn);
	} 
			mysqli_close($conn);
	}
	?>
