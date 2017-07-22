<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Resuma | Form | CV Maker by Akash</title>
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
  
  <section id="frontform">
  <header id="header">
    <div class="header-inner">
      <div id="logo"><a href="#"><img src="img/logo2.png" width="200px" class="flash animated"><sup>&copy;</sup></a><sub><a href="#">by <span class="hvr-wobble-horizontal">Akash Gaur</span></a></sub></div>
      <nav class="nav-inner wow bounce animated">
        <ul>
          <li><a href="index.html" class="hvr-grow-rotate">Home</a></li>
          <li><a href="getStarted.html" class="hvr-grow-rotate">Get Started</a></li>
          <li><a href="#" class="hvr-grow-rotate">Create</a></li>
          <li><a href="contact.html" class="hvr-grow-rotate">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>


  <section id="formdiv">
    <div class="formdiv-inner">
        <div class="formcard">
          <span3>Fill Your Details</span3>
          <hr class="style1">
          <br>
          <form class="myform" action="finalcv.php" method="post" autocomplete="off">
              <span4>Your Basic Details</span4><br>
              <input class="nam" type="text" placeholder="Name" name="name"   />
              <br>
              <input type="text" placeholder="City" name="city"   />
              <input type="text" placeholder="State" name="state"   />
              <input type="text" placeholder="Mobile" name="mobile"   />
              <input type="text" placeholder="Email" name="email"   />
              <br>
              <span4>Your Career Details</span4><br>
              <input class="objc" type="text" placeholder="Objective" name="obj"   /><br>
              <input type="text" placeholder="Area of Interest 1" name="aoi1"   /><br>
              <input type="text" placeholder="Area of Interest 2" name="aoi2" /><br>
              <input type="text" placeholder="Area of Interest 3" name="aoi3" /><br>
              <span4>Your Skills</span4><br>
              <input type="text" placeholder="Skill-1" name="sk1" />
              <input type="text" placeholder="Skill-2" name="sk2" />
              <input type="text" placeholder="Skill-3" name="sk3" />
              <input type="text" placeholder="Skill-4" name="sk4" />
              <input type="text" placeholder="Skill-5" name="sk5" />
              <input type="text" placeholder="Skill-6" name="sk6" />
              <input type="text" placeholder="Skill-7" name="sk7" />
              <input type="text" placeholder="Skill-8" name="sk8" />
              <input type="text" placeholder="Skill-9" name="sk9" />
              <input type="text" placeholder="Skill-10" name="sk10" />
              <input type="text" placeholder="Skill-11" name="sk11" />
              <input type="text" placeholder="Skill-12" name="sk12" /><br>
              <span4>Your Education Details</span4><br>
              <input class="objc" type="text" placeholder="College Name" name="college"   />
              <br>
              <select name="branch"  >
                <option value="branch" selected>Select Your Branch</option>
                <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Electronics and Communication Engineering" >Electronics and Communication Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Electrical Engineering">Electrical Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Chemical Engineering">Chemical Engineering</option>
                <option value="Biotechnology">Biotechnology</option>
              </select><br>
              <input type="text" placeholder="Year (ex. 2014-2018)" name="year"   />
              <input type="text" placeholder="CPI" name="cpi"/><br><br>
              <hr>
              <br>
              <input class="objc" type="text" placeholder="School Name (Class 12th)" name="school12"   />
              <input type="text" placeholder="Year (ex. 2013)" name="year12"   />
              <input type="text" placeholder="Percentage (ex. 95)" name="perc12"/><br><br>
              <hr>
              <br>
              <input class="objc" type="text" placeholder="School Name (Class 10th)" name="school10"   />
              <input type="text" placeholder="Year (ex. 2011)" name="year10"   />
              <input type="text" placeholder="Percentage (ex. 90)" name="perc10"/><br><br>
              <hr>
              <br>
              <span4>Internships / Trainings</span4><br>
              <input type="text" placeholder="Input 1" name="it1" /><br>
              <input type="text" placeholder="About/City" name="it1ab"/><br>
              <br>
              <input type="text" placeholder="Input 2" name="it2" /><br>
              <input type="text" placeholder="About/City" name="it2ab"/><br>
              <br>
              <span4>Hobbies</span4><br>
              <input type="text" placeholder="Input 1" name="hb1" />
              <input type="text" placeholder="Input 2" name="hb2" />
              <input type="text" placeholder="Input 3" name="hb3" />
              <input type="text" placeholder="Input 4" name="hb4" />
              <input type="text" placeholder="Input 5" name="hb5" />
              <br>
              <span4>Projects</span4><br>
              <input type="text" placeholder="Input 1" name="pr1" />
              <input type="text" placeholder="Input 2" name="pr2" /><br>
              <input type="text" placeholder="Input 3" name="pr3" />
              <input type="text" placeholder="Input 4" name="pr4" />
              <br>
              <br>
              <br>
              <input class="sb-btn" type="submit" value="Submit" name="register"/>
            </form>
        </div>
    </div>
  </section>

</section>

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