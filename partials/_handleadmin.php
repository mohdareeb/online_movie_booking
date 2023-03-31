<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Admin Page</title>
</head>

<body>

    <style>
    .table td {
        padding-right: 132px;
    }

    .table .thead-dark th {
        padding-right: 108px;
    }
    </style>
    <?php
    include '_new_nav.php';
    
    ?>


    <?php
    session_start();
    $name=$_SESSION['name'];
    if(isset($_SESSION['name'])){
        $r=mysql_query("SELECT * FROM users");
        if($r){

         echo  
         '<div class="container">
         <table class="table my-4" >
  <thead class="thead-dark">
    <tr>
    <th scope="col">Sno</th>
      <th scope="col">Username</th>
      <th scope="col">Email-address</th>
      <th scope="col">Tickets Booked</th>
      
    </tr>
  </thead>
  </table>
  </div>';
       
        }
        $counter=1;
        while($row=mysql_fetch_array($r)){

            

           
         
            if($row[4]>0){
               
            echo'
            <div class="container">
            <table class="table" >
                <thead class="thead-dark">
                    <tr>
                    <td>'.$counter.'</td> 
                    <td>'.$row[1].'</td>
                    <td>'.$row[3].'</td>
                    <td>'.$row[4].'</td>';
                    $counter++;     
                   echo '</tr>
                        </thead>
                     </table>
                </div>';
                
                  
            }
        
            
        }
    }
    include 'footer.php';
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