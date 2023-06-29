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
					<?php 
						$link = mysqli_connect("localhost", "new_user", "123", "cats");
						if(isset($_GET['id'])){
							mysqli_query($link, "DELETE FROM `cats_list` WHERE id =".$_GET['id']);
							header("location: obr.php");
						}
					?>
					<tr>
						<td>№</td>
						<td>Name</td>
						<td>Color</td>
						<td>Delete</td>
					</tr>
					<?php 
						$data = mysqli_query($link, "SELECT * FROM `cats_list` WHERE `name` = '".$_POST['name']."' AND `color` ='".$_POST['color']."'");
						
						// $data = mysqli_query($link, "SELECT * FROM `cats`");
						echo "SELECT * FROM `cats_list` WHERE `name` = '".$_POST['name']."' AND `color` ='".$_POST['color']."' <br>";
						print_r($data);
						if(isset($_POST['name']) && !empty($_POST['name'])){
							mysqli_query($link, "INSERT INTO `cats` (name) VALUES ('".$_POST['name']."')");
						}

						 while($el = mysqli_fetch_array($data, MYSQLI_ASSOC)){
							echo "<tr>";
							echo "<td>".$el['id']."</td>";
							echo "<td>{$el['color']}</td>";
							echo "<td>{$el['name']}</td>";
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







					<?php 

						// $link = mysqli_connect("localhost", "new_user", "123", "cats");

						// if(isset($_GET['id'])){
						// 	mysqli_query($link, "DELETE FROM `cats_list` WHERE id =".$_GET['id']);
						// 	header("location: obr.php");
						// }

						

						// if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['color']) && !empty($_POST['color'])) {

						// 	mysqli_query($link, "INSERT INTO `cats_list` (name, color) VALUES ('".$_POST['name']."','".$_POST['color']."')");
						// }

						// $data = mysqli_query($link, "SELECT * FROM `cats_list`");

						// // print_r(mysql_fetch_assoc(resource ($data)));
						// echo "<table>";?>

						 <!-- <tr>
						// 	<td>№</td>
						// 	<td>Name</td>
						// 	<td>Color</td>
						// 	<td>Delete</td>
						// </tr> -->
						 <?php

						// if (isset($el['name']) && $el['name'] == $_POST['name'] && isset($el['color']) && $el['color'] == $_POST['color']) {
						// 		echo 'Такой кот уже существует в таблице №'.$el['id'];
						// 	}
						//  while($el = mysqli_fetch_array($data, MYSQLI_ASSOC)){
						//  	if (isset($el['name']) && $el['name'] == $_POST['name'] && isset($el['color']) && $el['color'] == $_POST['color']) {
						// 		echo 'Такой кот уже существует в таблице №'.$el['id'];
						// 	}
						//  	echo $el['name']." == ".$_POST['name']." ".$el['color']." == ".$_POST['color'];

						 	
						// 	echo "<tr>";
						// 	echo "<td>".$el['id'].	ho "<td><img src='images/{$el['color']echo "<pre>";
						//  	print_r($el);
						//  	echo "</pre>";}.jpg' alt='{$el['color']}'></td>";
						// 	echo "<td><a href='obr.php?id={$el['id']}'>Удалить</a></td>";
						// 	echo "</tr>";


						// echo "<pre>";
						//  	print_r($el);
						// echo "</pre>";
						// }
						// echo "</table>";
						
					?>