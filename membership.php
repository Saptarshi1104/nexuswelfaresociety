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
	    echo '<link rel="stylesheet" href="css/nav.css">';
	    echo '<link rel="stylesheet" href="css/membership_content.css">';
	    echo '<link rel="stylesheet" href="css/image_slider.css">';
	    echo '<link rel="stylesheet" href="css/latest_news.css">';

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
						<li class="list-item list-item-selected">Membership</li>
						<li class="list-item">Admin Panel</li>
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
				<li class="list-item mobile-list-item-selected">Membership</li>
				<li class="list-item mobile-list-item-not-selected">Contact Us</li>
			    </ul>
			</div>
		    </div>
		</div>
        </div>


    <table class="desktop-container">
	<tr>
		<td>
			<div class="slideshow-container">

			    <?php

			    include 'connection.php';

			    $query = "SELECT * FROM `slider_table` ORDER BY `slider_table`.`date` ASC";
			    $result = mysqli_query($con,$query);
			    while($row=mysqli_fetch_array($result))
			    {
				echo '<div class="mySlides fade">';
				echo '<img src="data:image;base64,'.$row[3].' "> ';
				echo '<div class="text">'.$row[1].'</div>';
				echo '<br/><div class="sub-text">'.$row[2].'</div>';
				echo '</div>';
			    }

			    ?>

			</div>
		</td>
		
		<td align="right">
			<div class="notice-container">
				<div class="notice-head">Latest Events</div>
				<div class="notice-board">
				
					<marquee scrollamount="2" direction="up"  onmouseover="this.stop();" onmouseout="this.start();">
						
						<?php
							    include 'connection.php';

							    $query = "SELECT * FROM notice_table ORDER BY year DESC, month DESC, day DESC";
							    $result = mysqli_query($con,$query);

							    while($row=mysqli_fetch_array($result))
							    {
								    echo '<div class="notice">';
								    echo '<div class="notice-tag">'.$row[0].'</div>';
								    echo '<div class="date-text">'.$row[1].'-'.$row[2].'-'.$row[3].'</div>';
								    echo '<div class="notice-text">'.$row[4].'</div>';
								    echo '</div>';
							    }
						?>
						
					</marquee>
				
				</div>

			

			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div class="membership-head">Membership</div>
			<div class="membership-subhead">As Per Memorandum Of Articles Of Association Of Nexus Welfare Society</div>
		</td>
	</tr>
    </table>

    <table class="membership-card-list">
    	<tr>
    		<td>
    			<div class="membership-card">
    				<div class="particular">Life Time Donor Member Fee</div>
    				<div class="circle">&#9473;&#9473;&#9473;&#9473; &#x25C6; &#9473;&#9473;&#9473;&#9473;</div>
    				<div class="amount">&#x20B9;&nbsp;10,000 /-</div>
    			</div>
    		</td>
    		<td>
    			<div class="membership-card">
    				<div class="particular">Life Time Membership Fee</div>
    				<div class="circle">&#9473;&#9473;&#9473;&#9473; &#x25C6; &#9473;&#9473;&#9473;&#9473;</div>
    				<div class="amount">&#x20B9;&nbsp;3,100 /-</div>
    			</div>
    		</td>
    	</tr>
    	<tr>
    		<td>
    			<div class="membership-card">
    				<div class="particular">Monthly Subscription Fee</div>
    				<div class="circle">&#9473;&#9473;&#9473;&#9473; &#x25C6; &#9473;&#9473;&#9473;&#9473;</div>
    				<div class="amount">&#x20B9;&nbsp;50 /-</div>
    			</div>
    		</td>
    		<td>
    			<div class="membership-card">
    				<div class="particular">Admission Fee</div>
    				<div class="circle">&#9473;&#9473;&#9473;&#9473; &#x25C6; &#9473;&#9473;&#9473;&#9473;</div>
    				<div class="amount">&#x20B9;&nbsp;100 /-</div>
    			</div>
    		</td>
    	</tr>
    </table>

 

	<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		    var i;
		    var slides = document.getElementsByClassName("mySlides");
		    var dots = document.getElementsByClassName("dot");
		    for (i = 0; i < slides.length; i++) {
		       slides[i].style.display = "none";  
		    }
		    
		    slideIndex++;
		    
		    if (slideIndex> slides.length) 
		    {
			    slideIndex = 1;
		    }    
		    
		    slides[slideIndex-1].style.display = "block";  
		    setTimeout(showSlides, 3000); // Change image every 2 seconds
		}
	</script>
</body>
</html>