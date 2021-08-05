<?php

$success = $_GET['success'];

?>

<?php if ($success == 1): ?>
	<h3 style="font-family:sans-serif;">
		Go to <a href="login.php">Login</a>
	</h3>
<?php else: ?>
	<h3 style="font-family:sans-serif;">
		Sorry, Registration faild: <a href="register.php">Try again</a>
	</h3>
<?php endif; ?>