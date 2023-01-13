<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"    
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>                 <!--Bootstarp-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Icon -->

  <link rel="stylesheet" href="css/login.css" />    <!-- css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">  <!--Bootstarp-->

  <title>Home</title>
</head>

<body>

  <!-- Navbar start -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a href="#"><img class="logo" src="Resources/logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <!-- <a class="nav-link active" aria-current="page" href="Index.php">Home</a> -->
          <a class="nav-link active" aria-current="page" href="Login.html">Login</a>
          <a class="nav-link active" aria-current="page" href="about.html">About</a>
        </div>
      </div>
  </nav>
  <!-- Navbar end -->

  <!-- slider start -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="Resources/slider1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Resources/slider2.png" class="d-block w-100" alt="...">
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- silder end -->

  <div class="media">

    <!-- Notice start -->
    <div class="notice">
      <h3>Notice</h3>
      <marquee direction="up" scrollamount="1" ;>

        <?php
        
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="website";
        $conn=new mysqli($servername,$username,$password,$dbname);
        $sql="SELECT * FROM notice";
        $result=$conn->query($sql);

        if($result->num_rows>0)
        {
            while ($row=$result->fetch_assoc())
            {
                echo "<ul> <li> <p>". $row["Date"] ."  ". $row["Notice"]."   </p></li></ul>";
            }
        }
        else
        {
            echo "There is no notice!!</br>";
            echo ".   ¯\_(ツ)_/¯</br>";
            echo "This will change when there is any notice updated</br>";
            echo "Till then</br>";
            echo "Enjoy</br>";
            echo "Your</br>";
            echo "Day</br>";
        }
        $conn->close();
        ?> 
      </marquee>
    </div>
    <!-- Notice end -->

    <!-- Youtube start -->
    <div class="youtube">
      <h3>St. Columba's College</h3>
      
      <a href="https://www.youtube.com/watch?v=KqpR4VU1fE8">
        <h4><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-youtube"
            viewBox="0 0 16 16">
            <path
              d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
            </svg><br />Watch Video On YouTube</h4>
          </a>
        </div>
    <!-- Youtube end -->

  </div>
    
    <!-- about begin -->
    <div class="about">
      
      <!-- contact begin -->
      <div class="contact">
        <h4>Contact Us</h4>
        <p> 
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
          </svg>
          Heranganj, NH 33,  Ranchi Patna Road, Hazaribag, 825302 Jharkhand, India.
        </p>
        
        <p>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"/>
          </svg>
          +91 6546222197  <br/s>
          +91 6546223227
        </p>

        <p>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
          </svg>
          info@stcchzb.ac.in
        </p> 

      </div>
      <!-- contact end -->
      
    <!-- socialmedia begin -->
      <div class="socialmedia">
        
        <ul class="socialli">

          <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
          <li><a href="https://twitter.com/i/flow/login" class="fa fa-twitter"></a></li>
          <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
        </ul>

      </div>
    <!-- socialmedia end-->
    
    </div>
  <!-- about end -->
    
    
  <!-- Footer start -->
    <div class="footer">
      &copy;Copyright 2022 : www.stcolumbas.edu.in.
    </div>
  <!-- Footer end -->
</body>

<script src="js/javascript.js"></script>  <!--  JS -->

</html>