<?php

class Livro{
    public $titulo;
    public $autor;
    public $anoPublicacao;
    public $numeroPaginas;
    public bool $disponível;

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function setAnoPublicacao($ano){
        $anoAtual = date("Y");
        if ($ano > $anoAtual){
            throw new Exception("Ano de publicação não pode ser maior que o ano atual($anoAtual).");
        }
        $this->setAnoPublicacao = $ano;
    }

    public function setNumeroPaginas(){
        if($numeroPaginas > 0){
            $this->NumeroPaginas = $numeroPaginas;
        }else{
            throw new Exception("O número de páginas precisa ser mairo que 0");
        }
    }

    public function getTitulo(){
        return $this->titulo;
    }
}

$livro = new Livro();
$livro->setTitulo("Dom Casmurro");
$livro->setAutor("Machado de Assis");
$livro->setAnoPublicacao(1899);
$livro->setNumeroPaginas(256);
$livro->setDisponivel(true);
echo $livro->getTitulo();
// Teste de validação
try {
 $livro->setAnoPublicacao(2030);
} catch (Exception $e) {
 echo "Erro: " . $e->getMessage();
}