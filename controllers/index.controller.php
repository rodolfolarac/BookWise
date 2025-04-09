<?php
require 'dados.php';
$view = "index";

view('index',[
    'livrvos' => $livros
]);
