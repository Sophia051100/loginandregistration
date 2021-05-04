<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($_SERVER['REQUEST_METHOD'] == "POST")
{ 

  $pwd = $_POST['newpw'];
  $cpwd = $_POST['repw'];
  

  
  if(empty( $pwd)){
      header("Location: changepw.php?error= New password is required");
      exit();

    }else if(empty($cpwd)){
      header("Location: changepw.php?error=Confirming password is required");
      exit();

    } else if(!empty($pwd) && !empty($cpwd))
      {
        if( strlen($pwd ) < 8 ) {
          header("Location: changepw.php?error=Password must be atleast 8 characters");
            exit();
        }else if( !preg_match("#[0-9]+#",  $pwd ) ) {
          header("Location: changepw.php?error=Password must include at least one number!");
          exit();
        }else if( !preg_match("#[a-z]+#",  $pwd) ) {
          header("Location: changepw.php?error=Password must include at least one small letter!");
          exit();
        }else if( !preg_match("#[A-Z]+#",  $pwd ) ) {
          header("Location: changepw.php?error=Password must include at least one capital letter!");
          exit();
        }else if( !preg_match("#\W+#", $pwd )) {
          header("Location: changepw.php?error=Password must include at least one symbol!");
          exit();

        }else if($_POST['newpw'] !== $_POST['repw']) {
        header("Location: changepw.php?error=Password and Confirm password should match!");
          exit();
          
        }else{

          $em=$_SESSION['email'];

          // echo $em;
          $query_pass="UPDATE users set password='$cpwd' where email='$em'";
          $sql4 = "INSERT INTO event_log(user_id, activity) VALUES ('$myid','$myact' )";

          $run2 = mysqli_query($conn,$query_pass) or die(mysqli_error($conn));
         



        if ($run2){
              header("Location: login.php");
        }
      }
    }
   }



?>
<!DOCTYPE html>
<html>
  <head>
    <style> 
     
      body
        {
           background-image: url(bg.jpg);
           height: 700px;
           background-position: center;
           background-repeat: no-repeat;
           background-size: cover;
           font-family: century gothic;
           font-size: 20px;
           color: white;
           width: 30px;

        }
      .login 
        {
          display: inline-block;
          background-color: #152238;
          padding: 20px;
          width: 550px;
          height: 380px;          
          background: rgba( 0,0,0,0.6);
          margin-left: 370px;
          margin-top: 100px;
          font-family: century gothic;


        }
      input[type=text], input[type=password]
        {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        width:450px;
        height: 40px;
        color: #fff;
        font-size: 16px;
        margin-left: 40px;
        font-family: century gothic;
        }
      .forgot
        {

          width: 100%;
          padding: 12px;
          font-family: century gothic;
        } 
      .button 
        {
          background-color: dodgerblue;
          color: white;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          width: 50%;
          font-size: 20px;
          margin: 4px 2px;
          cursor: pointer; 
          font-family: century gothic;          
          }



          .error {
          background: #1e1e1e;
          color: white;
          text-align: center;
          padding: 10px;
          width: 40%;
          border-radius: 15px;
          margin-top: 20px;
          margin:  40px 350px;
          height: 25px;
          font-size: 20px;
         width: 500px;
        }


          a:link {
          color: #187bcd;
          background-color: transparent;
          text-decoration: none;

          }
          a:visited {
          color:#187bcd;
          background-color: transparent;
          text-decoration: none;
          }
          a:hover {
          color: #289df4;
          background-color: transparent;
          text-decoration: underline;
          }
          a:active {
          color: yellow;
          background-color: transparent;
          text-decoration: underline;
          }

    </style>
    <title>Login</title>
  </head>
  <body>
        <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <form action="" method="post"><!--tinanggalan ko yung form actio ng lama. naakalagay dati ay harrypotter.php-->
      <div class="login">
        <h3 style="text-align: center;">Change Password</h3>
        <!-- Para sa Textbox ni Username  -->
        <label for="newpw" style="margin-left: 40px;"><b>New Password:</b></label>
        <input type="password" placeholder="Enter new password" name="newpw"> <!--pinalitan ko yung name from uname ginawa kong username--><br><br>
        <!-- Para sa Textbox ni Password  -->
        <label for="repw" style="margin-left: 40px;"><b>Confirm Password:</b></label>
        <input type="password" placeholder="Re-enter password" name="repw"><!--pinalitan ko yung name from psw ginawa kong password--><br><br>
        <!-- Para sa  Login Button -->
     <center>   <input type="submit" class="button" value="Change" name="changebt"> </center>

      </div>

                
    </form>  
  </body>
</html>
