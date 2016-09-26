<header>
    
    
    <a href=./index.php>
        <h1>
            <img src="./media/favicon.png" alt="Icone feu" />
            Greenlight
        </h1>
    </a>

    
<?php
    //si aucun utilisateur authentifié
    if (!isset($_SESSION['login'])) {
?>
            
<!--passage en HTML-->
    <form method="post" action="./signin.php">
        <input type="radio" name="type" value=user id="user" checked="checked"> <label for="user"> Particulier </label>
        <input type="radio" name="type" value=association id="association"> <label for="association"> Association </label>
        <input type="text" name="login" id="login" placeholder="Identifiant" />
        <input type="password" name="password" id="password" placeholder="Mot de passe" />
        <input type="submit" value="Connexion">
        <input type="submit" formaction="signup_form.php" value="Inscription">
    </form>
<!--retour en php-->

<?php
    }
        //si utilisateur authentifié
    else {
?>
        Bienvenue <a href=./profil.php?type=<?php echo $_SESSION['type'];?>&id=<?php echo $_SESSION['id'];?>><?php echo $_SESSION['login'];?></a>
        <a href=./signout.php>Déconnexion</a>
<?php
    }
?>

</header>