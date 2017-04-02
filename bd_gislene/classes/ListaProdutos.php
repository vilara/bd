<?php
include_once("CriaPaginacao.php");

class ListaProdutos extends CriaPaginacao{



/**************
** Lista Index
***************/
	public function geraListaIndex(){
		$sql = "SELECT * FROM tb_excursao ORDER BY id_excursao ASC";
		$this->setSQL($sql);
		self::iniciaPaginacao();
	   	while($prod = self::results()){
			$contador ++;
			echo $prod["0"];
            echo "<br>";
		  }
	}


}










?>