<?php

include('./include/head.php');
include('./include/functions.php');

if($_POST['type']=='user') {
    $new_user->execute(array(
        'login'=>$_POST['login'],
        'password'=>$_POST['password'],
        'nom'=>$_POST['nom'],
        'prenom'=>$_POST['prenom'],
        'email'=>$_POST['email'],
        'address'=>$_POST['address'],
        'phone'=>$_POST['phone'],
        'sex'=>$_POST['sex'],
        'birth'=>$_POST['birth'],
        'bankAccount'=>$_POST['bankAccount']
    ));
}
else {
    $new_association->execute(array(
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

echo '<meta http-equiv="refresh" content="0;URL=index.php" />';

?>