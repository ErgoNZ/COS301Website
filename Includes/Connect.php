<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=Sethwagener_', 'sethwagener', '0KJMCujT3QOmNz');
}
catch (PDOException $e)
{
  echo 'Unable to connect to the database server.';
  exit; 
}
?>
