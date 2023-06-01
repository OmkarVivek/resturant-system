
<?php

if(isset($_POST["Submit"])){
	$username = $_POST["username"];
	$password = $_post["password"];
	$result = mysqli_query($conn,"SELECT * FROM dhabha WHERE username = '$username'");
	$row = mysqli_fetch_assoc($result);
	if(my_sqli_num_rows($result)>0){
		if($password = $row["password"]){
			$_SESSION["Login"] = true;
			$SESSION["id"] = $row["id"];
			header("Location: trail new-1.php");
		}
		else{
			echo 
			"<script> alert('wrong password');</script>";
		}
	}
	else{
		echo
		"<script> alert('User not Registered');</script>";
	}
}


if(!empty($_SESSION[$id])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn,"SELECT * FROM dhabha WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location:index.php");
}

?>