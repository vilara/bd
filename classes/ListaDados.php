<?php
include_once("CriaPaginacao.php");

class ListaDados extends CriaPaginacao{

	private $fields, $table, $where, $fieldID;

    public function setfields($f){
		$this->fields = $f;
	}

    public function settable($t){
		$this->table = $t;
	}

    public function setwhere($w){
		$this->where = $w;
	}

    public function setfieldID($fi){
		$this->fieldID = $fi;
	}

/**************
** Lista dados
***************/
	public function geraListaIndex(){
		$sql = "SELECT $this->fields FROM $this->table WHERE $this->fieldID > 0 $this->where  ";
		// $this->setParametro($this->strNumPagina); //numero de pagina atual
		// $this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(1000000); // quantidade de produtos por tela
		$this->setMaximoLinks(1000000); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		// $contador = 0; // contador para gerar o numero de paginas
		while($prod = self::results()){
			// $contador ++;
			echo $prod["esp_ordem"]."&nbsp;&nbsp;".$prod["esp_familia"]."&nbsp;&nbsp;".$prod["esp_especie"];
            echo "<br>";
		   // 	self::setContador($contador);
		}
	}


/***************************
** Lista dados Filtrado
****************************/
	public function geraDadosFiltrados(){
		$sql = "SELECT $this->fields FROM $this->table WHERE $this->fieldID > 0 $this->where  ";
		// $this->setParametro($this->strNumPagina); //numero de pagina atual
		// $this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(1000000); // quantidade de produtos por tela
		$this->setMaximoLinks(1000000); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		// $contador = 0; // contador para gerar o numero de paginas
		while($prod = self::results()){
			// $contador ++;
			echo $prod["esp_ordem"]."&nbsp;&nbsp;".$prod["esp_familia"]."&nbsp;&nbsp;".$prod["esp_especie"];
            echo "<br>";
		   // 	self::setContador($contador);
		}
	}
}





?>