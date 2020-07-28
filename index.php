<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$sujet=$_POST['sujet'];
$msg=$_POST['msg'];


$sql ="INSERT INTO email(name,email,sujet,msg) VALUES(:name, :email, :sujet, :msg)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':name', $name, PDO::PARAM_STR);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':sujet', $sujet, PDO::PARAM_STR);
$query-> bindParam(':msg', $msg, PDO::PARAM_STR);
$query->execute();

$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script type='text/javascript'>alert('email Sucessfull!');</script>";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}
else 
{
$error="Something went wrong. Please try again";
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>House Stark Coworking Space
    </title>
    
    <!-- Bootstrap CSS -->
    <link rel = "icon" href ="img/hsorigin.png" 
            type = "image/x-icon"> 
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/events.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    
    <link rel="stylesheet" href="css/cards-gallery.css">

    <style>
    td 
    {
      max-width: 50px; /* add this */

    }
    #dropbtn {

}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  margin-left:50px;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  margin-left:40px;
  color: green;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:click {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
  </head>

  <body>
    <!-- Header Section Start --> 
    <header id="slider-area">  
      <nav  class="navbar navbar-expand-md fixed-top scrolling-navbar " id="navmobile">
        <div class="container">
                     
          <a class="navbar-brand" href="index.php"><img src="hs.png" height="100" width="80" name="logo1"></a>
          <button id="navtog" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lni-menu"></i>
            </button> 
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">NOS SERVICES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#event-section-title">NOS EVENEMENTS</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#espace">NOTRE ESPACE</a>
              </li>                            
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#equipe">NOTRE EQUIPE</a>
              </li> 
              
              <li class="nav-item dropdown">
              
              <a class="nav-link page-scroll dropdown-toggle" href="../usermanage/index.php" method="GET" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">LOGIN</a> 
              <div class="dropdown-menu" style="margin-left:100px;">
                    <a class="dropdown-item" href="../usermanage/index.php">Utilisateur</a><i class="fa fa-user" aria-hidden="true"></i>
                   <a class="dropdown-item" href="../usermanage/admin/index.php">Administrateur<i class="fa fa-user" aria-hidden="true"></i></a>
                   
                  </div>
              </li>
               </li> 
            </ul>  
            
             
            
          </div>
          
        </div>
      </nav> 
     
      

      <!-- Main Carousel Section -->
      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="img/slider/1.jpg" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInRight" data-wow-delay="0.2s">Hello there</h3>  
                <h2 class="wow fadeInRight" data-wow-delay="0.4s">Welcome to House Stark!</h2>
                <h4 class="wow fadeInRight" data-wow-delay="0.6s">It's nice seeing you here !</h4>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slider/2.jpg" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Bonjour</h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Bienvenue a house Stark</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.9s">On est ravi de vous voir ici!</h4>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slider/3.jpg" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Bonjour</h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Bienvenue a house Stark</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.9s">On est ravi de vous voir ici!</h4>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>  

    </header>
    <!-- Header Section End --> 
    <br>
    <br>
    <br>
    <br>
    <!-- Services Section Start -->
    
    <section id="services" class="section">
      
      <div class="section-header">          
        <h2 class="section-title">NOS SERVICES</h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
          <!-- Blog Item Starts -->
          <div class="blog-item-wrapper">
            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
              <div class="flipper">
                <div class="front">
                  <!-- front content -->
                  <img src="img/services/desk.jpg" id="img1">
                </div>
                <div class="back">
                  <!-- back content -->
                  
                  <img src="img/services/pricing.jpg" id="img1">
                  <a href="register.php" class="btn btn-md" id="btn">Réserver</a>
    
                </div>
              </div>
            </div>
            
            </div>
          </div>
          <!-- Blog Item Wrapper Ends-->
        

        <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
          <!-- open space card begin-->
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
          <div class="flipper">
            <div class="front">
              <!-- front content -->
              <img src="img/services/training.jpg"  id="img2">
            </div>
            <div class="back">
              <!-- back content -->
              <img src="img/services/Training-Meeting1.jpg" id="img2">
              <a href="MeetingTraining.php" class="btn btn-md" id="btn">Réserver</a>
            </div>
          </div>
        </div>
        </div>
        <!-- open space card end-->

          <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
              <!-- open space card begin-->
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <!-- front content -->
                <img src="img/services/Private.jpg" id="img3">
              </div>
              <div class="back">
                <!-- back content -->
                <img src="img/services/private_back1.jpg" id="img3">
                <a href="registerdesks.php" class="btn btn-md" id="btn">Réserver</a>
              </div>
            </div>
          </div>
            </div>

        
          <!-- Blog Item Wrapper Ends-->
        </div>

    
  </section>



    
    <!-- Subcribe Section Start -->
    <section class="events-section">
    <div  class="section" id="event-section">
        <div class="section-header">          
            <h2 class="section-title" id="event-section-title">NOS EVENEMENTS</h2>
        </div> 
          <div class="wow fadeInRight" data-wow-delay="0.4s" >
            <div class="text-center">  
            
            
            
            <?php
             $sql = "SELECT * from  events where id= ( SELECT MAX(id) FROM events )";
              $query = $dbh -> prepare($sql);
              $query->execute();
              $results=$query->fetch(PDO::FETCH_OBJ);
              
			
?>

<div class="media">
  <img style="max-height:500px;" src="../usermanage/admin/images/<?php echo htmlentities($results->image);?>" class="img-fluid" alt="...">
  <div class="media-body">
    <h5 class="mt-6" style="color:#1abc9c"><?php echo htmlentities($results->titre);?></h5>
    <h6 class="mt-6" style="color:#1abc9c"><?php echo htmlentities($results->date);?></h6>

    <p style="color:white"><?php echo htmlentities($results->description);?></p>
    <button onclick="window.location.href = '<?php echo htmlentities($results->inscription);?>'" class="btn btn-common btn-effect" id="submit" type="submit" style="margin-right:500px;margin-top:20px;">S'inscrire</button>

  </div>
</div>


          
    
        
</section>
      <!-- Subcribe Section End -->
    <!-- Call to Action Start -->
    <section class="call-action section">
        <div>
          <section id="blog" class="section">
            <!-- Container Starts -->
            <div class="container">
              <div class="section-header">          
                <h2 class="section-title">Anciens evennenements</h2>
                </div>
                <div class="row">
                <?php
             $sql = "SELECT * from  old_events ";
              $query = $dbh -> prepare($sql);
              $query->execute();
              $results=$query->fetchAll(PDO::FETCH_OBJ);
              if($query->rowCount() > 0)
{ 
foreach($results as $result)
{				?>
    <?php 
    $i++;
    ?>	

              
                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                  <!-- Blog Item Starts -->
                  <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        
                      <a href="events/event<?php echo htmlentities($i);?>/uber/index.php">
                        <div id="layer">
                        <img style="height:250px;width:350px;"src="../usermanage/admin/images/<?php echo htmlentities($result->image);?>" alt="" class="image">
                        </div>
                      </a>                
                    </div>
                    <div class="blog-item-text"> 
                      <div class="date"><i class="lni-calendar"></i><?php echo htmlentities($result->date);?></div>
                      <h3><a href="events/event<?php echo htmlentities($i);?>/uber/index.php"><?php echo htmlentities($result->titre)?></a></h3>
                    </div>
                  </div>
                  
                </div>



              
                <?php }} ?>
                
      <!-- Blog Item Wrapper Ends-->
                

                
                  <!-- Blog Item Wrapper Ends-->
                </div>
              </div>
            </div>
          </section>
    
    <!-- Call to Action End -->

    
    

    <!-- Start Video promo Section -->
    <section class="video-promo section" style="background:url(ccc.jpg);background-repeat: no-repeat;background-size: 100% ;border:none;  background-position: center;">
     
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="video-promo-content text-center">
              <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Notre video introductive!</h2>
              <iframe width="1024" height="576" src="https://www.youtube.com/embed/75EN0QTBcNs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    <!-- Portfolio Section -->
    
      <!-- Container Starts -->
    

        <!-- Portfolio Recent Projects -->
        
    <!-- Portfolio Section Ends --> 

    <!-- Start Pricing Table Section -->
    <section>
      <div>
        <section id="espace" class="section">
          <!-- Container Starts -->
          <div class="container">
            <div class="section-header">          
              <h2 class="section-title">Notre Espace</h2>
              
              
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                  <div class="blog-item-img">
                    <a href="openspacegallerie/uber/index.php">
                      
                      <div id="layer">
                             
                        <div id="layer">
                          
                        </div>
                      <img src="1.png" alt="" class="image">
                      </div>
                    </a>                
                  </div>
                </div>
                <!-- Blog Item Wrapper Ends-->
              </div>
    
              <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                  <!-- Blog Item Starts -->
                  <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                      <a href="privatedeskgallerie/uber/index.php">
                        
                        <div id="layer">
                               
                          <div id="layer">
                            
                          </div>
                        <img src="22.png" alt="" class="image">
                        </div>
                      </a>                
                    </div>
                  </div>
                  <!-- Blog Item Wrapper Ends-->
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper">
                      <div class="blog-item-img">
                        <a href="trainingmeetinggallerie/uber/index.php">
                          
                          <div id="layer">
                                 
                            <div id="layer">
                              
                            </div>
                          <img src="33.png" alt="" class="image">
                          </div>
                        </a>                
                      </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                  </div>

              
                <!-- Blog Item Wrapper Ends-->
              </div>
            </div>
          </div>
        </section>
      </div>
    <section>
    <!-- End Pricing Table Section -->

    <!-- Counter Section Start -->
    <div class="counters section bg-defult">
      <div class="container">
        <div class="row"> 
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item"> 
              <div class="icon">
                <i class="lni-rocket"></i>
              </div>                
              <div class="fact-count">
                <h3><span class="counter">100</span>%</h3>
                <h4>Professionnel</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lni-coffee-cup"></i>
              </div>                
              <div class="fact-count">
                <h3><span class="counter">300</span></h3>
                <h4>Tasses de café</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lni-user"></i>
              </div>                
              <div class="fact-count">
                <h3><span class="counter">350</span>+</h3>
                <h4>Clients</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lni-heart"></i>
              </div>                
              <div class="fact-count">
                <h3><span class="counter">3000</span></h3>
                <h4>Personnes aime</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Counter Section End -->

    <!-- Testimonial Section Start -->
    <section class="testimonial section" >
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="touch-slider owl-carousel">
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/male.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Client</a></h2>
                      <span>Élève</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">C'est un endroit calme , joli et bien organisé , j'ai beacoup aimée le decor , en plus il y'a une connexion haut de debit.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/female.png" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Cliente </a></h2>
                      <span>Élève</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">L'endroit est propre et trés motivant pour la révision , j'aime bien l'ambiance ici , c'est un nouveau concept a M'saken <br></p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/male.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Client</a></h2>
                      <span>Freelancer</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">un ami m'en a parlé , c'est un endroit tranquille où vous pouvez travailler et vous concentrer sur vos objectifs sans que personne ne vous interrompe </p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star"></i></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/female.png" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Cliente</a></h2>
                      <span>Etudiante</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">L'espace est accessible, situé au centre ville de M'saken , moderne , pas cher , bien équipé et surtout donne beaucoup d'ondes positives pour bien réviser<br></p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                  </div>
                </div>
              </div>
      </div>
    </section>
    <!-- Testimonial Section End --> 

    <!-- Call To Action Section Start -->
    <section id="cta" class="section" data-stellar-background-ratio="0.5" style="background:url(aaa.jpg);background-size: 100% ;border:none;  background-position: center;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12">            
            <div class="cta-text">
              <h5>Connaitre notre merveilleuse equipe!</h5>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- Call To Action Section Start -->

    <!-- Team section Start -->
    <section id="equipe" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Notre Equipe</h2>
          
         
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-xs-12">
            
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/1.png" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Ahmed Gharmoul</h4>
                  <p>Chief Technical Officier</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="https://www.facebook.com/gharmoul.ahmed"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/Gharmoul97"><i class="lni-twitter-filled"></i></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/in/ahmed-gharmoul/"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/2.png" alt="">
              <div class="team-details">
                <div class="team-inner">                  
                  <h4 class="team-title">Majid Benabdallah</h4>
                  <p>Chief Executive Officer</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="https://www.facebook.com/next0n"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/MajidBenabda?fbclid=IwAR1CKQD6gg98AMv1n8xIzWCGZ7afxOngUYiHqNHS6yFrzwSONx-kI9s1UPU"><i class="lni-twitter-filled"></i></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/in/unavailable/"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            
          </div>
        </div>
      </div>
    </section>
    <!-- Team section End -->

    <!-- Subcribe Section Start -->
    
    <!-- Subcribe Section End -->

    <!-- Blog Section -->
    
    <!-- blog Section End -->

   

    <!-- Contact Section Start -->
    <section id="contact" class="section">      
      <div class="contact-form">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Contactez nous</h2>
            
            
          </div>

          <div class="row">          
            <div class="col-lg-9 col-md-9 col-xs-12">
              <div class="contact-block">


                <form id="contactForm" action="https://formspree.io/housestarkspace@gmail.com" method="POST" encType="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input  class="form-control" id="name" name="name" placeholder="Votre nom" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="email" placeholder="Votre Email" id="email" class="form-control" name="_replyto" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" name="message" placeholder="Votre Message" rows="7" data-error="Write your message" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button">
                      <button class="btn btn-common btn-effect" id="submit" type="submit" >Envoyer</button>
                         <div id="msgSubmit" class="h3 hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
              <div class="contact-deatils">
                <!-- Content Info -->
                <div class="contact-info_area">
                  <div class="contact-info">
                    <i class="lni-map"></i>
                    <h5>Emplacement</h5>
                    <p>Rue Taieb Hachicha , Immeuble Kifeji 3éme étage, 4070 , M'saken</p>
                  </div>
                  <!-- Content Info -->
                  <div class="contact-info">
                    <i class="lni-star"></i>
                    <h5>E-mail</h5>
                    <p>housestarkspace@gmail.com</p>
                  </div>
                  <!-- Content Info -->
                  <div class="contact-info">
                    <i class="lni-phone"></i>
                    <h5>Numero</h5>
                    <p>55935796 - 92444889</p>
                  </div>
                  <!-- Icon -->
                  <ul class="footer-social">
                  <li><a class="facebook" href="https://www.facebook.com/housestarkspace/"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="linkedin" href="https://www.instagram.com/housestark_space/"><i class="lni-instagram-filled"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </section>
    <!-- Contact Section End -->
    
    <!-- Map Section Start -->
    <section id="google-map-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 padding-0">
            <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12954.406585072174!2d10.5827656!3d35.7360143!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6f99335bf591784c!2sHouse+STARK+Coworking+Space!5e0!3m2!1sfr!2stn!4v1556029965829!5m2!1sfr!2stn"></object>
          </div>
        </div>
      </div>
    </section>
    <!-- Map Section End -->

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <h3>House Stark</h3>
              <div class="textwidget"style="width:450px">
                <p>Le premier coworking space à M'saken-Sousse</p>
              </div>
              <ul class="footer-social">
                <li><a class="facebook" href="https://www.facebook.com/housestarkspace/"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="linkedin" href="https://www.instagram.com/housestark_space/"><i class="lni-instagram-filled"></i></a></li>

           
                
              </ul> 
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Contactez nous</h3>
                <ul class="contact-footer">
                  <li>
                    <strong>Addresse :</strong> <span>C4 ,3éme étage , Immeuble Kifaji , Rue Taieb Hachicha , 4070 , Msaken</span>
                  </li>
                  <li>
                    <strong>Numero :</strong> <span>55935796 - 92444889</span>
                  </li>
                  <li>
                    <strong>E-mail :</strong> <span><a href="#">Housestarkspace@gmail.com</a></span>
                  </li>
                </ul> 
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Instagram</h3>
                <ul class="instagram-footer">
                  <li><a href="https://www.instagram.com/housestark_space/"><img src="img/instagram/1.jpg" alt=""></a></li>
                  <li><a href="https://www.instagram.com/housestark_space/"><img src="img/instagram/2.jpg" alt=""></a></li>
                  <li><a href="https://www.instagram.com/housestark_space/"><img src="img/instagram/3.jpg" alt=""></a></li>
                  <li><a href="https://www.instagram.com/housestark_space/"><img src="img/instagram/4.jpg" alt=""></a></li>
                  <li><a href="https://www.instagram.com/housestark_space/"><img src="img/instagram/55.jpg" alt=""></a></li>
                  <li><a href="https://www.instagram.com/housestark_space/"><img src="img/instagram/6.jpg" alt=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->
      
      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info float-left">
                <p>Made By <a href="#" rel="nofollow">House Stark</a></p>
              </div>              
              
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/color-switcher.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>     
    <script src="js/wow.js"></script> 
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>  
    <script src="js/form-validator.min.js"></script>
        
    <script src="js/main.js"></script>
    
    <script>
      // Get the modal
      var modal = document.getElementById('id01');
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      $('.carousel').carousel()
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
                


            });
            function flip() {
    $('.flip-container').toggleClass('flipped');
}

function myFunction() {
  var x = document.getElementById("Demo");
  if (x.className.indexOf("w3-show") == -1) {  
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
    </script>
      
  </body>
</html>
