<?php 
$pagetitle="Min Idrætsforening | Hjem";
require('header.php');
 ?>

<div id="demo" class="carousel slide" data-ride="carousel">
 
 <!-- Indicators -->
 <ul class="carousel-indicators">
   <li data-target="#demo" data-slide-to="0" class="active"></li>
   <li data-target="#demo" data-slide-to="1"></li>
   <li data-target="#demo" data-slide-to="2"></li>
 </ul>
 
 <!-- The slideshow -->
<div class="carousel-inner">


   
    <div class="carousel-item active">
     <img src="img/20170421-rynkeby-0184-1280x853.jpg" alt="Chicago">
     <div class="carousel-caption d-none d-md-block">
       <h3>Løb</h3>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, sequi!</p>
       <button class="btn btn-outline-light btn-lg" type="button">L&aelig;s mere</button>
      </div>
    </div>
   
   <div class="carousel-item">
     <img src="img/SH.jpg" alt="New York">
     <div class="carousel-caption d-none d-md-block">
       <h3>Svømning</h3>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, sequi!</p>
       <button class="btn btn-outline-light btn-lg" type="button">L&aelig;s mere</button>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/Ballgames5.jpeg" alt="Los Angeles">
      <div class="carousel-caption d-none d-md-block">
       <h3>Andre aktiviteter</h3>
       <p>Lorem Ipsum</p>
       <button class="btn btn-outline-light btn-lg" type="button">L&aelig;s mere</button>
      </div>
    </div>

</div>

 <!-- Left and right controls -->
 <a class="carousel-control-prev" href="#demo" data-slide="prev">
   <span class="carousel-control-prev-icon"></span>
 </a>
 <a class="carousel-control-next" href="#demo" data-slide="next">
   <span class="carousel-control-next-icon"></span>
 </a>
</div>    

<br><br>

<div class="container compliant-center">
  <div class="row">

    <div class="col-md-4">
      <div class="w3-card">
        <img src="img/SH.jpg" alt="svøm" style="height:250px; width:100%;">
        <div class="w3-container">
          <h4><b>Svømning</b></h4> 
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, at.</p> 
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="w3-card">
      <img src="img/20170421-rynkeby-0184-1280x853.jpg" alt="løb" style="height:250px; width:100%;">
        <div class="w3-container">
          <h4><b>Løb</b></h4> 
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, est?</p> 
        </div>
      </div>
    </div>


    <div class="col-md-4">
      <div class="w3-card">
        <img src="img/Ballgames5.jpeg" alt="Andre aktiviteter" style="height:250px; width:100%;">
        <div class="w3-container">
          <h4><b>Andre aktiviteter</b></h4> 
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo, porro.</p> 
        </div>
      </div>
    </div>

    </div>
  
  </div>





<?php require('footer.php'); ?>