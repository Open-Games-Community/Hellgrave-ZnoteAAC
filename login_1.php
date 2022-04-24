<?php require_once 'engine/init.php'; include 'layout/overall/header_myaccount.php'; ?>

<div class="centerinfo inner"  style="border:1px solid gray;padding-left:20px;padding-right:20px;padding-top:20px;padding-bottom:20px">

	<h2>Login</h2><span class="informer__dline">
</span>

	<div style="text-align:center">
		<form class="loginForm" action="login.php" method="post">
			<div class="well">
				<label for="login_username">Userame:</label> <input type="text" name="username" id="login_username" class="form-control" style="width:300px">
			</div>
			<div class="well">
				<label for="login_password">Password:</label> <input type="password" name="password" id="login_password" class="form-control" style="width:300px">
			</div>
			<?php if ($config['twoFactorAuthenticator']): ?>
				<div class="well">
					<label for="login_password">Token:</label> <input type="password" name="authcode" class="form-control">
				</div>
			<?php endif; ?>
			<div class="well"><br></br>
				<input type="submit" value="Log in" class="submitButton btn btn-primary">
			</div>
			<?php
				/* Form file */
				Token::create();
			?><br></br>
			<center>
				<h6><a href="register.php">Create New account</a></h6>
				
			</center>
		</form>
</div></div>
<?php
include 'layout/overall/footer_myaccount.php'; ?>
