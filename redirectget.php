<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect GET</title>
</head>
<body>
	<form action="redirectget.php" method="GET">
        <div>
            <label for="wifi">1. What’s the best Wi-Fi name you’ve seen?</label>
            <input id="wifi" type="text" name="wifi">
        </div>
        <div>
            <label for="paper">2. Toilet paper, over or under?</label>
            <input id="paper" type="text" name="paper">
        </div>
        <div>
            <label for="child">3. What would be the absolute worst name you could give your child?</label>
            <input id="child" type="text" name="child">
        </div>
        <div>
            <label for="five">4. If your five-year-old self suddenly found themselves inhabiting your current body, what would your five-year-old self do first?</label>
            <input id="five" type="text" name="five">
        </div>
        <div>
            <label for="movie">5. What movie completely changes its plot when you change one letter in its title? What’s the new movie about?</label>
            <input id="movie" type="text" name="movie">
        </div>
        <button type="submit">Submit</button>
    </form>
   <?php
	echo '<h2>'; print_r(htmlspecialchars($_GET['wifi'])); echo '</h2>';
	echo '<h2>'; print_r(htmlspecialchars($_GET['paper'])); echo '</h2>';
	echo '<h2>'; print_r(htmlspecialchars($_GET['child'])); echo '</h2>';
	echo '<h2>'; print_r(htmlspecialchars($_GET['five'])); echo '</h2>';
	echo '<h2>'; print_r(htmlspecialchars($_GET['movie'])); echo '</h2>';
   ?>
</body>
</html>