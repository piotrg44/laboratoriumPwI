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

 


$deleteStudentNumberTwo = "delete from studenci where id =2";


$db->exec($deleteStudentNumberTwo);

?>