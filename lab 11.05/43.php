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

 


$sql = 'SELECT s.imie, s.nazwisko, r.kierunek, r.stopien
		FROM studenci s
		INNER JOIN rok r 
		ON s.id_rok_studiow = r.id';

foreach ($db->query($sql) as $row) {
    echo $row['imie'] . " ";
    echo $row['nazwisko'] . " ";
    echo $row['kierunek'] . " ";
    echo $row['stopien'] . "<br/>";
}
?>