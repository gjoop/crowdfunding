<?php
    $user_info = $db->prepare('SELECT * FROM user WHERE login = ? AND password = ?');
    $association_info = $db->prepare('SELECT * FROM association WHERE login = ? AND password = ?');

?>