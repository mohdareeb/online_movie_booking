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
     $alert=$_GET['signup'];
     $user=$_GET['username'];
     include 'partials/_nav.php ';
     if($alert=="true"){

        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>'.$user.'</strong> Your Account Is Created You Can Explore Now.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
         }
     include 'partials/_carousel.php';
     
    
     
     ?>
    <style>
    .heading {
        text-align: center;
    }
    .para{
        display: inline;
    position: absolute;
    }
    .jumbotron my-2 {
        padding-bottom: 20px;
    padding-top: 20px;
}
        
    }
    .image{
        margin-right:22px;
    }
    </style>
    


    <div class="container ">
    
        <div class="jumbotron my-2">
        <h1 class="heading">Welcome to Waves Cinemas </h1>

            
            <a href="1.php"><img src="partials/wave.png" class="image"alt="" srcset=""></a>
            <p class="para"><b>Wave Cinemas Is A Chain Of Premium Movie Threatres Which Is Spread Across North India.</b></p>
            <a class="btn btn-success btn-lg" href="1.php" role="button">Click to explore</a>
            
            
        </div>

    </div>
        <!--
        <div class="container my-4">
            <div class="card col-md-4 my-2" style="width: 18rem;">
                <a href="1.php"> <img src="partials/wave.png" height="250px" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <a href="1.php">
                        <h5 class="card-title">Wave Cinemas</h5>
                    </a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="1.php" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>




---->










<?php
include 'partials/footer.php'

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