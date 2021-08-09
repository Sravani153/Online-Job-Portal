<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  function myFunction() {

    if (confirm("Confirm Logout")) {
      window.open('index.php','_self');
} else {

}
}
  </script>
  <style media="screen">
  .navbar-custom {
background-color:#E0FFFF  ;
}
  </style>
</head>
<body style="background-color:#FFFDD0">
<nav class="navbar navbar-expand-lg navbar-custom " >
<div class="container">
  <a href="home.php" target="_self" class="navbar-brand" ><button type="button" class="btn btn-outline-primary">Home</button></a>
  <ul class="nav nav-pills ml-auto">

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Search by Place</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="Vizag.php">Vizag</a>
        <a class="dropdown-item" href="Hyderabad.php">Hyderabad</a>
        <a class="dropdown-item" href="Banglore.php">Banglore</a></div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Search by Company</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="Auro.php">AURO BINDO PHARMA LTD</a>
        <a class="dropdown-item" href="Mankind.php">MANKIND PHARMA</a>
        <a class="dropdown-item" href="Savvy.php">SAVVY SOFTWARE SOLUTIONS</a>
        <a class="dropdown-item" href="Maple.php">MAPLE SOFTWARE PVT LTD</a>
        <a class="dropdown-item" href="Act.php">ACT FIBERNET LTD</a>
        </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Search by Field</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="Medical.php">Medical</a>
        <a class="dropdown-item" href="Software.php">Software</a>
        <a class="dropdown-item" href="Telecom.php">Telecom</a></div>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#"><button type="button" class="btn btn-outline-primary" onclick="myFunction()">Logout</button></a>
    </li>
  </ul>
</div>
</nav>
<br><br>
<div class="blockquote text-center  ">
    <font face = "Monotype Corsiva" size = "15">Companies in Banglore</font>
</div><br>
<div class="card-deck">

 <div class="card" style=" margin-left: 34%;
    margin-right: 34%;
    width: auto;">
    <img class="card-img-top " src="maple.png" alt="Card image cap"  style="max-width:70%;max-height:80%">
    <div class="card-body">
      <h5 class="card-title">Maple Software</h5>
        <p class="card-text">Maple Software is an ISO 9001:2015 (Equivalent to CMM Level 3) certified company which has been developing innovative and creative products offering a plethora of software
          and other IT enabled services since 1999 to independent software vendors and companies reliant upon technology.</p>
          <a href="Maple.php" target="_blank"><button type="button" class="btn btn-outline-primary">Explore jobs</button></a>

     </div>
</div>
</div><div class="card-deck">

 <div class="card" style=" margin-left: 34%;
    margin-right: 34%;
    width: auto;">
      <img class="card-img-top " src="auro.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Aurobindo Pharma</h5>
          <p class="card-text">Aurobindo Pharma Limited is a pharmaceutical manufacturing company headquartered in HITEC City, Hyderabad, India. The company manufactures generic pharmaceuticals and active pharmaceutical ingredients.</p>
             <a href="Auro.php" target="_blank"><button type="button" class="btn btn-outline-primary">Explore jobs</button></a>

     </div>
</div>
</div>
<br><br>

<footer class="page-footer font-small dark " style="background:#DCDCDC">

<div class="footer-copyright text-center py-3 jumbotron ">
<p>Contact us at : jobs4u@gmail.com</p>
<p>
  twitter : @jobs4u
</p>
<p>whatsapp : 23456-876</p>
</div>

</footer>

</body>
</html>
