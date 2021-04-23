<html>
	<head>
		<title>Row Reader
		</title>
	</head>
	<body>
		<table>
		<tr><th>Row#</th><th>TrackingID</th><th>Request Date</th></tr>
		<?php
		require_once('pdo.php');

		$sql = "select * from page_hits order by request_date desc LIMIT 500";
		$stmt = $pdo->query($sql);

		while($row = $stmt->fetch()) {
			echo '<tr>';
			echo '<td>'.$row["id"].'</td>';
			echo '<td>'.$row["tracking_id"].'</td>'; 
			echo '<td>'.$row["request_date"].'</td>';
			echo '</tr>';
		}


		?>
		</table>
	</body>
</html>