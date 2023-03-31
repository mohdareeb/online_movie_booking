<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <?php
    include '_new_nav.php';
    
    session_start();
    $username=$_GET['name'];
    $moviename=$_GET['id'];
    $number=$_POST['number'];
    $_SESSION['mname']=$moviename;
    mysql_connect("localhost","root","");
    mysql_select_db("booking");   
    if($number<=100){ 
    $query="SELECT * FROM wave  WHERE moviename='$moviename' ";
    $result=mysql_query($query);
    
    while($row=mysql_fetch_array($result)){
     $seats=$row['availableseats'];
     $ticketbooked=$row['clicktobookseats'];
     $movie=$row['moviename'];
   }
   
    if($seats==0){
        echo "housefull";
    }
   
    
   else if($seats>0){
        $new_available_seats=$seats-$number;
        $total_booked=$number+$ticketbooked;
        

       $run=mysql_query("UPDATE wave SET availableseats='$new_available_seats',clicktobookseats='$total_booked' WHERE moviename='$moviename' ");
       if($run){
           $r=mysql_query("SELECT * FROM users WHERE username='$username' ");
           while($row=mysql_fetch_array($r)){
               $userticket=$row['ticket'];
           }

           $new_ticket = $number + $userticket;


       $run2=mysql_query("UPDATE users SET ticket='$new_ticket' WHERE username='$username' ");
       
       if($run2){
        echo '
        <div class="container">
        <div class="alert alert-success my-2" role="alert">
        <h4 class="alert-heading">Congratulations Your Seats Are booked </h4>
        
      </div>
      <a href="../1.php"><button type="submit" class="btn btn-success" >
  
                Click here to go back
                </button></a>';

      
     
       }
       else{
           echo "nahi hua";
       }
           
       }
       else{
           echo "something happen wrong";
       }

    }

}
else{
    echo "wrong value is given";
}

 ?>

    <?php


?>


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