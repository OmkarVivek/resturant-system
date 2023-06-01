
<?php
$conn=mysqli_connect("localhost","root","","dhabha");
if($conn->connect_error)
{
	echo "not connceted";
}
else
{
	echo "connected";
if(empty($_POST["Submit"])){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$result = mysqli_query($conn,"SELECT * FROM login_details WHERE username = '$username'and password='$password';");
	$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result)>0){
	
			header("Location: trail new-1.html");
		
	
	}
	else{
		echo 
		"<script> alert('wrong password');</script>";
	}
	
}


// if(!empty($_SESSION[$id])){
//   $id = $_SESSION["id"];
//   $result = mysqli_query($conn,"SELECT * FROM  WHERE id = $id");
//   $row = mysqli_fetch_assoc($result);
// }
// else{
//   header("Location:index.php");
// }
}
?>