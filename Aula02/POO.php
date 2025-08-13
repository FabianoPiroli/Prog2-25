<?php

    public class Usuario{
        string $nome
        string $email
        int $idade
    }

    $fabiano = new Usuario();
    $fabiano->$nome = "Fabiano";
    $fabiano->$email = "fabianopiroli98@gmail.com";
    $fabiano->$idade = 26;

    public function exibirDados($n, $e, $i){
        echo "Nome: $n,
              Email: $e, 
              Idade: $i";
    }

    public function ehMaiorDeIdade($i){
        return $i >= 18;
    }
?>