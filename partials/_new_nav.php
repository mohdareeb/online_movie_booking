
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php">Book my show</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active ">
                <a class="nav-link" href="../about.php">About </a>
            </li>
            
            <li class="nav-item active ">
                <a class="nav-link" href="../1.php" >Welcome to Wave Cinemas</a>
            </li>

           <?php
           session_start();
           if(isset($_SESSION['name'])){
            echo '<li class="nav-item active ">
                <a class="nav-link" >Welcome :'.$_SESSION['name'].'</a>
            </li>';
           }
?>
        </ul>
      
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit">Search</button>

        </form>
       
        <?php
        include 'booking_status.php';
        session_start();
        if(isset($_SESSION['name'])){

          
        echo '<a href="_logout.php"><button type="submit" class="btn btn-success mr-2" >
            Logout
        </button></a>';
        }
        else{
           
            include '_signup.php';
            include '_login.php';
            
        echo '<button type="submit" class="btn btn-success mr-2" data-toggle="modal" data-target="#signup">
            Signup
        </button>';
        echo '<button type="submit" class="btn btn-success mr-2" data-toggle="modal" data-target="#loginmodal">
        Login
    </button>';
        }
        
        ?>

    </div>
</nav>