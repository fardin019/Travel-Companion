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

        <!--sidebar-->
        <!--sideBAR-->
<link rel="stylesheet" href="sideBAR.css">
       <!--comment section-->
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!--google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Notable|Sawarabi+Mincho|Courgette|Oleo+Script|Merienda|Dancing+Script|Great+Vibes|Lobster|Satisfy&display=swap" rel="stylesheet"> 
        <!--css card-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="swiper.min.css">
        
        <!--footer-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        
        <link rel="stylesheet" href="stylefooter.css">
       
      
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style>
        body{
            font-family: 'Sawarabi Mincho', sans-serif;
            background-color:ivory;
            padding: 0;
            
        }
      h3,h1,h4{
        font-family: 'Sawarabi Mincho', sans-serif;
           
      }
        .main-body{
          margin-left: 60px;
            margin-right: 60px;
        }

          .image{
            background: url('1e.jpg');
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
        margin-top: 40%;
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

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
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
                        <div class="navbar-nav">
                            <a href="#" class="nav-item nav-link">SignUp/LogIn</a>
                        </div>
                    </div>
                </nav>
               
                <a class="weatherwidget-io" href="https://forecast7.com/en/n5d0939d10/tanga/" data-label_1="TANGA" data-label_2="WEATHER" data-theme="weather_one" >TANGA WEATHER</a>
        <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
        </script>
              <div class="img_container">
                    <div class="image"></div>
                    <div class="content">
                        <h1 class="img_txt">TANGA</h1>
                    
                        
                    </div>
                  </div>
                  
                 <div class="main-body">
                  <div>
                  

                     <div>  
                         <br>  
                         <div class="heading"><h1>ABOUT TANGA</h1></div>
                         <p>Tanga is Tanzania's second largest port and arguably the most attractive large town in the country. It's pleasant colonial streets are architecturally interesting and despite it being large, the place has a laid back sleepy atmosphere. From the 14th and 16th Century, Tanga was a principle starting point for Arab trade caravans heading into the interior. It kept its purpose even until recent times when in the 19th Century, Germany made it a supply port and constructed the railway line linking it to Moshi in the interior Kilimanjaro region. The town center faces the waterfront and the main shopping streets of Sokoine and Market Street run parallel to it. Tanga has numerous parks overlooking the harbour. One of the best attractions is Toten Island just offshore from the Tanga harbour. The Island contains ruins of two 14th century mosques and pillared tombs. Another historical attraction can be found in Tongoni. Tongoni is a small fishing village 17km south of Tanga; the 15th Century ruins of a mosque and forty tombs can be found in the village. The Amboni Caves are definitely worth a visit. This Jurassic system is said to extend over 200 square kilometers. On a visit you are guided around with flaming palm torches which add another dimension to the legends of ritual offerings to the deity that is said to reside there. As well as many more attractions, Tanga offers spectacular views of the Usambara mountains which form the backdrop of this very charming Town.

 
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
                            <img src="lake_magoroto.jpg" width="300" height="300">
                        </div>
                        <div class="details">
                            <h3>Lake Magoroto<br><span>Magoroto Forest</span></h3>
                        </div>
                    </div>
                     
                    <div class="swiper-slide">
                      <div class="imgBx">
                          <img src="maziwe island marine reserve.jpg" width="300" height="300">
                      </div>
                      <div class="details">
                          <h3>Maziwe Marine Reserve<br><span>Maziwe Island</span></h3>
                      </div>
                      </div>

                    <div class="swiper-slide">
                          <div class="imgBx">
                              <img src="pangani_kijongoBayBeachResort.jpg" width="300" height="300">
                          </div>
                          <div class="details">
                              <h3>Kijongo Bay Beach Resort<br><span>Pangani</span></h3>
                          </div>
                      </div>


                      <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="irente_biodiversity_reserve.jpg" width="300" height="300">
                        </div>
                        <div class="details">
                            <h3>Irente Biodiversity Reserve<br><span>Lushoto</span></h3>
                        </div>
                        </div>


                
                      <div class="swiper-slide">
                              <div class="imgBx">
                                  <img src="ushongo_beach_pangani.jpg" width="300" height="300">
                              </div>
                              <div class="details">
                                  <h3>Ushongo Beach<br><span>Pangani</span></h3>
                              </div>
                          </div>
                          <div class="swiper-slide">
                                  <div class="imgBx">
                                      <img src="peponi beach resort.jpg" width="300" height="300">
                                  </div>
                                  <div class="details">
                                      <h3>Peponi Beach Resort<br><span>Peponi</span></h3>
                                  </div>
                              </div>
                                
                                  <div class="swiper-slide">
                                          <div class="imgBx">
                                              <img src="irente_view_cliff_lushoto.jpg" width="300" height="300">
                                          </div>
                                          <div class="details">
                                              <h3>Irente View Cliff<br><span>Lushoto
                                              </span></h3>
                                          </div>
                                      </div>         
                                      
                                      
                     </div>
                   <!--Add Pagination -->
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            
             
      <br><div class="heading"><h3>PLACES IN TANGA THAT WILL MAKE YOUR STAY EXCITING</h3></div>

      <div class="container">
    <div class="row">
  <div class="col-4-lg">
  <div class="card" style="width:18rem">
    <img class="card-img-top" src="magoroto.jpg" alt="Card image" width="18rem" height="215px">
    <div class="card-body">
      <h4 class="card-title">Magoroto</h4>
      <p class="card-text"></p>
      <a href="magoroto_pg.php" class="btn btn-primary stretched-link">Learn more...</a>
    </div>
    </div>
  </div>

  <div class="col-4-lg ml-5">
        <div class="card" style="width:18rem">
          <img class="card-img-top" src="Pangani.jpg" alt="Card image" width="18rem" height="215px">
          <div class="card-body">
            <h4 class="card-title">Pangani</h4>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary stretched-link">Learn more...</a>
          </div>
          </div>
        </div>

        
                <div class="col-4-lg ml-5">
                        <div class="card" style="width:18rem">
                          <img class="card-img-top" src="amboni_caves.jpg" alt="Card image" width="18rem" height="215px">
                          <div class="card-body">
                            <h4 class="card-title">Amboni Caves</h4>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-primary stretched-link">Learn more...</a>
                          </div>
                          </div>
                        </div>
  </div>
</div>

<div class="container">
        <div class="row">
      <div class="col-4-lg">
      <div class="card" style="width:18rem">
        <img class="card-img-top" src="maziwe island.jpg" alt="Card image" width="18rem" height="215px">
        <div class="card-body">
          <h4 class="card-title">Maziwe Island</h4>
          <p class="card-text"></p>
          <a href="#" class="btn btn-primary stretched-link">Learn more...</a>
        </div>
        </div>
      </div>
    
      <div class="col-4-lg ml-5">
            <div class="card" style="width:18rem">
              <img class="card-img-top" src="ushongo_beach_pangani.jpg" alt="Card image" width="18rem" height="215px">
              <div class="card-body">
                <h4 class="card-title">Ushongo Beach</h4>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary stretched-link">Learn more...</a>
              </div>
              </div>
            </div>
    
            
                    <div class="col-4-lg ml-5">
                            <div class="card" style="width:18rem">
                              <img class="card-img-top" src="img-irente-biodiversity-01.jpg" alt="Card image" style="width:100%">
                              <div class="card-body">
                                <h4 class="card-title">Irente Biodiversity Reserve</h4>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary stretched-link">Learn more...</a>
                              </div>
                              </div>
                            </div>
      </div>
    </div>

    
      </div>
    </div>
    <br><br>
<div class="main-body">
    <div class="heading"><h3>COMMENTS</h3></div>
    
    
    
   <form method="POST" id="comment_form">
    <div class="form-group">
    <input type="hidden" name="comment_name" id="comment_name" class="form-control" value="<?php echo $usr_name; ?>"/>   </div>
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
  
      </div>
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
   url:"add_comment_tanga.php",
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
   url:"fetch_comment_tanga.php",
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