<?php

session_start();

if ($_SESSION['username'])

echo "Welcome, ".$SESSION['username']."!<br><a href='logout.php'>Logout</a>";

?>

<html>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">RELAX FLIGHTS</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href='About Us.html'>About Us</a></li>
        <li><a href='Contact Us.html'>Contact Us</a></li>
        <li><a href='Log In.html'>Log In</a></li>
      </ul>
    </div>
  </div>
</nav>
<h3>Welcome Member! <br>
Flying never felt so easy! <br>
</br>
</div>


</html>