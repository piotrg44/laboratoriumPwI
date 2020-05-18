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
    

  $sql = "INSERT INTO studenci (imie, nazwisko, email, id_rok_studiow) VALUES
          (:imie, :nazwisko, :email, :id_rok_studiow)";

  $data = $db -> prepare($sql);

  $data -> execute(array('imie' => $_GET['imie'], 'nazwisko' => $_GET['nazwisko'],
   'email' => $_GET['email'], 'id_rok_studiow' => $_GET['rok']));


 ?>