<!DOCTYPE html>
<html lang="en">
<head>

	<?php
	
	    echo '<meta charset="UTF-8">';
	    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">';
	    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';


	    echo '<title>Nexus Welfare Society</title>';


	    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
	    echo '<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Montserrat+Alternates:100,200,300,400,500,600,700,800,900|Montserrat:100,200,300,400,500,600,700,800,900|Raleway:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">';
	    echo '<link rel="stylesheet" href="css/nav.css">';
	    echo '<link rel="stylesheet" href="css/about_content.css">';
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
                        <li class="list-item list-item-selected">About Us</li>
                        <li class="list-item">Mission & Vision</li>
                        <li class="list-item">Activity</li>
                        <li class="list-item">Membership</li>
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
                        <li class="list-item mobile-list-item-selected">Home</li>
                        <li class="list-item mobile-list-item-not-selected">About Us</li>
                        <li class="list-item mobile-list-item-not-selected">Mission & Vision</li>
                        <li class="list-item mobile-list-item-not-selected">Activity</li>
                        <li class="list-item mobile-list-item-not-selected">Membership</li>
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
				echo '<div class=photo-content>';
				echo '<div class="text">'.$row[1].'</div>';
				echo '<br/><div class="sub-text">'.$row[2].'</div>';
				echo '</div>';
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
								    echo '<div class="date-text">'.$row[2].'-'.$row[1].'-'.$row[3].'</div>';
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
			<div class="about-head">About Us</div>
			<div class="about-text">Firstly say, “Nexus” means ‘bonding’. We does not Know that how long we have maintain this relations with in one and four months. In last year our member’s was 38, and now becomes 95 & rest 14 membership is under process. Among them, one life donor member is Sri Ranjit Kumar Pul & becomes 11 life member’s. Those member’s are our inspiration & success in our journey. <br/><br/>In last year , we have discuss that how we have establish this organization. Why we have found this organization & what are the future prospects of it. It is totally a non-political organization. We are here to help poor people’s. We are not considering religion & cast. We are strongly bound to help them as per our capacity. Before I have told all of you that we have to arrange few times from our daily work schedule. For all of your co-operation we got success to maintain this organization. Hope that, in future we got all of your support to grow with “Nexus Society”. In last meeting, we have shared that if any of our member’s drop his/her tears then we will share one drop of his/her tears.</div>
		</td>
	</tr>
    </table>
    
    
    <table class="committee">
	<tr>
		<td>
			<div  class="committee-head">Governing Body</div>
		</td>
	</tr>
	
	<?php
		
		$con = mysqli_connect('localhost','root','');
		mysqli_select_db($con,'nexus');
		$query = 'SELECT * FROM governing_body WHERE committee = "Governing Body" ORDER BY rank ASC';
		$result = mysqli_query($con,$query);
		while($row = mysqli_fetch_array($result))
		{
			echo '<tr>';
			echo '<td>';
			echo '<ul>';
			echo '<li class="name">'.$row[0].'</li>';
			echo '<li class="designation">'.$row[1].'</li>';
			echo '<li class="divider">◈◈◈</li>';
			echo '</ul>';
			echo '</td>';
			echo '</tr>';
		}
	?>
	
	<tr>
		<td>
			<div  class="committee-head">Advisory Committee</div>
		</td>
	</tr>
	
	<?php
		
		$con = mysqli_connect('localhost','root','');
		mysqli_select_db($con,'nexus');
		$query = 'SELECT * FROM governing_body WHERE committee = "Advisory Committee" ORDER BY name ASC';
		$result = mysqli_query($con,$query);
		while($row = mysqli_fetch_array($result))
		{
			echo '<tr>';
			echo '<td>';
			echo '<ul>';
			echo '<li class="name">'.$row[0].'</li>';
			echo '<li class="divider">◈◈◈</li>';
			echo '</ul>';
			echo '</td>';
			echo '</tr>';
		}
	?>
	
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