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
							header("location: obr.php");
						}
						
						$data = mysqli_query($link, "SELECT * FROM `cats_list`");
						$data_count = mysqli_num_rows($data);
						
						// добавление кота в список
						
						if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['color']) && !empty($_POST['color'])){

							$flag = false;
							$array = [];
							while($el = mysqli_fetch_array($data, MYSQLI_ASSOC)){

								$name = $_POST['name'];
								$color = $_POST['color'];
								
								if (($el['name'] == $name && $el['color'] == $color)) {
									$flag = false;
									echo "V ID = {$el["id"]}  ........ {$el['name']} = {$name}, {$el['color']} = {$color} <br>";
									$array[]=false;

								}

								if(($el['name'] != $name || $el['color'] != $color)){
									if(!in_array(true,$array) && $flag){
										echo "кот добавлен ........ {$el['name']} = {$name}, {$el['color']} = {$color} <br>";
										// mysqli_query($link, "INSERT INTO `cats_list`(name, color) VALUES ('".$name."','".$color."')");
										$flag = false;
									}
									else{
										
										echo "Х ID = {$el["id"]} ........ {$el['name']} = {$name}, {$el['color']} = {$color} <br>";
										$array[]=true;
									}
								}
							echo "<tr>";
							echo "<td>".$el['id']."</td>";
							echo "<td>{$el['name']}</td>";
							echo "<td><img src='images/{$el['color']}.jpg' alt='{$el['color']}'></td>";
							echo "<td><a href='obr.php?id={$el['id']}'>Удалить</a></td>";
							echo "</tr>";

							}
							print_r($array);
						}
						// while($el = mysqli_fetch_array($data, MYSQLI_ASSOC)){
								
						// 	echo "<tr>";
						// 	echo "<td>".$el['id']."</td>";
						// 	echo "<td>{$el['name']}</td>";
						// 	echo "<td><img src='images/{$el['color']}.jpg' alt='{$el['color']}'></td>";
						// 	echo "<td><a href='obr.php?id={$el['id']}'>Удалить</a></td>";
						// 	echo "</tr>";

						// }
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



<?php 
6					
?>