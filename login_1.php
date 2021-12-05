<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<div style="text-align:center">
<h2> Login Area </h2>
	<div class="body">
		<form class="loginForm" action="login.php" method="post">
			<div class="well">
				<label for="login_username">Userame:</label> <input type="text" name="username" id="login_username">
			</div>
			<div class="well">
				<label for="login_password">Password:</label> <input type="password" name="password" id="login_password">
			</div>
			<?php if ($config['twoFactorAuthenticator']): ?>
				<div class="well">
					<label for="login_password">Token:</label> <input type="password" name="authcode">
				</div>
			<?php endif; ?>
			<div class="well">
				<input type="submit" value="Log in" class="submitButton art-button">
			</div>
			<?php
				/* Form file */
				Token::create();
			?>
			<center>
				<h3><a href="register.php">New account</a></h3>
				
			</center>
		</form>
</div></div>
<?php
include 'layout/overall/footer.php'; ?>
