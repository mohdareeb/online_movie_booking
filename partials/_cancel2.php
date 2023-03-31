<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Cancel Page</title>
  </head>
  <style>
  .form-control{
      width:27%;
      height: calc(0.5em + .75rem + 2px);
  }
  </style>
<?php

mysql_connect("localhost","root","");
mysql_select_db("booking");
session_start();
$name=$_SESSION['name'];
$moviename=$_SESSION['mname'];


?>
  

  <body>
  <?php
  include '_new_nav.php';
  ?>
    
     <div class="container">
     <center>
     <form action="_handle_cancel.php" method="post">
  <div class="form-group my-4">
    <label for="exampleInputEmail1">Enter number of seats you want to Cancel</label>
    <input type="number" class="form-control" id="seats" name="seats" aria-describedby="emailHelp">    
  </div>
  <button type="submit" class="btn btn-danger">Click here to Cancel</button>
</form>
     </center>
     </div>
      




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>