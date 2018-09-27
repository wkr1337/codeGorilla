
<?php 
    $root = dirname(__FILE__);
//    Shorter constant
    define('DS', 'DIRECTORY_SEPARATOR');
    echo $root;
    include("$root/config.php");
//    include("//localhost/CodeGorilla2/logInSql/config.php");
   
    if (!isset($_SESSION)) { session_start(); }
    echo 'start';
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        // username and password sent from form
       $myUserName = mysqli_real_escape_string($db, $_POST["username"]);
        $myPassword = mysqli_real_escape_string($db, $_POST["password"]);
        if (empty($myUserName)) {
            array_push($errors, "Username is required");
        }
        if (empty($myPassword)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $myPassword = md5($myPassword);
            $sql = "SELECT id FROM users WHERE username = '$myUserName' AND password = '$myPassword'";
            $result = mysqli_query($db, $sql);
        
            if(mysqli_num_rows($result) == 1){
                $_SESSION['login_user'] = $myUserName;
            
                header("location: ../index.php");
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
        <link rel="stylesheet" href="CSS/style.css" type="text/css">
        <title></title>
    </head>
    <body>
        
        <!--The Modal-->
        <button onclick="document.getElementById('loginForm').style.display='block'; document.getElementsByTagName('button')[1].style.width='100%'">
            Login
        </button>
        <div id="loginForm" class="modal">
            <span onclick="document.getElementById('loginForm').style.display='none'"
                  class="close" title="Close Modal">&times;</span>
                  <!--Modal Content-->
                  <form class="modal-content animate" action="//localhost/CodeGorilla2/logInSql/login.php" method="post">
                      <div class="imgcontainer">
                          <img src="img_avatar2.png" alt="Avatar" class="avatar">
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
                      
                      <div class="container" style="background-color:#f1f1f1">
                          <button type="button"
                                  onclick="document.getElementById('loginForm').style.display='none'"
                                  class="cancelbtn">Cancel</button>
                                  <span class="psw">Forgot <a href="#">password?</a></span></br>
                                  <span class="signUp">Not yet a member? <a href="//localhost/CodeGorilla2/logInSql/register.php">register</a></span>
                      </div>
                  </form>
            
            
        </div>
        <!--Script to hide the login form on click outside the box-->
        <script>
//          Get the modal
            var modal = document.getElementById('loginForm');
            
//          When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if(event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>


    </body>
</html>