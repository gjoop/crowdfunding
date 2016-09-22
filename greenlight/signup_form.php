<?php include("./include/head.php"); ?>

<body>

<?php include("./include/header_alt.php");

if ($_POST['type']=='user') {
?>
    
    <form method="post" action="signup.php">
        <input type="hidden" name="type" id="type" value="user" />
        <input required type="text" name="login" id="login" placeholder="Identifiant" />
        <input required type="password" name="password" id="password" placeholder="Mot de passe"/>
        <input type="text" name="nom" id="nom" placeholder="Nom"/>
        <input type="text" name="prenom" id="prenom" placeholder="Prénom"/>
        <input required type="email" name="email" id="email" placeholder="e-mail"/>
        <input type="text" name="address" id="address" placeholder="Adresse"/>
        <input type="tel" name="phone" id="phone" placeholder="Numéro de téléphone"/>
        <input type="radio" name="sex" value=male id="male"> <label for="male">Homme</label>
        <input type="radio" name="sex" value=female id="female"> <label for="female">Femme</label>
        <input type="radio" name="sex" value=unassigned id="unassigned"> <label for="unassigned">Autre</label>
        <input type="date" name="birth" id="birth" placeholder="Date de naissance"/>
        <input type="number" name="bankAccount" id="bankAccount" placeholder="Numéro de compte"/>
        <input type="submit" value="S'inscrire">
        <input type="reset" value="Effacer le formulaire">
    </form>
    
<?php

}

else {

?>
    <form method="post" action="signup.php">
        <input type="hidden" name="type" id="type" value="association" />
        <input required type="text" name="login" id="login" placeholder="Identifiant" />
        <input required type="password" name="password" id="password" placeholder="Mot de passe"/>
        <input required type="text" name="nomAssociation" id="nomAssociation" placeholder="Nom d'association"/>
        <input required type="email" name="email" id="email" placeholder="abc@xyz.org"/>
        <input required type="text" name="address" id="address" placeholder="Adresse"/>
        <input required type="tel" name="phone" id="phone" placeholder="Numéro de téléphone"/>
        <input type="url" name="website" id="website" placeholder="Site web"/>
        <input required type="number" name="bankAccount" id="bankAccount" placeholder="Numéro de compte"/>
        <input type="submit" value="S'inscrire">
        <input type="reset" value="Effacer le formulaire">
    </form>

<?php

}
include("./include/footer.php");

?>

</body>