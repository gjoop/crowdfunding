<?php

include('./include/head.php');
include('./include/functions.php');

$user_info->execute(array($_SESSION['login']));
$info = $user_info->fetch();
$user_info->closeCursor();

if ($_POST['password']==$info['password']) {
    $delete_user->execute(array($_SESSION['idUser']));
    $_SESSION = array(); session_destroy();
    echo '<meta http-equiv="refresh" content="0;URL=index.php" />';
}
else {
    echo '<body>';
    include('./include/header_alt.php');
?>

<section>
    Erreur de mot de passe, réessayer
    <form method="post" action="./delete.php">
        <input readonly="readonly" required="required" type="text" name="login" id="login" placeholder="Identifiant" value=<?php echo $info['login'];?> />
        <input required="required" type="password" name="password" id="password" placeholder="Mot de passe"/>
        <input type="submit" value="Supprimer le profil"/>
    </form>
</section>

<?php
}

?>