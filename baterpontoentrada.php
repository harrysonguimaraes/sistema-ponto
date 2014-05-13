<?php include "base.php"; ?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
		if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){//se tem algo na sessão e o username está preenchido, então o usuário está logado.
    			$username = "Teste";
    			$password = "senha";
    			$email="email";
    			$entrada= "2014-04-04";
    			$registerquery = mysql_query("INSERT INTO users (Username, Password, EmailAddress, Entrada) 
	        			VALUES('".$username."', '".$password."', '".$email."' , '".$entrada."')");
	        		if($registerquery){
	        			echo $registerquery;
	        			echo $_SESSION['Username'];
	        		}else
	        		echo "Erro";
    	?>
 			
		 	<script>
		 		alert("Marcação realizada com sucesso!");
		 	</script>
		 	<!-- <meta HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php"> -->
      
    	<?php
		}else{//se o usuário preencheu usuário e senha, redireciona para login
	?>
		<script>
		 	alert("É necessário realizar o login primeiro!");
		 </script>
		<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">
	<?php	   		
		}
	?>
 
</div>
</body>
</html>
	
