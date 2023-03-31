<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Cancel page</title>
</head>

<body>
    <?php
    mysql_connect("localhost","root","");
    mysql_select_db("booking");
  session_start();
  $method=$_SERVER['REQUEST_METHOD'];
  $cancel_seats=$_POST['seats'];
  $username=$_SESSION['name'];
  $moviename=$_SESSION['mname'];

  

  mysql_connect("localhost","root","");
  mysql_select_db("booking");

  
if(isset($_SESSION['name']) && $method=='POST'){
    $query="SELECT * FROM users WHERE username='$username' ";
    $r=mysql_query($query);
   
   
    while($row=mysql_fetch_assoc($r)){
             $ticket=$row['ticket'];
    }
    $new_ticket=$ticket-$cancel_seats;
    mysql_query("UPDATE users SET ticket ='$new_ticket' WHERE username='$username' ");


    
$r=mysql_query("SELECT * FROM wave WHERE moviename='$moviename'");
while($row=mysql_fetch_assoc($r)){
         $available=$row['availableseats'];
         $clic=$row['clicktobookseats'];   
}



$new_availbale_seats=$available+$cancel_seats;
$new_click_to_book_seats=$clic-$cancel_seats;



   
    $cancel=mysql_query("UPDATE wave SET availableseats='$new_availbale_seats',clicktobookseats='$new_click_to_book_seats' WHERE moviename='$moviename' ");
    $cancel2="true";
    header("location:../1.php?cancel=$cancel2&name=$username");
   

} 



  
  ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>