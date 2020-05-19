
<html>
<head>

<style>
.body{
  background-color:aqua;
}
.bd{
  background-color:white;opacity: 0.9;
}
ul {
    list-style-type: none;
    margin-right: 70px;
    padding: 6px;

}
li{
    
    float:left;

}
a {
    display: block;
    width: 60px;
}
.van{
    float: right;
   
}
.e{
 display: flex;
 justify-content: space-around;
   
}
.round{
  background-color:white;opacity: 0.9;
  width:auto;
  height: auto;
}
.boot{
    /* margin-left: 100px;
    margin-top: 80px; */
    display:flex;
    margin:20px;
    flex-wrap:wrap;
    flex-direction:row;
}
.boot .any{
  margin: 10px 8px;
}
</style>
</head>
<body class="body" >
  <header class="bd">
    <img src="logo.png" width="200px" height="70">
    

    <nav class="van">
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="about.html">About</a></li>
<li><a href="http://localhost/dashboard/ARTEXPO/display.php">Artists</a></li>
  <li style="margin-right:25px"><a href="pieces.html">ArtPieces</a></li>
 <li style="margin-right:25px"><a href="http://localhost/dashboard/ARTEXPO/login.html">Artistlogin</a></li>
 


</ul>
<nav>

</header>
<div class="boot">
<?php
include 'Donate.php';
?>
</div>
  
</body>
</html>