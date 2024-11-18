<!DOCTYPE html>
<!--Create by Eyss-->
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input type="text" name="uname" placeholder="Nom d'utilisateur"><br>
     	<input type="password" name="password" placeholder="Mot de passe"><br>

     	<button type="submit">Se connecter</button>
          <a href="signup.php" class="ca">Créer un compte</a>
     </form>
</body>
</html>