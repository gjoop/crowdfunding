<?php
    $user_info = $db->prepare('SELECT * FROM user WHERE login = ? AND password = ?');
    $association_info = $db->prepare('SELECT * FROM association WHERE login = ? AND password = ?');

    $new_user = $db->prepare('INSERT INTO user(login, password, nom, prenom, email, address, phone, sex, birth, bankAccount) VALUES(:login, :password, :nom, :prenom, :email, :address, :phone, :sex, :birth, :bankAccount)');
    $new_association = $db->prepare('INSERT INTO user(login, password, nomAssociation, email, address, phone, website, bankAccount) VALUES(:login, :password, :nomAssociation, :email, :address, :phone, :website, :bankAccount)');

    
?>