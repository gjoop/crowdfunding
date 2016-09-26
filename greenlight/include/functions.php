<?php
    $user_info = $db->prepare('SELECT * FROM user WHERE login = ?');
    $association_info = $db->prepare('SELECT * FROM association WHERE login = ?');
    $user_info_id = $db->prepare('SELECT * FROM user WHERE idUser = ?');
    $association_info_id = $db->prepare('SELECT * FROM association WHERE idAssociation = ?');
    
    
    $login_user = $db->prepare('SELECT * FROM user WHERE login = ? AND password = ?');
    $login_association = $db->prepare('SELECT * FROM association WHERE login = ? AND password = ?');

    
    $new_user = $db->prepare('INSERT INTO user(login, password, nom, prenom, email, address, phone, sex, birth, bankAccount)'
                           . 'VALUES(:login, :password, :nom, :prenom, :email, :address, :phone, :sex, :birth, :bankAccount)');
    $new_association = $db->prepare('INSERT INTO user(login, password, nomAssociation, email, address, phone, website, bankAccount)'
                                  . 'VALUES(:login, :password, :nomAssociation, :email, :address, :phone, :website, :bankAccount)');
    $new_donation = $db->prepare('INSERT INTO donation(idUser, idProjet, comment, montant) VALUES(:idUser, :idProjet, :comment, :montant)');
    
    
    $update_user = $db->prepare('UPDATE user SET nom = :nom, prenom = :prenom, email = :email, address = :address, phone = :phone, sex = :sex, birth = :birth, bankAccount = :bankAccount WHERE login = :login AND password = :password');
    $update_association = $db->prepare('UPDATE association SET nomAssociation = :nomAssociation, email = :email, address = :address, phone = :phone, website = :website, bankAccount = :bankAccount WHERE login = :login AND password = :password');

    
    $delete_user = $db->prepare('DELETE FROM user WHERE idUser=?');
    
    
    $user_don = $db->prepare('SELECT * FROM donation WHERE idUser = ?');
    $sum_don = $db->prepare('SELECT SUM(montant) AS somme FROM donation WHERE idProjet = ?');
    
    $info_project = $db->prepare('SELECT * FROM project WHERE idProjet = ?');
    $association_project = $db->prepare('SELECT * FROM project WHERE idAssociation = ?');
    $last_project = $db->prepare('SELECT * FROM project ORDER BY creation DESC');
    $abc_project = $db->prepare('SELECT * FROM project ORDER BY nom');
    
    $project_news = $db->prepare('SELECT * FROM newsfeed WHERE idProjet1 = ? ORDER BY time');
    $project_don = $db->prepare('SELECT * FROM donation WHERE idProjet = ? ORDER BY date');
    
?>