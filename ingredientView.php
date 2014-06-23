<?php
$amount = $_GET['ingredientAmount'];
$unit = $_GET['ingredientUnit'];
$name = $_GET['ingredientName'];
?>
<?php include('theme/header.php');?>
<h1>Ingredient View</h1>
	<table>
			<tr><td>Name: <br /> <?= $name; ?> </td></tr>
			<tr><td>Unit: </td> <?= $unit; ?></td></tr>
			<tr><td>Amount: </td><td><?= $amount; ?></td></tr>
	</table>
	</div>
	</div>
</body>
</html>
