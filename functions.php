<?php
function check_login($con) 
{
	if(isset($_SESSION['userID'])) //if inside session, there is a userID, 
	{
		//to check if it is really in the database:
		$id = $_SESSION['userID'];
		$query = "SELECT * FROM tbl_admin where userID = '$id' limit 1";
		$result = mysqli_query($con,$query);//do the $query on the $con or connected database
		if($result && mysqli_num_rows($result) > 0)//if the result is positive and it returns at least one row 
		{
			$user_data = mysqli_fetch_assoc($result);//assoc = associative array
			//user data should be returned so we would need to fetch the data
			return $user_data;
		}
	}
	//redirect to login if session value does not exist
	header("Location: signin.php");
	die;
}

function random_num($len)
{
	$text = "";
	if($len < 5) 
	{
		$len = 5;
	}
	$length = rand(4,$len);
	for ($i=0; $i < $length; $i++) {
		$text .= rand(0,9);
	}
	return $text;
}

?>