
<?php 
    $root = dirname(__FILE__);
//    Shorter constant
    define('DS', 'DIRECTORY_SEPARATOR');
    include_once ("$root/config.php");
//    include("//localhost/CodeGorilla2/logInSql/config.php");
   
    if (!isset($_SESSION)) { session_start(); }
    if (isset($_POST['username'])){
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        echo 'in server if';
//        if (isset($_POST["username"])){
        // username and password sent from form
       $email = mysqli_real_escape_string($db, $_POST["username"]);
        $myPassword = mysqli_real_escape_string($db, $_POST["password"]);
        if (empty($email)) {
            array_push($errors, "Username is required");
        }
        if (empty($myPassword)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $myPassword = md5($myPassword);
            $sql = "SELECT id FROM users WHERE email = '$email' AND password = '$myPassword'";
            $result = mysqli_query($db, $sql);
        
            if($result){
                if(mysqli_num_rows($result) == 1){
                    $_SESSION['login_user'] = $email;

                    header("location: $root/index.php");
                }
            
            }
        }else{
                echo "Your login name or password is invalid";
//            $error = "Your login name or password is invalid";
        }
        
  
        
    } 
    }
    

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../style_login.css" type="text/css">
        <link rel="stylesheet" href="style_login.css" type="text/css">
        <title></title>
    </head>
    <body>
        
        <!-- log in form-->
        <button onclick="document.getElementById('loginForm').style.display='block'; document.getElementsByTagName('button')[1].style.width='100%'">
            Login
        </button>
        <div id="loginForm" class="loginDiv">
            <span onclick="document.getElementById('loginForm').style.display='none'"
                  class="close" title="Close">&times;</span>
                  <!--Modal Content-->
                  <form class="loginForm-content" action="//localhost/codegorilla/logInSql/login.php" method="post">
                      <div class="imgcontainer">
                          <img src="../image/man.png" alt="Avatar" class="avatar">
                      </div>
                      
                      <div class="container">
                          <label for="username"><b>Username</b></label>
                          <input type="text" placeholder="Enter Username" name="username" required>
                          <label for="password"><b>Password</b></label>
                          <input type="password" placeholder="Enter Password" name="password" required>
                          
                          <button type="submit" name="submit">Login</button>
                          <label>
                              <input type="checkbox" checked="checked" name="remember"> Remember me
                          </label>
                      </div>
                      
                      <div class="container">
                          <button type="button"
                                  onclick="document.getElementById('loginForm').style.display='none'"
                                  class="cancelbtn">Cancel</button>
                                  <span class="psw">Forgot <a href="#">password?</a></span></br>
                                  <span class="signUp">Not yet a member? <a href="//localhost/codegorilla/logInSql/register.php">register</a></span>
                      </div>
                  </form>
            
            
        </div>
        <!--Script to hide the login form on click outside the box-->
        <script>
            var loginForm = document.getElementById('loginForm');
            
//          When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if(event.target == loginForm) {
                    loginForm.style.display = "none";
                }
            }
        </script>


    </body>
</html>