<?php
$config = require_once 'config.php';

    $db = new PDO
    (
        "mysql:host={$config ['host']};
        dbname={$config ['database']};
        charset=utf8",
        $config ['user'],
        $config['password']
		);

 


$updateStudentNumberThree = "update studenci set nazwisko = 'Malinowski', email = 'marek.malinowski@gmail.com' where id =3;";


$db->exec($updateStudentNumberThree);

?>