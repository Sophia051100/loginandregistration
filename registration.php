<!doctype html>
	<html>


	
	
	<style>

		body 
        {
           background-image: url(bg.jpg);
           background-position: center;
           background-repeat: no-repeat;
           background-size: cover;
           font-family: century gothic;
           font-size: 13px;
           color: white;
           height: 700px;
        }

		.form 
        {
          color: #1e1e1e;
          background: rgba( 0,0,0,0.6);
          display: inline-block;
          padding: 20px;
          border-color: #152238;
          width: 500px;
          margin-left: 400px;
          height: 450px;
          margin-top: 20px;

         
      }

      		.error {
		background: #1e1e1e;
		color: white;
		text-align: center;
		padding: 10px;
		width: 40%;
		margin-top: 20px;
		margin:  40px 350px;
		height: 25px;
		font-size: 20px;
		width: 500px;
	}


		input[type=submit]
		{
			/*background-color:#008CBA;*/
			border:none;
			color:white;
			padding:15px 32px;
			text-align:center;
			font-size:18px;
			cursor:pointer;
			width: 40%;
			background-color: blue;
  			text-decoration: none;
  			display: inline-block;


		}
		

		input[type=reset]
		{
			/*background-color:#008CBA;*/
			border:none;
			color:white;
			padding:15px 32px;
			text-align:center;
			font-size:18px;
			cursor:pointer;
			width: 40%;
			background-color: blue;
  			text-decoration: none;
  			display: inline-block;


		}

		/*font style/color ng text sa loob place holder*/
		input[type="text"] {
  		font-family: century gothic;
  		width: 200px;
  		margin-left: 7px;
  		font-size: 12px;
 		 color: black;
          padding: 5px;
          border: 1px solid #ccc;
          box-sizing: border-box;
          margin-top:2px;
          margin-bottom: 5px;
          resize: vertical;

		}
		/*font style/color ng text sa loob place holder para sa pasword*/
		input[type="password"] {
  		font-family: century gothic;
  		width: 200px;
  		margin-left: 7px;
  		font-size: 12px;
 		 color: black;
          padding: 5px;
          border: 1px solid #ccc;
          box-sizing: border-box;
          margin-top:2px;
          margin-bottom: 5px;
          resize: vertical;

		}
		/*font style/color ng text sa loob place holder para sa email*/
		input[type="email"] {
  		font-family: century gothic;
  		width: 200px;
  		margin-left: 30px;
  		font-size: 12px;
 		 color: black;
          padding: 5px;
          border: 1px solid #ccc;
          box-sizing: border-box;
          margin-top:2px;
          margin-bottom: 5px;


		}
			/*font style/color ng text sa loob place holder para sa contact num*/
		input[type="number"] {
  		font-family: century gothic;
  		width: 250px;
  		font-size: 12px;
 		 color: black;
          padding: 5px;
          border: 1px solid #ccc;
          box-sizing: border-box;
          margin-top:2px;
          margin-bottom: 5px;
          resize: vertical;

		}

		/*para sa check at x sa tabi ng contacts*/
		input + span {
  		padding-right: 30px;
		}

		input:invalid+span:after {
  		position: absolute; content: '✖';
  		padding-left: 5px;
  		color: #8b0000;
		}

		input:valid+span:after {
  		position: absolute;
  		content: '✓';
  		padding-left: 5px;
  		color: #009000;
		}
		/*font style/color ng text sa loob place holder para sa contact num*/
		
		input[type="date"] {
  		font-family: monospace;
  		font-size: 12px;
 		 color: black;
          padding: 5px;
          border: 1px solid #ccc;
          border-radius: 6px;
          box-sizing: border-box;
          margin-top:2px;
          margin-bottom: 5px;
          resize: vertical;

		}
				/*font style/color ng text sa loob place holder para sa contact num*/
		input[type="tel"] {
  		font-family: monospace;
  		font-size: 12px;
 		 color: black;
          padding: 5px;
          border: 1px solid #ccc;
          border-radius: 6px;
          box-sizing: border-box;
          margin-top:2px;
          margin-bottom: 5px;
          resize: vertical;

		}
		a:link, a:visited {
			border:none;
			color:white;
			padding:15px 32px;
			text-align:center;
			font-size:18px;
			cursor:pointer;
			width: 20%;
			background-color: blue;
  			text-decoration: none;
  			display: inline-block;
			margin-left: 510px;
			margin-top: 15px;
		}

	

	</style>
<title>Registration</title>

    </body>
     <!-- Para sa Textbox ni Password <tr bgcolor=black>
		<body background="hpbg.jpg"   background-position: center;
           background-repeat: no-repeat;-->
		   <?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>
        <form action="regfunction.php" method="post">
       <div class="form"> 
		<center>
			 <h1 style="font-size: 30px; color: white; font-family:  century gothic;">Registration Form</h1>
		</center>
			<font style="font-size: 20px; color: white; font-family:  century gothic; margin-left: 180px;"> Please fill out:</font> 
		

			<!--<h2> <font size = "6px" color="white" face="agency fb">Personal Information</font> </h2>

			

			<font color="white" face="Segoe UI Semibold" size="2">

				Fullname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" id= "fname"placeholder="Firstname" name="fname" required>
					<input type="text"placeholder="Lastname" id= "lname"name="lname" required>
					<input type="text"placeholder="MI" id= "mi" name="mi" size="1"  required>

			</font> -->
	<br>
			<h2> <font style="font-size: 20px; color: white; font-family:  century gothic;">Contact Information:</font> </h2>
				<font style="font-size: 15px; color: white; font-family:  century gothic; margin-left: 20px;">
			    Email Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="email"placeholder="Email Address:" name="eadd" size="20" required>
      		<!--	Mobile Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="tel" placeholder="Mobile No." name="mno" min="12" max="12"  size="13"  required>
				 <span class="validity"></span>
					</font> -->
			
	<br>
			<h2> <font style="font-size: 20px; color: white; font-family:century gothic;">Personal Account:</font> </h2>
				 <font style="font-size: 15px; color: white; font-family:  century gothic; margin-left: 20px;">
				Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text"placeholder="Enter Username" name="uname" required>
				<br><font style = "margin-left: 20px;">Password:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="password"placeholder="Enter Password" name="psw" required>
	<br>
				<font style = "margin-left: 20px;">Re type your password:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="password"placeholder="Re-type your password" name="rpsw" required>
				</font>
	<br>
			
	<br>				<center> <input type="reset" class="button" value="Reset" name="resettbt">
								<input type="Submit" class="button" value="Submit" name="submitbt"> 
						 </center>

			</div>
			</form>   
			                    <a href="login.php" target="login">Log In</a>
								
						 </center>

</html>