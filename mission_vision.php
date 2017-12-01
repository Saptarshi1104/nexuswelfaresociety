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
	    echo '<link rel="stylesheet" href="css/mission_vision_content.css">';
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
                        <li class="list-item list-item-selected">Mission & Vision</li>
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
			<div class="mv-head">Mission & Vision</div>
			<div class="mv-text">
				<ul>
					<li>To generate awareness and protection for distressed women and child suffering from various reasons.</li>
					<li>◈◈◈</li>
					<li>To help the aged, sick, helpless and indigent persons and to manage & run old age homes.</li>
					<li>◈◈◈</li>
					<li>To help the needy students of all communities for studies.</li>
					<li>◈◈◈</li>
					<li>To acquire establish,start,aidrun,maintain or manage educational institutes,libraries for the benefit of the public and students.</li>
					<li>◈◈◈</li>
					<li>To arrange and organize lectures,debates discussions,seminars and excursions for the diffusion of knowledge and to do all type of philanthropic activities.</li>
					<li>◈◈◈</li>
					<li>To study,cultivate and demonstrate the art of music,cultural activities, sports, moral and spiritual activities.</li>
					<li>◈◈◈</li>
					<li>To help the orphans, handicapped children for homage, construction of homes for the purpose of education, and to establish in the social status.</li>
					<li>◈◈◈</li>
					<li>To make agricultural firm programme with awareness training and workshop for the cultivators.</li>
					<li>◈◈◈</li>
					<li>To make child guidance centre and arrange child labour protection, awareness programme and basic health care and nutrition with medical checkup.</li>
					<li>◈◈◈</li>
					<li>To make awareness programme camp for AIDS, STD, TB & thalassemia.</li>
					<li>◈◈◈</li>
					<li>To arrange training for rural unemployed women/ youth for their self-employment programme.</li>
					<li>◈◈◈</li>
					<li>To arrange andparticipate in the relief and rehabilitation actvities to the sufferings in times of famine, flood, drought, earthquake and other natural calamities.</li>
					<li>◈◈◈</li>
					<li>To do all types of nature & environments project.</li>
					<li>◈◈◈</li>
					<li>To organize the blood donation camp & arrange the blood for poor class people and to arrange medical treatment to the deaf and dumb and handicapped persons by rendering qualified doctors, medicines and other allied articles free of cost.</li>
					<li>◈◈◈</li>
					<li>To appear and render providing legal aids /services for the needy people.</li>
					<li>◈◈◈</li>
					<li>The functions and objections of the society shall be always remain restricted within the meaning of the section 4(2) of the .wbsr act.</li>
					<li>◈◈◈</li>
					<li>To make film, animation film and other entertainment activities for social and environmental development.</li>
					<li>◈◈◈</li>
					<li>To start and provide the training on reiki, yoga, meitation, pranayam, and others spirituality development programme.</li>
					<li>◈◈◈</li>
					<li>To publish and booklet, leaflet, poster, books, magazies and other's publication about social service, moral and spirituality development without profit motive.</li>
					<li>◈◈◈</li>
					<li>To organize and arrange and maintaining, provide the tourism development for the tourist.</li>
					<li>◈◈◈</li>
					<li>To organize verious action programmes and to undertake projects aimed for generating income for economically weaker section of community specially women, old-age poors, community centres.</li>
					<li>◈◈◈</li>
					<li>To promote tourism, cultural exchanges, study-toues educational visits local, regionl and national level.</li>
					<li>◈◈◈</li>
					<li>To organize work-camps, study camps, seminars, work-shops, conferences on eco-socio-spiritual matters and subjects, various training courses, exhibitions, film shows, audio visual programmes and to arrange and organize on computer both in theoretical and practical classes among the needy students of the society without profit motive.</li>
					<li>◈◈◈</li>
					<li>To help the needy people in marriage, funeral and cremation of the dead persons.</li>
					<li>◈◈◈</li>
					<li>To income and properties of the society whatsoever derived or obtained shall be applied solely towards and promotion of the object of the society and on portion thereof shall be paid to or amongst of its members by way of profits.</li>
					
				</ul>
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