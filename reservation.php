<!DOCTYPE html>

<html>
<html lang="en">
<title>Chimac victoria</title>

<meta charset="UTF-8">


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel ="stylesheet" href="style.css">




<!-- Navbar (sit on top) -->
<div class= "wrapper">
<div class="reservation">
<div class="about">Reservation
</div>

  
<?php
include("header.php");
?>
</div>



<!-- reservation -->

<br>

<?php 
include('reservationP.php');
?>
<form id="reservation" action = "<?= $_SERVER['PHP_SELF']; ?>" method="post">
  <div class = "form-group">
    <h2 align ="center" class = "heading"> Reservation Contact </h2>
    <hr>
    <p style="font-size:130%" align ="center" class = "heading"> Online Reservation must be made 24 hours prior to arrival.   </p>

    <br>
    <fieldset>
    <div class = "container3">
     <label for="name"> Name </label> 
     <input type ="text" name="Name" id="Name" class="mytext"  placeholder="Your name" value= "<?= $Name ?>">
     <br>
     <label for="name"> Phone number </label> 
     <input type ="number" name="Phonenumber" value= "<?= $Phonenumber ?>" id="Phonenumber" class="mytext" placeholder="Your phone number">
     <br>
      <label for="name"> Email </label> 
     <input type ="email" name="Email" id="Email" value= "<?= $Email ?>" class="mytext" placeholder="Your Email">
      <label for="name"> Date </label> 
     <input type ="date" name="Date" id="Date" value= "<?= $Date ?>" class="mytext" placeholder="Date">
     <br>
     <label for="name"> Time </label> 
     <input type ="time" name="Time" id="Time" value= "<?= $Time ?>" class="mytext" placeholder="Time">
     <label for="name"> Party Size</label> 
     <select class="floatLabel" name = "Party size" id ="party">
          <option value="blank"></option>
          <option value="1">1</option>
          <option value="2" selected>2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
     <br>




     <br>
    
     <input type="submit" value="Submit">


     </fieldset>



   </div>
 </div>


</form>
