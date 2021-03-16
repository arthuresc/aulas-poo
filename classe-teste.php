<?php
interface iProduto
{
    public function setNome ( string $nome );
    public function setDesconto ( number $desconto, array $produto );
}

class Produto {
    protected $marca;
    protected $nome;
    public $preco;
    public $qtd = 1;


    public function setNome ( string $nome ): bool
    {
        $this -> nome = $nome;
        return bool;

    }
    public function setDesconto ( number $desconto, array $produto ): number
    {
        $this -> desconto = $desconto;
        $this -> produto = $produto;
        $novoValor = produto['Preco'] - desconto;
        return $novoValor;

    }
}