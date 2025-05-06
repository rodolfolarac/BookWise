<?php

class Validacao
{
    public $validacoes = [];

    public static function validar($regras, $dados)
    {
        $validacao = new self;

        foreach ($regras as $campo => $regrasDoCampo) {
            foreach ($regrasDoCampo as $regra) {
                $valorDoCampo = $dados[$campo];

                if ($regra == 'confirmed') {
                    $validacao->$regra($campo, $valorDoCampo, $dados["{$campo}_confirmacao"]);
                } elseif (str_contains($regra, ':')) {
                    $temp = explode(':', $regra);
                    $regra = $temp[0];
                    $regraAr = $temp[1];
                    $validacao->$regra($regraAr, $campo, $valorDoCampo);
                } else {
                    $validacao->$regra($campo, $valorDoCampo);
                }
            }
        }

        return $validacao;
    }

    private function required($campo, $valor)
    {
        if (strlen($valor) == 0) {
            $this->validacoes[] = "O $campo é obrigatório.";
        }
    }

    private function email($campo, $valor)
    {
        if (!filter_var($valor, FILTER_VALIDATE_EMAIL)) {
            $this->validacoes[] = "O $campo é inválido.";
        }
    }

    private function confirmed($campo, $valor, $valorDeConfirmacao)
    {
        if ($valor != $valorDeConfirmacao) {
            $this->validacoes[] = "O $campo de confirmação esta diferente!";
        }
    }

    private function min($min, $campo, $valor)
    {
        if (strlen($valor) <= $min) {
            $this->validacoes[] = "O $campo precisa ter no mínimo de $min caracteres.";
        }
    }
    private function max($max, $campo, $valor)
    {
        if (strlen($valor) > $max) {
            $this->validacoes[] = "O $campo precisa ter no mínimo de $max caracteres.";
        }
    }
    private function strong($campo, $valor)
    {
        if (! strpbrk($valor, '!@#$%^&*()_-[\];.,/?|')) {
            $this->validacoes[] = "O $campo precisa conter um caracter especial nela.";
        }
    }

    public function naoPassou()
    {
        $_SESSION['validacoes'] =  $this->validacoes;
        return sizeof($this->validacoes) > 0;
    }
}
/*
$validacao = Validacao::validar([
        'nome' => 'required',
        'email' => ['required', 'email', 'confirmed'],
        'senha' => ['required', 'min:8', 'max:30', 'strong']
    ], $_POST);

    if($validacao->naoPassou()){
        $_SESSION['validacoes'] =  $validacao->validacoes;
        header('location: /login');
        exit();
    }
if (strlen($nome) == 0) {
    $validacoes[] = 'O nome é obrigatório.';
}
if (strlen($email) == 0) {
    $validacoes[] = 'O email é obrigatório.';
}
if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $validacoes[] = 'O email é inválidos.';
}
if ($email != $email_confirmacao) {
    $validacoes[] = 'O email de confirmação está diferente.';
}
if (strlen($senha) == 0) {
    $validacoes[] = 'A senha é obrigatório.';
}
if (strlen($senha) < 8 || strlen($senha) > 30) {
    $validacoes[] = 'A senha precisa ter entre 8 e 30 caracteres.';
}
if (!str_contains($senha, '*')) {
    $validacoes[] = 'A senha precisa ter um * no meio';
}
*/
