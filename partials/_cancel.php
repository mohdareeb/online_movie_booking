<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

  <?php
  
mysql_connect("localhost","root","");
mysql_select_db("booking");
session_start();
$name=$_SESSION['name'];
$moviename=$_SESSION['mname'];
echo $name;
echo $moviename;
$r=mysql_query("SELECT * FROM users WHERE username='$name' ");
while($row=mysql_fetch_array($r)){
       $ticket=$row['ticket'];
}

mysql_query("UPDATE users SET ticket='0' WHERE username='$name' ");

$t=mysql_query("SELECT * FROM wave WHERE moviename='$moviename' ");

while($row=mysql_fetch_array($t)){
    $availableseats=$row['availableseats'];
    $clicktobookseats=$row['clicktobookseats'];
}

$new_available_seats = $availableseats+$ticket;
$new_book_seats = $clicktobookseats-$ticket;


$cancel=mysql_query("UPDATE wave SET availableseats= '$new_available_seats',clicktobookseats='$new_book_seats' WHERE moviename='$moviename' ");
if($cancel){
    echo'<div class="container">
    <div class="alert alert-danger my-4" role="alert">
  <h4 class="alert-heading">Your Booking are Cancel</h4>
  <p></p>
  <hr>
  <p class="mb-0">Use our service  Next time Please</p>
</div>
<a href="../1.php"><button type="submit" class="btn btn-succes">Click here to go back</button></a>
</div>';
}


?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>



