<!doctype html>
<html lang="en">
<?php include 'links.php'; ?>
    <title>About Me</title>
  </head>
  <style>
      .wrapper #image{
    width: 21%;
  }

  @media (min-width: 576px){
            .wrapper #image{
                margin-top: 33px;
    width: 100px;
    height : 100px;
  }
  }
  
   @media (max-width: 1200px){
            .wrapper #image{
                 margin-top: 33px;
   width: 100px;
    height : 100px;
  }
  }
  
  .image{
    display: flex;
    justify-content: center !important;
  }
  
  #ca{
    padding: 0px 22px;
  }
  
  #cat1{
  margin-left: 12px;
  box-shadow: 0 12px 12px red;
  }
  
  #cat2{
  margin-left: 12px;
  box-shadow: 0 12px 12px red;
  }
  
  #cat3{
   margin-left: 12px; 
  }
  
  .p-3{
    box-shadow: 0 12px 12px aqua !important;
  }
  
  #icon{
    font-size: 2rem;
    font-weight: bolder;
    display: flex;
    justify-content: center;
    line-height: 25px;
  }
  
  #icon1{
    font-weight: bolder;
    line-height: 50px;
    display: flex;
    justify-content: center;
  }
  
  #icon2{
    font-weight: bolder;
    line-height: 50px;
    display: flex;
    justify-content: center;
  }
  
  #icon3{
    font-weight: bolder;
    line-height: 50px;
    display: flex;
    justify-content: center;
  }
  
  #icon4{
    font-weight: bolder;
    line-height: 50px;
    display: flex;
    justify-content: center;
  }
  
  #icon5{
    font-size: 2rem;
    font-weight: bolder;
    line-height: 50px;
    display: flex;
    justify-content: center;
  }
  
  #cat2 ul li{
    list-style: none !important;
  }
  
  .list{
    line-height: 50px;
  }
  
  .list a{
    text-decoration: none !important;
  }
  
  #icon6{
    font-size: 2rem;
    font-weight: bolder;
    display: flex;
    justify-content: center;
    line-height: 50px;
  }
  
  #icon7{
    font-weight: bolder;
    display: flex;
    justify-content: center;
    line-height: 50px;
  }
  
  #icon8{
    font-weight: bolder;
    display: flex;
    justify-content: center;
    line-height: 50px;
  }
  
  #icon9{
    font-weight: bolder;
    display: flex;
    justify-content: center;
    line-height: 50px;
  }

  #tit{
      color: black;
      margin-top: 24px;
      border-radius: 8px;
      border: 1px solid;
      line-height: 33px;
  }

  #home{
     font-size: 1.33rem;
     color: black !important;
 }
  
  #home:hover{
      color : blue !important;
  }
  

  #tit:hover{
      background: yellow;
  }
  </style>
  <body>
    
    <div class="container">
    <a href="index.php"><i class="fa fa-home" aria-hidden="true" id="home">Homepage</i></a>
    <h2 class="text-center">About Me</h2>
        <div class="wrapper">
            <div class="image">
            <img src="Background Img/CC_20201009_152011.png" id="image"  alt=""></br>
            </div>
            <div class="container">
            <p class="text-center" id="tit">Mr.Ashish yadav - fresher fullstack Developer</p>
            </div>
            <div class="container">
            <div class="container">
  <div class="row">
    <div class="col-sm shadow p-3 mb-5 bg-white rounded" id="cat1">
    <i class="fa fa-graduation-cap" id="icon" aria-hidden="true">Graduation</i><br>
    <i class="fa fa-university" id="icon1" aria-hidden="true">Babu Banarasi Das university (BBDU).</i>
    <i class="fa fa-road" id="icon2" aria-hidden="true">Faizabad Road Green City.</i>
    <i class="fa fa-location-arrow" id="icon3" aria-hidden="true">Lucknow , Uttar Pradesh</i>
    <i class="fa fa-book" id="icon4">Bachelor Of Computer Application (BCA).</i>
    </div>
    <div class="col-sm shadow p-3 mb-5 bg-white rounded" id="cat2">
    <i class="fa fa-laptop" id="icon5">Projects</i>
    <ul>
        <li class="text-center list"><a href="sourcecode.php">user Authentication System.</a></li>
        <li class="text-center list"><a href="sourcecode.php">Evoting System.</a></li>
</ul>
    </div>
    <div class="col-sm shadow p-3 mb-5 bg-white rounded" id="cat3">
    <i class="fa fa-address-card" id="icon6" aria-hidden="true">Address</i>
    <i class="fa fa-map-marker" id="icon7" aria-hidden="true">Thane , Maharashtra India</i>
    <i class="fa fa-phone" id="icon8" aria-hidden="true">+91- 9820384039</i>
    <i class="fa fa-envelope" id="icon9" aria-hidden="true">yadavashishdhirendra@gmail.com</i>
    </div>
  </div>
</div>
</div>

<footer>
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