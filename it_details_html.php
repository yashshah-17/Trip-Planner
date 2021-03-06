<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Trip Planner-It_Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/jpeg" href="old-retro-antique-vintage-163194.jpeg">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style_itd.css">
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Validation -->
<!-- <script> 
$("#commentForm").validate();

</script>-->
<!--<script>
function validate_form() {
    var x = document.forms["info"]["tripname"].value;
    if (x == "") {
        alert("Name your trip");
        return false;
    }
    var y = document.forms["informationform"]["purpose"].value;
    if (y == "") {
        alert("Purpose of your trip must be filled out");
        return false;
    }

    

    var a = document.forms["informationform"]["days"].value;
    if (a == "") {
        alert("Days you travelled must be filled");
        return false;
    }
	else if(a.search("[0-9]"))
	{ 
	alert("No Alphabets are allowed");
	return false;
	}
   
   
    
    var d = document.forms["informationform"]["people"].value;
    if (d == "") {
        alert("Number of people on this trip must be filled");
        return false;
    }
	else if(d.search("[0-9]"))
	{ 
	alert("No Alphabets are allowed");
	return false;
	}
   

    var f = document.forms["informationform"]["weather"].value;
    if (f == "") {
        alert("Don't keep weather box empty");
        return false;
    }
	 else if(f.search("[0-9]")!=-1){
        alert("No Digits are allowed in weather");
        return false;
    }



}
</script>-->
    
<!--script validation is left-->    
    
<!-- End Validation -->


</head>
<body>
    
<!--<div class="container">
	<div class="row">
		<h2>Tour and Travel<small><br>Registration Form</small></h2>
	</div>
</div>-->
<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">

<div class="form-body">
 <h3 class="text-center">DAY- <?php $d=$_SESSION['i']; echo"$d"; ?> </h3>
    <!--<ul class="nav nav-tabs final-login">
        <li class="active"><a data-toggle="tab" href="#sectionA">Sign In</a></li>
        <li><a data-toggle="tab" href="#sectionB">Sign Up</a></li>
    </ul>-->
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
        <div class="innter-form">
            <form class="sa-innate-form" method="post" name="info" action="it_details.php" onsubmit="return validate_form()">
          
            
            <label>Source</label><br>
            <input type="text" name="source">
            <label>Destination</label><br>
            <input type="text" name="destination">
            <label>Mode Of Transport</label><br>
            <select class="form-control" style="width:760px" name="mode">
	       <option value></option>
	       <option value="Plane">Plane</option>
	       <option value="Train">Train</option>
	       <option value="Car">Car</option>
	       <option value="Walking">Walking</option>
	       <option value="Others">Others</option>
	       </select>
            <br>
			<label>Comment</label><br>
            <input type="text" name="comment"><br>
			
			<div class="row">
			<div class="col-md-12">
			
	</div>
	</div>
    <label>Ratings (if any)</label><br>
	<fieldset class="rating">
	
    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Lovely"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Too good"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Nice"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Not bad"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Okay"></label>
	</fieldset><br><br>
    <label>Comment on Stay</label><br>
    <input type="text" name="stay">
                
    <br><br><br>            
	<div style="margin-left: 250px"><button type="submit" value="submit" class="btn btn-info">Next</button></div>
			
    </form>
    </div>
            
    <div class="clearfix"></div>
    </div>
       <!-- <div id="sectionB" class="tab-pane fade">
			<div class="innter-form">
            <form class="sa-innate-form" method="post">
            <label>Name your trip</label><br>
            <input type="text" name="nameyourtrip">
            <label>Purpose of your trip</label><br>
            <input type="text" name="purposeofyourtrip">
            <label>Number of nights you travelled</label><br>
            <input type="numeric" name="numberofnightsyoutravelled">
			<label>Number of people in this trip</label><br>
            <input type="numeric" name="numberfpeopleinthistrip"><br>
			<label>Your month and year of travel</label><br>
            <input type="numeric" name="yourmonthandyearoftravel"><br>
			<label>What was weather like?</label><br>
            <input type="text" name="whatwasweatherlike" placeholder="Umbrella is a must"><br>
			
            <button type="submit">Sign Now</button>
            
            </form>
            </div>-->
			
            
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>