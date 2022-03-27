<?php
$task = $_POST['task'];

require 'configdb.php';

$sql = 'INSERT INTO tasks(task) VALUES(:task)';
$query = $pdo->prepare($sql);
$query->execute(['task'=>$task]);


header('location: /'); 

?>