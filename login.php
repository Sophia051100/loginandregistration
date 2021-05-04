
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
          height: 420px;          
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

    <form action="loginfuntion.php" method="post"><!--tinanggalan ko yung form actio ng lama. naakalagay dati ay harrypotter.php-->
      <div class="login">
        <h3 style="text-align: center;">LOGIN</h3>
        <!-- Para sa Textbox ni Username  -->
        <label for="username" style="margin-left: 40px;"><b>Username:</b></label>
        <input type="text" placeholder="Enter Username" name="uname"> <!--pinalitan ko yung name from uname ginawa kong username--><br><br>
        <!-- Para sa Textbox ni Password  -->
        <label for="password" style="margin-left: 40px;"><b>Password:</b></label>
        <input type="password" placeholder="Enter Password" name="psw"><!--pinalitan ko yung name from psw ginawa kong password--><br><br>
        <!-- Para sa  Login Button -->
     <center>   <input type="submit" class="button" value="Log In" name="loginbt"> </center>

        <span class="forgot"><a href="fpw.php"><center>Forgot Password? </center></a></span>
        <font color="white">  
        <center>Dont have an account yet? </font>
         <a href="registration.php" target="regform">CLICK HERE</a> </center></a></span>  

      </div>

                
    </form>  
  </body>
</html>
