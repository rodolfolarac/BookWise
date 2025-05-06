<?php
$mensagem = $_REQUEST['mensagem'] ?? '';

// 1. Receber o Formulário com email e senha.
if ($_SERVER['REQUEST_METHOD'] ==  'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $validacao = Validacao::validar([
        'email' => ['required', 'email'],
        'senha' => ['required']
    ], $_POST);

    if ($validacao->naoPassou()) {
        header('location: /login');
        exit();
    }
    //2. Fazer uma consulta no banco de dados com o email e senha.
    $usuario = $database->query(
        query: "select * from usuarios where email = :email and senha = :senha",
        class: Usuario::class,
        params: compact('email', 'senha')
    )
        ->fetch();
    if ($usuario) {
        //3. Se existir, adicionar na sessão que o usuario esta autenticado.
        $_SESSION['auth'] = $usuario;
        $_SESSION['mensagem'] = 'Seja bem vindo ' . $usuario->nome . '!';
        header('location: /');
    }
}
//4. Mudar a informação no navbar para mostrar nome do usuario.

view('login', compact('mensagem'));
