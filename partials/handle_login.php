<?php
        $user=$_POST['user'];
        $password=$_POST['password'];

        mysql_connect("localhost","root","");
        mysql_select_db("booking");

        $query="SELECT * FROM users WHERE username='$user' AND password='$password' ";
        $result=mysql_query($query);

       /* $query2="SELECT * FROM admin WHERE username='$user' AND password='$password' ";
        $result2=mysql_query($query2);
*/
        $admin=mysql_query("SELECT * FROM admin WHERE name='$user' AND password='$password' ");
        $row_admin=mysql_num_rows($admin);
        if($row_admin==1){
            session_start();
            $_SESSION['name']=$user;
            header("location:../admin.php");
        }


        $row=mysql_num_rows($result);
        
        if($row==1){
            session_start();
            $_SESSION['name']=$user;
            
            header("location: ../1.php");
             
        }
        else{
            echo "type mismatch";
        }
        
        ?>