
<?php
 include("auth_admin.php");
 include("filieres_votes.php");
 include("ville_votes.php");
 include("bacc_votes.php");
 $query ="SELECT * FROM filieres";
 $result=mysqli_query($link,$query);
 $quer="SELECT * FROM villes";
 $result2=mysqli_query($link,$quer);
 $quer2="SELECT * FROM series";
 $result3=mysqli_query($link,$quer2);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" type="image/jpg" href="logo.png" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="table_admin.css">
    <title>ADA Institute of Technology</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        //filieres_votes
        var data = google.visualization.arrayToDataTable([
          ['filiere', 'nombre des etudiants'],
          <?php
              while($chart=mysqli_fetch_assoc($result))
              {
                  echo "['".$chart['nom']."',".$chart['nbr']."],";
              }
          ?>
        ]);
        var options = {
          title: 'Les votes de Filières'
        };
        var chart = new google.visualization.PieChart(document.getElementById('filieres'));
        chart.draw(data, options);
        //villes_votes
        var d = google.visualization.arrayToDataTable([
          ['ville', 'nombre des etudiants'],
          <?php
              while($ch=mysqli_fetch_assoc($result2))
              {
                  echo "['".$ch['nom']."',".$ch['nbr']."],";
              }
          ?>
        ]);
        var opt = {
          title: 'Les votes de Villes'
        };
        var ch = new google.visualization.PieChart(document.getElementById('villes'));
        ch.draw(d, opt);

        //series_votes
        var dodo = google.visualization.arrayToDataTable([
          ['series', 'nombre des etudiants'],
          <?php
              while($ch1=mysqli_fetch_assoc($result3))
              {
                  echo "['".$ch1['nom']."',".$ch1['nbr']."],";
              }
          ?>
        ]);
        var opt1 = {
          title: 'Les votes de Séries de baccalauréat'
        };
        var ch1 = new google.visualization.PieChart(document.getElementById('series'));
        ch1.draw(dodo, opt1);
      }
    </script>
     <style>
        .btn{
     width:150px;
     height: 40px;
     outline:none;
     border:none;
     border-radius:48px;
     background-color:#1c2b4b;
     color:white;
     text-transform: uppercase;
     font-weight:700;
     margin:10px 0;
     transition:all 0.5s;
 } 
 .btn:hover{
    background-color:#4e7ff1;
 }
 .dropbtn {
  background-color: #1c2b4b;
  color: white;
  padding: 16px;
  font-size: 12px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #578aff}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #1c2b4b;
} 
.search-container {
    float: center;
  }
  input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}
.search-container button {
  float: center;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 300px) {
   .search-container {
    float: none;
  }
   input[type=text],  .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
   input[type=text] {
    border: 1px solid #ccc;  
  }
}
    </style>
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/logo.png" alt="" /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">ACCUEIL</a></li>
                    <li><a href="#check-students">CHECK STUDENTS</a></li>
                    <div class="dropdown">
                         <button class="dropbtn">CHARTS
                         <i class="fa fa-caret-down"></i>
                         </button>
                      <div class="dropdown-content">
                         <a href="#fil">Filieres</a>
                         <a href="#vil">Villes</a>
                         <a href="#ser">Séries Baccalauréat</a>
                      </div>
                     </div> 
                    <li><a href="#"><?php echo $login_session; ?></a></li>
                    <!--for connecting-->
                </ul>
            </div>

        </div>
    </div>
    <!--NAVBAR SECTION END-->
    <div class="home-sec" id="home">
        <div class="overlay">
            <div class="container">
                <div class="row text-center ">

                    <div class="col-lg-12  col-md-12 col-sm-12">

                        <div class="flexslider set-flexi" id="main-section">
                            <ul class="slides move-me">
                                <!-- Slider 01 -->
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>THE UNIQUE METHOD</h1>
                                    <button class="btn solid"  onclick="window.location.href='logout.php'">Log Out</button>
                                </li>
                                <!-- End Slider 01 -->

                                <!-- Slider 02 -->
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>UNIQUE APPROACH</h1>
                                    <button class="btn solid"  onclick="window.location.href='logout.php'">Log Out</button>
                                </li>
                                <!-- End Slider 02 -->

                                <!-- Slider 03 -->
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>ADA - Institute of Technology</h1>
                                    <button class="btn solid"  onclick="window.location.href='logout.php'">Log Out</button>
                                </li>
                                <!-- End Slider 03 -->
                            </ul>
                        </div>

                       


                    </div>

                </div>
            </div>

        </div>

    </div>
    <!--HOME SECTION END-->
    <div id="check-students" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line">SEARCH</h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                <div class="search-container" >
                 <form action="checkstudents.php" method="POST" >
                   <input type="text" placeholder="Search.." name="search"  required>
                     <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                         </form>
                     </div>
                </p>
            </div>
            
        </div>
    </div>
    
    <br>
    <br>
    <br>

    <div >
        <div class="container set-pad">
            <div class="row text-center" id="fil">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">CHART-FILIERES</h1>
                    <p data-scroll-reveal="enter from the bottom after 0.3s">
                    <div id="filieres" style="width: 900px; height: 500px;"></div>
                    </p>
                    <br>
                      <br>
                </div>
            </div>
           
    
            <div class="row text-center" id="vil">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">CHART-VILLES</h1>
                    <p data-scroll-reveal="enter from the bottom after 0.3s">
                    <div id="villes" style="width: 900px; height: 500px;"></div>
                    </p>
                    <br>
                      <br>
                </div>
            </div>

            <div class="row text-center" id="ser">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">CHART-SERIES</h1>
                    <p data-scroll-reveal="enter from the bottom after 0.3s">
                    <div id="series" style="width: 900px; height: 500px;"></div>
                    </p>
                    <br>
                      <br>
                </div>
            </div>
    </div>
    


    <!-- CONTACT SECTION END-->

    <!-- FOOTER SECTION END-->

    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts -->
    <script src="assets/js/jquery.flexslider.js"></script>
    <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts -->
    <script src="assets/js/custom.js"></script>
    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>

</html>