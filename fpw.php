
  <!DOCTYPE html>
  <?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";

$conn3 = mysqli_connect($dbhost ,$dbuser,$dbpass,$dbname);

if(isset($_POST['submitbt']))
{ 
        $myemail = $_POST['email'];
        
    $query_email= "SELECT * FROM users WHERE email='$myemail'" ;
    $exist_em = mysqli_query($conn3, $query_email);

    $resultmails = mysqli_query($conn3, $query_email);

    if (empty($myemail)){
        header("Location: fpw.php?error=Enter your verified email");
            exit();

    }else if (!filter_var($myemail, FILTER_VALIDATE_EMAIL)) {
       header("Location: fpw.php?error=Invalid email");
        exit();

        }else if(mysqli_num_rows($exist_em) < 1 ){
      header("Location: fpw.php?error=Email Address Doesn't exists");    
      exit(); 

    }else if(mysqli_num_rows($resultmails) === 1) {

      $row3 = mysqli_fetch_assoc($resultmails);
       $_SESSION['email'] = $row3['email'];
      if($row3['email'] === $myemail){

          header("Location: changepw.php");
                 
                
                }
          }
        }

    ?>
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
          height: 250px;          
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
        <h3 style="text-align: center;">Forgot Password</h3>
        <!-- Para sa Textbox ni Username  -->
        <label for="email" style="margin-left: 40px;"><b>Email:</b></label>
        <input type="text" placeholder="Enter email address" name="email"> <!--pinalitan ko yung name from uname ginawa kong username--><br><br>
        <!-- Para sa Textbox ni Password  -->
     <center>   <input type="submit" class="button" value="Submit" name="submitbt"> </center>


      </div>

                
    </form>  
  </body>
</html>
