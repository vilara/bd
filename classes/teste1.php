<?php
include_once("teste.php");

class noticiaprincipal extends noticia {
		public $rodape;

        public function setrodapeo($valor){
		$this->rodape = $valor;
}

function exibenoticia (){
        echo "<center>";
        echo "<b>".$this->titulo."<b><p>";
        echo $this->texto."<p>";
        echo $this->rodape;
        echo "</center><p>";

}

}

$not = new noticiaprincipal;
$not->titulo = "Novo curso de PHP avan�ado";

$not->texto = "Este curso cont�m os seguines t�picos: POO, XML, Etc,";
$not->texto .= " Teste de Complemento.";
$not->rodape = "Brasil Acima de Tudo!";
$not->exibenoticia();

?>