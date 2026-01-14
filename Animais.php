<?php 

define("QUEBRA_LINHA", "<br>");

abstract class Animais {
    public $nome;
    
    public function emitirSom() {}
}

class Cachorro  0{
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
    
public function emitirSom() {
    return "O {$this->nome} diz: Au au!" . QUEBRA_LINHA;
}

}

class Gato {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
    
public function emitirSom() {
    return "O {$this->nome} diz: Miau miau!" . QUEBRA_LINHA;
}

}
    
class Papagaio {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
    
public function emitirSom() {
    return "O {$this->nome} diz: Quero biscoito! " . QUEBRA_LINHA;
}

}
    

        
    
