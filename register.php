<?php
include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account($con);

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

function getInputValue($name)
{
	if (isset($_POST[$name])) {
		echo $_POST[$name];
	}
}
?>

<html>

<head>
	<title>Welcome to Splotify!</title>
</head>

<body>

	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<?php echo $account->getError(Constants::$loginFailed) ?>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="martinValdivia" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" placeholder="your password" type="password" required>
			</p>

			<button type="submit" name="loginButton">LOG IN</button>

		</form>
		<form id="registerForm" action="register.php" method="POST">
			<h2>Create a free account</h2>
			<p>
				<?php echo $account->getError(Constants::$usernameCharacters) ?>
				<?php echo $account->getError(Constants::$usernameTaken) ?>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="e.g. martinValdivia" value="<?php getInputValue('username') ?>" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::$firstNameCharacters) ?>
				<label for="firstName">First Name</label>
				<input id="firstName" name="firstName" type="text" placeholder="e.g. Martin" value="<?php getInputValue('firstName') ?>" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::$lastNameCharacters) ?>
				<label for="lastName">Last Name</label>
				<input id="lastName" name="lastName" type="text" value="<?php getInputValue('lastName') ?>" placeholder="e.g. Valdivia" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::$emailTaken) ?>
				<?php echo $account->getError(Constants::$emailsDoNotMatch) ?>
				<?php echo $account->getError(Constants::$emailInvalid) ?>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="e.g. mxmghost@gmail.com" value="<?php getInputValue('email') ?>" required>
			</p>

			<p>
				<label for="emailConfirmation">Confirm Email</label>
				<input id="emailConfirmation" name="emailConfirmation" type="email" placeholder="email confirmation" value="<?php getInputValue('emailConfirmation') ?>" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::$passwordsDoNoMatch) ?>
				<?php echo $account->getError(Constants::$passwordNotAlphanumeric) ?>
				<?php echo $account->getError(Constants::$passwordCharacters) ?>
				<label for="registerPassword">Password</label>
				<input id="registerPassword" name="registerPassword" placeholder="your password" type="password" required>
			</p>
			<p>
				<label for="passwordConfirmation">Confirm Password</label>
				<input id="passwordConfirmation" placeholder="password confirmation" name="passwordConfirmation" type="password" required>
			</p>


			<button type="submit" name="registerButton">Sign Up</button>

		</form>
	</div>

</body>

</html>