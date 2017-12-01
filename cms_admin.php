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
	    echo '<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">';
	    echo '<link rel="stylesheet" href="css/nav.css">';
	    echo '<link rel="stylesheet" href="css/cms_content.css">';

	    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
	    echo '<script type="text/javascript" src="js/nav.js"></script>';
	 ?>

</head>
<body>

        <div class="nav-container">
		<div class="nav">

		        <div class="nav-logo">
				<div class="nav-logo-name">Nexus Welfare Society</div>
				<div class="nav-logo-text">A Government Registered Organisation</div>
		        </div>

		        <div class="desktop">
				<div class="nav-menu">
				        <ul class="nav-list">
						<li class="list-item">Home</li>
						<li class="list-item">About Us</li>
						<li class="list-item">Mission &amp Vision</li>
						<li class="list-item">Activity</li>
						<li class="list-item">Membership</li>
						<li class="list-item list-item-selected">Admin Panel</li>
				        </ul>
				</div>
		        </div>

		    <div class="mobile">

			<div class="nav-menu-logo">
			    <ul class="nav-list-logo">
				<li class="logo"><i class="fa fa-bars" aria-hidden="true"></i></li>
			    </ul>
			</div>
			<div class="nav-menu">
			    <ul class="nav-list">
				<li class="list-item mobile-list-item-not-selected">Home</li>
				<li class="list-item mobile-list-item-not-selected">About Us</li>
				<li class="list-item mobile-list-item-not-selected">Mission & Vision</li>
				<li class="list-item mobile-list-item-not-selected">Activity</li>
				<li class="list-item mobile-list-item-not-selected">Membership</li>
				<li class="list-item mobile-list-item-selected">Contact Us</li>
			    </ul>
			</div>
		    </div>
		</div>
        </div>


    <table class="desktop-container">
	<tr>
		<td colspan="2">
			<form class="user-form" enctype="multipart/form-data" method="POST">
				<div class="form-head">Admin<span class="form-subhead">Panel</span></div>
				<input type="text" name="user" placeholder="username" required="required">
				<input type="password" name="password" placeholder="password" required="required">
				<input type="submit" name="submit" value="Submit">
			</form>
			<?php


				if(isset($_POST['submit']))
				{
					$con=mysqli_connect("localhost","root","");
											
					if($con)
					{
						$username = $_POST["user"];
						$password = $_POST["password"];
						
						if(mysqli_select_db($con,"nexus"))
						{
							
							$validate = "SELECT firstname,password FROM users WHERE username = '$username'";
						
							$result = mysqli_query($con,$validate);
							
							/*$row = mysqli_fetch_array($result);
							echo "username is ".$username." and password is ".$row[0];*/
						
						
						
							if(mysqli_num_rows($result) == 1)
							{
								$row = mysqli_fetch_array($result);
								
								if($row[1] == $password)
								{
									session_start();
									$_SESSION['username'] = $row[0];  
									$flag = "null";
									header("location: welcome.php?flag=".$flag);
									
								}
								else
								{
									echo '<div class="error">Please Enter The Correct Password';
								}
							}
							else
							{
								echo '<div class="error">Username Does Not Exists';
							}
						}	
					}					
				}
				
			?>
		</td>
	</tr>
    </table>
</body>
</html>