<form action="obr.php" method="POST">
	<input type="text" name="name" 
		value="<?php echo(isset($_GET['name']))? $_GET['name']: '';?>">
	<button>Отправить</button>
	<a href="../index.php">переход DZ</a>
</form>