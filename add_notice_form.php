<?php
			if(isset($_POST['notice']))
			{
				include 'connection.php';

				$success = 'notice_add';
				$error = 'notice_add_null';

				if($con)
				{
					/*echo "connection successful";*/
					$noticetag = $_POST["noticetag"];
					$noticetag = strtolower($noticetag);
					$noticetag = ucwords($noticetag);
					$day = $_POST["day"];
					$month = $_POST["month"];
					$year = $_POST["year"];
					$text = $_POST["text"];
					$text = strtolower($text);
					$text = ucwords($text);
					savenotice($noticetag,$day,$month,$year,$text,$con);
				}
				else
				{
					header("Location: welcome.php?flag=".$error);
				}
			}

			function savenotice($noticetag,$day,$month,$year,$text,$con)
			{
				$success = 'notice_add';
				$error = 'notice_add_null';

				$notice_query = "SELECT * FROM notice_table";
				$notice_result = mysqli_query($con,$notice_query);
				$row = mysqli_num_rows($notice_result);

				if($row ==4)
				{
					$notice_select_query = "SELECT `noticetag`,`day`,`month`, `year`, `text` FROM `notice_table` ORDER BY `year` ASC, `month` ASC, `day` ASC LIMIT 1";
					$notice_select_result = mysqli_query($con,$notice_select_query);
					$notice_select_row = mysqli_fetch_array($notice_select_result);
					
					$acitivity_insert_query = "INSERT INTO activity_table (noticetag,day,month,year,text) VALUES ('$notice_select_row[0]','$notice_select_row[1]','$notice_select_row[2]','$notice_select_row[3]','$notice_select_row[4]')";
					$acitivity_insert_result = mysqli_query($con,$acitivity_insert_query);

					if($acitivity_insert_result)
					{
				
						$notice_delete_query = "DELETE FROM notice_table ORDER BY year ASC, month ASC, day ASC LIMIT 1";
						$notice_delete_result = mysqli_query($con,$notice_delete_query);
				
						if($notice_delete_result)
						{
						
							$notice_update_query = "INSERT INTO notice_table (noticetag,day,month,year,text) VALUES ('$noticetag','$day','$month','$year','$text')";
							$notice_update_result = mysqli_query($con,$notice_update_query);

							if($notice_update_result)
							{
								header("Location: welcome.php?flag=".$success);
								
							}
							else
							{
								header("Location: welcome.php?flag=".$error);
							}
						}
						else
						{
							header("Location: welcome.php?flag=".$error);
							/*echo "<br/>notice_delete_query fucked up!";*/
						}
					}
					else
					{
						header("Location: welcome.php?flag=".$error);
						/*echo "<br/>acitivity_insert_query fucked up!<br/>".$acitivity_insert_result;*/
					}
				}
				else
				{
					$notice_update_query = "INSERT INTO notice_table (noticetag,day,month,year,text) VALUES ('$noticetag','$day','$month','$year','$text')";
					$notice_update_result = mysqli_query($con,$notice_update_query);

					if($notice_update_result)
					{
						header("Location: welcome.php?flag=".$success);						
					}
					else
					{
						header("Location: welcome.php?flag=".$error);
					}
				}

			}

?>