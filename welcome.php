<?php

	session_start();
	if(!isset($_SESSION['username']) || empty($_SESSION['username']))
	{
		header("location: cms_admin.php");
		exit;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<?php

	echo '<meta charset="UTF-8">';
	echo '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';


	echo '<title>Nexus Welfare Society</title>';

	/*7338764950*/

	echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
	echo '<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">';
	echo '<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Montserrat+Alternates:100,200,300,400,500,600,700,800,900|Montserrat:100,200,300,400,500,600,700,800,900|Raleway:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">';
	echo '<link rel="stylesheet" href="css/welcome.css">';
	echo '<link rel="stylesheet" href="css/notice_admin.css">';
	echo '<link rel="stylesheet" href="css/image_admin.css">';
	echo '<link rel="stylesheet" href="css/member_admin.css">';
	echo '<link rel="stylesheet" href="css/admin_admin.css">';

	echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
	echo '<script type="text/javascript" src="js/welcome.js"></script>';
	echo '<script type="text/javascript" src="js/notice_admin.js"></script>';
	?>

</head>

<body>

	<div class="top-nav">

		<div class="logout inline"><a href="logout.php">Sign Out &nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i></a></div><div class="user inline"><?php echo $_SESSION['username']; ?></div><div class="welcome inline">Welcome &nbsp;</div>

	</div>

	<div class="top-nav-border"></div>

	<div class="side-nav">

		<div class="name1">NEXUS WELFARE</div>
		<div class="name2">SOCIETY</div>
		<div class="admin-panel"><span class="subname">ADMIN</span><span class="subname">PANEL</span></div>


		<div class="notice block list select"><i class="fa fa-clipboard" aria-hidden="true"></i> Notice Board</div>
		<div class="image block list"><i class="fa fa-sliders" aria-hidden="true"></i> Image Slider</div>
		<br/>
		<div class="member block list"><i class="fa fa-plus" aria-hidden="true"></i> Add Members</div>
		<div class="member block list"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete Members</div>
		<br/>
		<div class="add block list"><i class="fa fa-plus" aria-hidden="true"></i> Add Admin</div>
		<div class="delete block list"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete Admin</div>
	</div>

	<div class="edit">

		<div class="notice-admin-container">


			<div class="legend">Update Notice Board</div>
			<form method="POST" action="add_notice_form.php" enctype="multipart/form-data">
				<br/>

				<input type="text" class="noticetag" name="noticetag" required="required" maxlength="40" placeholder="Notice Heading" />
				<div class="left-char"><span id="charnt">40</span> characters remaining.</div>
				<br/>
				<select type="text" name="day" required="required" placeholder="day">
					<option value="" hidden>day</option>
					<option value="1">01</option>
					<option value="2">02</option>
					<option value="3">03</option>
					<option value="4">04</option>
					<option value="5">05</option>
					<option value="6">06</option>
					<option value="7">07</option>
					<option value="8">08</option>
					<option value="9">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select> -
				<select type="text" name="month" required="required" placeholder="day">
					<option value="" hidden>month</option>
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>  - <input type="text" name="year" required="required" placeholder="year">
				<br/>
				<br/>
				<br/>
				<textarea type="text" name="text" required="required" maxlength="300" spellcheck="TRUE" placeholder="Notice Body Goes Here"></textarea>
				<div class="left-char"><span id="char">300</span> characters remaining.</div>
				<br/>
				<br/>
				<input type="submit" name="notice" value="Upload"/>
			</form>

			<?php
			
				$flag = $_REQUEST['flag'];

				if($flag == 'notice_add')
				{
					echo '<div class="message success"><span class="message-header">Success</span><br/>New Notice Has Been Added Successfully Into Notice Board<div class="close">Click On This To Dismiss</div></div>';
					echo '<script>
							$(document).ready(function()
							{
								$(".notice-admin-container,.image-admin-container,.add-member-admin-container,delete-member-admin-container,.add-admin-container,.delete-admin-container").hide();
								$(".list:eq(0)").trigger("click");
							})
    					  </script>';
				}
				else if($flag == 'notice_add_null')
				{
					echo '<div class="message error"><span class="message-header">Error</span><br/>Notice Heading Already Exists. Please Try Again With Other Heading<div class="close">Click On This To Dismiss</div></div>';
					echo '<script>
						$(document).ready(function()
						{
							$(".notice-admin-container,.image-admin-container,.add-member-admin-container,delete-member-admin-container,.add-admin-container,.delete-admin-container").hide();

							$(".list:eq(0)").trigger("click");
						})
						</script>';
				}

			?>
		</div>


		<div class="image-admin-container">

			<div class="legend">Upload New Image</div>
			<form method="POST" action="add_image_form.php" enctype="multipart/form-data">
				<br/>
				<input type="file" name="image" id="slider-image" required="required"/>
				<div class="file-formats">Please Upload A .JPG or .PNG or .JPEG File <strong>(Max Size:  500KB)</strong></div>
				<input type="text" name="caption" required="required" placeholder="Image Caption"/>
				<br/>
				<br/>
				<input type="text" name="subcaption" required="required" placeholder="Image Sub-caption"/>
				<br/>
				<br/>
				<input type="submit" id="submit-image" name="image" value="Upload"/>
			</form>


			<?php

				$flag = $_REQUEST['flag'];

				if($flag == "image_add")
				{
					echo '<div class="message success"><span class="message-header">Success</span><br/>New Image Has Been Added To The Image Slider<div class="close">Click On This To Dismiss</div></div>';
					echo '<script>
						$(document).ready(function()
						{
							$(".notice-admin-container,.image-admin-container,.add-member-admin-container,delete-member-admin-container,.add-admin-container,.delete-admin-container").hide();

							$(".list:eq(1)").trigger("click");
						})
						</script>';
				}
				else if ($flag == 'image_add_null')
				{
					echo '<div class="message error"><span class="message-header">Error</span><br/>Unspecified File Format. (Select These Formats.JPEG, .JPG, .PNG) Or File Size Is Greater Than 500KB<br/><div class="close">Click On This To Dismiss</div></div>';
					echo '<script>
						$(document).ready(function()
						{
							$(".notice-admin-container,.image-admin-container,.add-member-admin-container,delete-member-admin-container,.add-admin-container,.delete-admin-container").hide();

							$(".list:eq(1)").trigger("click");
						})
						</script>';
				}

			?>
		</div>


		<div class="add-member-admin-container">

			
			<div class="legend">Add Committee Member</div>
			<form method="POST" action="add_member_form.php" enctype="multipart/form-data">
			<br/>
				<input type="text" name="name" required="required" placeholder="Name" />
				<br/>
				<br/>
				<input type="text" name="designation" placeholder="Designation" />
				<br/>
				<br/>
				<select name="committee" required="required">
					<option>Governing Body</option>
					<option>Advisory Committee</option>
				</select>
				<br><br>
				<input type="submit" name="add_member" value="Upload"/>
			</form>

			<?php

					$flag = $_REQUEST['flag'];

					if($flag == "member_add")
					{
						echo '<div class="message success"><span class="message-header">Success</span><br/>New Member Has Been Added Successfully <div class="close">Click On This To Dismiss</div></div>';
						echo '<script>
									$(document).ready(function()
									{
										$(".notice-admin-container,.image-admin-container,.add-member-admin-container,delete-member-admin-container,.add-admin-container,.delete-admin-container").hide();
										$(".list:eq(2)").trigger("click");
									})
							  </script>';
					}
					else if($flag == "member_add_null")
					{
						echo '<div class="message error"><span class="message-header">Error</span><br/>New Member Can Not Be Added <div class="close">Click On This To Dismiss</div><</div>';
						echo '<script>
								$(document).ready(function()
								{
									$(".notice-admin-container,.image-admin-container,.add-member-admin-container,delete-member-admin-container,.add-admin-container,.delete-admin-container").hide();

									$(".list:eq(2)").trigger("click");
								})
							  </script>';
					}
				?>

		</div>	


		<div class="delete-member-admin-container">

			<?php

				include 'connection.php';
				$select_query = "SELECT name,designation FROM governing_body WHERE committee = 'Governing Body' ORDER BY rank ASC";
				$result = mysqli_query($con,$select_query);

				$select_query = "SELECT name,designation FROM governing_body WHERE committee = 'Advisory Committee'";
				$result1 = mysqli_query($con,$select_query);

				echo '<div class="legend">Remove Committee Member</div>';

				echo '<form method="POST" action="delete_member_form.php" enctype="multipart/form-data">';

				echo '<br/>';
				echo '<br/>';

				echo '<select name="delete_candidate">';
				echo '<optgroup label="Governing Body">';
				while($row=mysqli_fetch_array($result))
				{
					echo '<option class="gb" value="'.$row[0].'"/>&nbsp;'.$row[0].'</option>';
				}
				echo '<optgroup label="Advisory Committee">';
				while($row=mysqli_fetch_array($result1))
				{
					echo '<option class="gb" value="'.$row[0].'"/>&nbsp;'.$row[0].'</option>';
				}
				echo '</select>';
				echo '<br/>';
				echo '<br/>';
				echo '<input type="submit" name="delete_member" value="Delete"/>';
				echo '<br/>';
				echo '<br/>';
				echo '</form>';

				$flag = $_REQUEST['flag'];

				if($flag == "member_delete")
				{

					echo '<div class="message success"><span class="message-header">Success</span><br/>Member Has Been Deleted Successfully<div class="close">Click On This To Dismiss</div> </div>';
					echo '<script>
					$(document).ready(function()
					{
						$(".notice-admin-container,.image-admin-container,.add-member-admin-container,delete-member-admin-container,.add-admin-container,.delete-admin-container").hide();
						$(".list:eq(4)").trigger("click");
					})
					</script>';

				}
				else if($flag == "member_delete_null")
				{
					echo '<div class="message error"><span class="message-header">Error</span><br/>Member Can Not Be Removed<div class="close">Click On This To Dismiss</div> </div>';
					echo '<script>
					$(document).ready(function()
					{
						$(".notice-admin-container,.image-admin-container,.add-member-admin-container,delete-member-admin-container,.add-admin-container,.delete-admin-container").hide();
						$(".list:eq(4)").trigger("click");
					})
					</script>';
				}
			
			?>

		</div>


		<div class="add-admin-container">

			<div class="legend">Add An Administrator</div>
			<form method="POST" action="add_admin_form.php" enctype="multipart/form-data">
				<br/>
				<input type="text" class="name same" name="firstname" required="required" maxlength="40" placeholder="First Name" />
				<br/>
				<br/>
				<input type="text" class="name same" name="lastname" required="required" maxlength="40" placeholder="Last Name" />
				<br/>
				<br/>
				<input type="text" class="username same" name="username" required="required" maxlength="40" placeholder="Username" />
				<br/>
				<br/>
				<input type="password" class="password same" name="password" required="required" maxlength="40" placeholder="Password" />
				<br/>
				<br/>
				<input type="password" class="cpassword same" name="cpassword" required="required" maxlength="40" placeholder="Confirm Password" />
				<br/>
				<br/>
				<input type="submit" name="addadmin" value="Upload"/>
			</form>

			<?php

				$flag = $_REQUEST['flag'];

				if($flag == "admin_add_null")
				{
					echo '<div class="message error"><span class="message-header">Error</span><br/>Username Already Exists.  Please Try Another Username<div class="close">Click On This To Dismiss</div></div>';
					echo '<script>
					$(document).ready(function()
					{
						$(".notice-admin-container,.image-admin-container,.add-member-admin-container,delete-member-admin-container,.add-admin-container,.delete-admin-container").hide();
						$(".list:eq(4)").trigger("click");
					})
					</script>';
				}
				else if($flag == "admin_add")
				{
					echo '<div class="message success"><span class="message-header">Success</span><br/>New Administrator Has Been Added Successfully Into Administrator List<div class="close">Click On This To Dismiss</div> </div>';
					echo '<script>
					$(document).ready(function()
					{
						$(".notice-admin-container,.image-admin-container,.add-member-admin-container,delete-member-admin-container,.add-admin-container,.delete-admin-container").hide();
						$(".list:eq(4)").trigger("click");
					})
					</script>';
				}
				
			?>

		</div>


		<div class="delete-admin-container">

			<?php
			
			include 'connection.php';
			$select_query = "SELECT firstname,lastname,username FROM users" ;
			$result = mysqli_query($con,$select_query);
			$rows = mysqli_num_rows($result);
			echo '<div class="legend">Remove Administrator</div>';
			echo '<form action="delete_admin_form.php" method="POST" enctype="multipart/form-data">';
			echo '<br/>';
			echo '<br/>';
			echo '<select name="delete_candidate">';
			echo '<option value="" hidden>Select Admin</option>';
			while($row=mysqli_fetch_array($result))
			{
				echo '<option value="'.$row[2].'"/>&nbsp;'.$row[0].'&nbsp;'.$row[1].'</option>';
			}
			echo '</select>';
			echo '<br/>';
			echo '<br/>';
			echo '<input type="submit" id="delete_admin" name="delete_admin" value="Delete"/>';
			echo '<br/>';
			echo '<br/>';
			echo '</form>';

			$flag = $_REQUEST['flag'];

			if($flag == 'admin_delete')
			{
				echo '<div class="message success"><span class="message-header">Success</span><br/>User Has Been Removed Successfully <div class="close">Click On This To Dismiss</div></div>';
				echo '<script>
					$(document).ready(function()
					{
						$(".notice-admin-container,.image-admin-container,.add-member-admin-container,delete-member-admin-container,.add-admin-container,.delete-admin-container").hide();
						$(".list:eq(5)").trigger("click");
					})
					</script>';
			}
			else if($flag == 'admin_delete_null')
			{
				echo '<div class="message error"><span class="message-header">Warning</span><br/> Only One User Left<br/>It Can Not Be Removed <div class="close">Click On This To Dismiss</div></div>';
				echo '<script>
					$(document).ready(function()
					{
						$(".notice-admin-container,.image-admin-container,.add-member-admin-container,delete-member-admin-container,.add-admin-container,.delete-admin-container").hide();
						$(".list:eq(5)").trigger("click");
					})
					</script>';
			}

			?>
		</div>
	</div>

</body>
</html>
