<?php

include('./include/head.php');
include('./include/functions.php');

$new_donation->execute(array(
    'idUser'=>$_POST['idUser'],
    'idProjet'=>$_POST['idProjet'],
    'comment'=>$_POST['comment'],
    'montant'=>$_POST['montant']
));

echo '<meta http-equiv="refresh" content="0;URL=index.php" />';