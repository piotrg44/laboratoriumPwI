<!DOCTYPE HTML>
<html lang="pl">
  <head>
    <meta charset="utf-8">

    <title>PHP</title>

  </head>
  <body>
    <form action="53.php" method="GET">

      <select id=id>

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

        $sql = 'SELECT * FROM studenci';

          foreach ($db -> query($sql) as $rows) {

            echo "<option value=".$rows['id'].">".

            $rows['Imie']." ".$rows['Nazwisko']."</option>";
          }
          

          ?>
         

      </select>

      <button type="submit" name="usun">Usuń</button>

  </form>

  </body>
</html>