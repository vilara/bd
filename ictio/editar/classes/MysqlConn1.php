
<?php
/*************************************************************************************
**	CLASSE EM PHP QUE FAZ A CONEXÃO COM O BANCO DE DADOS MYSQL VERSÃO 1.0
**	DATA DA CRIAÇÃO: 03/01/2009
**	DESENVOLVIDO POR: MARCELO MARTINS VILARA
**	CÓDIGO LIVRE MANTIDO PELA GNU
**
**	ESTA CLASSE SÓ PODERÁ SER USANDO EM MODO DE HERANÇA...
**
**	CLASSE ABSTRATA PARA CONEXÃO COM BANCO DE DADOS.
**************************************************************************************/
abstract class mySqlConn1{

	protected $host, $user, $pass, $dba, $conn, $sql, $qr, $data, $status, $totalFields, $error;

	//método que incializa automaticamente as variáaveis de conexão
	public function __construct(){
   /*	$this->host = "localhost";
		$this->user = "root";
		$this->pass = "";*/

        	$this->host = "mysql01.ictiomadeira.com.br";
		$this->user = "ictiomadeira";
		$this->pass = "guariba***";

		$this->dba = "ictiomadeira";
		self::connect(); // eexecuta o método de conexão automaticamente ao herdar a classe
	}

	//método utilizando para efetuar a conexão com o banco de dados
	protected function connect(){
		$this->conn = @mysql_connect($this->host, $this->user, $this->pass) or die
											("<b><center>Erro ao acessar banco de dados </b></center><br />".mysql_error());
		$this->dba = @mysql_select_db($this->dba) or die
											("<b><center>Erro ao selecionar banco de dados: </b></center><br />".mysql_error());
	}
	// metodo utilizando para executar comandos SQL
	protected function execSQL($sql){
		$this->qr = @mysql_query($sql) or die ("<b><center>Erro ao Executar o Query: $sql/b></center><br />".mysql_error());
		return $this->qr;
	}

	// método que executa e lista dados do banco de dados
	protected function listQr($qr){
		$this->data = @mysql_fetch_row($qr);
		return $this->data;
	}

	// método que lista a quantidade de dados encontrados no query
	protected function countData($qr){
		$this->totalFields = mysql_num_rows($qr);
		return $this->totalFields;
	}

    
}

?>