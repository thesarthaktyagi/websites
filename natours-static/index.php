<?php
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<link rel="stylesheet" href="icon-font.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<title> Natours | Exciting tours for adventurous people </title>
</head>
<body>
    <div class="navbar" style="  overflow: hidden;
  position: fixed; 
  top: 0px;  
  width:96%;
  
z-index: 800;">
 <div class="headerRegister" style="color:#7ed56f;background-color:#2d3436;padding:20px;text-align:center; position:relative;">
    <img src="img/logo-green-small-2x.png" alt="Logo" style="position: absolute;
    top: 32px;
    left: 40px;
    height:35px;" >
    
	<?php if(!isset($_SESSION['username'])): ?>
<P>                          YOU ARE CURRENTLY NOT SIGNED IN  &nbsp;&nbsp; <a href="login.php" class=" btn btn--green">Login</a> &nbsp;&nbsp; NOT A MEMBER YET ?  &nbsp;&nbsp;  <a href="signup.php"  class="btn btn--white">Signup</a> </P>
<?php else:  ?>
<p>You are logged in as <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> &nbsp;&nbsp; <a href="logout.php" class="btn btn--white">Logout</a> </p>
        
<?php endif ?>
    </div> 
    </div>
   <style>
        .navigation__checkbox {
  display: none; }

.navigation__button {
  background-color: #fff;
  height: 6rem;
  width: 6rem;
  position: fixed;
  top: 2rem;
  right: 6rem;
  border-radius: 50%;
  z-index: 6000;
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.1);
  text-align: center;
  cursor: pointer; }

.navigation__background {
  height: 3rem;
  width: 3rem;
  border-radius: 50%;
  position: fixed;
  top: 3rem;
  right: 8rem;
  background-image: linear-gradient(#7ed56f, #28b485);
  z-index: 999;
  transition: transform 0.8s cubic-bezier(0.86, 0, 0.07, 1); }

.navigation__nav {
  height: 100vh;
  width: 0;
  position: fixed;
  top: 0;
  right: 0;
  z-index: 1000;
  opacity: 0;
  transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55); }

.navigation__list {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  list-style: none;
  width: 100%; }

.navigation__item {
  margin: 1rem; }

.navigation__link:link, .navigation__link:visited {
  display: inline-block;
  font-size: 3rem;
  font-weight: 300;
  padding: 1rem 2rem;
  color: #fff;
  text-decoration: none;
  text-transform: uppercase;
  background-image: linear-gradient(120deg, transparent 0%, transparent 50%, #fff 50%);
  background-size: 223%;
  transition: all .4s; }
  .navigation__link:link span, .navigation__link:visited span {
    margin-right: 1.5rem;
    display: inline-block; }

.navigation__link:hover, .navigation__link:active {
  background-position: 100%;
  color: #55c57a; }

.navigation__checkbox:checked ~ .navigation__background {
  transform: scale(120); }

.navigation__checkbox:checked ~ .navigation__nav {
  opacity: 1;
  width: 100%; }

.navigation__icon {
  position: relative;
  margin-top: 3rem; }
  .navigation__icon, .navigation__icon::after, .navigation__icon::before {
    width: 3rem;
    height: 2px;
    background-color: #333;
    display: inline-block; }
  .navigation__icon::after, .navigation__icon::before {
    content: "";
    position: absolute;
    left: 0;
    transition: all .2s; }
  .navigation__icon::before {
    top: -.8rem; }
  .navigation__icon::after {
    top: .8rem; }

.navigation__button:hover .navigation__icon::before {
  top: -1rem; }

.navigation__button:hover .navigation__icon::after {
  top: 1rem; }

.navigation__checkbox:checked + .navigation__button .navigation__icon {
  background-color: transparent; }

.navigation__checkbox:checked + .navigation__button .navigation__icon::before {
  top: 0;
  transform: rotate(135deg); }

.navigation__checkbox:checked + .navigation__button .navigation__icon:after {
  top: 0;
  transform: rotate(-135deg); }
    
    
    </style>
    
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle" >
        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">
                &nbsp;
            </span>
        </label>
        <div class="navigation__background">&nbsp;</div>
        <nav class="navigation__nav">
             
             <ul class="navigation__list">
                 <li class="navigation__item"><a href="#" class="navigation__link"><span>01</span> About Natours</a></li>
                 <li class="navigation__item"><a href="profile.php" class="navigation__link"><span>02</span> Profile</a></li>
                 <li class="navigation__item"><a href="#" class="navigation__link"><span>03</span> Popular Tours</a></li>
                 <li class="navigation__item"><a href="#" class="navigation__link"><span>04</span> Book Now</a></li>
                 <li class="navigation__item"><a href="#" class="navigation__link"><span>05</span> LogIn</a></li>

             </ul>
             
        </nav>
    </div>
    

	
	<header class="header">
    <div class="header__text-box">
    	 <h1 class="heading-primary">
    	<span class="heading-primary--main">Outdoors</span>
    	<span class="heading-primary--sub">is where life happens</span>

    </h1>
		 <a href="#" class="btn btn--white btn--animated">Discover our tours</a>
    </div>
   

	</header>
    
   <main>
    <section class="section-about">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
            Exciting tours for adventurous people
            </h2>
         </div>
         <div class="row">
        <div class=col-1-of-2>    
            <h3 class="heading-tertiary u-margin-bottom-small"> You're going to fall in love with nature</h3>
            <p class="paragraph">
            Your experience and view of the world will surely change. Spending time  in nature represents a tremendous gift to you and your community, which unlocks the door to a profound experience of the unification of inner and outer nature with no separation. 
            </p>
            
            <h3 class="heading-tertiary u-margin-bottom-small"> Live adventurs like you never have before</h3>
            <p class="paragraph">
            A Deep Nature Journey offers an opportunity to push the pause button on the frenetic pace of modernity. 
            </p>
            
            <a href="#" class="btn-text">Learn more &rarr;</a>
        
        </div>
             
        <div class=col-1-of-2>    
                <div class="composition">
                    <img src="img/nat-1-large.jpg" alt="" class="composition__photo composition__photo--p1">
                    <img src="img/nat-2-large.jpg" alt="" class="composition__photo composition__photo--p2">
                    <img src="img/nat-3-large.jpg" alt="" class="composition__photo composition__photo--p3">
                </div>
        </div>
        </div>
       
        
         </section>
         
         <section class="section-features">
                   <div class="row">
                       <div class="col-1-of-4">
                           <div class="feature-box">
                                            <i class="feature-box__icon icon-basic-world"></i>
                                            <h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
                                            <p class="feature-box__text">
                                                We’re all seasoned travellers ourselves, and that experience underpins our responsible travel philosophy
                                            </p>

                       </div>
                   </div>   
                   
                   <div class="col-1-of-4">
                           <div class="feature-box">
                                            <i class="feature-box__icon icon-basic-compass"></i>
                                            <h3 class="heading-tertiary u-margin-bottom-small">Meet nature</h3>
                                            <p class="feature-box__text">
                                               We believe that by connecting with nature, you begin to care more about what happens in the world around you.
                                            </p>

                       </div>
                   </div>   
                   <div class="col-1-of-4">
                           <div class="feature-box">
                                            <i class="feature-box__icon icon-basic-map"></i>
                                            <h3 class="heading-tertiary u-margin-bottom-small">Find your way</h3>
                                            <p class="feature-box__text">
                                                The ultimate guide to what the land, sun, animals, trees,air,s sky and clouds can reveal
                                                -when you know what to look.
                                            </p>

                       </div>
                   </div>   
                   <div class="col-1-of-4">
                           <div class="feature-box">
                                            <i class="feature-box__icon icon-basic-heart"></i>
                                            <h3 class="heading-tertiary u-margin-bottom-small">Live a healthier life</h3>
                                            <p class="feature-box__text">
                                                The more activity you do, the more you get your heart pumping.You get the release of happy hormones by traveling with us.
                                            </p>

                       </div>
                   </div>   
             </div>   
         </section>
         
         <section class="section-tours">
              <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
            Most popular tours
            </h2>
         </div>

        <div class="row">
        <div class=col-1-of-3>    
        <div class="card">
            <div class="card__side card__side--front">
                <div class="card__picture card__picture-1">
                    &nbsp;
                </div>
                <h4 class="card__heading">
                   <span class="card__heading-span card__heading-span--1"> The Sea Explorer</span>
                   
                </h4>
                <div class="card__details">
                    <ul>
                        <li>3 days tour</li>
                        <li>Up to 30 people</li>
                        <li> 2 tour guides</li>
                        <li>Sleep in cozy hotels</li>
                        <li>Difficulty:easy</li>
                    </ul>
                </div>
            </div>
             <div class="card__side card__side--back card__side--back-1">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">&#8377; 20,500</p>
                                    </div>
                                    <a href="#" class="btn btn--white">Book now!</a>
                                </div>
                            </div>
                       </div>
                    </div>
  
        <div class=col-1-of-3>    
         <div class="card">
            <div class="card__side card__side--front">
                <div class="card__picture card__picture-2">
                    &nbsp;
                </div>
                <h4 class="card__heading">
                   <span class="card__heading-span card__heading-span--2"> The Forest Hiker</span>
                   
                </h4>
                <div class="card__details">
                    <ul>
                        <li>7 days tour</li>
                        <li>Up to 40 people</li>
                        <li> 6 tour guides</li>
                        <li>Sleep in provided tents</li>
                        <li>Difficulty:medium</li>
                    </ul>
                </div>
            </div>
             <div class="card__side card__side--back card__side--back-2">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">&#8377; 34,500</p>
                                    </div>
                                    <a href="#" class="btn btn--white">Book now!</a>
                                </div>
                            </div>
                       </div>
       
        </div>
        <div class=col-1-of-3>    
         <div class="card">
            <div class="card__side card__side--front">
                <div class="card__picture card__picture-3">
                    &nbsp;
                </div>
                <h4 class="card__heading">
                   <span class="card__heading-span card__heading-span--3"> The Snow Adventurer</span>
                   
                </h4>
                <div class="card__details">
                    <ul>
                        <li>5 days tour</li>
                        <li>Up to 15 people</li>
                        <li> 3 tour guides</li>
                        <li>Sleep in provided tents</li>
                        <li>Difficulty:hard</li>
                    </ul>
                </div>
            </div>
             <div class="card__side card__side--back card__side--back-3">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">&#8377; 62,000</p>
                                    </div>
                                    <a href="#" class="btn btn--white">Book now!</a>
                                </div>
                            </div>
                       </div>
       
        </div>
        </div>
          <div class="u-center-text u-margin-top-big">
            <a href="#" class="btn btn--green"> Discover all tours</a>
         </div>
         </section>
         
         <section class="section-stories">
             
             <div class="bg-video">
                 <video  class="bg-video__content" autoplay muted loop>
                     <source src="img/video.mp4" type="video/mp4">
                     <source src="img/video.webm" type="video/webm">
                     Your browser is not supported!
                 </video>
             </div>
             
             
              <div class="u-center-text u-margin-bottom-big">
                  <h2 class="heading-secondary">
                        We make people genuinely happy
                 </h2>
             </div>
             <div class="row">
                 <div class="story">
                     <figure class="story__shape">
                       <img src="img/nat-8.jpg" alt="person on a tour"class="story__img"> 
                       <figcaption class="story__caption">Mary Smith </figcaption> 
                     </figure>
                     <div class="story__text">
                         <h3 class="heading-tertiary u-margin-bottom-small">I had the best week ever with my family</h3>
                         <p>
                             Time outdoors is something that families can share at every stage of children’s lives, from gardening to walks around the neighborhood to exploring local rivers, beaches, parks and trails. 
                         </p>
                     </div>
                 </div>
             </div>
             
             <div class="row">
                 <div class="story">
                     <figure class="story__shape">
                       <img src="img/nat-9.jpg" alt="person on a tour"class="story__img"> 
                       <figcaption class="story__caption">Jack Wilson </figcaption> 
                     </figure>
                     <div class="story__text">
                         <h3 class="heading-tertiary u-margin-bottom-small">WOW! My life is completely different now</h3>
                         <p>
                             Life never stops teaching, and you never stop learning, but when you travel, the learning curve reaches a new high. Insight into new cultures, new languages, new stories.
                         </p>
                     </div>
                 </div>
             </div>
             
              <div class="u-center-text u-margin-top-big">
                    <a href="#" class=" btn-text"> Read all stories &rarr;</a>
             </div>
         
         </section>
         
         
         <section class="section-book">
             <div class="row">
                 <div class="book">
                    <div class="book__form">
                        <form action="#" class="form">
                            <div class=" u-margin-bottom-medium">
                                    <h2 class="heading-secondary">
                                           Start Booking Now 
                                    </h2>
                             </div>
                           
                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Full name" id="name" required>
                                <label for="name" class="form__label">Full name</label>
                            </div>
                            <div class="form__group">
                                <input type="email" class="form__input" placeholder="Email address" id="email" required>
                                <label for="email" class="form__label">Email address</label>
                            </div>
                            
                            <div class="form__group u-margin-bottom-medium">
                               
                               <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="small" name="size">
                                    <label for="small" class="form__radio-label">
                                    <span class="form__radio-button"></span>
                                    Small tour group</label>
                                </div>
                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="large" name="size">
                                    <label for="large" class="form__radio-label">
                                     <span class="form__radio-button"></span>
                                    Large tour group</label>
                                </div>
                            </div>
                            
                            <div class="form__group">
                                <button class="btn btn--green"> Next step &rarr;</button>
                            </div>
                        </form>
                    </div>
                     
                 </div>
             </div>
         </section>
         
    </main>
    
    <footer class="footer">
        <div class="footer__logo-box">
            <img src="img/logo-green-2x.png" alt="full logo" class="footer__logo">
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Contact us</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">carrers</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-1-of-2">
                <p class="footer__copyright">
                    Built by <a href="#" class="footer__link">VASS</a> for their <a href="#" class="footer__link"> minor project</a>
                    UNDER GUIDANCE OF JONAS SCHMEDTMANN. Copyright &copy; by VASS.VASS stands for  <a href="#" class="footer__link">Vikas Archit Shubham Sarthak</a> .You are not allowed to use this webpage for both personal and commercial use, and NOT to 
                    claim it as your own design.
                    
                </p>
            </div>
        </div>
    </footer>
    
    <!--
    <section class="grid-test">
    
        
        <div class="row">
        <div class=col-1-of-3>    
        col-1-of-3
        </div>
        <div class=col-1-of-3>    
        col-1-of-3
        </div>
        <div class=col-1-of-3>    
        col-1-of-3
        </div>
        </div>
        
        
        <div class="row">
        <div class=col-1-of-3>    
            col-1-of-3
        </div>
        <div class=col-2-of-3>    

            col-2-of-3
        </div>
        </div>
        
        
        <div class="row">
        <div class=col-1-of-4>    
        col-1-of-4
        </div>
        <div class=col-1-of-4>    
        col-1-of-4
        </div>
        <div class=col-1-of-4>    
        col-1-of-4
        </div>
        <div class=col-1-of-4>    
        col-1-of-4
        </div>
        </div>
        
        
        <div class="row">
        <div class=col-1-of-4>    
        col-1-of-4
        </div>
        <div class=col-1-of-4>    
        col-1-of-4
        </div>
        <div class=col-2-of-4>    
        col-2-of-4
        </div>
        </div>
        
        
        <div class="row">
        <div class=col-1-of-4>    
        col-1-of-4
        </div>
        <div class=col-3-of-4>    
        col-3-of-4
        </div>
        </div>
    </section>
    -->
</body>
</html>