<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
background-color: #35afda;
font-family: "Raleway", Arial, sans-serif
}
</style>
<title> E-Commerce Store</title>
<body>

<!-- !page content! -->
	<div class="w3-content" style="max-width:1500px">
	
		<!-- header -->
		<header class="w3-container w3-large clolor: #35afda">
			<a href="index.html" class="w3-left w3-button">EC Company</a>
			<a href="login.php" class="w3-right w3-button">Manager Login</a>
			<a href="reset.php" class="w3-right w3-button">Reset DB</a>
			<a href="phpinfo.php" class="w3-right w3-button">PHP info</a>
			<a href="connection.php" class="w3-right w3-button">Test Connection</a>
		</header>
	</div>
	<footer class="w3-light-grey w3-padding-64 w3-center" id="about">
	<?php
	echo "<table style='border: solid 1px black;'>";
	echo "<tr><th>Item Name</th><th>Item Description</th><th>Item Author</th><th>Item Stock</th><th>Item Orders</th></tr>";
	class TableRows extends RecursiveIteratorIterator {
		function __construct($it) {
			parent::__construct($it, self::LEAVES_ONLY);
		}
		function current() {
			return "<td style='width: 100px; border: 1px solid black;'>" . parent::current(). "</td>";
		}
		function beginChildren() {
			echo "<tr>";
		}
		function endChildren() {
			echo "</tr>" . "\n";
		}
	}
	$servername = "localhost";
	$username = "as16815";
	$password = "obscure";
	$dbname = "as16815";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT item_name, item_description, item_author, item_stock_count, item_order_count FROM inventory");
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
			echo $v;
		}
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
	echo "</table>";
	?>
	</footer>
</body>
</html>