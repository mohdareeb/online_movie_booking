<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>My Project</title>
</head>

<body>

    <?php
     
     include 'partials/_nav.php';
     include 'partials/_login.php';
     $login=false;

     $alert=$_GET['cancel'];
     $name=$_GET['name'];

     if($alert=="true"){
         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>'.$name.'</strong> your tickets are cancelled .
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>';

     }
     
     
     ?>

    <div class="container">

        <div class="media my-4">
            <img src="partials/wave.png" class="mr-3" alt="...">
            <div class="media-body">
                <h1 class="mt-0">Welcome to Wave Cinemas</h1>
                <p>Wave Cinemas Is A Chain Of Premium Movie Threatres Which Is Spread Across The Length
                    And Breadth of North India.Our Movie Auditorium Offer Unparalled Entertainment Experience With
                    State-Of- The-Art Digital Sound,Audio And Projection Systems.</p>
            </div>
        </div>
        <style>
        .container {
            text-align: center;
        }
        </style>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <?php

            if(isset($_SESSION['name'])){
                echo '<h1 class="display-4">Welcome '.$_SESSION['name'].'</h1>
                <p class="lead">Check below the existing shows information.
                </p>
               
                <a href="partials/_logout.php"><button type="submit" class="btn btn-success" >
  
                Click here to Logout
                </button></a>';  
                $login=true;     
            }
            else{
                echo '<h1 class="display-4">Please Login you are not login yet </h1>
                <p class="lead">To confirm your seats please login into our system if new user signup please.
                </p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginmodal">
  
                Click here to Login
                </button>';
            }
            ?>


            </div>
        </div>
<style>
.table td{
    padding-right:132px;
}
.table .thead-dark th {
    padding-right:108px;
}
</style>

        <?php
           $naam=$_SESSION['name'];
           $page="1";
           if($login){
       echo '<div class="jumbotron jumbotron-fluid">'; 
        echo '<div class="container">';
           
  
         echo   '<h1 class="h1">Current Shows running in our Threater</h1>';

         
            mysql_connect("localhost","root","");
            mysql_select_db("booking");
            $result=mysql_query("SELECT * FROM wave ");
            //echo mysql_error();
            if($result){
              
            echo "<table border ='1' width ='90%'>";        
            echo "<tr height='5px'>";
            echo  "<td width = '16.5%' >Sno</td >";
            echo  "<td width = '18.5%'>Movie Name</td >";
            echo  "<td width = '18.5%'>Show Time</td >";
            echo  "<td width = '18%'>Hall</td >";
            echo  "<td width = '18%'>Total Seats</td >";
            echo  "<td width = '20%'>Available Seats</td >";
            echo  "<td width = '5%'>Booking</td >";
            echo "</tr>";
            echo "</table>";

            }
            while($row=mysql_fetch_array($result)){

               
            
            echo "<table border='1' width='90%'>";

            echo    "<tr height='5px'>";
            echo        "<td  width = '16%'>$row[0]</td >";
            echo        "<td  width = '18%'>$row[1]</td >";
            echo        "<td  width = '18%'>$row[2]</td >";
            echo        "<td  width = '17.5%'>$row[3]</td >";
            echo        "<td  width = '17%'>$row[4]</td >";
            echo        "<td  width = '13%'>$row[5]</td >";
            echo        "<td  width = '30%'>$row[6] <a href='update.php?id=$row[1] & name=$naam'>Booked</a> </td >";
            echo    "</tr>";

            echo "</table>";
            }
            
        }
            ?>

    </div>
    </div>



    </div>
    <!---sabse pehla container band hua hai--->

    <?php

include 'partials/footer.php';
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