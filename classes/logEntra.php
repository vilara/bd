<?php
include_once("CriaPaginacao.php");

class LogEntra extends CriaPaginacao{

private $usu, $senha;

public function setusu(){
	   $this->usu  = $_POST["usu"];
	}

public function setsenha(){
	   $this->senha  = $_POST["senha"];
	}
/***************************
** Lista dados Filtrado
****************************/
	public function geraDadosFiltrados(){
		$sql = "SELECT usu_senha, usu_nivel, usu_usuario FROM usu_senha WHERE usu_usuario = 'vilara'";
		// $this->setParametro($this->strNumPagina); //numero de pagina atual
		// $this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(1); // quantidade de produtos por tela
		$this->setMaximoLinks(1); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		// $contador = 0; // contador para gerar o numero de paginas
		while($prod = self::results()){
			// $contador ++;
			echo $prod["usu_senha"]."&nbsp;&nbsp;".$prod["esp_familia"]."&nbsp;&nbsp;".$prod["esp_especie"];
            echo "<br>";
		   // 	self::setContador($contador);
		}
	}
}

	$listagem = new LogEntra();
          $listagem->geraDadosFiltrados();



?>