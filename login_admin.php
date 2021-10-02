<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/jpg" href="logo.png" />
  <link rel="stylesheet" href="login.css">
  <title>LOG IN</title>
  
</head>
<body>

  <div class="Container">
        <div class="forms-container">
            <!-- sign in  part-->
            <div class="sign-in-up">
                <form action="" method="POST" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fa fa-user"></i>
                        <input type="text" name="username" Placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="passwo_log" Placeholder="Password">
                    </div>
                    <input type="Submit" class="btn solid" value="login">
                </form>
            </div>
        </div>
        <!-- sign in  part end-->
        <div class="panels-container">
                <img src="log.png" alt="Sign Up" class="image">
            </div>
        </div>
    </div>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
     <?php 
    require('db.php');
    session_start();
    if(isset($_POST['username'])){
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($link,$username);
        $password = stripslashes($_REQUEST['passwo_log']);
        $password = mysqli_real_escape_string($link,$password);
        $query = "SELECT * FROM `admins` WHERE login='$username' and password='$password'";
        $result = mysqli_query($link, $query) ;
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['username'] = $username;
            header("Location: index_admin.php");
        } else{
            echo "<div id='loginpage'>
            <p>Username/password is incorrect.</p>";
        }
    }
    ?>
    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>