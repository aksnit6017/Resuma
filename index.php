<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Resuma | Home | CV Maker by Akash</title>
  <meta name="author" content="Akash Kumar Gaur">
  <meta name="description" content="B.Tech Student from NIT Allahabad">
  <meta name="tags" content="cv, resume, generate, online, vitae">
  <link rel="stylesheet" media="screen" href="css/style1.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style3.css">
  <link rel="stylesheet" type="text/css" href="css/style4.css" />
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/hover.css" rel="stylesheet" media="all">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300" />
  <script src="js/jquery-3.2.1.min.js"></script>

  <script src="js/wow.min.js"></script>

  <script>
       new WOW.init();  
    </script>

</head>
<body>

<!-- particles.js container -->
<div id="particles-js">

	<script src="js/wow.min.js"></script>
	<section id="front">
	<header id="header">
		<div class="header-inner">
			<div id="logo"><a href="#"><img src="img/logo5.png" width="200px" class="flash animated"><sup>&copy;</sup></a><sub><a href="#">by <span class="hvr-wobble-horizontal">Akash Gaur</span></a></sub></div>
			<nav class="nav-inner wow bounce animated">
				<ul>
					<li><a href="index.php" class="hvr-grow-rotate">Home</a></li>
					<li><a href="getStarted.php" class="hvr-grow-rotate">Get Started</a></li>
					<li><a href="form2.php" class="hvr-grow-rotate">Create</a></li>
					<li><a href="contact.php" class="hvr-grow-rotate">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
</section>

<div id="wrapper">
    <div class="water-drop"></div>
    <div class="button button-floating"></div>
    <div class="button-floating-shadow"></div>
    <div class="button button-sub" data-color="purple"></div>
    <div class="button button-sub" data-color="green"></div>
    <div class="button button-sub" data-color="pink"></div>
</div>

<div id="banner">
	<div class="banner-inner">
		<div class="cards">
			<div class="topCircle purp rollIn animated"><h3>Play</h3></div>
			<div class="maincard tada animated">
				<img src="img/play.png" width="150px">
				<hr>
				<h4>Play with the forms and create your Resume by filling the details.</h4>
				<hr>
			</div>
		</div>
		<div class="cards two">
			<div class="topCircle grn rollIn animated"><h3>Pause</h3></div>
			<div class="maincard tada animated">
				<img src="img/pause.png" width="180px">
				<hr>
				<h4>Pause for a moment to get the Resume created and get access to the link.</h4>
				<hr>
			</div>
		</div>
		<div class="cards three">
			<div class="topCircle pnk rollIn animated"><h3>Resume</h3></div>
			<div class="maincard tada animated">
				<img src="img/resume.png" width="140px">
				<hr>
				<h4>Download the generated Resume in PDF format in just a click.</h4>
				<hr>
			</div>
		</div>
	</div>
</div>

</div>





<script src="particles.js"></script>
<script src="js/app.js"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".button-floating").click(function() {
                    var $wrapper = $("#wrapper");

                    if (!$wrapper.hasClass("button-floating-clicked"))
                    {
                        $wrapper.attr("class", "center");
                        $wrapper.toggleClass("button-floating-clicked-out");
                    }

                    $wrapper.toggleClass("button-floating-clicked");

                    $(".button-sub").click(function() {
                        var color = $(this).data("color");

                        $wrapper.attr("class", "center button-floating-clicked button-floating-clicked-out");
                        $wrapper.addClass("button-sub-" + color + "-clicked");
                    });
                });
            });
        </script>


        <script type="text/javascript">
$(document).ready(function () {
    //Disable full page
    $("body").on("contextmenu",function(e){
        alert('Right Click Disabled by Akash :-p !')
        return false;
    });
    
    //Disable part of page
    $("#id").on("contextmenu",function(e){
        return false;
    });
});
</script>

</body>
</html>