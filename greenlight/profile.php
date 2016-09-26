<?php
include("./include/head.php"); 
include("./include/functions.php"); 

?>

<body>

<?php include("./include/header_alt.php");

if ($_SESSION['type']=='user') {
    $user_info->execute(array($_SESSION['login']));
    $info = $user_info->fetch();
    $user_info->closeCursor();
?>
    
    <form method="post" action="./update.php">
        <input readonly="readonly" required="required" type="text" name="login" id="login" placeholder="Identifiant" value=<?php echo $info['login'];?> />
        <input required="required" type="password" name="password" id="password" placeholder="Mot de passe"/>
        <input type="text" name="nom" id="nom" placeholder="Nom" value=<?php echo $info['nom'];?> />
        <input type="text" name="prenom" id="prenom" placeholder="Prénom" value=<?php echo $info['prenom'];?> />
        <input required type="email" name="email" id="email" placeholder="e-mail" value=<?php echo $info['email'];?>/>
        <input type="text" name="address" id="address" placeholder="Adresse" value=<?php echo $info['address'];?> />
        <input type="tel" name="phone" id="phone" placeholder="Numéro de téléphone" value=<?php echo $info['phone'];?> />
        <input type="radio" name="sex" value=male id="male"> <label for="male">Homme</label>
        <input type="radio" name="sex" value=female id="female"> <label for="female">Femme</label>
        <input type="radio" checked="checked" name="sex" value=unassigned id="unassigned"> <label for="unassigned">Autre</label>
        <input type="date" name="birth" id="birth" placeholder="Date de naissance" value=<?php echo $info['birth'];?> />
        <input type="text" name="bankAccount" id="bankAccount" placeholder="Numéro de compte" value=<?php echo $info['bankAccount'];?> />
        <input type="submit" value="Mettre a jour le profil">
        <input type="submit" formaction="./delete.php" value="Supprimer le profil">
    </form>
    
<?php

}

else {
    $association_info->execute(array($_SESSION['login']));
    $info = $association_info->fetch();
    $association_info->closeCursor();
?>
    <form method="post" action="signup.php">
        <input readonly="readonly" required="required" type="text" name="login" id="login" placeholder="Identifiant" value=<?php echo $info['login'];?> />
        <input required="required" type="password" name="password" id="password" placeholder="Mot de passe" />
        <input required="required" type="text" name="nomAssociation" id="nomAssociation" placeholder="Nom d'association" value=<?php echo $info['nomAssociation'];?> />
        <input required="required" type="email" name="email" id="email" placeholder="abc@xyz.org" value=<?php echo $info['email'];?> />
        <input required="required" type="text" name="address" id="address" placeholder="Adresse" value=<?php echo $info['address'];?> />
        <input required="required" type="tel" name="phone" id="phone" placeholder="Numéro de téléphone" value=<?php echo $info['phone'];?> />
        <input type="url" name="website" id="website" placeholder="Site web" value=<?php echo $info['website'];?> />
        <input required="required" type="text" name="bankAccount" id="bankAccount" placeholder="Numéro de compte" value=<?php echo $info['bankAccount'];?> />
        <input type="submit" value="Mettre a jour le profil">
    </form>

<?php

}
include("./include/footer.php");

?>

</body>