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
  <style>
  .field{
    max-width:150px;
    width: 200px;
    height:33px;
    background-color:#F0F0F0;
    margin: 15px 0;
    border-radius: 44px;
    display:grid;
    grid-template-columns: 20% 85%;
    padding: 0 0.4em;
    position: center;
    
}
 .field i{
      text-align: center;
      line-height: 22px;
      color:#acacac;
      font-size:1.5em;
 }
 .field input{
      Background :none;
      outline:none;
      border:none;
      line-height: 1;
      font-weight: 300;
      font-size:1em;
      color:#333;
 }
  </style>
</head>
<body>
<div class="Container">
        <div class="forms-container">
            <!-- sign in  part-->
            <div class="sign-in-up">
                <form action="" method="POST" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="field">
                    <i class="fas fa-user-graduate"></i>
                        <a  style="text-decoration: none;" href="login_admin.php" id="student" >AS ADMIN</a>
 
                    </div>
                    <div class="field">
                    <i class="fas fa-user-graduate"></i>
                        <a  style="text-decoration: none;" href="login.php" id="student" >AS STUDENT</a>
                    </div>
                   
                </form>
            </div>
        </div>
        <!-- sign in  part end-->
        <div class="panels-container">
            <div class="panel panel-left">
                <div class="content">
                   
                </div>
                <img src="log.png" alt="Sign Up" class="image">
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