<!DOCTYPE html>
<html>
<body>

<?php

$myMovies = ["Spiderman", "Batman", "The Joker"];

echo '<ul>';
echo '<li>' . implode( '</li><li>', $myMovies) . '</li>';
echo '</ul>';

?>
</body>
</html>