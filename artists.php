<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.html"); // Redirecting To Home Page
}
?>





<!DOCTYPE html>
<html lang="EN">
<head>
	<title>Find GIG</title>
    <link rel="icon" href="smalllogo.png">
    <meta charset="utf-8">
    

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="artists.css" >
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>


<nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="#"><div class="gig">FINDGIG</div></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="profile.php" style="font-style: italic; font-weight: bold;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
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



<div class="main">

  <br><br>
  <br>
  <p class="scroll">Scroll down for more musicians</p>
  <br>
  <br><br>
  

<div class="row">
  
  <div class="column" data-aos="zoom-in" data-aos-duration="3000">
  <div class="card align-items-center" style="width: 15rem;">
  <img src="acalukas.jpg" class="card-img-top" alt="..."></a>
  <div class="card-body">
    <h5 class="card-title">Aca Lukas</h5>
       <a href="acalukas.php" class="btn btn-warning">Book Now</a>
  </div>
</div>
  </div>

  <div class="column" data-aos="zoom-in" data-aos-duration="3000">
  <div class="card align-items-center" style="width: 15rem;">
  <img src="gorankaran.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Goran Karan</h5>
 <a href="gorankaran.php" class="btn btn-warning">Book Now</a>
  </div>
</div>
  </div>

   <div class="column" data-aos="zoom-in" data-aos-duration="3000">
  <div class="card align-items-center" style="width: 15rem;">
  <img src="mayaberovic.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Maya Berovic</h5>
    <a href="mayaberovic.php" class="btn btn-warning">Book Now</a>
  </div>
</div>
  </div>

    <div class="column" data-aos="zoom-in" data-aos-duration="3000">
  <div class="card align-items-center" style="width: 15rem;">
  <img src="acopejovic.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Aco Pejovic</h5>
    <a href="acopejovic.php" class="btn btn-warning">Book Now</a>
  </div>
</div>
  </div>

    <div class="column" data-aos="zoom-in" data-aos-duration="3000">
  <div class="card align-items-center" style="width: 15rem;">
  <img src="dinomerlin.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dino Merlin</h5>
    <a href="dinomerlin.php" class="btn btn-warning">Book Now</a>
  </div>
</div>
  </div>


</div>

<br><br>

<div class="row">
  <div class="column" data-aos="zoom-in" data-aos-duration="3000">
  <div class="card align-items-center" style="width: 15rem;">
  <img src="crvenajabuka.jpg" class="card-img-top" alt="..."></a>
  <div class="card-body">
    <h5 class="card-title">Crvena Jabuka</h5>
       <a href="crvenajabuka.php" class="btn btn-warning">Book Now</a>
  </div>
</div>
  </div>
  <div class="column" data-aos="zoom-in" data-aos-duration="3000">
  <div class="card align-items-center" style="width: 15rem;">
  <img src="halidbeslic.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Halid Beslic</h5>
 <a href="halidbeslic.php" class="btn btn-warning">Book Now</a>
  </div>
</div>
  </div>
   <div class="column" data-aos="zoom-in" data-aos-duration="3000">
  <div class="card align-items-center" style="width: 15rem;">
  <img src="jalabuba.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jala Brat & Buba</h5>
    <a href="jalabuba.php" class="btn btn-warning">Book Now</a>
  </div>
</div>
  </div>
    <div class="column" data-aos="zoom-in" data-aos-duration="3000">
  <div class="card align-items-center" style="width: 15rem;">
  <img src="rasta.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rasta</h5>
    <a href="rasta.php" class="btn btn-warning">Book Now</a>
  </div>
</div>
  </div>

    <div class="column" data-aos="zoom-in" data-aos-duration="3000">
  <div class="card align-items-center" style="width: 15rem;">
  <img src="jelenarozga.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jelena Rozga</h5>
    <a href="jelenarozga.php" class="btn btn-warning">Book Now</a>
  </div>
</div>
  </div>


</div>

<br><br>

<div class="row">
  <div class="column" data-aos="zoom-in" data-aos-duration="3000">
  <div class="card align-items-center" style="width: 15rem;">
  <img src="severina.jpeg" class="card-img-top" alt="..."></a>
  <div class="card-body">
    <h5 class="card-title">Severina</h5>
       <a href="severina.php" class="btn btn-warning">Book Now</a>
  </div>
</div>
  </div>
  <div class="column" data-aos="zoom-in" data-aos-duration="3000">
  <div class="card align-items-center" style="width: 15rem;">
  <img src="milekitic.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mile Kitic</h5>
 <a href="milekitic.php" class="btn btn-warning">Book Now</a>
  </div>
</div>
  </div>
   <div class="column" data-aos="zoom-in" data-aos-duration="3000">
  <div class="card align-items-center" style="width: 15rem;">
  <img src="sasamatic.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sasa Matic</h5>
    <a href="sasamatic.php" class="btn btn-warning">Book Now</a>
  </div>
</div>
  </div>
    <div class="column" data-aos="zoom-in" data-aos-duration="3000">
  <div class="card align-items-center" style="width: 15rem;">
  <img src="jana.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jana</h5>
    <a href="jana.php" class="btn btn-warning">Book Now</a>
  </div>
</div>
  </div>

    <div class="column" data-aos="zoom-in" data-aos-duration="3000">
  <div class="card align-items-center" style="width: 15rem;">
  <img src="ceca.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Svetlana Ceca</h5>
    <a href="ceca.php" class="btn btn-warning">Book Now</a>
  </div>
</div>
  </div>


</div>


</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>

</body>
</html>