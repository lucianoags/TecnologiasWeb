<!DOCTYPE html>
<html>
<head>
<title>Embed PHP in a .html File</title>
</head>
<body>
<h1><?php echo "Hello World" ?></h1>
<br>

<?php

for ($i = 0; $i <= 5; $i++) {
    echo "<p>".$i."</p>";
}

?>

</body>
</html>