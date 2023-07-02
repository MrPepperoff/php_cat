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
					<table>
						<tr>
							<td>ID</td>
							<td>Name</td>
							<td>Color</td>
							<td>Delete</td>
						</tr>
						<?php
						$link = mysqli_connect("localhost", "new_user", "123", "cats");

						

						// удаление инфо кота
						if(isset($_GET['id'])){
							mysqli_query($link, "DELETE FROM `cats_list` WHERE id = ".$_GET['id']);
							header("location: obr.php?status=delete");
						}

						
						$data = mysqli_query($link, "SELECT * FROM `cats_list`");
						$data_count = mysqli_num_rows($data);
						
						// добавление кота в список
						
						if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['color']) && !empty($_POST['color'])){
							$flag = true;
							while($el = mysqli_fetch_array($data, MYSQLI_ASSOC)){

								$name = $_POST['name'];
								$color = $_POST['color'];
								
								// Проверка наличия кота в базе данных
								$sql = "SELECT * FROM cats_list WHERE name = '$name' AND color = '$color'";
								$result = $link->query($sql);

								if ($result->num_rows > 0 && $flag) {
								    // Кот уже существует, не добавляем его в базу данных
								    header("location: obr.php?status=error");
								    $flag = false;
								}
								else{
								    // Кот не существует, добавляем его в базу данных
								    if($flag){
								    	$sql = "INSERT INTO cats_list (name, color) VALUES ('$name', '$color')";

								    	$flag = false;
								    }
								    
								    if ($link->query($sql) === TRUE) {
								        header("location: obr.php?status=success");
								    } 
								    
								}
							}
						}
						if ($_GET['status'] == 'success') {
							echo "<p class='success'>Кот успешно добавлен</p>";

						}
						if ($_GET['status'] == 'error') {
							echo "<p class='error'>Кот уже существует</p>";
						}
						if ($_GET['status'] == 'delete') {
							echo "<p class='delete'>Кот удален успешно</p>";
						}
						while($el = mysqli_fetch_array($data, MYSQLI_ASSOC)){
								
							echo "<tr>";
							echo "<td>".$el['id']."</td>";
							echo "<td>{$el['name']}</td>";
							echo "<td><img src='images/{$el['color']}.jpg' alt='{$el['color']}'></td>";
							echo "<td><a href='obr.php?id={$el['id']}'>Удалить</a></td>";
							echo "</tr>";

						}
						?>

					</table>
				</div>
			</div>
		</div>	
	</div>
	<script src="js/bootstrap.min.js"></script>
	<script src='js/script.js'></script>
</body>
</html>