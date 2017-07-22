<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Resuma | Get Started | CV Maker by Akash</title>
  <meta name="author" content="Akash Kumar Gaur">
  <meta name="description" content="B.Tech Student @ NIT Allahabad">
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
	<section id="front">
	<header id="header">
		<div class="header-inner">
			<div id="logo"><img src="img/logo4.png" width="200px"></div>
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

	<div id="bannerGS">
	<div class="banner-innerGS">
		<div class="cardsGS tada animated">
			<div id="flag"><h3>Get Started</h3></div>
			<div class="maincardGS">
				<img src="img/play.png" width="150px">
				<h4>Creating Resume is so simple now, All you need is to fill the form and Submit your details. After submitting the form you will be redirected to final Resume where you can save/download/print your resume.<br>Using Resuma is very simple and fast. In case of Error after Submit, Just Refresh the page.</h4>

					<a href="form2.php">
						<span2 class="formlink">Go to Form</span2> 
					</a>
			</div>
		</div>
	</div>
	</div>
</section>
</div>

<!-- scripts -->
<script src="particles.js"></script>
<script src="js/app.js"></script>

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