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

						$link = mysqli_connect("localhost", "new_user", "123", "cats");

						if(isset($_GET['id'])){
							mysqli_query($link, "DELETE FROM `cats_list` WHERE id =".$_GET['id']);
							header("location: obr.php");
						}

						

						if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['color']) && !empty($_POST['color'])) {

							mysqli_query($link, "INSERT INTO `cats_list` (name, color) VALUES ('".$_POST['name']."','".$_POST['color']."')");
						}

						$data = mysqli_query($link, "SELECT * FROM `cats_list`");

						// print_r(mysql_fetch_assoc(resource ($data)));
						echo "<table>";?>

						<tr>
							<td>№</td>
							<td>Name</td>
							<td>Color</td>
							<td>Delete</td>
						</tr>
						<?php

						// if (isset($el['name']) && $el['name'] == $_POST['name'] && isset($el['color']) && $el['color'] == $_POST['color']) {
						// 		echo 'Такой кот уже существует в таблице №'.$el['id'];
						// 	}

						
						 while($el = mysqli_fetch_array($data, MYSQLI_ASSOC)){
						 	if (isset($el['name']) && $el['name'] == $_POST['name'] && isset($el['color']) && $el['color'] == $_POST['color']) {
								echo 'Такой кот уже существует в таблице №'.$el['id'];
							}
						 	echo $el['name']." == ".$_POST['name']." ".$el['color']." == ".$_POST['color'];

						 	
							echo "<tr>";
							echo "<td>".$el['id']."</td>";
							echo "<td>{$el['name']}</td>";
							echo "<td><img src='images/{$el['color']}.jpg' alt='{$el['color']}'></td>";
							echo "<td><a href='obr.php?id={$el['id']}'>Удалить</a></td>";
							echo "</tr>";


						echo "<pre>";
						 	print_r($el);
						echo "</pre>";
						}
						echo "</table>";
						
					?>	
		
				</div>
			</div>
		</div>	
	</div>
<?php 
// $conn = mysqli_connect("localhost", "new_user", "123");

// if (!$conn) {
//     echo "Невозможно подключиться к Базе Данных ";
//     die();
// }

// if (!mysqli_select_db($conn, "cats")) {
//     echo "Невозможно выбрать из Базы данных";
//     die();
// }

// $sql = "SELECT * FROM `cats_list`";
// // WHERE `name`=`name`;
// // $result = mysqli_query($sql);
// $result = mysqli_query($link, $sql);

// if (!$result) {
//     echo "Не удалось успешно выполнить запрос ($sql) из Базы данных";
//     die();
// }
// if (mysqli_num_rows($result) == 0) {
//     echo "Строки не найдены, печатать нечего, поэтому я выхожу из программы";
//     die();
// }

// while ($el = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
// 	echo "<pre>";
// 	print_r($el);
// 	echo "</pre>";
// 	// foreach ( as $key => $value) {
// 	// 	// code...
// 	// }
// 	if ($el["name"] == $_POST['name'] && $el['color'] == $_POST['color']) {
// 		echo 'Такой кот уже существует в таблице';
// 	}
// }

// mysqli_free_result($data);

?>
	
	<script src="js/bootstrap.min.js"></script>
	<script src='js/script.js'></script>
</body>
</html>

