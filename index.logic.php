<?php  
	
	$connection = new mysqli('localhost','root','','calendar');
	echo $connection->connect_error;

	$month = "SELECT birthdays.month_id, birthdays.id, birthdays.person, birthdays.year, birthdays.day, months.month, months.id FROM birthdays
				INNER JOIN months
				ON birthdays.month_id = months.id
				ORDER BY `month_id` ASC, `day` ASC, `year` ASC LIMIT 1000";
	$month = $connection->query($month);
	$months = $month->fetch_all(MYSQLI_ASSOC);

	$prevmonth = '0';
	$prevday = '0';

	function person($id, $person, $year, $day){
		?><p>
		<a href="edit.php? id=<? $id?>">
		<p><?=$person; echo'(';echo $year;echo')'?></a>
		<form action="delete.php" method="post">
			<input type="hidden" name="person" value="$person">
			<input type="hidden" name="id" value="$id">
			<input type="hidden" name="year" value="$year">
			<input type="hidden" name="day" value="$day">
			<input type="hidden" name="month" value="$month">
			<a href="delete.php? id=<? $id?>">x</a>
		</form>	
	</p><?php
	}

?>

