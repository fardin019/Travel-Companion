<?php
session_start();

$usr_name=$_SESSION['user_name'];
    $conn = new mysqli('localhost', 'root', '', 'ratinngsystem2');

    if (isset($_POST['save2'])) {
        $uID = $conn->real_escape_string($_POST['uID']);
        $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
        $ratedIndex++;

        if (!$uID) {
            $conn->query("INSERT INTO stars_magoroto (rateIndex) VALUES ('$ratedIndex')");
            $sql = $conn->query("SELECT id FROM stars_magoroto ORDER BY id DESC LIMIT 1");
            $uData = $sql->fetch_assoc();
            $uID = $uData['id'];
        } else
            $conn->query("UPDATE stars_magoroto SET rateIndex='$ratedIndex' WHERE id='$uID'");

        exit(json_encode(array('id' => $uID)));
    }

    $sql = $conn->query("SELECT id FROM stars_magoroto");
    $numR = $sql->num_rows;

    $sql = $conn->query("SELECT SUM(rateIndex) AS total FROM stars_magoroto");
    $rData = $sql->fetch_array();
    $total = $rData['total'];

    
?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" charset="UTF-8"></script><script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
       
       <!--sideBAR-->
<link rel="stylesheet" href="sideBAR.css">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Notable|Sawarabi+Mincho|Courgette|Oleo+Script|Merienda|Dancing+Script|Great+Vibes|Lobster|Satisfy&display=swap" rel="stylesheet"> 
       
    <!--comments-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="stylefooter.css">
       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
<style>
* {
  box-sizing: border-box;
}
.main-body{
          margin-left: 60px;
            margin-right: 60px;
        }

body{
            font-family: 'Sawarabi Mincho', sans-serif;
            background-color:ivory;
            padding: 0;
            
        }
        h3{
  font-family: 'Sawarabi Mincho', sans-serif;
}
      
 /*nav bar fonts*/
 .navbar-brand{
      font-family: 'Great Vibes', cursive;
    font-size: 45px;
    color:white;
    }
    .navbar-nav{
      font-family: 'Merienda', cursive;
      font-size: 20px;
    }
    .form-inline{
      font-family: 'Merienda', cursive;
      font-size: 20px;
    }
  
.heading{
  font-family: 'Dancing Script', cursive;
  font-size: 60px;
}
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

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}
.panel-heading{
  color:grey;
}
/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
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
                <div class="main-body">

                <div class="heading"><b>Magoroto Forest</b></div>
                <p>Magoroto forest is situated in the East Usambara mountains in north-east Tanzania. The East Usambaras form part of the mountain chain called the Eastern Arc which ranges from southern Kenya to southern Tanzania. These mountains are known for their high levels of species endemism and rich floral and faunal diversity (Hamilton, 1989). 

Magoroto with its tropical rain forest is the perfect spot for a getaway.The estate is located on an altitude of 850m above sea level where temperatures are pleasant all year long. The estate offers stunning views from the Muheza Valley to the Indian ocean. Enjoy the lush rain forest with rare plants and bird species, explore the dense tropical forest with organic spices  or have a picnic or swim in our beautiful lake!<br>

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

  <h3><b><i>Tell people what you think about this place!</i></b></h3>
  <div align="left" class="w3-panel w3-grey w3-card-4 w3-round-xlarge" style="margin-right: 982px; margin-left: 40px; padding: 10px;color:white;">
        <i class="fa fa-star fa-2x" data-index="0"></i>
        <i class="fa fa-star fa-2x" data-index="1"></i>
        <i class="fa fa-star fa-2x" data-index="2"></i>
        <i class="fa fa-star fa-2x" data-index="3"></i>
        <i class="fa fa-star fa-2x" data-index="4"></i>
        
    </div>
<div class="heading">Stunning Photos on Magoroto Forest</div>
<!-- Photo Grid -->
<div class="container">
<div class="row"> 
  <div class="column">
    <img src="mag1.jpg" style="width:100%">
    <img src="mag4.jpg" style="width:100%">
    <img src="mag6.jpg" style="width:100%">
      </div>
  <div class="column">
    <img src="mag7.jpg" style="width:100%">
    <img src="mag9.jpg" style="width:100%">
    <img src="mag3.jpg" style="width:100%">
      </div>  
  <div class="column">
    <img src="mag10.jpg" style="width:100%">
    <img src="mag8.jpg" style="width:100%">
   
      </div>
  <div class="column">
  <img src="mag2.jpg" style="width:100%">
    <img src="mag5.jpg" style="width:100%">
    <img src="mag11.jpg" style="width:100%">
     </div>
</div>
</div>
<br><br>
<h3>For more information and contacts,visit <a href="http://www.magoroto.com/"><i> Magoroto Forest Estate</i></a></h3>
<br>

  <h3>COMMENTS</h3>
  <div class="container">
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


  <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>

            
<script>
        var ratedIndex = -1, uID = 0;

        $(document).ready(function () {
            resetStarColors();

            if (localStorage.getItem('ratedIndex') != null) {
                setStars(parseInt(localStorage.getItem('ratedIndex')));
                uID = localStorage.getItem('uID');
            }

            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
               localStorage.setItem('ratedIndex', ratedIndex);
               saveToTheDB();
            });

            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();

                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        });

        function saveToTheDB() {
            $.ajax({
               url: "magoroto_pg.php",
               method: "POST",
               dataType: 'json',
               data: {
                   save: 1,
                   uID: uID,
                   ratedIndex: ratedIndex
               }, success: function (r) {
                    uID = r.id;
                    localStorage.setItem('uID', uID);
               }
            });
        }

        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', 'yellow');
        }

        function resetStarColors() {
            $('.fa-star').css('color', 'white');
        }
    </script>
s<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment_magoroto.php",
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
   url:"fetch_comment_magoroto.php",
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