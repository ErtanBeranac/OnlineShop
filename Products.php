<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>php shopping cart tutorial - products - codeofaninja.com</title>
        <link type="text/css" rel="stylesheet" href="css/style.css" />
    </head>
<body>

<div class='sectionContainer'>
	<div class='sectionHeader'>Products</div>
	<?php 
		// this will make 'home', 'view products' and 'view cart' appear
		include 'Navigation.php' 
	?>
	
	<div class='sectionContents'>
	
<?php
// to prevent undefined index notice
$action = isset($_GET['action']) ? $_GET['action'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";

if($action=='add'){
	echo "<div>" . $name . " was added to your cart.</div>";
}

if($action=='exists'){
	echo "<div>" . $name . " already exists in your cart.</div>";
}

require "db_connect.php";

$query = "SELECT id, name, price FROM products";
$stmt = $con->prepare( $query );
$stmt->execute();

$num = $stmt->rowCount();

if($num>0){
	echo "<table border='0'>";//start table
    
        // our table heading
        echo "<tr>";
            echo "<th class='textAlignLeft'>Product Name</th>";
            echo "<th>Price (USD)</th>";
			echo "<th>Action</th>";
        echo "</tr>";
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            
            //creating new table row per record
            echo "<tr>";
                echo "<td>{$name}</td>";
                echo "<td class='textAlignRight'>{$price}</td>";
				echo "<td class='textAlignCenter'>";
					echo "<a href='addToCart.php?id={$id}&name={$name}' class='customButton'>";
						echo "<img src='images/add-to-cart.png' title='Add To Cart' />";
					echo "</a>";
				echo "</td>";
            echo "</tr>";
        }
		
    echo "</table>";
}

// no products in the database
else{
    echo "No products found.";
}
?>
	</div>
</div>

</body>
</html>