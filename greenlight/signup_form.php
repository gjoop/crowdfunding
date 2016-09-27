<?php include("./include/head.php"); ?>

<body>

<?php include("./include/header_alt.php");

if ($_POST['type']=='user') {
?>
    
    <form method="post" action="signup.php">
        <input type="hidden" name="type" id="type" value="user" /></br></br>
        <input required="required" type="text" name="login" id="login" placeholder="Identifiant" value=<?php echo $_POST['login'];?> /></br></br>
        <input required="required" type="password" name="password" id="password" placeholder="Mot de passe"/></br></br>
        <input type="text" name="nom" id="nom" placeholder="Nom"/></br></br>
        <input type="text" name="prenom" id="prenom" placeholder="Prénom"/></br></br>
        <input required="required" type="email" name="email" id="email" placeholder="e-mail"/></br></br>
        <input type="text" name="address" id="address" placeholder="Adresse"/></br></br>
        <input type="tel" name="phone" id="phone" placeholder="Numéro de téléphone"/></br></br>
        <input type="radio" name="sex" value=male id="male"> <label for="male">Homme</label>
        <input type="radio" name="sex" value=female id="female"> <label for="female">Femme</label>
        <input type="radio" checked="checked" name="sex" value=unassigned id="unassigned"> <label for="unassigned">Autre</label></br></br>
        <input type="date" name="birth" id="birth" placeholder="Date de naissance"/></br></br>
        <input type="text" name="bankAccount" id="bankAccount" placeholder="Numéro de compte"/></br></br>
        <input type="submit" value="S'inscrire"></br></br>
        <input type="reset" value="Effacer le formulaire">
    </form>
    
<?php

}

else {

?>
    <form method="post" action="signup.php">
        <input type="hidden" name="type" id="type" value="association" /></br></br>
        <input required type="text" name="login" id="login" placeholder="Identifiant" value=<?php echo $_POST['login'];?> /></br></br>
        <input required type="password" name="password" id="password" placeholder="Mot de passe"/></br></br>
        <input required type="text" name="nomAssociation" id="nomAssociation" placeholder="Nom d'association"/></br></br>
        <input required type="email" name="email" id="email" placeholder="abc@xyz.org"/></br></br>
        <input required type="text" name="address" id="address" placeholder="Adresse"/></br></br>
        <input required type="tel" name="phone" id="phone" placeholder="Numéro de téléphone"/></br></br>
        <input type="url" name="website" id="website" placeholder="Site web"/></br></br>
        <input required type="text" name="bankAccount" id="bankAccount" placeholder="Numéro de compte"/></br></br>
        <input type="submit" value="S'inscrire"></br></br>
        <input type="reset" value="Effacer le formulaire">
    </form>

<?php

}
include("./include/footer.php");

?>

</body>