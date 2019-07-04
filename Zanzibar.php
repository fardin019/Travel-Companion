<?php

session_start();
    $usr_name=$_SESSION['user_name'];
?>


<!DOCTYPE html>
<html>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" charset="UTF-8"></script><script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<!--sideBAR-->
<link rel="stylesheet" href="sideBAR.css">
       

       <!--comment section-->
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!--google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Notable|Sawarabi+Mincho|Courgette|Oleo+Script|Merienda|Dancing+Script|Great+Vibes|Lobster|Satisfy&display=swap" rel="stylesheet"> 
        <!--css card-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="swiper.min.css">
        
        <link rel="stylesheet" href="stylefooter.css">
       
        <!--footer-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style>
        body{
            font-family: 'Sawarabi Mincho', sans-serif;
            background-color:ivory;
            padding: 0;
            
        }
      h3 , h1{
        font-family: 'Sawarabi Mincho', sans-serif;
      }
        .main-body{
          margin-left: 60px;
            margin-right: 60px;
        }

          .image{
            background: url('707275_zanzibar-wallpaper.jpg');
            background-size: 100%;
            height: 500px;
    
            left: 0;
            right: 0;
            z-index: -1;
            filter :blur(0px);
            -webkit-filter: blur(0px);
        }

       
        .img_container .content {
  position: absolute;
  top: 0;
  
  color:black;
  width: 99%%;
  padding: 20px;
}
       .img_txt{
        margin-top: 30%;
         padding: 30px;
         font-family: 'Courgette', cursive;
        font-size: 100px;
       }

       .container{
      margin-top: 5%;
      margin-left: 13%;
  }


  .card:hover{
      -webkit-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
      -moz-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
      box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
  }
  .card-title{
    color:cadetblue;
  }
  swiper_body {
      background: #262626;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      padding-top: 0;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 400px;
      height: 400px;
      background: #fff;
    }
    .swiper-slide .imgBx{
        width: 100%;
        height:300px;
        overflow: hidden;
    }
    .swiper-slide .imgBx img{
        width: 100%;
    }
    .swiper-slide .details{
        box-sizing: order-box;
        padding: 20px;
    }
    .swiper-slide .details h3{
        margin: 0;
        padding: 0;
        font-size: 20px;
        text-align: center;
        line-height: 20px;
    }
    .swiper-slide .details h3 span{
        font-size:16px;
        color:cadetblue;
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
    /*Introduction*/
    .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}


.column {
  -ms-flex: 25%;
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}
.panel-heading{
  color:grey
}

        </style>
       
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: #ddeeff;">
                    <div class="navbar-brand"><b>Travel Companion</b></div>
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
               
      <a class="weatherwidget-io" href="https://forecast7.com/en/n6d1739d20/zanzibar-city/" data-label_1="ZANZIBAR" data-label_2="WEATHER" data-theme="weather_one" >ZANZIBAR WEATHER</a>
      <script>
      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
      </script>
           <div class="img_container">
                    <div class="image"></div>
                    <div class="content">
                        <h1 class="img_txt">ZANZIBAR</h1>
                    
                        
                    </div>
                  </div>
                  
                 <div class="main-body">
                  <div>
                  

                     <div>  
                         <br>  
                         <div class="heading"><h1>ABOUT ZANZIBAR</h1></div>
            <p>Zanzibar is an archipelago made up of Zanzibar and Pemba Islands, and several islets.It
                    is located in the Indian Ocean, about 25 miles from the Tanzanian coast, and 6° south of
                    the equator. Zanzibar Island (known locally as Unguja, but as Zanzibar internationally) is
                    60 miles long and 20 miles wide, occupying a total area of approximately 650 square miles.
                    It is characterised by beautiful sandy beaches with fringing coral reefs, and the magic of
                    historic Stone Town – said to be the only functioning ancient town in East Africa.
                      Zanzibar is a tropical paradise featuring palm-studded beaches and crystal-clear waters, majestic gothic architecture, and stunning scenery. The island has a rich cultural heritage, featuring diverse cultures and influences. Zanzibar is a popular choice for travellers looking for an island holiday destination that offers everything.<br>
    
      </p>
    </div>
          </div>
<br>
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
    
    <!-- Swiper -->
    <div class="swiper_body">
            <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Zanzibar_Red_Colobus_Monkey.jpg" width="300" height="300">
                        </div>
                        <div class="details">
                            <h3>Red Colobus Monkey<br><span>Jozani Chwaka Bay National Park</span></h3>
                        </div>
                    </div>
          
                    <div class="swiper-slide">
                          <div class="imgBx">
                              <img src="Lion_Aslan.jpg" width="300" height="300">
                          </div>
                          <div class="details">
                              <h3>White Lion<br><span>Cheetah's Rock</span></h3>
                          </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="13_870_chumbe-island-trips.jpg" width="300" height="300">
                        </div>
                        <div class="details">
                            <h3>Amazing Coral Reef<br><span>Chumbe Island</span></h3>
                        </div>
                        </div>
                
                      <div class="swiper-slide">
                              <div class="imgBx">
                                  <img src="Zuri-Beach.jpg" width="300" height="300">
                              </div>
                              <div class="details">
                                  <h3>Zuri Beach<br><span>Kendwa</span></h3>
                              </div>
                          </div>
                          <div class="swiper-slide">
                                  <div class="imgBx">
                                      <img src="stone town 5.jpg" width="300" height="300">
                                  </div>
                                  <div class="details">
                                      <h3>Stone Town<br><span>Zanzibar City</span></h3>
                                  </div>
                              </div>
                                
                                  <div class="swiper-slide">
                                          <div class="imgBx">
                                              <img src="zanzibar-baby-giant-tortoises.jpg" width="300" height="300">
                                          </div>
                                          <div class="details">
                                              <h3>Giant Tortoise<br><span>Prison Island</span></h3>
                                          </div>
                                      </div>           
                     </div>
                   <!--Add Pagination -->
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            
             
      <br><div class="heading"><h3>PLACES IN ZANZIBAR THAT WILL MAKE YOUR STAY EXCITING</h3></div>

    <div class="container">
    <div class="row">
  <div class="col-4-lg">
  <div class="card" style="width:18rem">
    <img class="card-img-top" src="stone town 4.jpg" alt="Card image" width="18rem" height="215px">
    <div class="card-body">
      <h4 class="card-title">Stone Town</h4>
      <p class="card-text"></p>
      <a href="#" class="btn btn-primary stretched-link">See Profile</a>
    </div>
    </div>
  </div>

  <div class="col-4-lg ml-5">
        <div class="card" style="width:18rem">
          <img class="card-img-top" src="foro.jpg" alt="Card image" width="18rem" height="215px">
          <div class="card-body">
            <h4 class="card-title">Forodhani</h4>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary stretched-link">See Profile</a>
          </div>
          </div>
        </div>

        
                <div class="col-4-lg ml-5">
                        <div class="card" style="width:18rem">
                          <img class="card-img-top" src="prison-island.jpg" alt="Card image" width="18rem" height="215px">
                          <div class="card-body">
                            <h4 class="card-title">Prison Island</h4>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-primary stretched-link">See Profile</a>
                          </div>
                          </div>
                        </div>
  </div>
</div>

<div class="container">
        <div class="row">
      <div class="col-4-lg">
      <div class="card" style="width:18rem">
        <img class="card-img-top" src="cheetah rock.jpg" alt="Card image" width="18rem" height="215px">
        <div class="card-body">
          <h4 class="card-title">Cheetah's Rock</h4>
          <p class="card-text"></p>
          <a href="#" class="btn btn-primary stretched-link">See Profile</a>
        </div>
        </div>
      </div>
    
      <div class="col-4-lg ml-5">
            <div class="card" style="width:18rem">
              <img class="card-img-top" src="Chumbe-Island-Coral-Tour-04.jpg" alt="Card image" width="18rem" height="215px">
              <div class="card-body">
                <h4 class="card-title">Chumbe Island</h4>
                <p class="card-text"></p>
                <a href="chumbe_island.php" class="btn btn-primary stretched-link">Learn more</a>
              </div>
              </div>
            </div>
    
            
                    <div class="col-4-lg ml-5">
                            <div class="card" style="width:18rem">
                              <img class="card-img-top" src="jozani-forest-tour-zanzibar-mangrove-boarwalk.jpg" alt="Card image" style="width:100%">
                              <div class="card-body">
                                <h4 class="card-title">Jozani Chwaka Bay National Park</h4>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary stretched-link">Learn more</a>
                              </div>
                              </div>
                            </div>
      </div>
    </div>

    <div class="container">
        <div class="row">
      <div class="col-4-lg">
      <div class="card" style="width:18rem">
        <img class="card-img-top" src="old_fort.jpg" alt="Card image" width="18rem" height="215px">
        <div class="card-body">
          <h4 class="card-title">Old Fort of Zanzibar</h4>
          <p class="card-text"></p>
          <a href="#" class="btn btn-primary stretched-link">See Profile</a>
        </div>
        </div>
      </div>
    
      <div class="col-4-lg ml-5">
            <div class="card" style="width:18rem">
              <img class="card-img-top" src="sandbank-znz.jpg" alt="Card image" width="18rem" height="215px">
              <div class="card-body">
                <h4 class="card-title">Sandbank</h4>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary stretched-link">See Profile</a>
              </div>
              </div>
            </div>
    
            
                    <div class="col-4-lg ml-5">
                            <div class="card" style="width:18rem">
                              <img class="card-img-top" src="house of wonders.jpg" alt="Card image" width="18rem" height="215px">
                              <div class="card-body">
                                <h4 class="card-title">House of Wonders</h4>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary stretched-link">See Profile</a>
                              </div>
                              </div>
                            </div>
      </div>
    </div>
    
    <br><br>
    <div class="heading"><h3>COMMENTS</h3></div>
    
    
    
    
   <form method="POST" id="comment_form">
    <div class="form-group">
    <input type="hidden" name="comment_name" id="comment_name" class="form-control" value="<?php echo $usr_name; ?>"/>
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  

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

            <script type="text/javascript" src="swiper.min.js"></script>
            <script>
              var swiper = new Swiper('.swiper-container', {
                  effect: 'coverflow',
                  grabCursor: true,
                  centeredSlides: true,
                  slidesPerView: 'auto',
                  coverflowEffect: {
                    rotate: 60,
                    stretch: 0,
                    depth: 500,
                    modifier: 1,
                    slideShadows : true,
                  },
                  pagination: {
                    el: '.swiper-pagination',
                  },
                });
            </script>

<script>
        $(document).ready(function(){
    
            $('.col-4-lg').hover(
                //trigger when mouse hover
                function(){
                    $(this).animate({
                        marginTop: "-=1%",
                    },200);
                },
    
                //trigger when mouse out
                function(){
                $(this).animate({
                    marginTop: "0%"
                },200);
    
                }
            );
        });
    /*comment*/
    $(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment_znz.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment_znz.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
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