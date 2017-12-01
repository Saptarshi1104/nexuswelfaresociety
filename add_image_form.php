<?php
			if(isset($_POST['image']))
			{
				include 'connection.php';

				/*if(getimagesize($_FILES['image']['tmp_name']) != FALSE)
				{*/
					$size = $_FILES['image']['size'];
					$image=addslashes($_FILES['image']['tmp_name']);
					$name=addslashes($_FILES['image']['name']);
					$ext = end((explode(".", $name)));
					$caption=$_POST["caption"];
					$subcaption=$_POST["subcaption"];
					$image=file_get_contents($image);
					$image=base64_encode($image);
					echo $ext;
					$success = 'image_add';
					$error = 'image_add_null';

					if(($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png')&&$size<501)
					{
						saveimage($name,$image,$caption,$subcaption,$con);
					}
					else
					{
						header("Location: welcome.php?flag=".$error);
					}

				//}
			}
			function saveimage($name,$image,$caption,$subcaption,$con)
			{

				$query = "SELECT * FROM slider_table";
				$result = mysqli_query($con,$query);
				$row = mysqli_num_rows($result);
				if($row == 6)
				{
					mysqli_query($con,'DELETE FROM slider_table LIMIT 1');
				}

				$query1 = "INSERT INTO slider_table (name,caption,subcaption,image) VALUES ('$name','$caption','$subcaption','$image')";
				$result = mysqli_query($con,$query1);

				if($result)
				{
					header("Location: welcome.php?flag=".$success);
				}
				else
				{
					header("Location: welcome.php?flag=".$error);

				}

			}
?>