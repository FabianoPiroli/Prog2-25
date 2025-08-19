<?php

class Aluno{
    public $nome;
    private $matricula;
    private $notas = [];
    private $media;

    public function __construct($nome, $matricula){
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function adicionarNota($nota){
        $this->notas[] = $nota;
    }

    public function calcularMedia(){
        $media = 0;
        foreach($this->notas as $nota){
            $media += $notas[]
        }
    }

    public function situacao(){
        if($media >= 7){
            return "Aprovado";
        }
        return "Reprovado"
    }
}