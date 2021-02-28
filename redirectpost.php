<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect Post</title>
</head>
<body>
	<h1>Thanks for making an account with us, <?= htmlspecialchars($_POST['username'])?>!</h1>
    <?php
	echo '<p> '; print_r(htmlspecialchars($_POST['username'])); echo '</p>';
	echo '<p>'; print_r(htmlspecialchars($_POST['password'])); echo '</p>';
	echo '<p>'; print_r(htmlspecialchars($_POST['verify'])); echo '</p>';
	echo '<p>'; print_r(htmlspecialchars($_POST['email'])); echo '</p>';
	echo '<p>'; print_r(htmlspecialchars($_POST['phone'])); echo '</p>';
   ?>
</body>
</html>