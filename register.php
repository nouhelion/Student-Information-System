<?php
    require_once('db.php');
    if(isset($_POST['submit']))
    {
        $nom = mysqli_real_escape_string($link, $_REQUEST['nom']);
        $sexe = mysqli_real_escape_string($link, $_REQUEST['sexe']);
        $email= mysqli_real_escape_string($link, $_REQUEST['email']);
        $tel = mysqli_real_escape_string($link, $_REQUEST['tel']);
        $adresse = mysqli_real_escape_string($link, $_REQUEST['adresse']);
        $username = mysqli_real_escape_string($link, $_REQUEST['username']);
        $serie = mysqli_real_escape_string($link, $_REQUEST['serie']);
        $ville = mysqli_real_escape_string($link, $_REQUEST['ville']);
        $cin= mysqli_real_escape_string($link, $_REQUEST['cin']);
        $filiere = mysqli_real_escape_string($link, $_REQUEST['filiere']);
        $password = mysqli_real_escape_string($link, $_REQUEST['passwo']);
        $sql = "INSERT INTO students (nom_user,sexe_user,serie_bacc,mail_user,adresse_user,ville,tel_user,login_user,password_user,cin_user,filiere) 
        VALUES ('$nom','$sexe','$serie','$email','$adresse','$ville','$tel','$username', '$password','$cin','$filiere')";
        if (mysqli_query($link, $sql)) {
          header("Location: index_student.php");
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/jpg" href="logo.png" />
    <link rel="stylesheet" href="register.css">
    <title>REGISTER</title>

</head>

<body>

    <div class="container">
        <div class="forms-container">
            <div class="sign-in-up">
                <form action="" method="POST" class="sign-up-form">
                    <h2 class="title">Inscription</h2>

                    <div class="input-field">
                        <i class="fa fa-user"></i>
                        <input type="text" name="nom" Placeholder="Nom complet" required>
                    </div>
                    <div class="radioButtons">
                        <i class="fa fa-male"></i>
                        M <input type="radio" name="sexe" value="M" id="male" required>
                        <i class="fa fa-female"></i>
                        F <input type="radio" name="sexe" value="F" id="female"required>
                    </div>


                    <div class="input-field">
                        <i class="fa fa-address-card-o"></i>
                        <input name="cin" placeholder="Cin" required>
                    </div>
                    <div class="input-field" id="user">
                        <i class="fa fa-phone"></i>
                        <input type="text" name="tel" Placeholder="Numéro" required>
                    </div>
                    <div class="input-field">
                        <i class="fa fa-graduation-cap"></i>
                        <select name="serie" id="ville" required>
                            <option value="">Série</option>
                            <option value="Sciences de la Vie et de la Terre">Sciences de la Vie et de la Terre</option>
                            <option value="Sciences Physiques et Chimiques">Sciences Physiques et Chimiques</option>
                            <option value="Sciences Maths A">Sciences Maths A</option>
                            <option value="Sciences Maths B">Sciences Maths B</option>
                            <option value="Sciences Economiques">Sciences Economiques</option>
                            <option value="Techniques de Gestion et de Comptabilité">Techniques de Gestion et de Comptabilité</option>
                            <option value="Sciences et Technologies Electriques">Sciences et Technologies Electriques</option>
                            <option value="Sciences et Technologies Mécaniques">Sciences et Technologies Mécaniques</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <i class="fa fa-map-pin"></i>
                        <input name="adresse" placeholder="Adresse">
                    </div>


                    <div class="input-field">
                        <i class="fa fa-map"></i>
                        <select name="ville" id="ville" required>
                            <option value="">Région</option>
                            <option value="Tanger – Tétouan – Al Hoceima">Tanger – Tétouan – Al Hoceima</option>
                            <option value="Oriental">Oriental</option>
                            <option value="Fès - Meknès">Fès - Meknès</option>
                            <option value="Rabat-Salé-Kénitra">Rabat-Salé-Kénitra</option>
                            <option value="Béni Mellal-Khénifra">Béni Mellal-Khénifra</option>
                            <option value="Casablanca-Settat">Casablanca-Settat</option>
                            <option value="Marrakech-Safi">Marrakech-Safi</option>
                            <option value="Drâa-Tafilalet">Drâa-Tafilalet</option>
                            <option value="Souss-Massa">Souss-Massa</option>
                            <option value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
                            <option value="Laâyoune-Sakia El Hamra">Laâyoune-Sakia El Hamra</option>
                            <option value="Dakhla-Oued Ed Dahab">Dakhla-Oued Ed Dahab</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <i class="fa fa-university"></i>
                        <select name="filiere" id="ville" required>
                            <option value="">Filière</option>
                            <option value="Aéronautique et astronautique">Aéronautique et astronautique</option>
                            <option value="Génie Biologique">Génie Biologique</option>
                            <option value="Ingénieur Chimiste">Ingénieur Chimiste</option>
                            <option value="Génie Civil et Environnemental">Génie Civil et Environnemental</option>
                            <option value="Données, Systèmes et Société">Données, Systèmes et Société</option>
                            <option value="Génie Électrique et Informatique">Génie Électrique et Informatique</option>
                            <option value="Science et Génie des Matériaux">Science et Génie des Matériaux</option>
                            <option value="Génie Mécanique">Génie Mécanique</option>
                            <option value="Génie Médical et Science">Génie Médical et Science</option>
                            <option value="Science et Génie Nucléaires">Science et Génie Nucléaires</option>
                            <option value="Arts et Sciences Médiatiques">Arts et Sciences Médiatiques</option>
                            <option value="Etudes et Planification Urbaines">Etudes et Planification Urbaines</option>
                            <option value="Management">Management</option>
                        </select>
                    </div>
                    <div class="input-field" id="user">
                        <i class="fa fa-user-circle-o"></i>
                        <input type="text" name="username" Placeholder="Username"required>
                    </div>


                    <div class="input-field" id="user">
                        <i class="fa fa-envelope"></i>
                        <input type="email" name="email" Placeholder="email"required>
                    </div>

                    <div class="input-field" id="user">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="passwo" Placeholder="Mot De Passe"required>
                    </div>
                    <div class="signUp">
                        <button type="Submit" name="submit" class="btn solid ">sign Up</button>
                    </div>
            </div>
            </form>
            <div class="panels-container">
                <div class="panel panel-left">
                    <div class="content">
                        <button class="btn Transparent"><a href="login.php">Sign In</a></button>
                    </div>
                    <img src="log.png" alt="Sign In" class="image">
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>