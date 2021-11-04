<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>php shopping cart tutorial - home - codeofaninja.com</title>
        <link type="text/css" rel="stylesheet" href="css/style.css" />
    </head>
<body>

<div class='sectionContainer'>
	<div class='sectionHeader'>Home</div>
	<?php 
		// this will make 'home', 'view products' and 'view cart' appear
		include 'Navigation.php' 
	?>
	
	<div class='sectionContents'>
		Welcome to Mike's shopping website!
	</div>
</div>

</body>
</html>