<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TC Travel Companion</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" href="HPTC.css">
        <link rel="stylesheet" href="stylefooter.css">
        <link rel="stylesheet" href="sideBAR.css">
        <link rel="stylesheet" href="frontIMG.css">
         <!--google fonts-->
         <link href="https://fonts.googleapis.com/css?family=Notable|Sawarabi+Mincho|Courgette|Oleo+Script|Merienda|Dancing+Script|Great+Vibes|Lobster|Satisfy&display=swap" rel="stylesheet"> 

        <style>
             body{
            font-family: 'Sawarabi Mincho', sans-serif;
            background-color:ivory;
            padding: 0;
            
        }
        .content{
                height: 200%;
                transform-origin: top left;
                transition: transform 0.7s cubic-bezier(1, 0.005,0.24,1);
                background-color: #ddeeff;
            }
            
            .menu_toggle {
                z-index: 900;
                position: absolute; 
                top: 0;
                left: 0;
                display: block;
                cursor: pointer;
                width: 100px;
                height: 80px;
                background-color: cadetblue;
                border-bottom-right-radius: 100%
            }
            .menu_toggle:active i {
                opacity: 0.8;
            }
            .menu_toggle i {
                color: antiquewhite;
            }
            .menu_toggle .menu_open, .menu_toggle .menu_close {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -15px;
                margin-left: -12px;
                transition: transform 0.7s cubic-bezier(1, 0.005, 0.24, 1);
            }
            .menu_toggle .menu_open {
                transform-origin: -100px -100px;
            }
            .menu_toggle .menu_close {
                transform: rotate(20deg);
                transform-origin: -100px -160px;
            }
            .menu_items {
                position: fixed;
                bottom: 0;
                left: 50px;
                list-style: none;
                margin: 0;
                padding: 0;
            }
            .menu_items li {
                height: 60px;
                margin-bottom: 30px;
                transform: translateX(-300px);
                transition: transform 0.7s 0s cubic-bezier(1, 0.005, 0.24, 1);
            }
            .menu_items li:nth-child(2){
                margin-left: 40px;
            }
            .menu_items li:nth-child(3){
                margin-left: 80px;
            }
            .menu_items a {
                display: block;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: cornflowerblue;
                transition: color 0.2s;
            }
            .menu_items a .icon {
                position: absolute;
                top: 50%;
                left: 50%;
                content: '';
                display: block;
                width: 60px;
                height: 60px;
                margin-left: -33px;
                margin-top: -32px;
                border-radius: 100%;
                border: 2px solid #f0f0f0;
                transition: border-color 0.2s;
            }
            .menu_items a:hover {
                color: #f0f0f0;
            }
            .menu_items a:hover .icon:after {
                border-color: #f37272;
            }
            .menu_items a:active .icon {
                color: #f37272;
            }
            .real .content {
                transform: rotate(-30deg);
            }
            .real .menu_open {
                transform: rotate(-20deg);
            }
            .real .menu_close {
                transform: rotate(0);
            }
            .real .menu_items li {
                transform: translateX(0);
                transition: transform 0.35s 0.45s cubic-bezier(0.175,0.885,0.32,1.275);
            }
            .real .menu_items li:nth-child(2){
                transition-delay: 0.47s;
            }
            .real .menu_items li:nth-child(3){
                transition-delay: 0.48s;
            }
            .gallery {
                display: grid;
                grid-template-columns: repeat(8, 1fr);
                grid-template-rows: repeat(10, 5vw);
                grid-gap: 15px;
            }
            .gallery__img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            
            .gallery__item--1 {
                grid-column-start: 2;
                grid-column-end: 5;
                grid-row-start: 1;
                grid-row-end: 4;
            }
            .gallery__item--2 {
                grid-column-start: 5;
                grid-column-end: 8;
                grid-row-start: 1;
                grid-row-end: 7;
            }
            .gallery__item--3 {
                grid-column-start: 2;
                grid-column-end: 5;
                grid-row-start: 4;
                grid-row-end: 7;
            }
            .gallery__item--4 {
                grid-column-start: 2;
                grid-column-end: 8;
                grid-row-start: 7;
                grid-row-end: 11;
            }
            /*nav bar fonts*/
    .navbar-brand{
      font-family: 'Great Vibes', cursive;
    font-size: 45px;
    }
    .navbar-nav{
      font-family: 'Merienda', cursive;
      font-size: 20px;
    }
    .form-inline{
      font-family: 'Merienda', cursive;
      font-size: 20px;
    }
        </style>
    </head>
    <body>
            <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: #ddeeff;">
                    <a href="#" class="navbar-brand"><b>Travel Companion</b></a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                    
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="homepage.php" class="nav-item nav-link active">Home</a>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Destinations</a>
                                <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Arusha</a>
                                        <a href="#" class="dropdown-item">Dar es salaam</a>
                                        <a href="#" class="dropdown-item">Dodoma</a>
                                        <a href="#" class="dropdown-item">Iringa</a>
                                        <a href="#" class="dropdown-item">Lindi</a>
                                        <a href="#" class="dropdown-item">Manyara</a>
                                        <a href="#" class="dropdown-item">Mbea</a>
                                        <a href="#" class="dropdown-item">Mwanza</a>
                                        <a href="#" class="dropdown-item">Morogoro</a>
                                        <a href="#" class="dropdown-item">Tabora</a>
                                        <a href="Tanga.php" class="dropdown-item">Tanga</a>
                                        <a href="#" class="dropdown-item">Ruvuma</a>
                                        
                                        <a href="Zanzibar.php" class="dropdown-item">Zanzibar</a>
                                </div>
                            </div>
                        </div>
                        <form id="form_result" class="form-inline">
                            <div class="nav-item dropdown">
                                 <div class="form-group">                    
                                     <input type="text" class="form-control"  name="username" id="textbox" placeholder="Search">
                                     <button class="btn btn-small btn-primary" type="submit" id="text1">Search</button>
                                 </div>
                                 <div id="result" class="dropdown-item"></div>
                           
                             </div>
                            </form>
                        
                </nav>
            <div class="front-img">
                <section class="b1">
                    <div class="in1">
                      <div class="text_content">
                        <h1>Work,</h1>
                        <h1>Save,</h1>
                        <h1>TRAVEL,</h1>
                        <h1>Repeat.</h1>
                      </div>
                  </div>
                </section>
            </div>
           <!--<div class="jumbotron jumbotron-fluid">
                <div class="row">
                <div class="col-md-4">
                <center>
                    <table>
                        <h5>Wanna explore more?</h5>
                        <h6>SignUp to get notified on new and exciting places!</h6>
                    </table>
                </center>
                </div>
               <div class="col-md-4">
                    <input type="email" name="email" placeholder="Enter your Email" class="form-control">
                    <br>
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary">Join Our Newsletter</button>
                    </div>
                </div>
                </div>
            </div>-->
            <div class="sideBAR">
                    <div class="contact-info">
                            <a href="profile.php"><div class="option">
                              <i class="fas fa-id-badge"></i>
                              <div class="text">Profile</div>
                            </div></a>
                        
                            <a href="home.php"><div class="option">
                              <i class="fas fa-camera"></i>
                              <div class="text">Share</div>
                            </div></a>
                        
                            <a href="homepage_0.php"><div class="option">
                              <i class="fas fa-sign-out-alt"></i>
                              <div class="text">Sign-out</div>
                            </div></a>
                          </div>
            </div>
            <div class="jumbotron jumbotron-fluid">
                <div class="gallery">
                        <figure class="gallery__item gallery__item--1">
                           <a href=""><img src="chemka_of_arusha.jpg" class="gallery__img" alt="Image 1"></a>
                           <div class="post-s"><h2>Arusha</h2></div>
                        </figure>
                        <figure class="gallery__item gallery__item--2">
                            <a href=""><img src="2nd.jpg" class="gallery__img" alt="Image 2"></a>
                            <div class="post-s"><h2>Dar-es-salaam</h2></div>
                        </figure>
                        <figure class="gallery__item gallery__item--3">
                            <a href="Tanga.php"><img src="1e.jpg" class="gallery__img" alt="Image 3"></a>
                            <div class="post-s"><h2>Tanga</h2></div>
                        </figure>
                        <figure class="gallery__item gallery__item--4">
                            <a href="Zanzibar.php"><img src="znz_coast.jpg" class="gallery__img" alt="Image 4"></a>
                            <div class="post-s"><h2>Zanzibar</h2></div>
                        </figure>
                </div>
            </div>

            <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      <br>
      <h4>&nbsp;&nbsp;&nbsp;Results</h4>
        <div class="modal-header">
         <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <!--<h4 class="modal-title">Result</h4>-->
        </div>
        <div id ="result2" class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!--livesearch-->
<script src="search.js"></script>

 
    </body>
    <footer>
            <div class="footer-main-div">
                    <div class="footer-social-icons">
                        <ul>
                            <li><a href="#" target="blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#" target="blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="blank"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer-menu-one">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                    <div class="footer-menu-two">
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Media</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
            
                </div>
            </footer>
</html>