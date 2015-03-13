<!DOCTYPE html>
<html>
<head>
<title>Tạo Login Form giống WordPress Admin với CSS3 và jQuery</title>
<link href="demo.css" rel="stylesheet" type="text/css"/>
<link rel="icon" href="http://www.thuthuatweb.net/wp-content/themes/HostingSite/favicon.ico" type="image/x-ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
</head>
<body>

<div class="login">
	<?php

$errs = '';
	$success = '';
	
	if(isset($_POST['task']) && $_POST['task']=='login') 
	{
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
		
		if( $username == "" || $password == "") {
			$errs = 'Fields are required.'; 
			
			//add jquery effect to shake our login form ?>
			<script type="text/javascript">
				$(document).ready(function() {
					$(".login form").effect("shake", { times: 3 }, 64);
				});
			</script>
			<?php
		} else {
			if( $username == "demo" && $password == "demo" ) {
				$_SESSION['username'] = "Demo";
				$_SESSION['password'] = "demo";
				$_SESSION['stat'] = 1; //set status to 1
				$success = 'You\re successfully login.';
			} else {
				$errs = 'Invalid Username or Password.'; 
				
				//add jquery effect to shake our login form ?>
				<script type="text/javascript">
					$(document).ready(function() {
						$(".login form").effect("shake", { times: 3 }, 64);
					});
				</script>
				<?php
			}

		}
	}
	
	
	//add a condition if stat variable is already set
	if(isset($_SESSION['stat']) == 1) : ?>
		<form method="post" action="index.php"><fieldset>
			<p><?php echo 'Welcome <strong>' . $_SESSION['username'] .'</strong>'; ?></p>
			<input type="submit" class="submit-button" value="Logout" />
			<input type="hidden" name="task" value="logout" />
		</fieldset></form>
	<?php else : ?>
		<div class="message">
			<!-- this display error and success message -->
			<?php if($errs != "") { echo '<p class="error">'.$errs.'</p>'; } ?>
			<?php if($success != "") { echo '<p class="success">'.$success.'</p>'; } ?>
			<!-- this get the query log variable if is set or not. -->
			<?php if(isset($_GET['log']) != "") { echo '<p class="success">You are now logged out.</p>'; } ?>
		</div>
		
		<form method="post" action="index.php">
			<p>
				<label for="username">Username<br />
				<input type="text" id="username" name="username" class="input" value="<?php echo (isset($_POST['username']) ? $_POST['username'] : '') ?>" size="20" tabindex="10" /></label>
			</p>
			<p>
				<label for="password">Password<br />
				<input type="password" id="password" name="password" class="input" value="<?php echo (isset($_POST['password']) ? $_POST['password'] : '') ?>" size="20" tabindex="20" /></label>
			</p>
			<p class="submit">
				<input type="submit" name="submit" id="submit" class="submit-button" value="Log In" tabindex="100" />
				<input type="hidden" name="task" value="login" />
			</p>
		</form>
	<?php endif; ?>
    
</div>
<div class="footer-bar">
    <span class="article-wrapper">
        <span class="article-label">Xem Bài Viết: </span>
        <span class="article-link"><a href="http://www.thuthuatweb.net/javacript/tao-login-form-giong-wordpress-admin-voi-css3-va-jquery.html">Tạo Login Form giống WordPress Admin với CSS3 và jQuery</a></span>
    </span>
    
</div>

</body>
</html>