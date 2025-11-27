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
		<main>
			<ul>
				<?php 
					$sql = "SELECT o.id AS orderId, a.block, a.roomNumber, a.roomFloor, a.id AS addressId, s.name
							FROM orders o
							JOIN addresses a ON o.addressId = a.id
							JOIN students s ON o.studentId = s.id
							ORDER BY addressId ASC, orderId ASC;
					";
					$result = mysqli_query($conn, $sql);
					if(mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
							echo "<li><strong>Pedido {$row["orderId"]}</strong></li>";
							echo "<ul>";
								echo "<li>Aluno: {$row["name"]}</li>";
								echo "<li>Endereço:</li>";
								echo "<ul>";
									echo "<li>Bloco: {$row["block"]}</li>";
									echo "<li>Andar: {$row["roomFloor"]}</li>";
									echo "<li>Sala: {$row["roomNumber"]}</li>";
								echo "</ul>";

								$sql2 = "SELECT o.id as orderId, p.name as productName, i.quantity
									FROM items i
									JOIN orders o ON i.orderId = o.id
									JOIN products p ON i.productId = p.id
									WHERE o.id = {$row["orderId"]}
									ORDER BY i.quantity ASC;
								";
								$result2 = mysqli_query($conn, $sql2);

								echo "<li><strong>Itens:</strong></li>";
								echo "<ul>";
								while($row2 = mysqli_fetch_assoc($result2))
								{
									echo "<li>{$row2["quantity"]} - {$row2["productName"]}</li>";
								}

								echo "</ul>";
							echo "</ul>";
						};
					}
				?>
			</ul>
		</main>
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
					VALUES(1, 1)";
					mysqli_query($conn, $sql);
					echo "<p>Pedido cadastrado com sucesso!</p>";
				}

				$sql = "SELECT MAX(id) as id FROM orders";
				$orderId = mysqli_fetch_assoc(mysqli_query($conn, $sql))["id"];

				$sql2 = "INSERT INTO items (orderId, productId, quantity)
					VALUES('$orderId', '$productId', '$quantity')";
				mysqli_query($conn, $sql2);
			}
		}
	}
}

mysqli_close($conn);
?>

