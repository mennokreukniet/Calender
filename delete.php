<?php
	include "delete.logic.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<h1>Verjaardag verwijderen</h1>
<p>Weet je zeker dat je de verjaardag van <?php echo $birthday['person']; ?> op <?php echo $birthday['day'];?> <?php echo $birthday['month']; ?> wilt verwijderen?</p>
	<form method="post">
		<input type="hidden" name="id" value="<?php echo $birthday['id']; ?>">
		<input type="submit" name="confirmed" value="Yes">
		<input type="submit" name="canceled" value="No">
	</form>
</body>
</html>