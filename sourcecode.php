<!doctype html>
<html lang="en">

<head>
    
    <?php include 'links.php';?>
    
    <title>Ashish Yadav-Portfolio</title>
</head>

<body>
 <!-- Navbar. -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">ASHISH YADAV</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" id="fa" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Tech Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Contact us</a>
                    </li>
                </ul>
            </div>
        </nav>
       <section id="top">
         <a href="index.php">Previous>></a>
      <h2 class="text-center">My Projects</h2><hr>
                 <div class="wrapper">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <h4 class="text-center">User Authentication System</h4>
            <p class="jus">In this Project Designing(Frontend) part is Based on Html,CSS,Bootstrap & the (Backend) is based on Php & The database is Mysql.
              Here,we will discuss about the project source code and if you have any problem regarding the source code you can mail or contact me.
            </p>
            <p class="color">//HTML Code For SignUp-*</p>
            <p class="jus">Here,are the Html Code and some Cdn Link use it in your head Tag.</p>
            <div class="container shadow-lg p-3 mb-5 bg-white rounded cont">
            <pre class="prettyprint">    <xmp>         
<!doctype html>
<html lang="en">
  <head>
  <?php include 'links.php';
  ?> 
    
    <title>Sign up-Authentication Form</title>
  </head>
  <body>
  <div class="container">
  <div class="container shadow p-3 mb-5 bg-white rounded">
    <h3 class="text-center">Create Account</h3>
    <p class="text-center">Let's get started with your free account</p>
    <button type="button" class="btn btn-danger btn-lg btn-block"><a href="#"><img width="30" src="Images/google.png" alt="">Login Via Google</a></button>
    <button type="button" class="btn btn-primary btn-lg btn-block"><a href="#"><img width="30" src="Images/fb_logo.png" alt="">Login Via Facebook</a></button>
    <div class="container">
    <form action="" method="POST">
    <div class="form-group d-inline-flex">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        <input type="username" class="form-control" placeholder="Full Name" name="username" required>
      </div><br>
      <div class="form-group d-inline-flex">
        <span class="input-group-text"> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
        <input type="email" class="form-control" placeholder="Email address" name="email" required>
      </div><br>
      <div class="form-group d-inline-flex">
        <span class="input-group-text"> <i class="fa fa-phone-square" aria-hidden="true"></i> </span>
        <input type="mobile" class="form-control" placeholder="Phone number" name="mobile" required>
      </div><br>
      <div class="form-group d-inline-flex">
        <span class="input-group-text"> <i class="fa fa-lock" aria-hidden="true"></i> </span>
        <input type="password" class="form-control" placeholder="Create password" name="password" required>
      </div><br>
      <div class="form-group d-inline-flex">
        <span class="input-group-text"> <i class="fa fa-lock" aria-hidden="true"></i> </span>
        <input type="password" class="form-control" placeholder="Confirm password" name="cpassword" required>
      </div><br>
      <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Create Account</button>
    </form>
  </div>
  <div class="container">
    <h5 class="text-center">Have an account? <a href="login.php">Log in</a></h5>
</div>
    </div>
  </div>
  </body>
</html></xmp></pre>
</div>
<p class="color jus">//Php Code For SignUp.*</p>
                <a href="source.php">To view the php Code Click here.</a>
       <p class="color jus">//Html Code for Login.*</p>
       <div class="container shadow-lg p-3 mb-5 bg-white rounded cont">
            <pre class="prettyprint">    <xmp>         
<!doctype html>
<html lang="en">
  <head>
  <?php include 'links.php';
  ?> 
    
    <title>Sign up-Authentication Form</title>
  </head>
  <body>
  <div class="container">
      <div class="container shadow p-3 mb-5 bg-white rounded">
        <h3 class="text-center">Login Into your Account</h3>
        <p class="text-center">Let's get started with your free account</p>
        <button type="button" class="btn btn-danger btn-lg btn-block">
          <a href="#"
            ><img width="30" src="Images/google.png" alt="" />Login Via
            Google</a
          >
        </button>
        <button type="button" class="btn btn-primary btn-lg btn-block">
          <a href="#"
            ><img width="30" src="Images/fb_logo.png" alt="" />Login Via
            Facebook</a
          >
        </button>
        <div class="container">
          <form
            action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"
            method="POST">
            <div class="form-group d-inline-flex">
              <span class="input-group-text">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
              <input
                type="email"
                class="form-control"
                placeholder="Email address"
                name="email"
                required/>
            </div>
            <br />
            <div class="form-group d-inline-flex">
              <span class="input-group-text">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
              <input
                type="password"
                class="form-control"
                placeholder="Enter password"
                name="password"
                required
              />
            </div>
            <br />
            <button
              type="submit"
              class="btn btn-primary btn-lg btn-block"
              name="submit"
            >
              Login
            </button>
          </form>
        </div>
        <div class="container">
          <h5 class="text-center">
            Not Have an account? <a href="SignUp.php">Signup here</a>
          </h5>
        </div>
      </div>
    </div>
  </body>
</html>
></xmp></pre>
       </div>
       <p class="color jus">//Php Code For Login.*</p>
                <a href="source.php">To view the php Code Click here.</a>
                <p class="color jus">//CSS Code.*</p>
                <p class="jus">First Create a Folder Name CSS inside CSS folder create two file (style.css) & (style1.css).</p>
            <div class="container shadow-lg p-3 mb-5 bg-white rounded cont">
            <pre class="prettyprint">    <xmp>   
            *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none !important;
}

.btn a {
  color: white !important;

}

.btn img{
  margin-right: 15px;
}

.btn{
  width: 75% !important;
  margin: auto;
}

.d-inline-flex{
  width: 81% !important;
  margin: 13px 39px !important;
}

.p-3{
  margin-top: 26px !important;
  width: 100% !important;
}

.container h5 {
  margin-top: 25px !important;
}



/* Home Navbar. */
/* navbar. */
body {
  font-family: "Roboto", sans-serif;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none !important;
}

.sidebar {
  position: fixed;
  left: -250px;
  width: 250px;
  height: 100%;
  background: #042331;
  transition: 0.5s ease;
  top: 0;
}

.sidebar header {
  font-size: 22px;
  color: white;
  text-align: center;
  line-height: 70px;
  background: #3caf25;
  user-select: none;
}
.sidebar ul li i{
  margin-right: 12px;
}

.sidebar ul a {
  display: block;
  height: 100%;
  width: 93% !important;
  line-height: 65px;
  font-size: 20px;
  color: white;
  padding-left: 30px;
  box-sizing: border-box;
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-bottom: 1px solid black;
  transition: 0.5s;
  margin-left: 20px !important;
}

ul {
  margin-left: -33px;
}

ul li:hover a {
  padding-left: 50px;
}

.sidebar ul a i {
  margin-right: 20px;
}

@media (min-width : 1200px){
  .container, .container-lg, .container-md, .container-sm, .container-xl {
       max-width: 486px !important;
}

#check {
  display: none;
}

label #btn,
label #cancel {
  position: absolute;
  cursor: pointer;
  background: #042331;
  border-radius: 3px;
}

label #btn {
  left: 40px;
  top: 25px;
  font-size: 35px !important;
  color: white !important;
  padding: 6px 12px;
  transition: all 0.5s;
}

label #cancel {
  z-index: 1111;
  left: -195px;
  top: 14px;
  font-size: 30px;
  color: #0a5275;
  padding: 4px 9px;
  transition: all 0.5s ease;
}

#check:checked ~ .sidebar {
  left: 0;
  top: 0px;
}

#check:checked ~ label #btn {
  left: 250px;
  opacity: 0;
  pointer-events: none;
}

#check:checked ~ label #cancel {
    left: 195px;
  }

      
</xmp></pre>
       </div>
       <p class="color jus">//Now In the second file Put This CSS Code.*</p>
       <div class="container shadow-lg p-3 mb-5 bg-white rounded cont">
            <pre class="prettyprint">    <xmp>   
            html,body{
    scroll-behavior: smooth;
  }
  
  #fa{
    border: 2px solid;
    color: white;
  }
  /* Sub-Elements. */
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Roboto", sans-serif;
  }
  
  /* Navbar. */
  .mr-auto,
  .mx-auto {
    margin-left: 356px !important;
    font-size: 1.39rem;
  }
  
  .navbar-brand {
    font-size: 1.66rem !important;
    text-transform: capitalize !important;
    color: white !important;
    font-weight: bolder;
    font-family: system-ui;
    border: 1px solid #7ada23;
    border-radius: 12px;
    box-shadow: 0 2px 4px gold;
  }
  
  .navbar .nav-link {
    color: rgb(255, 255, 255) !important;
  }
  
  .navbar .nav-link:hover{
  color: orange !important;
  }
  
  .text-center {
    font-weight: bolder;
  }
  
  hr {
    border-top: 1px solid rgb(255 162 162) !important;
  }
  
  .bg-light {
    background-color: #32404f !important;
  }
  
  /* Navbar Media Queries. */
  @media (max-width: 576px) {
    .mr-auto,
    .mx-auto {
      margin-left: 0px !important;
      width: 110% !important;
    }
  }
  
  @media (max-width: 576px) {
    .navbar {
      margin-left: 0px !important;
    }
  }
  
  @media (max-width: 576px) {
    .navbar .nav-link:hover {
      /* width:50%; */
    }
  }
  
  /* Header. */
  header {
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0, 0, 0, 1.3), rgba(0, 0, 0, 0.1)),
      url("../Background Img/pexels-pixabay-38544.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  
  main {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
  }
  
  section h1 {
    font-size: 2.33rem;
    font-weight: 900;
    /* margin-left: 87px; */
  }
  
  section h4 {
    /* margin-left: 422px; */
    margin-top: 19px;
    font-weight: 800;
    /* font-size: 2.33rem; */
  }
  
  section h3 {
    font-size: 2rem;
    font-weight: 600;
    /* margin-left: 234px; */
    margin-top: 21px;
  }
  
  h3 span {
    font-family: "Fredoka One", cursive;
    /* background-color: white;
        border-radius: 7px;
        color: black;
        border: 1px solid; */
  }
  
  .button {
    padding: 0.5rem 2rem;
    font: normal;
    font-weight: 500;
    font-family: "Roboto", sans-serif;
    position: relative;
    border: 3px solid transparent;
    border-radius: 4px;
  }
  
  .button.primary-button {
    background-color: #3883e1;
    /* background-clip: padding-box; */
    color: whitesmoke;
    transition: 0.6s ease;
    box-shadow: black;
    margin-left: 164px;
    margin-top: 37px;
  }
  
  .button.primary-button:hover {
    background: whitesmoke;
    color: black;
    border: 2px solid rgb(17, 173, 201);
  }
  
  .button.secondary-button {
    background-color: teal;
    /* background-clip: padding-box; */
    color: whitesmoke;
    transition: 0.6s ease;
    box-shadow: black;
    margin-top: 37px;
  }
  
  .button.secondary-button:hover {
    background: whitesmoke;
    color: black;
    border: 2px solid rgb(17, 173, 201);
  }
  
  .txt {
    font-size: 1rem !important;
    font-weight: bolder;
  }
  
  @media (max-width: 576px) {
    .txt {
      font-size: 1rem !important;
      font-weight: bolder;
    }
  }
  
  .btn-outline-danger {
    width: 20%;
    justify-content: center;
    display: flex;
    margin: auto;
    color: #000000;
    border-color: #42bc34;
  }
  
  /* Header Media Queries. */
  @media (max-width: 576px) {
    .container-fluid img {
      width: 107% !important;
    }
  }
  
  @media (max-width: 576px) {
    section h1 {
      font-size: 1.33rem;
      margin-left: 21px;
      margin-top: 50px;
    }
  }
  
  @media (max-width: 576px) {
    section h4 {
      font-size: 1.33rem;
      /* margin-left: 111px; */
    }
  }
  
  @media (max-width: 576px) {
    .button.primary-button {
      margin-left: 39px;
    }
  }
  @media (max-width: 576px) {
    .btn-outline-danger {
      width: 55%;
      justify-content: center;
      display: flex;
      margin: auto;
    }
  }
  
  @media (max-width: 576px) {
    section h3 {
      font-size: 1rem !important;
      /* margin-left: 23px !important; */
    }
  }
  
  /* Skills Section. */
  .container ol a li {
    font-size: 1rem;
    margin-left: 22px;
    /* text-decoration: none !important; */
    color: #000000;
    font-weight: bolder;
  }
  
  .container ol a {
    text-decoration: none !important;
  }
  
  /* Projects. */
  .card {
    border: none !important;
  }
  
  .card-title {
    text-align: center;
  }
  
  .card-text {
    text-align: center;
  }
  
  /* #card-tt {
    margin-top: -95px;
  } */
  
  .p-text {
    margin-top: -200px !important;
  }
  
  /* Card Media Queries. */
  
  @media (max-width: 576px) {
    #card-tt {
      margin-top: -49px;
    }
  }
  
  /* Skills. */
  .skills {
    width: 500px;
    margin: 60px auto;
  }
  
  .skills li {
    margin: 20px 0;
    list-style: none;
  }
  
  .bar {
    background: #353b48;
    display: block;
    height: 13px;
    border: 1px solid rgba(0, 0, 0, 0.3);
    border-radius: 3px;
    overflow: hidden;
    box-shadow: 0 0 10px #cf0e0eb3;
  }
  
  .bar span {
    height: 12px;
    float: left;
    background: red;
  }
  
  .bar1 {
    background: #353b48;
    display: block;
    height: 13px;
    border: 1px solid rgba(0, 0, 0, 0.3);
    border-radius: 3px;
    overflow: hidden;
    box-shadow: 0 0 10px #2187e7b3;
  }
  
  .bar1 span {
    height: 12px;
    float: left;
    background: blue;
  }
  
  .bar2 {
    background: #353b48;
    display: block;
    height: 13px;
    border: 1px solid rgba(0, 0, 0, 0.3);
    border-radius: 3px;
    overflow: hidden;
    box-shadow: 0 0 10px #77db05b3;
  }
  
  .bar2 span {
    height: 12px;
    float: left;
    background: rgb(142, 230, 1);
  }
  
  .bar3 {
    background: #353b48;
    display: block;
    height: 13px;
    border: 1px solid rgba(0, 0, 0, 0.3);
    border-radius: 3px;
    overflow: hidden;
    box-shadow: 0 0 10px #3f5c77b3;
  }
  
  .bar3 span {
    height: 12px;
    float: left;
    background: rgb(0, 221, 166);
  }
  
  .html {
    width: 90%;
    animation: html 9s;
  }
  
  .css {
    width: 65%;
    animation: css 9s;
  }
  
  .javascript {
    width: 50%;
    animation: javascript 9s;
  }
  
  .php {
    width: 70%;
    animation: php 9s;
  }
  
  @keyframes html {
    0% {
      width: 0%;
    }
    100% {
      width: 90%;
    }
  }
  
  @keyframes css {
    0% {
      width: 0%;
    }
    100% {
      width: 65%;
    }
  }
  
  @keyframes javascript {
    0% {
      width: 0%;
    }
    100% {
      width: 50%;
    }
  }
  
  @keyframes php {
    0% {
      width: 0%;
    }
    100% {
      width: 70%;
    }
  }
  
  @media (max-width: 576px) {
    .skills {
      width: 80%;
      margin: auto;
    }
  }
  
  /* Caraousel. */
  .p-text span {
    color: orange;
  }
  
  .carousel-inner img {
    height: 55vh;
  }
  
  .Cal {
    width: 10%;
    height: 101px !important;
    margin-top: -500px;
  }
  
  @media (max-width: 576px) {
    .Cal {
      max-width: 33%;
      height: 101px !important;
      margin-top: -500px;
    }
  }
  
  /* Contact Us Section. */
  form {
    width: 87%;
    margin: auto;
  }
  
  @media (max-width: 576px) {
    form {
      width: 97%;
      margin: auto;
    }
  }
  
  @media (min-width: 1200px) {
    .p-3 {
      width: 100% !important;
      margin-top: 22px;
    }
  }
  
  @media (min-width: 1200px) {
    #p3 {
      width: 28% !important;
      margin-top: 22px;
    }
  }
  
  /* About us. */
  #text {
    margin-top: -7px;
  }
  
  #fa1 {
    font-size: 30pt !important;
  }
  
  #fa2 {
    margin-top: 21px !important;
    font-size: 30pt !important;
  }
  
  #fa3 {
    margin-top: 21px !important;
    font-size: 30pt !important;
  }
  
  #fa4 {
    margin-top: 21px !important;
    font-size: 30pt !important;
  }
  
  .about {
    margin-left: 14px;
  }
  
  .box1 {
    width: 27%;
    margin-left: 157px;
  }
  
  .btn-primary {
    margin-left: 116px;
  }
  
  @media (min-width: 576px) {
    .btn-primary {
      margin-left: 86px;
      width: 35% !important;
    }
  }
  
  @media (max-width: 1200px) {
    .btn-primary {
      margin-left: 89px;
      width: 33% !important;
    }
  }
  
  .d-inline-flex {
    width: 100% !important;
    margin-top: 32px;
  }
  
  @media (max-width: 576px) {
    .box1 {
      width: 100%;
      margin-left: 73px;
    }
  }
  
  @media (max-width: 576px) {
    .box {
      margin-top: 397px;
      margin-left: -603px;
      width: 82%;
    }
  }
  
  @media (max-width: 576px) {
    .d-inline-flex {
      width: 100%;
    }
  }
  
  /* Footer. */
  ul {
    margin: 0px;
    padding: 0px;
  }
  .footer-section {
    background: #151414;
    position: relative;
  }
  .footer-cta {
    border-bottom: 1px solid #373636;
  }
  .single-cta i {
    color: #ff5e14;
    font-size: 30px;
    float: left;
    margin-top: 8px;
  }
  .cta-text {
    padding-left: 15px;
    display: inline-block;
  }
  .cta-text h4 {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 2px;
  }
  .cta-text span {
    color: #757575;
    font-size: 15px;
  }
  
  .copyright-area {
    background: #202020;
    padding: 25px 0;
  }
  .copyright-text p {
    margin: 0;
    font-size: 14px;
    color: #878787;
  }
  .copyright-text p a {
    color: #ff5e14;
  }
  
  .footer-cta{
    border-bottom: none !important ;
  }
  
  #col{
    top: -20px !important;
  }
  
  #col a{
    text-decoration: none;
    color: white;
    font-size: 17pt;
  }
  
  #flw{
    font-size: 2rem;
    padding: 2px 22px;
  }
  
  #flw1{
    font-size: 2rem;
    padding: 2px 22px;
  }
  
  #flw2{
    font-size: 2rem;
    padding: 2px 22px;
  }
            </xmp></pre>
                </div>
                <p class="color jus">//Databse Connection.*</p>
                <p class="jus">First Create a Database In phpmyadmin named as student and then create a table named as login1 then create 5 rows that's it.</p>
                <a href="source.php">To view the connection in database click here.</a>
                <p class="color jus">//Links in which all your css links,font awesome links,and cdn links are there in the links.folder.*</p>
                <h4>For Example:</h4>
                <div class="container shadow-lg p-3 mb-5 bg-white rounded cont">
            <pre class="prettyprint">    <xmp>  
            <!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="CSS/style.css" media="all" type="text/css">

  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
            </xmp></pre>
    </section>
</body>

</html>