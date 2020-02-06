<?php require('../model/database.php');?>
<?php
function get_products(){
	global $db;
	$query = 'SELECT * FROM products ORDER BY name';
	$products = $db->query($query);
	return $products;
}
?>
