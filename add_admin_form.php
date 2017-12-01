<?php

			if(isset($_POST['addadmin']))
			{
			    include 'connection.php';
				if($con)
				{
					$firstname = $_POST["firstname"];
					$lastname = $_POST["lastname"];
					$username = $_POST["username"];
					$password = $_POST["password"];
					$cpassword = $_POST["cpassword"];
					$date = date("Y-m-d");
					if($password == $cpassword)
					{
						$firstname = firstupper($firstname);
						$lastname = firstupper($lastname);
						saveuser($firstname,$lastname,$username,$password,$date,$con);
					}
					else
					{
						echo '<div class="message error"><span class="message-header">Error</span><br/>Password Does Not Match<div class="close">Click On This To Dismiss</div></div>';
					}
				}
			}

			function firstupper($temp)
			{
				$temp = strtolower($temp);
				$temp = ucwords($temp);
				return $temp;
			}

			function saveuser($firstname,$lastname,$username,$password,$date,$con)
			{
				$saveuser = "INSERT INTO users (firstname,lastname,username,password,date) VALUES ('$firstname','$lastname','$username','$password','$date')";
				
				$success = "admin_add";
				$error = "admin_add_null";


				if(mysqli_query($con,$saveuser))
				{
					header("Location: welcome.php?flag=".$success);
				}
				else
				{
					header("Location: welcome.php?flag=".$error);
				}

			}
			?>