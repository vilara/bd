<?php
class noticia {
public $titulo;
public $texto;

public function setTitulo($valor){
		$this->titulo = $valor;
}

public function setText($valor){
		$this->texto = $valor;
}

function exibenoticia (){
        echo "<center>";
        echo "<b>".$this->titulo."<b><p>";
        echo $this->texto;
        echo "</center><p>";

}
}
/*
$not = new noticia;
$not->titulo = "Novo curso de PHP avan�ado";
$not->texto = "Este curso cont�m os seguines t�picos: POO, XML, Etc.";
$not->exibenoticia();*/
?>