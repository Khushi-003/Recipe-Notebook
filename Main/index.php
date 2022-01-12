<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <title>Home</title>
  <style>
    <?php include "../css/style.css" ?>
  </style>
</head>

<body>
  <?php
  // if (!isset($_SESSION)) {
  //   session_start();
  // }
  include('../database/db_connection.php') ?>
  <header>
    <div class="Header">
      
      <div class="logo">
        <img src="../assets/klogo.png" alt="logo" class="logo">
      </div>
      
      <div class="dropdown">
        <button class="name noselect" id="new">Saved </button>
        <div class="dropdown-content">
          <a href="../Dropdown/all.php">All</a>
          <a href="../Dropdown/starter.php">Starter</a>
          <a href="../Dropdown/main.php">Main</a>
          <a href="../Dropdown/dessert.php">Dessert</a>
          <a href="../Dropdown/drink.php">Drink</a>
        </div>
      </div>
     
      <div class="nav">
        <a href="../Dropdown/form.php" class="name noselect" id="new"> New + </a>
      </div>
      <div class="cen">
        <p>Recipe Notebook</p>
      </div>
    </div>
    <br><br>
  </header>
 
  <hr>
  <div class="columns" id="one">
   <div class="column">
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.blueosa.com/wp-content/uploads/2020/01/the-best-top-10-indian-dishes.jpg" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.adityabirlacapital.com/healthinsurance/active-together/wp-content/uploads/2019/08/Blog-Images-3-1.jpg" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.rewardsnetwork.com/wp-content/uploads/2016/12/IndianFood_Main.jpg" class="d-block w-100 h-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="column">
  <h2>Indian cuisine</h2><br><br>
  <p class="info">Indian cuisine consists of a variety of regional and traditional cuisines <br> native to the Indian subcontinent. <br> Given the diversity in soil, climate, culture, ethnic groups, and occupations, <br> these cuisines vary substantially and use locally available spices, <br> herbs, vegetables, and fruits.</p>
</div>
</div>
<div class="columns" id="two">
   <div class="column">
     <h2>Italian cuisine </h2><br><br>
     <p class="info">Italian cuisine ranks alongside French cuisine in terms of worldwide fame. <br> Pizza and pasta have become world dishes, which are not only cooked  <br>
     in restaurants, but also by most home cooks. <br> No matter where they grow up in Europe, <br> all children are familiar with Italian dishes, <br> such as pizza Margherita and spaghetti bolognese.
</p>
</div>
<div class="column">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://fondue.bg/wp-content/uploads/2019/09/italiancuisine.jpg" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.britannica.com/50/226650-131-65E076CA/varieties-of-pasta.jpg" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://tableagent.s3.amazonaws.com/media/crumbs/xl/93_50.jpg" class="d-block w-100 h-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<div class="columns" id="three">
   <div class="column">
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.saga.co.uk/contentlibrary/saga/publishing/verticals/travel/destinations/north-america/mexican-cuisine-km.jpg" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/free-photo/mexican-street-corn-salad-with-cheese-nachos-chips-black-plate-top-view-mexican-food-concept_79830-3056.jpg?size=626&ext=jpg" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://health.clevelandclinic.org/wp-content/uploads/sites/3/2015/11/healthyMexicanFood-1045433744-770x533-1.jpg" class="d-block w-100 h-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="column">
  <h2>Mexican cuisine</h2><br><br>
  <p class="info">Mexican cuisine consists of the cooking cuisines and traditions of the modern country of Mexico. Its roots lie in Mesoamerican cuisine. Its ingredients and methods begin with the <br> 
   first agricultural communities such as the Maya who domesticated maize, created the standard process of maize nixtamalization,  and established their foodways (Maya cuisine). 
    <br> Successive waves of other Mesoamerican groups brought with them their own cooking methods. These included: the Olmec, Teotihuacanos, Toltec, Huastec, Zapotec, Mixtec, Otomi,
     <br> Purépecha, Totonac, Mazatec, Mazahua, and Nahua. </p>
</div>
</div>  
  <hr>
  <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Khushi Mahesh Orpadia</h3>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About: </h3>
                        <ul>
                            <li><a href="#">Computer Science Student</a></li>
                            <li><a href="#">I dont believe in good grades</a></li>
                            <li><a href="#">Maybe coz I dont get one ..shhh!</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Careers</h3>
                        <ul>
                            <li><a href="#">Completed Jr. Clg in Computer Science</a></li>
                            <li><a href="#">Pursuing B.Sc. CS</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="https://github.com/Khushi-003"><i class="icon ion-social-github"></i></a><a href="https://twitter.com/KhushiOrpadia"><i class="icon ion-social-twitter"></i></a><a href="https://www.linkedin.com/in/khushi-orpadia-1974011b7/"><i class="icon ion-social-linkedin"></i></a><a href="https://www.instagram.com/khushiorpadia/"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">khushi Orpadia © 2021</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>