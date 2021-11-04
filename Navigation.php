<?php
// if session 'cart' was set, count it, else set it to 0
$cartItemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>
<div class='navigation'>
	
	<a href='Products.php' class='customButton'>View Products</a>
	<a href='Cart.php' class='customButton'>View Cart <?php echo "({$cartItemCount})"; ?></a>
</div>