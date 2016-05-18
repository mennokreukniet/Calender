<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"){

	$connection = new mysqli('localhost','root','','calendar');
		echo $connection->connect_error;

		$id = $_GET["id"];

		$birthday = "SELECT birthdays.month_id, birthdays.id, birthdays.person, birthdays.year, birthdays.day, months.month, months.m_id FROM birthdays
					INNER JOIN months
					ON birthdays.month_id = months.m_id
					WHERE birthdays.id=$id";
					
		$birthday = $connection->query($birthday);
		$birthday = $birthday->fetch_assoc();

		}elseif ($_SERVER["REQUEST_METHOD"] == "POST"){
		if (isset($_POST['confirmed'])){
			$db = new mysqli('localhost','root','','calendar');
		
			// Prepare data for delete
			$id = $db->escape_string($_POST["id"]);
	
			// Prepare query and execute
			$query = "delete from birthdays where id=$id";
			$result = $db->query($query);
		}
		header("Location: ./");
	}

?>