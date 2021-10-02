<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="shortcut icon" type="image/jpg" href="logo.png" />
  <link rel="stylesheet" href="quest.css">
  <title>QUESTIONNAIRE</title>
  
</head>
<body>

    <div class="container">
            <div class="forms-container">
                <div class="sign-in-up">
                <br>
                <br>
                    <form action="" method="POST" class="sign-up-form">
                    <h2 class="title">COMMENT AVEZ-VOUS CONNU ADA-IT ?</h2>
                            <div>
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                <input type="radio" id="c1" name="choix" value="Journaux"> Journaux
                            </div>
                            <br>
                            <div >
                            <i class="fa fa-chrome" aria-hidden="true"></i>
                                <input type="radio" id="c2" name="choix" value="Internet"> Internet
                            </div>
                            <br>
                            <div >
                            <i class="fa fa-check-square-o"></i>
                                <input type="radio" id="c3" name="choix" value="Forum"> Forum
                            </div>
                            <br>
                            <div >
                            <i class="fa fa-users" aria-hidden="true"></i>
                                <input type="radio" id="c4" name="choix" value="Famille,Amis,.."> Famille,Amis,..
                            </div>
                            <br>
                            <div >
                            <i class="fa fa-university" aria-hidden="true"></i>
                                <input type="radio" id="c5" name="choix" value="Visite de ADA-IT"> Visite de ADA-IT
                            </div>
                            <br>
                            <div >
                            <i class="fa fa-university" aria-hidden="true"></i>
                                <input type="radio" id="c6" name="choix" value="Journées Portes Ouvertes"> Journées Portes Ouvertes
                            </div>
                            <br>
                            <div >
                            <i class="fa fa-building-o" aria-hidden="true"></i>
                                <input type="radio" id="c7" name="choix" value="Événement Parascolaire"> Événement Parascolaire 
                            </div>
                            <br>
                            <button type="Submit" name="submit" class="btn solid" >Envoyer</button>
                    </form>
                
            </div>
            <div class="panels-container">
                <div class="panel panel-left">
                    <img src="log.png" alt="Sign In" class="image">
                </div>
            </div>
        </div>
</div>
<?php
    require_once('db.php');
    if (isset($_POST['submit'])) {
        $choix = mysqli_real_escape_string($link, $_REQUEST['choix']);
        $sql="UPDATE questionnaire 
        SET 
            nbr = nbr+1
        WHERE
            comment = '$choix'";
       
      if (mysqli_query($link, $sql)) {
        header("Location: index_student.php");
    }
    else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
}
    ?>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>