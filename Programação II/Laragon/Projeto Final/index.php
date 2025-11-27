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
			<a href="/pedido.php">Realizar Pedido</a>
			<a href="/relatorio.php">Relatório de Entregas</a>
		</nav>
	</header>
    <h1>Bem vindo!</h1>
	<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
		<fieldset>
			<legend>Cadastro de aluno</legend>
			<label for="username">Nome Completo</label>
			<input type="text" name="username" id="username"/>
			<br />
			<label for="enrollment">Matrícula</label>
			<input type="text" name="enrollment" id="enrollment"/>
			<br />	
			<label for="password">Senha</label>
			<input type="text" name="password" id="password"/>
			<br />
			<label for="courseId">Curso</label>
			<select name="courseId" id="courseId">
			<?php 
				$sql = "SELECT * FROM courses";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_assoc($result))
					{
						echo "<option value='{$row["id"]}'>{$row["name"]}</option>";
					};
				}
			?>
			</select>
			<br />
			<label for="semester">Semestre</label>
			<input type="number" min="1" max="8" name="semester" id="semester"/>
			<br />
			<button type="submit" value="register">Enviar</button>
		</fieldset>
	</form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
	$enrollment = filter_input(INPUT_POST, "enrollment", FILTER_SANITIZE_SPECIAL_CHARS);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
	$courseId = filter_input(INPUT_POST, "courseId", FILTER_SANITIZE_SPECIAL_CHARS);
	$semester = filter_input(INPUT_POST, "semester", FILTER_SANITIZE_SPECIAL_CHARS);

	if(empty($username))
	{
		echo "Por favor, preencha o campo de Usuário";
	}
	elseif(empty($enrollment))
	{
		echo "Por favor, preencha o campo de Matrícula";
	}	
	elseif(empty($password))
	{
		echo "Por favor, preencha o campo de Senha";
	}
	elseif(empty($courseId))
	{
		echo "Por favor, preencha o campo de Curso";
	}	
	elseif(empty($semester))
	{
		echo "Por favor, preencha o campo de Semestre";
	}
	else
	{
		$hash = password_hash($password, PASSWORD_DEFAULT);
		$sql = "INSERT INTO students (name, enrollment, passwordHash, courseId, semester)
				VALUES('$username', '$enrollment', '$hash', '$courseId', '$semester')";
		mysqli_query($conn, $sql);
		echo "Você está registrado!";
	}
}

mysqli_close($conn);
?>