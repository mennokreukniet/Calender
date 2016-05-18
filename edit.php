<?php 
	require_once"edit.logic.php"; 
?>
<!DOCTYPE html>
<html>
	<head>	
		<title></title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<form method="post">
		<h1><?php echo $birthdays['person'] ?></h1>
		<p><label>Persoon:</label>
		<input type="text" name="person" value="<?php echo $birthdays['person'];?>"></p>

		<p><label>Datum:</label>
		<select name="day" >
			<?php 
    			for($i=1; $i<=31; $i++){ 
   			?>
       			<option <?php if ($i == $birthdays['day']) { echo "selected=\"true\""; } ?> value="<?=$i?>"><?=$i?></option>
       		<?php
   				}
   			?>
			?>
			</select>
			<select name="month">
				<?php foreach ($months as $month){?> 
    				<option <?php if ($month['m_id'] == $birthdays['month_id']) { 
    				echo "selected=\"true\""; } ?> value="<?php echo $month['m_id']?>"><?php echo $month['month']; ?></option>
     			<?php
      				}
     			?>
			</select>
			<select name="year">
				<?php 
    				for($i=2016; $i>=1900; $i=$i-1){ 
   				?>
       				<option <?php if ($i == $birthdays['year']) { echo "selected=\"true\""; } ?> value="<?php echo $i?>"><?php echo $i?></option>
       			<?php
   					}
   				?>
   				</select>
   				<input type="hidden" name="id" value="<?php echo $birthdays['id']?>"><br>
   				<input type="submit" name="confirmed" value="Confirm">
   				<input type="submit" name="cancel" value="Cancel">
		</form>
	</body>
</html>