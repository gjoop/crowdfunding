<?php

include('./include/head.php');
include('./include/functions.php');

if ($_SESSION['type']=='user') {
    $update_user->execute(array(
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'email' => $_POST['email'],
        'address' => $_POST['address'],
        'phone' => $_POST['phone'],
        'sex' => $_POST['sex'],
        'birth' => $_POST['birth'],
        'bankAccount' => $_POST['bankAccount'],        
        'login' => $_POST['login'],
        'password' => $_POST['password']
    ));
}

else {
    $update_association->execute(array(
        'login'=>$_POST['login'],
        'password'=>$_POST['password'],
        'nomAssociation'=>$_POST['nomAssociation'],
        'email'=>$_POST['email'],
        'address'=>$_POST['address'],
        'phone'=>$_POST['phone'],
        'website'=>$_POST['website'],
        'bankAccount'=>$_POST['bankAccount']
    ));
}

echo '<meta http-equiv="refresh" content="0;URL=profile.php" />';

?>