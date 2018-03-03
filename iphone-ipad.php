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
        <label>Manufacturer: Apple</label>

        <!--  Model        -->
        <fieldset class="form-group">
          <label for="model">Model</label>
          <select class="form-control" id="model" name="model">
              <option vlaue="Select...">Select...</option>
              <option value="iPhone">iPhone</option>
              <option value="iPad">iPad</option>
              <option value="iMac">iMac</option>
              <option value="MacBook">MacBook</option>
          </select>
        </fieldset>

      <div id="iPhone-Model">
        <fieldset class="form-group">
          <label for="modelNum">Model Number</label>
          <input class="form-control" name=modelNum" id="modelNum" placeholder="Model Number">
        </fieldset>
      </div>

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

<script>
  var elem = document.getElementById("model");
  elem.onchange = function(){
    var hiddenDiv = document.getElementById("iPhone-Model");
    hiddenDiv.style.display = (this.value == "Select...") ? "none":"block";
};
</script>

  </body>  
</html>