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

 


$insertStudent = "insert into studenci(imie, nazwisko, email, id_rok_studiow)
        values('Maciek', 'Nowak', 'maciek.nowak@gmail.com', 1),
              ('Wojtek', 'Kowalski', 'wojtek.kowalski@gmail.com', 1),
              ('Marek', 'Broniewski', 'marek.broniewski@gmail.com', 2);";

$insertRok = "insert into rok(nazwa, kierunek, stopien)
            values('pierwszy', 'informatyka', 'pierwszy'),
                  ('drugi', 'informatyka', 'pierwszy');";

$db->exec($insertStudent);
$db->exec($insertRok);
?>