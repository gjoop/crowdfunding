<?php
    $user_info = $db->prepare('SELECT * FROM user WHERE login = ?');
    $association_info = $db->prepare('SELECT * FROM association WHERE login = ?');
    
    
    $login_user = $db->prepare('SELECT * FROM user WHERE login = ? AND password = ?');
    $login_association = $db->prepare('SELECT * FROM association WHERE login = ? AND password = ?');

    
    $new_user = $db->prepare('INSERT INTO user(login, password, nom, prenom, email, address, phone, sex, birth, bankAccount)'
                           . 'VALUES(:login, :password, :nom, :prenom, :email, :address, :phone, :sex, :birth, :bankAccount)');
    $new_association = $db->prepare('INSERT INTO user(login, password, nomAssociation, email, address, phone, website, bankAccount)'
                                  . 'VALUES(:login, :password, :nomAssociation, :email, :address, :phone, :website, :bankAccount)');

    
    
    $update_user = $db->prepare('UPDATE user SET nom = :nom, prenom = :prenom, email = :email, address = :address, phone = :phone, sex = :sex, birth = :birth, bankAccount = :bankAccount WHERE login = :login AND password = :password');
    $update_association = $db->prepare('UPDATE association SET nomAssociation = :nomAssociation, email = :email, address = :address, phone = :phone, website = :website, bankAccount = :bankAccount WHERE login = :login AND password = :password');
    
    
    $delete_user = $db->prepare('DELETE FROM user WHERE idUser=?')
?>