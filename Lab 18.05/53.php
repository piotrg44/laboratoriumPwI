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

  $sql = 'DELETE FROM studenci WHERE id = :id';
  $data = $db -> prepare($sql);
  $data -> execute(array('id' => $_GET['id']));
 ?>
