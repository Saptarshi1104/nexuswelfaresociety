<?php

				if(isset($_POST['add_member']))
				{
					include 'connection.php';
										
					$name = $_POST["name"];
					$designation = $_POST["designation"];
					$committee = $_POST["committee"];
					
					if(strtolower($designation)=="president")
					{
						$rank=1;
					}
					else if(strtolower($designation)=="vice president")
					{
						$rank=2;
					}
					else if(strtolower($designation)=="secretary")
					{
						$rank=3;
					}
					else if(strtolower($designation)=="assistant secretary"||strtolower($designation)=="asstt. secretary"||strtolower($designation)=="asstt secretary")
					{
						$rank=4;
					}
					else if(strtolower($designation)=="treasurer")
					{
						$rank=5;
					}
					else if(strtolower($designation)=="member")
					{
						$rank=6;
					}
					else if(strtolower($designation)=="trainee")
					{
						$rank=7;
					}
					else
					{
						$rank=50;
					}
						
						
					addmember($name,$designation,$committee,$rank,$con);
						
				}
				
				function addmember($name,$designation,$committee,$rank,$con)
				{
					
					$name = strtolower($name);
					$name = ucwords($name);

					$success = 'member_add';
					$error = 'member_add_null';
					
					$designation = ucwords(strtolower($designation));
					
					$committee = ucwords(strtolower($committee));
					
					$query ="INSERT INTO governing_body (name,designation,committee,rank) VALUES ('$name','$designation','$committee','$rank')" ;
					if(mysqli_query($con,$query))
					{
						header("Location: welcome.php?flag=".$success);
					}
					else
					{
						header("Location: welcome.php?flag=".$error);
					}
				}
?>