<?php
/*************************************************************************************
**  CLASSE EM PHP QUE FAZ A CONEX�O COM O BANCO DE DADOS MYSQL VERS�O 1.0
**  DATA DA CRIA��O: 03/01/2009
**  DESENVOLVIDO POR: MARCELO MARTINS VILARA
**  C�DIGO LIVRE MANTIDO PELA GNU
**
**  ESTA CLASSE S� PODER� SER USANDO EM MODO DE HERAN�A...
**
**  CLASSE ABSTRATA PARA CONEX�O COM BANCO DE DADOS.
**************************************************************************************/
abstract class mySqlConn1{

  protected $host, $user, $pass, $dba, $conn, $sql, $qr, $data, $status, $totalFields, $error;

  //m�todo que incializa automaticamente as vari�aveis de conex�o
  public function __construct(){
   /*  $this->host = "localhost";
    $this->user = "root";
    $this->pass = "";*/

          $this->host = "mysql01.ictiomadeira.com.br";
    $this->user = "ictiomadeira";
    $this->pass = "ole30craM";

    $this->dba = "ictiomadeira";
    self::connect(); // eexecuta o m�todo de conex�o automaticamente ao herdar a classe
  }

  //m�todo utilizando para efetuar a conex�o com o banco de dados
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

  // m�todo que executa e lista dados do banco de dados
  protected function listQr($qr){
    $this->data = @mysql_fetch_row($qr);
    return $this->data;
  }

  // m�todo que lista a quantidade de dados encontrados no query
  protected function countData($qr){
    $this->totalFields = mysql_num_rows($qr);
    return $this->totalFields;
  }

    
}
?>