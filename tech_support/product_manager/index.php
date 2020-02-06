<?php
require('../model/database.php');
require('../model/product_db.php');
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {?>
<?php include '../view/header.php'; ?>
<?php 
$products = get_products();?>
<table>
<tr>
<th>Code</th>
<th>Name</th>
<th>Version</th>
<th>Release Date</th>
<th>&nbsp;</th>
</tr>
<?php foreach ($products as $product) :?>
<tr>
	<td><?php echo $product['productCode']; ?></td>
	<td><?php echo $product['name']; ?></td>
	<td><?php echo $product['version']; ?></td>
	<td><?php echo $product['releaseDate']; ?></td>
	<td><form action="." method="post">
		<input type="hidden" name="action" value="delete_product" />
		<input type="hidden" name="product_code" value="<?php echo $product['productCode']; ?>" />
		<input type="submit" value="Delete" />
	</form></td>
</tr>
<?php endforeach; ?>
</table>
<?php include '../view/footer.php'; ?>
<?php } ?>  

