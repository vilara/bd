<?php
/*************************************************************************************
**	CLASSE EM PHP QUE FAZ A MANIPULAÇÃO DE DADOS NO BANCO DE DADOS MYSQL VERSÃO 1.0
**	DATA DA CRIAÇÃO: 03/01/2009
**	DESENVOLVIDO POR: MARCELO MARTINS VILARA
**	CÓDIGO LIVRE MANTIDO PELA GNU
**
**	ESTA CLASSE SÓ PODERÁ SER USANDO EM MODO DE HERANÇA...
**
**	CLASSE ABSTRATA PARA CONEXÃO COM BANCO DE DADOS.
**************************************************************************************/
include_once("MysqlConn1.php");

class ManipulateData1 extends mySqlConn1{

	protected $sql, $table, $fields, $dados, $status, $fieldNr, $fieldId, $valueId, $dadosGerados, $fieldOrder, $linha;

	//envia o nome da tabela a ser usada na classe
	public function setTable($t){
		$this->table = $t;
        return $this->table;
        	}

	//envia os campos a serem usados na classe
	public function setFields($f){
		$this->fields = $f;
	}

    //envia os números dos campos a serem usados na classe
	public function setFieldNr($n){
		$this->fieldNr = $n;
	}

	// envia os dados a serem usados na classe
	public function setDados($d){
		$this->dados = $d;
	}

    	// envia os dados a serem usados na classe
	public function setlinha($l){
		$this->linha = $l;
	}

	//envia o campo de pesquisa, normalmente o campo código
	public function setFieldOrder($fo){
		$this->fieldOrder = $fo;
	}

	//envia o campo de pesquisa, normalmente o campo código
	public function setFieldId($fi){
		$this->fieldId = $fi;
	}

	// envia os dados a serem cadastrados ou pesquisados
	public function setValueId($vi){
		$this->valueId = $vi;
	}

	//recebe o status atual, erros ou acertos
	public function getStatus(){
		return $this->status;
	}

// Novo------------start
 //método que cria lista das Excursões
   public function geraListaExc(){
        $this->sql = "SELECT * FROM tb_excursao ORDER BY ex_numero ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    echo "<option value=\"".$prod["1"]."\">".$prod["1"]."</option>\n";
        }
     	}

        //método que cria lista das Excursões
   public function geraListaExc1($aparelho,$flag1,$sec){
        $this->sql = "SELECT * FROM tb_excursao ORDER BY ex_numero ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    		echo "<option value=\""."index.php?secoes=consultas/".$sec."&exc=".$prod["1"]."&flag=1"."&aparelho=".$aparelho."&flag1=".$flag1."\">".$prod["1"]."</option>\n";
	   //  echo "<option value=\""."index.php?secoes=consultas/registros"."\">".$prod["1"]."</option>\n";
        }
     	}

        //método que cria lista das Excursões
   public function geraListaExc2($loc){
        $this->sql = "SELECT * FROM tb_excursao ORDER BY ex_numero ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    		echo "<option value=\""."index.php?secoes=registros/".$loc."&exc=".$prod["1"]."&flag=1\">".$prod["1"]."</option>\n";
	   //  echo "<option value=\""."index.php?secoes=consultas/registros"."\">".$prod["1"]."</option>\n";
        }
     	}




  //método que mostra o nome do codigo a partir do id
           public function geraListaCodMalhRed($aparelho,$excc){
    		$this->sql = "SELECT * FROM tb_limno,tb_local WHERE tb_limno.lim_local = tb_local.id_tab_local AND tb_limno.lim_aparelho = '$aparelho' $excc ORDER BY tb_local.loc_ordem ASC";
            $this->qr = self::execSQL($this->sql);
		    while($prod = self::results())
	        {
	        echo "<option value=\"".$prod["0"]."\">".$prod["2"]."</option>\n";
            }
            }

              //método que mostra o nome da espécie a partir do código
         /*  public function geraListaCodArr($excc){
    		$this->sql = "SELECT * FROM tb_limno_arr,tb_local WHERE tb_limno_arr.lim_arr_loc = tb_local.id_tab_local AND tb_limno_arr.id_tb_limno_arr > 0 $excc ORDER BY tb_local.loc_ordem,tb_limno_arr.lim_arr_ponto ASC";
            $this->qr = self::execSQL($this->sql);
		    while($prod = self::results())
	        {
	        echo "<option value=\"".$prod["0"]."\">".$prod["1"]."</option>\n";
            }
            }*/


             public function geraListaCodArr($excc){
    		$this->sql = "SELECT * FROM tb_limno_arr,tb_local WHERE tb_limno_arr.lim_arr_loc = tb_local.id_tab_local AND tb_limno_arr.id_tb_limno_arr > 0 $excc ORDER BY tb_limno_arr.lim_arr_ponto, tb_local.loc_ordem ASC";
            $this->qr = self::execSQL($this->sql);
		    while($prod = self::results())
	        {
	        echo "<option value=\"".$prod["0"]."\">".$prod["1"]."-".$prod["58"]."</option>\n";
            }
            }

            //método que mostra o nome da espécie a partir do código
           public function geraListaCodOutr($excc,$aparelho){
    		$this->sql = "SELECT * FROM tb_limno_outr,tb_local WHERE tb_limno_outr.lim_local = tb_local.id_tab_local AND tb_limno_outr.id_tb_limno_outr > 0 AND tb_limno_outr.lim_outr_aparelho = '$aparelho' $excc ORDER BY tb_local.loc_ordem ASC";
            $this->qr = self::execSQL($this->sql);
		    while($prod = self::results())
	        {
	        echo "<option value=\"".$prod["0"]."\">".$prod["5"]."</option>\n";
            }
            }


 //método que mostra o nome da espécie a partir do código
           public function NomeEspecie($cod){
    		$this->sql = "SELECT * FROM tb_especies WHERE id_tab_especie = '$cod'";
            $this->qr = self::execSql($this->sql);
            $this->data = self::listQr($this->qr);
            return $this->data["3"];
    	   	}

             //método que mostra o nome da espécie a partir do código
           public function NomeOrd($cod){
    		$this->sql = "SELECT * FROM tb_especies WHERE id_tab_especie = '$cod'";
            $this->qr = self::execSql($this->sql);
            $this->data = self::listQr($this->qr);
            return $this->data["1"];
    	   	}

             //método que mostra o nome da espécie a partir do código
           public function NomeFam($cod){
    		$this->sql = "SELECT * FROM tb_especies WHERE id_tab_especie = '$cod'";
            $this->qr = self::execSql($this->sql);
            $this->data = self::listQr($this->qr);
            return $this->data["2"];
    	   	}


            //método que mostra o Código de limnologia a partir do id
           public function NomeCodLimMalhRed($id_cod_limno){
    		$this->sql = "SELECT * FROM tb_limno WHERE id_tb_limno = '$id_cod_limno'";
            $this->qr = self::execSql($this->sql);
            $this->data = self::listQr($this->qr);
            return $this->data["2"];
            }

            //método que mostra o Código de limnologia a partir do id
           public function NomeCodLimArr($id_cod_limno){
    		$this->sql = "SELECT * FROM tb_limno_arr WHERE id_tb_limno_arr = '$id_cod_limno'";
            $this->qr = self::execSql($this->sql);
            $this->data = self::listQr($this->qr);
            return $this->data["1"];
            }

              //método que mostra o Código de limnologia a partir do id
           public function NomeCodLimOutr($id_cod_limno){
    		$this->sql = "SELECT * FROM tb_limno_outr WHERE id_tb_limno_outr = '$id_cod_limno'";
            $this->qr = self::execSql($this->sql);
            $this->data = self::listQr($this->qr);
            return $this->data["5"];
            }

                 //método que mostra o Código de limnologia a partir do id
           public function NomeAparOutr($id_cod_limno){
    		$this->sql = "SELECT * FROM tb_limno_outr WHERE id_tb_limno_outr = '$id_cod_limno'";
            $this->qr = self::execSql($this->sql);
            $this->data = self::listQr($this->qr);
            return $this->data["2"];
            }

    public function geraListaOrdem(){
        $this->sql = "SELECT * FROM tb_especies GROUP BY esp_ordem ORDER BY esp_ordem ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    echo "<option value=\"".$prod["1"]."\">".$prod["1"]."</option>\n";
        }
     	}

        //método que cria lista das Excursões
   public function geraListaFam(){
        $this->sql = "SELECT * FROM tb_especies GROUP BY esp_familia ORDER BY esp_familia ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    echo "<option value=\"".$prod["2"]."\">".$prod["2"]."</option>\n";
        }
     	}


        //método que cria lista das Excursões
   public function geraListaEspecie(){
        $this->sql = "SELECT * FROM tb_especies GROUP BY esp_especie ORDER BY esp_especie ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    echo "<option value=\"".$prod["3"]."\">".$prod["3"]."</option>\n";
        }
     	}






//Novo-------------end












	//método que efetua cadastro de dados no banco
	public function insert(){
		$this->sql = "INSERT INTO $this->table(
							$this->fields
					  )VALUES(
					  		$this->dados
					  )";
		if(self::execSql($this->sql)){
			$this->status = "Cadastrado com Sucesso!!!";
		}
	}

	// método que efetua a exclusão de dados no banco
	public function delete(){
		$this->sql = "DELETE FROM $this->table WHERE $this->fieldId = '$this->valueId'";
		if(self::execSQL($this->sql)){
			$this->status = "Apagado com Sucesso!!!";
		}
	}

	// método que faz a alteraçao de dados no banco
	public function update(){
		$this->sql = "UPDATE $this->table SET
							$this->fields
					  WHERE
					  		$this->fieldId = '$this->valueId'
					  ";
		if(self::execSql($this->sql)){
			$this->status = "Alterado com Sucesso!!!";
		}
	}

	//método que busca o ultimo código na tabela cadastrada
	public function getLastId(){
		$this->sql = "SELECT * FROM $this->table ORDER BY $this->fieldOrder DESC LIMIT 1";
		$this->qr = self::execSql($this->sql);
		$this->data = self::listQr($this->qr);
		return $this->data["$this->fieldId"];
	}

	// método que conta valores especificados
	public function getContarDados($valorPesquisado){
		$this->sql = "SELECT $this->fieldId FROM $this->table WHERE $this->fieldId = '$valorPesquisado'";
		$this->qr = self::execSql($this->sql);
		return self::countData($this->qr);
	}

	// método que busca o total de dadoa cadastrado em uma query
	public function getTotalData(){
		$this->sql = "SELECT $this->fieldId FROM $this->table ORDER BY $this->fieldId";
		$this->qr = self::execSql($this->sql);
		return self::countData($this->qr);
	}

	//método que busca registros de uma tabela
    public function results(){
			$this->dadosGerados = self::listQr($this->qr);
			return $this->dadosGerados;
	}

   //método que busca registros filtrados
   public function DadosFiltrados($valorPesquisado){
        $this->sql = "SELECT * FROM $this->table WHERE $this->fieldId = '$valorPesquisado'";
        $this->qr = self::execSQL($this->sql);
        $this->data = self::listQr($this->qr);
        return $this->data["$this->fieldNr"];
     	}

    public function geraListaIndex(){
        $this->sql = "SELECT * FROM $this->table ORDER BY $this->fieldId ASC";
		$this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
		echo $prod["0"]."\n".$prod["1"]."\n".$prod["2"]."\n".$prod["3"]."<br>";
        }
     	}

    //método que registros filtrados registros de uma tabela
           public function data_filter(){
    		$this->sql = "SELECT * FROM $this->table WHERE $this->fieldId";
            $this->qr = self::execSql($this->sql);
            $this->data = self::listQr($this->qr);
            return $this->data["$this->fieldNr"];
    	   	}


     }



?>