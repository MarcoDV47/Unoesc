<?php

include("database.php");

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SEAU</title>
	</head>
	<body>
		<header>
			<nav>
				<a href="/">Voltar</a>
			</nav>
		</header>
		<h1>Realize seu pedido!</h1>
		<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
			<fieldset>
				<legend>Cadastro de pedido</legend>
				<?php 
					$sql = "SELECT * FROM products";
					$result = mysqli_query($conn, $sql);
					if(mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
							echo "<label for='{$row["id"]}'>{$row["name"]}</label>";
							echo "<input type='number' name='product{$row["id"]}' />";
							echo "<br />";
						};
					}
				?>
				<br />
				<button type="submit" value="register">Enviar</button>
			</fieldset>
		</form>
	</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$sql = "SELECT * FROM products";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0)
	{
		$isOrderInitiated = false;
		while($row = mysqli_fetch_assoc($result))
		{
			$productId = $row["id"];
			$quantity = filter_input(INPUT_POST, "product" . "$productId", FILTER_SANITIZE_SPECIAL_CHARS);
			if(!empty($quantity))
			{
				if(!$isOrderInitiated)
				{
					$isOrderInitiated = true;
					$sql = "INSERT INTO orders (studentId, addressId)
					VALUES(5, 2)";
					mysqli_query($conn, $sql);
					echo "<p>Pedido cadastrado com sucesso!</p>";
				}

				$sql = "SELECT MAX(id) as id FROM orders";
				$orderId = mysqli_fetch_assoc(mysqli_query($conn, $sql))["id"];

				$sql = "INSERT INTO items (orderId, productId, quantity)
					VALUES('$orderId', '$productId', '$quantity')";
				mysqli_query($conn, $sql);
			}
		}
	}
}

mysqli_close($conn);
?>