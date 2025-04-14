<?php

$livro = (new DB)->Livro($_REQUEST['id']);

view('livro', compact('livro'));
