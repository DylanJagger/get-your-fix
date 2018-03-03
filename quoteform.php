<?php
  include_once("header.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.min.css"></link>
    <!--<style>
      body{background-color: #808080;}
    </style>-->
  </head>

  <body>

    <!-- Device info Form ////////////////////////////////////////////////////////////// -->
    <div class="container">
      <h1>Device Information</h1>
      <h6>Here you should provide as much information about your device as possible. The more details you provide the quicker the process.</h6>
    </div>

    <div class="container">
      <form method="post" action="contact.php">

        <!--  Manufacturer -->
        <fieldset class="form-group">
          <label for="manufacturer">Manufacturer of Device</label>
          <input class="form-control" name="manufacturer" id="manufacturer" placeholder="Apple, Microsoft, Samsung, LG, htc, etc.">
        </fieldset>

        <!--  Model -->
        <fieldset class="form-group">
          <label for="model">Model</label>
          <input class="form-control" name="model" id="manufacturer" placeholder="6 plus, Galaxy s5, G3, etc.">
        </fieldset>

        <!--  Client description of problem     -->
        <fieldset class="form-group">
          <label for="description">Description of Problem</label>
          <textarea class="form-control" name="description" id="description" placeholder="Please be as descriptive as possible" rows="4"></textarea>
        </fieldset>

        <!-- Contact Info Form- ////////////////////////////////////////////////////////-->
        <div>
          <h1>Contact Information</h1>
          <small class="muted"> This information will never be shared with others</small>
          <div></div>
        </div>

        <!--  Client Email     -->
        <fieldset class="form-group">
          <label for="clientEmail">Your Email Address</label>
          <input type="email" class="form-control" name="clientEmail" id="clientEmail" placeholder="Enter Email">
          </fieldset>
        
        <!-- Client Name -->
        <fieldset class="form-group">
          <label for="clientName">Your Name</label>
          <input type="name" class="form-control" name="clientName" id="clientName" placeholder="Your Name">
        </fieldset>

        <!-- Client Phone -->
        <fieldset class="form-group">
          <label for="clientNum">Phone Number</label>
          <input class="form-control" name="clientNum" id="clientNum" placeholder="Your Number">
        </fieldset>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>  
   <?php
  include("footer.php");
?>
</html>
