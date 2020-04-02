<?php
if($_GET['num1']!=null && $_GET['num2']!=null){
  $number1=$_GET['num1'];
  $number2=$_GET['num2'];
  echo "$number1, $number2";
} else {
  echo "Nie podano pierwszej/drugiej liczby";
}
?>