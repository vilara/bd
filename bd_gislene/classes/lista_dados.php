<?php

	//método que busca registros de uma tabela
include_once "ManipulateData.php";
class tabela extends ManipulateData{
public function getLastId1(){
		$this->sql = "SELECT * FROM $this->table";
		$this->qr = self::execSql($this->sql);
		while($this->data = self::listQr($this->qr))
		{
        echo $this->data["6"];
        }
	}
}

$dado_fim = new tabela();
$dado_fim->setTable("tb_malhadeira_biotico");
$dado_fim->getLastId1();
?>