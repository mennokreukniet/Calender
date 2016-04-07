<?php
	$connection = new mysqli('localhost','root','','calendar');
	echo $connection->connect_error;

	$month = "SELECT birthdays.month_id, birthdays.id, birthdays.person, birthdays.year, birthdays.day, months.month, months.id FROM birthdays
				INNER JOIN months
				ON birthdays.month_id = months.id
				ORDER BY `month_id` ASC, `day` ASC, `year` ASC LIMIT 1000";
	$month = $connection->query($month);
	$months = $month->fetch_all(MYSQLI_ASSOC);
?>