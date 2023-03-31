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
<style>
.container{
    height:540px;
}
</style>
<body>
    <?php
     include 'partials/_nav.php';
    ?>  
    <style>
    .heading {
        text-align: center;
    }
    .form-control{
        width: 27%;
    height: calc(0.5em + .75rem + 2px);
    }
    </style>
<?php
$moviename=$_GET['id'];
$username=$_GET['name'];
echo '
<center>
<div class="container">
        <form action="partials/handle_update.php?id='.$moviename.' & name='.$username.'" method="POST">
            <div class="form-group my-4">
                <label for="exampleInputEmail1">Enter the number of seats you want to book</label>
                <input type="number" class="form-control" id="number" name="number" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
</div>
</center>
';


?>
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