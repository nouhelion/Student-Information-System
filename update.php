<?php
include('auth_student.php');
//nom_user
$sql="SELECT nom_user as nom
    FROM students
     where login_user='$login_session'";
    $result = mysqli_query($link,$sql);
    $value=mysqli_fetch_assoc($result);
    $nom=$value['nom'];
//prenom_user

//sexe_user
$sql="SELECT sexe_user as sexe
    FROM students
     where login_user='$login_session'";
    $result = mysqli_query($link,$sql);
    $value=mysqli_fetch_assoc($result);
    $sexe=$value['sexe'];
//serie_bacc
$sql="SELECT serie_bacc as 'serie'
    FROM students
     where login_user='$login_session'";
    $result = mysqli_query($link,$sql);
    $value=mysqli_fetch_assoc($result);
    $serie=$value['serie'];
//mail_user
$sql="SELECT mail_user as mail
    FROM students
     where login_user='$login_session'";
    $result = mysqli_query($link,$sql);
    $value=mysqli_fetch_assoc($result);
    $mail=$value['mail'];
//adresse_user
$sql="SELECT adresse_user as adresse
    FROM students
     where login_user='$login_session'";
    $result = mysqli_query($link,$sql);
    $value=mysqli_fetch_assoc($result);
    $adresse=$value['adresse'];
//ville
$sql="SELECT ville as 'ville'
FROM students
 where login_user='$login_session'";
$result = mysqli_query($link,$sql);
$value=mysqli_fetch_assoc($result);
$ville=$value['ville'];
//tel_user
$sql="SELECT tel_user as tel
    FROM students
     where login_user='$login_session'";
    $result = mysqli_query($link,$sql);
    $value=mysqli_fetch_assoc($result);
    $tel=$value['tel'];
//cin_user
$sql="SELECT cin_user as cin
    FROM students
     where login_user='$login_session'";
    $result = mysqli_query($link,$sql);
    $value=mysqli_fetch_assoc($result);
    $cin=$value['cin'];
//filiere
$sql="SELECT filiere as filiere
    FROM students
     where login_user='$login_session'";
    $result = mysqli_query($link,$sql);
    $value=mysqli_fetch_assoc($result);
    $filiere=$value['filiere'];
//login_user
$sql="SELECT login_user as 'login'
    FROM students
     where login_user='$login_session'";
    $result = mysqli_query($link,$sql);
    $value=mysqli_fetch_assoc($result);
    $login=$value['login'];
//password_user
$sql="SELECT password_user as 'password'
    FROM students
     where login_user='$login_session'";
    $result = mysqli_query($link,$sql);
    $value=mysqli_fetch_assoc($result);
    $password=$value['password'];
?>
<!DOCTYPE html>
<html lang="en">
<?php
   
    if(isset($_POST['submit']))
    {
        $nom = mysqli_real_escape_string($link, $_REQUEST['nom']);
        $sexe = mysqli_real_escape_string($link, $_REQUEST['sexe']);
        $serie = mysqli_real_escape_string($link, $_REQUEST['serie']);
        $email= mysqli_real_escape_string($link, $_REQUEST['email']);
        $adresse = mysqli_real_escape_string($link, $_REQUEST['adresse']);
        $ville = mysqli_real_escape_string($link, $_REQUEST['ville']);
        $tel = mysqli_real_escape_string($link, $_REQUEST['tel']);
        $login = mysqli_real_escape_string($link, $_REQUEST['username']);
        $password = mysqli_real_escape_string($link, $_REQUEST['passwo']);
        $cin= mysqli_real_escape_string($link, $_REQUEST['cin']);
        $filiere = mysqli_real_escape_string($link, $_REQUEST['filiere']);

        $sql="UPDATE students
        SET 
            nom_user = '$nom',
            sexe_user= '$sexe',
            mail_user= '$email',
            adresse_user= '$adresse',
            tel_user= '$tel',
            login_user= '$login',
            password_user= '$password',
            cin_user= '$cin',
            filiere='$filiere',
            serie_bacc='$serie',
            ville='$ville'
        WHERE
        login_user='$login_session'";
    if(mysqli_query($link, $sql))
    {
      header("Location: index_student.php");
    } 
    else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
  mysqli_close($link);
    }
    ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/jpg" href="logo.png" />
  <link rel="stylesheet" href="register.css">
  <title>Modifier</title>
  
</head>

<body>

<div class="container">
            <div class="forms-container">
                <div class="sign-in-up">
                    <form action="" method="POST" class="sign-up-form">
                        <h2 class="title">Modification de Donn??es</h2>
                            <div class="input-field">
                                <i class="fa fa-user"></i>
                                <input type="text" name="nom"   value="<?php echo $nom; ?>">
                            </div>
                           
                            <div class="radioButtons">
                            <i class="fa fa-male"></i>
                                 M <input  type="radio" name="sexe" value="M" id="male" checked="<?php echo ($sexe== 'M') ?  "checked" : "" ;  ?> " >
                                 <i class="fa fa-female"></i>
                                 F <input   type="radio" name="sexe" value="F" id="female" checked="<?php echo ($sexe== 'F') ?  "checked" : "" ;  ?> ">
                            </div>
                            
                          
                            <div class="input-field">
            <i class="fa fa-address-card-o"></i>
            <input  name="cin"   value="<?php echo $cin; ?>" >
                            </div>
                            <div class="input-field" id="user">
                                <i class="fa fa-phone"></i>
                                <input type="text" name="tel" value="<?php echo $tel; ?>"required>
                            </div>
                           <div class="input-field">
                           <i class="fa fa-graduation-cap"></i>
                           <select name="serie"  id="ville" >
                <option value=""  <?php echo ($serie== '') ?  "selected" : "" ;?> >S??RIE BACCALAUREAT</option>
                <option value="Sciences de la Vie et de la Terre" <?php echo ($serie== 'Sciences de la Vie et de la Terre') ?  "selected" : "" ;?>>Sciences de la Vie et de la Terre</option>
                <option value="Sciences Physiques et Chimiques" <?php echo ($serie== 'Sciences Physiques et Chimiques') ?  "selected" : "" ;?>>Sciences Physiques et Chimiques</option>
                <option value="Sciences Maths A" <?php echo ($serie== 'Sciences Maths A') ?  "selected" : "" ;?>>Sciences Maths A</option>
                <option value="Sciences Maths B" <?php echo ($serie== 'Sciences Maths B') ?  "selected" : "" ;?>>Sciences Maths B</option>
                <option value="Sciences Economiques" <?php echo ($serie== 'Sciences Economiques') ?  "selected" : "" ;?>>Sciences Economiques</option>
                <option value="Techniques de Gestion et de Comptabilit??" <?php echo ($serie== 'Techniques de Gestion et de Comptabilit??') ?  "selected" : "" ;?>>Techniques de Gestion et de Comptabilit??</option>
                <option value="Sciences et Technologies Electriques" <?php echo ($serie== 'Sciences et Technologies Electriques') ?  "selected" : "" ;?>>Sciences et Technologies Electriques</option>
                <option value="Sciences et Technologies M??caniques" <?php echo ($serie== 'Sciences et Technologies M??caniques') ?  "selected" : "" ;?>>Sciences et Technologies M??caniques</option>
            </select>
                           </div>
            <div class="input-field">
            <i class="fa fa-map-pin"></i>
                                <input  name="adresse" value="<?php echo $adresse; ?>" >
                            </div>
                          <div class="input-field" >
                          <i class="fa fa-map"></i>
                          <select name="ville"  id="ville">
                <option value="" <?php echo ($ville== '') ?  "selected" : "" ;?>>REGION</option>
                <option value="Tanger ??? T??touan ??? Al Hoceima" <?php echo ($ville== 'Tanger ??? T??touan ??? Al Hoceima') ?  "selected" : "" ;?>>Tanger ??? T??touan ??? Al Hoceima</option>
                <option value="Oriental" <?php echo ($ville== 'Oriental') ?  "selected" : "" ;?>>Oriental</option>
                <option value="F??s - Mekn??s" <?php echo ($ville== 'F??s - Mekn??s') ?  "selected" : "" ;?>>F??s - Mekn??s</option>
                <option value="Rabat-Sal??-K??nitra" <?php echo ($ville== 'Rabat-Sal??-K??nitra') ?  "selected" : "" ;?>>Rabat-Sal??-K??nitra</option>
                <option value="B??ni Mellal-Kh??nifra" <?php echo ($ville== 'B??ni Mellal-Kh??nifra') ?  "selected" : "" ;?>>B??ni Mellal-Kh??nifra</option>
                <option value="Casablanca-Settat" <?php echo ($ville== 'Casablanca-Settat') ?  "selected" : "" ;?>>Casablanca-Settat</option>
                <option value="Marrakech-Safi" <?php echo ($ville== 'Marrakech-Safi') ?  "selected" : "" ;?>>Marrakech-Safi</option>
                <option value="Dr??a-Tafilalet" <?php echo ($ville== 'Dr??a-Tafilalet') ?  "selected" : "" ;?>>Dr??a-Tafilalet</option>
                <option value="Souss-Massa" <?php echo ($ville== 'Souss-Massa') ?  "selected" : "" ;?>>Souss-Massa</option>
                <option value="Guelmim-Oued Noun" <?php echo ($ville== 'Guelmim-Oued Noun') ?  "selected" : "" ;?>>Guelmim-Oued Noun</option>
                <option value="La??youne-Sakia El Hamra" <?php echo ($ville== 'La??youne-Sakia El Hamra') ?  "selected" : "" ;?>>La??youne-Sakia El Hamra</option>
                <option value="Dakhla-Oued Ed Dahab" <?php echo ($ville== 'Dakhla-Oued Ed Dahab') ?  "selected" : "" ;?>>Dakhla-Oued Ed Dahab</option>
            </select>
                          </div>
           
                           <div class="input-field">
                           <i class="fa fa-university"></i>
                           <select name="filiere"  id="ville">
                           <option value="" <?php echo ($filiere== '') ?  "selected" : "" ;?> >FILIERE</option>
                <option value="A??ronautique et astronautique" <?php echo ($filiere== 'A??ronautique et astronautique') ?  "selected" : "" ;?> >A??ronautique et astronautique</option>
                <option value="G??nie Biologique" <?php echo ($filiere== 'G??nie Biologique') ?  "selected" : "" ;?>>G??nie Biologique</option>
                <option value="Ing??nieur Chimiste" <?php echo ($filiere== 'Ing??nieur Chimiste') ?  "selected" : "" ;?>>Ing??nieur Chimiste</option>
                <option value="G??nie Civil et Environnemental" <?php echo ($filiere== 'G??nie Civil et Environnemental') ?  "selected" : "" ;?>>G??nie Civil et Environnemental</option>
                <option value="Donn??es, Syst??mes et Soci??t??" <?php echo ($filiere== 'Donn??es, Syst??mes et Soci??t??') ?  "selected" : "" ;?>>Donn??es, Syst??mes et Soci??t??</option>
                <option value="G??nie ??lectrique et Informatique" <?php echo ($filiere== 'G??nie ??lectrique et Informatique') ?  "selected" : "" ;?>>G??nie ??lectrique et Informatique</option>
                <option value="Science et G??nie des Mat??riaux" <?php echo ($filiere== 'Science et G??nie des Mat??riaux') ?  "selected" : "" ;?>>Science et G??nie des Mat??riaux</option>
                <option value="G??nie M??canique" <?php echo ($filiere== 'G??nie M??canique') ?  "selected" : "" ;?>>G??nie M??canique</option>
                <option value="G??nie M??dical et Science" <?php echo ($filiere== 'G??nie M??dical et Science') ?  "selected" : "" ;?>>G??nie M??dical et Science</option>
                <option value="Science et G??nie Nucl??aires" <?php echo ($filiere== 'Science et G??nie Nucl??aires') ?  "selected" : "" ;?>>Science et G??nie Nucl??aires</option>
                <option value="Arts et Sciences M??diatiques" <?php echo ($filiere== 'Arts et Sciences M??diatiques') ?  "selected" : "" ;?>>Arts et Sciences M??diatiques</option>
                <option value="Etudes et Planification Urbaines" <?php echo ($filiere== 'Etudes et Planification Urbaines') ?  "selected" : "" ;?>>Etudes et Planification Urbaines</option>
                <option value="Management" <?php echo ($filiere== 'Management') ?  "selected" : "" ;?>>Management</option>
            </select>
                           </div>
                            <div class="input-field" id="user">
                            <i class="fa fa-user-circle-o"></i>
                                <input type="text" name="username" value="<?php echo $login; ?>"required>
                            </div>
                           
                            <div class="input-field" id="user">
                                <i class="fa fa-envelope"></i>
                                <input type="email" name="email" value="<?php echo $mail; ?>"required>
                            </div>
                            <div class="input-field" id="user">
                                <i class="fa fa-lock"></i>
                                <input type="password" name="passwo" value="<?php echo $password; ?>"required>
                            </div>
                            <div class="signUp">
                            <button type="Submit" name="submit" class="btn solid" >Modifier</button>
                    </div>
                           
                            </div>
                    </form>
            <div class="panels-container">
                <div class="panel panel-left">
                    
                    <img src="log.png" alt="Sign In" class="image">
                </div>
            </div>
        </div>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  
   
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>