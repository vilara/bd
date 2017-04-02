<?php
	//método que busca registros de uma tabela
include_once "ManipulateData.php";

/*$tt = "id_tb_malhadeira = '15'";
$dado_fim = new ManipulateData();
$dado_fim->setTable("tb_malhadeira_biotico");
$dado_fim->setFieldId("$tt");

$dado_fim->setFieldNr("6"); echo $dado_fim->data_filter();*/

class lista_dados_filtro extends ManipulateData{
 public $ttt;

	public function setttt($x){
		$this->ttt = $x;
	}
/**************
** Lista Index
***************/
	public function geraListaIndex(){
        $this->setTable("tb_malhadeira_biotico"); //numero de pagina atual
        self::data_filter()
		$prod = self::results;
	 	echo $prod["2"];

	}


}
?>