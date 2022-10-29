<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Welcome</title>
		<style>
        {
            box-sizing: border-box;
        }

        body{
            background-image: url(fundo-roxo-vetor.jpg);
            background-color: rgb(242, 161, 245);
            width: 100%;
            height: 100%;
            text-align: center;
            font-size: 40px;
            color: #FFFFFF;

        }
    	</style>
	<head/>
	<body>
		<?php
			$login = $_POST["login"];
			$senha = $_POST["senha"];
			if ($login == null || $senha == null) {
				echo "Login e senha são campos de preenchimento obrigatório";
			} else {
				echo "Seja Bem Vindo(a) $login";
			
			}
		?>
	<body/>
<html/>
