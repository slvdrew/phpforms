<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form POST</title>
</head>
<body>
    <h1>Create an account</h1>
    <form action="redirectpost.php" method="POST">
        <div>
            <label for="username">Enter a username.</label>
		<br>
            <input id="username" type="text" name="username" placeholder="username">
        </div>
        <div>
		<br>
            <label for="password">Enter a password.</label>
		<br>
            <input id="password" type="password" name="password" placeholder="password">
        </div>
        <div>
		<br>
            <label for="verify">Verify your password.</label>
		<br>
            <input id="verify" type="password" name="verify" placeholder="password">
        </div>
        <div>
		<br>
            <label for="email">Enter an email.</label>
		<br>
            <input id="email" type="email" name="email" placeholder="sample@yahoo.com">
        </div>
        <div>
		<br>
            <label for="phone">Enter a phone number.</label>
		<br>
            <input id="phone" type="tel" name="phone" placeholder="012-345-6789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
        </div>
        <button type="submit">Submit</button>
	</form>
</body>
</html>