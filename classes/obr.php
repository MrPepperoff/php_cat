<style>
	table{
		border: 1px solid #000;
	}
	td{
		border: 1px solid #000;
		padding: 10px;
	}
</style>

<?php 

	$link = mysqli_connect("localhost", "new_user", "123", "cats");

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
		<td>цвет котика</td>
		<td>имя котика</td>
		<td></td>
	</tr>
	<a href="index.php">переход на главную CLASSES</a>

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