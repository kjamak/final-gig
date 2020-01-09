<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.html"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html lang="EN">
<head>
	<title>Find Gig</title>
    <link rel="icon" href="smalllogo.png">
    <meta charset="utf-8">
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="designind.css" >
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="#"><div class="gig">FINDGIG</div></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="profile.php" style="font-style: italic; font-weight: bold;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="artists.php" style="font-style: italic; font-weight: bold;">Artists</a>
      </li>
  
    </ul>
        <div class="btn btn-outline-dark">Welcome : <i><?php echo $login_session; ?></i></div>&nbsp;
        <div class="btn btn-dark"><a style="text-decoration: none; color: white;" href="logout.php">Logout</a></div>
  </div>
</nav>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<br><br><br><br>

<div style="margin-left: 5%;">
  <h1 class="display-4" style="font-style: italic; font-weight: bold; color: white; font-size: 300%; margin-top: -3.5%;">SEE OUR ARTIST LIBRARY</h1>
  <a class="btn btn-warning btn-lg" href="artists.php" role="button" style="font-weight: bold;">ALL ARTISTS</a>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>

</body>
</html>