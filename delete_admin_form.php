<?php 
			if(isset($_POST['delete_admin']))
			{
				include 'connection.php';

				$success = 'admin_delete';
				$error = 'admin_delete_null';

				$remove_candidate = $_POST['delete_candidate'];
				$remove_candidate_sql = "DELETE from users WHERE username = '$remove_candidate'";

				$check_candidate = "SELECT username from users";
				$check_result = mysqli_query($con,$check_candidate);
				$rows = mysqli_num_rows($check_result);
				echo $rows;

				if($rows>1)
				{
					mysqli_query($con,$remove_candidate_sql);
					header("Location: welcome.php?flag=".$success);
				}
				else
				{
					header("Location: welcome.php?flag=".$error);
				}

			}
 ?>