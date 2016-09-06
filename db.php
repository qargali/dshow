<?php
    try{
        $db = new PDO('mysql:host=mysql.hostinger.ru;dbname=u782632263_baza','u782632263_baza','9gf3az2q');
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
?>
