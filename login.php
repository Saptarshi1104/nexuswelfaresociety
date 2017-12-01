<?php


	if(isset($_POST['submit']))
	{
		$con=mysqli_connect("localhost","root","");
				
		if($con)
		{
			echo "connection successful";
		}
		else
		{
			echo "fail1";
		}
		
		$username = $_POST["user"];
		$passwprd = $_POST["password"];
		
		if(mysqli_select_db($con,"nexus"))
		{
			echo "";
		}
			
		
		$validate = "SELECT firstname,password FROM users WHERE username = $username";
		
		$result = mysqli_query($con,$validate);
		
		if(mysqli_num_rows($result) == 1)
		{
			$row = mysqli_fetch_array($result);
			
			if($row[1] == $password)
			{
				session_start();
				$_SESSION['username'] = $row[0];  
				echo $_SESSION['username'];
				/*header("location: welcome.php");*/
				
			}
		}
		
		
		
	}
	
?>