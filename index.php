<!doctype html>
<html lang="en">

<head>
    
    <?php include 'links.php';?>
    <title>Ashish Yadav-Portfolio</title>
</head>

<body>
<?php include 'connection.php';
if(isset($_POST['submit'])){
 $username=$_POST['username'];
 $email=$_POST['email'];
 $message=$_POST['message'];

 $res=mysqli_query($con,"INSERT into ashish values('','$username','$email','$message')");
       if($res){
           ?>
           <script>
            alert("Your Message has been received!");
           </script>
           <?php
       }
       else{
           ?>
           <script>
           alert("Error Occurred :)");
           </script>
           <?php
       }
}
?>

<!-- <div id="loader" class="hidden">    
    <a href=""><img src="Background Img/832.gif" alt="loading.."></a>
</div> -->
    <!-- Navbar. -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">ASHISH YADAV</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" id="fa" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Myprojects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tech Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main>
            <section>
                <h1 class="text-center">WELCOME TO DEVELOPER WORLD</h1>
                <h4 class="text-center">ABOUT ME</h4>
                <h3 class="text-center">ASHISH YADAV - FULL STACK DEVELOPER</h3>
                <div class="site-buttons">
                    <div class="d-flex flex-row flex-wrap">
                        <button type="button" class="btn button primary-button mr-4 text-uppercase text-center">Hire
                            Me</button>
                        <button type="button" class="btn button secondary-button text-uppercase text-center">Get
                            CV</button>
                    </div>
                    <!-- <div class="container">
                        <a href="#"> <i class="fa fa-github text-center" id="flw"></i></a>
                        <a href="#"> <i class="fa fa-facebook text-center" id="flw1"></i></a>
                        <a href="#"> <i class="fa fa-instagram text-center" id="flw2"></i></a>
                    </div> -->
                </div>
            </section>
        </main>
    </header>

    <section id="skills">
        <div class="skills">
            <h1 class="text-center">My Skills</h1>
            <hr>
            <ol>
                <li>
                    <h3 class="txt">HTML5</h3><span class="bar" id="col"><span class="html"></span></span>
                </li>
                <li>
                    <h3 class="txt">CSS3</h3><span class="bar1" id="col1"><span class="css"></span></span>
                </li>
                <li>
                    <h3 class="txt">JAVASCRIPT</h3><span class="bar2" id="col2"><span class="javascript"></span></span>
                </li>
                <li>
                    <h3 class="txt">PHP</h3><span class="bar3" id="col3"><span class="php"></span></span>
                </li>
                <li>
                    <h3 class="txt">REACT JS</h3><span class="bar4" id="col4"><span class="reactjs"></span></span>
                </li>
                <li>
                    <h3 class="txt">NODE JS</h3><span class="bar5" id="col5"><span class="nodejs"></span></span>
                </li>
            </ol>
        </div>
    </section>
    <!-- Projects. -->
    <section id="Myprojects">
        <h1 class="text-center">MY PROJECTS</h1>
        <hr>
        <div class="container">
            <ol type="1">
                <a href="">
                    <li>User Authentication System.</li>
                </a>
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <img src="Caraousel/login.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title" id="card-tt">User Authentication System.
                        <p>
                        <p class="card-text">This Project Is Based On Php,Mysql.</p>
                        <a href="sourcecode.php" class="btn btn-outline-danger">Source Code</a>
                    </div>
                </div>
                <a href="">
                    <li>Evoting System.</li>
                </a>
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <img src="Caraousel/vote.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Evoting System</h5>
                        <p class="card-text">This Project Is Based On Php,Mysql.</p>
                        <a href="#" class="btn btn-outline-danger">Source Code</a>
                    </div>
                </div>
            </ol>
        </div>
    </section>

    <!-- Myself. -->
    <section id="about">
        <div class="container-fluid">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Caraousel/jakub-sofranko-RoYujmHrdxA-unsplash.jpg" class=" w-100" alt="...">
                        <div class="carousel-caption">
                            <a href=""><img src="Caraousel/CC_20201009_152011.png" class="Cal" alt=""></a>
                            <p class="p-text">Hello Guys, Myself Yadav Ashish Dhirendra.CEO of This Websiste.<br>I am
                                From
                                Maharashtra.I am a Graduate Holding BCA <br> (Bachelor of Computer Application) Degree.
                                <br>
                                <span> Ashish Yadav,Web Developer</span>
                            </p>


                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Caraousel/jakub-sofranko-RoYujmHrdxA-unsplash.jpg" class=" w-100" alt="...">
                        <div class="carousel-caption">
                            <a href=""><img src="Caraousel/CC_20201009_152011.png" class="Cal" alt=""></a>
                            <p class="p-text">Ashish Yadav is a web developer.Providing Free Projects Source Code On
                                This
                                Websiste. <br> <span> Ashish Yadav,CEO Of This Websiste</span> </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Caraousel/jakub-sofranko-RoYujmHrdxA-unsplash.jpg" class="w-100" alt="...">
                        <div class="carousel-caption">
                            <a href=""><img src="Caraousel/CC_20201009_152011.png" class="Cal" alt=""></a>
                            <p class="p-text">Ashish Yadav is a web developer.Providing Free Projects Source Code On
                                This
                                Websiste. <br> <span> Follow us Guys!</span></p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section id="contact">
    <h1 class="text-center" id="fb">Give FeedBack</h1><hr>
        <div class="container-fluid shadow-lg p-3 mb-5 bg-white rounded" id="p3">
            <form method="POST">
                <div class="form-group d-inline-flex">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    <input type="username" class="form-control" placeholder="Full Name" name="username" required>
                </div><br>
                <div class="form-group d-inline-flex">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                </div><br>
                <div class="form-group d-inline-flex">
                    <span class="input-group-text"> <i class="fa fa-commenting-o"></i> </span>
                    <!-- <input type="textarea" class="form-control" placeholder="Enter Your Message" name="message" required> -->
                    <textarea name="message" class="form-control" placeholder="Enter Your Message" cols="30" rows="10" required></textarea>
                </div><br>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>


    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa fa-map-marker"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Thane, Maharashtra India</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+91-9820384039</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>yadavashishdhirendra@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="follow">
                <div class="container">
                    <div class="col-xl-6 col-lg-6 text-center" id="col">
                        <a href="#">Follow Me on :-</a><span>
                            <a href="https://github.com/yadavashishdhirendra"> <i class="fa fa-github" id="flw"></i></a>
                            <a href="https://www.facebook.com/ay551345/"> <i class="fa fa-facebook"  id="flw1" ></i></a>
                            <a href="https://www.instagram.com/yaduvanshi_ashish1920/"> <i class="fa fa-instagram"  id="flw2"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2020-21, All Right Reserved <a href="#">Ashish Yadav</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    
</body>

</html>



