<?php

			if(isset($_POST['delete_member']))
			{
					include 'connection.php';

					$success = 'member_delete';
					$error = 'member_delete_null';

					$delete_member = $_POST['delete_candidate'];
					$delete_member_sql  = "DELETE from governing_body WHERE name = '$delete_member'";
					if(mysqli_query($con,$delete_member_sql))
					{
						header('Location: welcome.php?flag='.$success);
					}
					else
					{
						header("Location: welcome.php?flag=".$error);
					}
			}

?>