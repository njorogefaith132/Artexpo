<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artist details</title>
    <style>
        table{
            width:100%;
            border-collapse:collapse;
            text-align:left;
        }
        th{
            background-color: #669999;
            border:1px solid white;
            text-align:center;
        }
        td{
            background-color:#99CCFF;
            border:1px solid white;
            text-align:center;
        }
        .body{
            background-color:#66CCFF;
        }
        .edit{
            background-color: green;
            color:white;
            padding: 1px 20px; 
            border-radius:20px; 
        }
        a{
            text-decoration:none;
        }
        .delete{
            background-color: red;
            color:white;
            padding: 1px 20px; 
            border-radius:20px; 
        }
        .for{
            display:flex;
            justify-content:center;
            margin-top:20px;
        }
        .headss{
            background-color: #003300;
            display:flex;
            justify-content:center;
            color:white;
        }
        .bd{
            background-image:url("")
        }
    </style>
    </head>
<body class="bd">
    <?php require_once 'register.php' ;?>
    <div class="headss">
    <h1>Artist Details</h1>
    </div>
   
    <div class="row justify-content-centre">
     <table >
     <thead>
        <tr>
        <th>id</th>
        <th>Email</th>
       
        <th>Number</th>
        <th>idnumber</th>
       
      
    </tr>
    </thead>
    <?php
    $mysqli= new mysqli('localhost','root','','artexpo') or die(mysqli_error($mysqli));
    $result=$mysqli->query("SELECT Name ,Email,Number,IDnumber from artists" ) or die($mysql->error);
   // pre_r($result->fetch_assoc())
  
    //$sql= "SELECT Name ,idnumber,Number,Email from personaldetails  ";
  // $result= $conn->  query($sql);
  
   if($result->num_rows >0){
      //fetches the next record
       while($row =$result->fetch_assoc()){?>
           <tr>
           <td><?php echo $row['Name'];?></td>
           <td><?php echo $row['Email'];?></td>
           <td><?php echo $row['Number'];?></td>
           <td><?php echo $row['IDnumber'];?></td>
           <td>
           
           </tr>
        <?php }?>
        <?php
   echo "</table>";
}
   else{
       echo "0 result";
   }
   //$conn ->close();
   ?>
   <?php
function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
   ?>
   </div>
   
</body>
</html>