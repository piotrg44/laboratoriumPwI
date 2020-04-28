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

 


$sql = 'SELECT Marka, Model, Pojemnosc 
		FROM samochody 
		WHERE Id = 1 OR Id = 3';

foreach ($db->query($sql) as $row) {
    echo $row['Marka'] . " ";
    echo $row['Model'] . " ";
    echo $row['Pojemnosc'] . "<br/>";
}
?>