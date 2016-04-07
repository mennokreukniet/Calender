<?php 
	include"edit.logic.php"; 
?>
<!DOCTYPE html>
<html>
	<head>	
		<title></title>
	</head>
	<body>
		<h1><?php echo $person ?></h1>
		<form method="post">
			<?php
				foreach ($day as $days) {
			?>
				<option value="<?php echo $days['day']?>"><?php echo $days['day']; echo "selected=\"true\"";?></option>
			<?php
				}
			?>
		</form>
	</body>
</html>