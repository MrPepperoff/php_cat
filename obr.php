<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="obr">
		<a href="index.php">переход на главную</a>
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>Список котов</h1>
					<?php 

						$link = mysqli_connect("localhost", "new_user", "123", "db");

						if(isset($_GET['id'])){
							mysqli_query($link, "DELETE FROM `cats` WHERE id = ".$_GET['id']);
							header("location: obr.php");
						}

						

						if(isset($_POST['name']) && !empty($_POST['name'])){
							mysqli_query($link, "INSERT INTO `cats` (name) VALUES ('".$_POST['name']."')");
						}

						$data = mysqli_query($link, "SELECT * FROM `cats`");
						echo "<table>";?>

						<tr>
							<td>№</td>
							<td>Name</td>
							<td>Color</td>
							<td>Delete</td>
						</tr>
						

						<?php while($el = mysqli_fetch_array($data, MYSQLI_ASSOC)){
							echo "<tr>";
							echo "<td>".$el['id']."</td>";
							echo "<td>{$el['color']}</td>";
							echo "<td>{$el['name']}</td>";
							echo "<td><a href='obr.php?id={$el['id']}'>Удалить</a></td>";
							echo "</tr>";
						}
						echo "</table>";
					?>			
				</div>
			</div>
		</div>	
	</div>
	
	<script src="js/bootstrap.min.js"></script>
	<script src='js/script.js'></script>
</body>
</html>

