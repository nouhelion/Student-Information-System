<?php
 include("auth_admin.php");
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
                    <li><a href="index_admin.php">ACCUEIL</a></li>
                    <li><a href="index_admin.php">CHECK STUDENTS</a></li>
                    <div class="dropdown">
                         <button class="dropbtn">CHARTS
                         <i class="fa fa-caret-down"></i>
                         </button>
                      <div class="dropdown-content">
                         <a href="index_admin.php">Filieres</a>
                         <a href="index_admin.php">Villes</a>
                         <a href="index_admin.php">Séries Baccalauréat</a>
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
     <?php 
     $sql = " select * from students where login_user='".$_GET["login_user"]."'";
     $result = $link->query($sql);
     $row = mysqli_fetch_assoc($result);
                 echo "<table>";
                 echo "<thead>";
                 echo " <tr style='text-align: center;'>";
                 echo "<th>Nom Complet</th>";
                 echo " <th>Sexe</th>";
                 echo " <th>Série Baccalauréat</th>";
                 echo " <th>Filiere</th>";
                 echo " <th>Adresse</th>";
                 echo " <th>Ville</th>";
                 echo " <th>Username</th>";
                 echo " <th>Email</th>";
                 echo "</tr>";
                 echo "</thead>";
                 echo "<tr>";
                 echo "<td>" .$row['nom_user']."</td>";
                 echo "<td>" .$row['sexe_user']."</td>";
                 echo "<td>" .$row['serie_bacc']."</td>";
                 echo "<td>" .$row['filiere']."</td>";
                 echo "<td>" .$row['adresse_user']."</td>";
                 echo "<td>" .$row['ville']."</td>";
                 echo "<td>" .$row['login_user']."</td>";
                 echo "<td>" .$row['mail_user']."</td>";
                 echo " </tr>";
                 echo "</table> ";
     ?>
   
     

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