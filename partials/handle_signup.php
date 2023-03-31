<?php
           $user=$_POST['user'];
           $password=$_POST['password'];
           $email=$_POST['email'];
           

           mysql_connect("localhost","root","");
           mysql_select_db("booking");

           $query="SELECT * FROM users WHERE username ='$user' ";
           $result=mysql_query($query);
           $row=mysql_num_rows($result);
           if($row>0){
               echo "user exists";
           }
           else{
            $query2="INSERT INTO `booking`.`users` ( `username`, `password`, `email`) VALUES ('$user', '$password', '$email')";
            
               $result2=mysql_query($query2);
               if($result2){
                 $signup="true";

                 header("location: ../index.php?signup=$signup&username=$user");
               }
               
           }

          
           
           ?>