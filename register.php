<?php

    if(isset($_POST['submit'])){
        $server ="localhost";
        $user ="root";
        $pass ="";
        $db="artexpo";

        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $idnumber = $_POST['idnumber'];
        $username = $_POST['username'];
        $password = $_POST['password'];



        $conn=mysqli_connect($server,$user,$pass,$db);

        if(!$conn){
            echo('Connection error');
        }
        // }catch(Exception $e)
        // {
        //     $e->getMessage();

        // }
        // mysqli_select_db($conn,"artexpo");

        $four="insert into artists (Name,Email,Number,IDnumber,Username,Password) values 
        ('$name','$email','$number','$idnumber','$username','$password') ";
        
        if(mysqli_query($conn,$four)){
            echo('succefull registeration');
            header('location:index.html');
        }

        else{
            echo('try again');
        }
        mysqli_close($conn);
    }
?>