<?php
include 'conection.php';

$images = addslashes(file_get_contents($_FILES['img']['tmp_name']));
$query = "INSERT INTO users (image) VALUES ('$images')";
$result = $conection -> query($query);

header('Location: index.php')

?>