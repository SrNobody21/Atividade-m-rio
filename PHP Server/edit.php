<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo 'POST';
}

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo 'GET: ' . $_GET['id'];
}

echo '<!DOCTYPE html>';
echo '<html lang="en">';

echo '<head>';
echo '    <meta charset="UTF-8">';
echo '    <meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '    <title>Document</title>';
echo '</head>';

echo '<body>';

echo '<h2>Editar</h2> <br>';

echo '<form action="/update.php" method="POST">';
echo '  <label for="name">Name:</label>' ;
echo '  <input type="text" id="name" name="name" value="nome"><br><br>';
echo '  <input type="submit" value="Salvar">';
echo '</form>';

echo '</body>';

echo '</html>';