<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<?php
/*************************************************************************************

**  CLASSE EM PHP QUE FAZ A CONEXï¿½O COM O BANCO DE DADOS MYSQL VERSï¿½O 1.0
**  DATA DA CRIAï¿½ï¿½O: 03/01/2009
**  DESENVOLVIDO POR: MARCELO MARTINS VILARA
**  Cï¿½DIGO LIVRE MANTIDO PELA GNU
**
**  ESTA CLASSE Sï¿½ PODERï¿½ SER USANDO EM MODO DE HERANï¿½A...
**
**  CLASSE ABSTRATA PARA CONEXï¿½O COM BANCO DE DADOS.
**************************************************************************************/
abstract class mySqlConn1{

  protected $host, $user, $pass, $dba, $conn, $sql, $qr, $data, $status, $totalFields, $error;

  //mï¿½todo que incializa automaticamente as variï¿½aveis de conexï¿½o
  public function __construct(){
   /*  $this->host = "localhost";
    $this->user = "root";
    $this->pass = "";*/

          $this->host = "mysql01.ictiomadeira.com.br";
    $this->user = "ictiomadeira";
    $this->pass = "ole30craM";

    $this->dba = "ictiomadeira";
    self::connect(); // eexecuta o mï¿½todo de conexï¿½o automaticamente ao herdar a classe
  }

  //mï¿½todo utilizando para efetuar a conexï¿½o com o banco de dados
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

  // mï¿½todo que executa e lista dados do banco de dados
  protected function listQr($qr){
    $this->data = @mysql_fetch_row($qr);
    return $this->data;
  }

  // mï¿½todo que lista a quantidade de dados encontrados no query
  protected function countData($qr){
    $this->totalFields = mysql_num_rows($qr);
    return $this->totalFields;
  }


    
}
=======
=======
>>>>>>> parent of 163197e... cach limpo
=======
>>>>>>> parent of 163197e... cach limpo
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> parent of 163197e... cach limpo
=======
>>>>>>> parent of 163197e... cach limpo
=======
>>>>>>> parent of 163197e... cach limpo
?>