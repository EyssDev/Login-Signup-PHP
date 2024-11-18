<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>S'inscrire</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Nom"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Nom"><br>
          <?php }?>

          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Nom d'utilisateur"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Nom d'utilisateur"><br>
          <?php }?>


     	<input type="password" 
                 name="password" 
                 placeholder="Mot de passe"><br>

          <input type="password" 
                 name="re_password" 
                 placeholder="Re Mot de passe"><br>

     	<button type="submit">S'inscrire</button>
          <a href="index.php" class="ca">Vous avez déjà un compte ?</a>
     </form>
</body>
</html>