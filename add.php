<?php 
 	include"add.logic.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Verjaardagskalender</title>
 	<link rel="stylesheet" href="main.css">
 </head>
 <body>
 	<h1>Nieuwe verjaardag</h1>
 	<form method="post">
 		<p><label>Persoon:</label>
		<input type="text" name="person" value=""></p>

		<p><label>Datum:</label>
		<select name="day" ></p>
			<?php 
    			for($i=1; $i<=31; $i++){ 
   			?>
       			<option value="<?=$i?>"><?=$i?></option>
       		<?php
   				}
   			?>
   			</select>
   			<select name="month">
   				<?php foreach ($months as $month){?> 
    			<option value="<?php echo $month['m_id']?>"><?php echo $month['month']; ?>
    			</option>
     		<?php

      			}
    		?>
  </select>
 			<select name="year">
				<?php 
    				for($i=2016; $i>=1900; $i=$i-1){ 
   				?>
       				<option value="<?php echo $i?>"><?php echo $i?></option>
       			<?php
   					}
   				?>
   				</select><br>
   				<input type="submit" name="confirmed" value="Save">
   				<input type="submit" name="cancel" value="Cancel">
		</form>
 </body>
 </html>