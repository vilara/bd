<?php
/*************************************************************************************
**	CLASSE EM PHP QUE FAZ A MANIPULA��O DE DADOS NO BANCO DE DADOS MYSQL VERS�O 1.0
**	DATA DA CRIA��O: 03/01/2009
**	DESENVOLVIDO POR: MARCELO MARTINS VILARA
**	C�DIGO LIVRE MANTIDO PELA GNU
**
**	ESTA CLASSE S� PODER� SER USANDO EM MODO DE HERAN�A...
**
**	CLASSE ABSTRATA PARA CONEX�O COM BANCO DE DADOS.
**************************************************************************************/
include_once("MysqlConn.php");

class ManipulateData extends mySqlConn{

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

    //envia os n�meros dos campos a serem usados na classe
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

	//envia o campo de pesquisa, normalmente o campo c�digo
	public function setFieldOrder($fo){
		$this->fieldOrder = $fo;
	}

	//envia o campo de pesquisa, normalmente o campo c�digo
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

	//m�todo que efetua cadastro de dados no banco
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

	// m�todo que efetua a exclus�o de dados no banco
	public function delete(){
		$this->sql = "DELETE FROM $this->table WHERE $this->fieldId = '$this->valueId'";
		if(self::execSQL($this->sql)){
			$this->status = "Apagado com Sucesso!!!";
		}
	}

	// m�todo que faz a altera�ao de dados no banco
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

	//m�todo que busca o ultimo c�digo na tabela cadastrada
	public function getLastId(){
		$this->sql = "SELECT * FROM $this->table ORDER BY $this->fieldOrder DESC LIMIT 1";
		$this->qr = self::execSql($this->sql);
		$this->data = self::listQr($this->qr);
		return $this->data["$this->fieldId"];
	}

	// m�todo que conta valores especificados
	public function getContarDados($valorPesquisado){
		$this->sql = "SELECT $this->fieldId FROM $this->table WHERE $this->fieldId = '$valorPesquisado'";
		$this->qr = self::execSql($this->sql);
		return self::countData($this->qr);
	}

	// m�todo que busca o total de dadoa cadastrado em uma query
	public function getTotalData(){
		$this->sql = "SELECT $this->fieldId FROM $this->table ORDER BY $this->fieldId";
		$this->qr = self::execSql($this->sql);
		return self::countData($this->qr);
	}

	//m�todo que busca registros de uma tabela
    public function results(){
			$this->dadosGerados = self::listQr($this->qr);
			return $this->dadosGerados;
	}

   //m�todo que busca registros filtrados
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

    //m�todo que registros filtrados registros de uma tabela
           public function data_filter(){
    		$this->sql = "SELECT * FROM $this->table WHERE $this->fieldId";
            $this->qr = self::execSql($this->sql);
            $this->data = self::listQr($this->qr);
            return $this->data["$this->fieldNr"];
    	   	}



/*************************************************************************************
**	M�TODOS PADR�ES PARA LISTAS CONSULTAS TIPO DROPDOWN DO BANCO DE DADOS DO MADEIRA
**************************************************************************************/

//m�todo que cria lista dos c�digos de campo de Malhadeira e Redinha
   public function geraListaCodCampo1($valorPesquisado){
        $this->sql = "SELECT * FROM tb_limno WHERE lim_aparelho = '$valorPesquisado' ORDER BY id_tb_limno ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    echo "<option value=\"".$prod["0"]."\">".$prod["2"]."</option>\n";
        }
     	}

        //m�todo que cria lista das Excurs�es
   public function geraListaExc(){
        $this->sql = "SELECT * FROM tb_biotico1 GROUP BY bio_excursao ORDER BY bio_excursao ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    echo "<option value=\"".$prod["3"]."\">".$prod["3"]."</option>\n";
        }
     	}

         //m�todo que cria lista das Excurs�es
   public function geraListaBio(){
        $this->sql = "SELECT * FROM tb_biotico1 GROUP BY bio_nr ORDER BY bio_nr ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    echo "<option value=\"".$prod["2"]."\">".$prod["2"]."</option>\n";
        }
     	}


        //m�todo que cria lista das Excurs�es
   public function geraListaCattrof(){
        $this->sql = "SELECT * FROM tb_especies GROUP BY esp_catrof ORDER BY id_tab_especie ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    echo "<option value=\"".$prod["4"]."\">".$prod["4"]."</option>\n";
        }
     	}

                //m�todo que cria lista das Excurs�es
   public function geraListaOrdem(){
        $this->sql = "SELECT * FROM tb_especies GROUP BY esp_ordem ORDER BY esp_ordem ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    echo "<option value=\"".$prod["1"]."\">".$prod["1"]."</option>\n";
        }
     	}

        //m�todo que cria lista das Excurs�es
   public function geraListaFam(){
        $this->sql = "SELECT * FROM tb_especies GROUP BY esp_familia ORDER BY esp_familia ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    echo "<option value=\"".$prod["2"]."\">".$prod["2"]."</option>\n";
        }
     	}


        //m�todo que cria lista das Excurs�es
   public function geraListaEspecie(){
        $this->sql = "SELECT * FROM tb_especies GROUP BY esp_especie ORDER BY esp_especie ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    echo "<option value=\"".$prod["3"]."\">".$prod["3"]."</option>\n";
        }
     	}

        //m�todo que cria lista dos locais
   public function geraListaLoc(){
        $this->sql = "SELECT * FROM tb_biotico1 GROUP BY bio_local ORDER BY bio_local ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    echo "<option value=\"".$prod["4"]."\">".$prod["4"]."</option>\n";
        }
     	}

                //m�todo que cria lista dos c�digos de campo de Outros Aparelhos
   public function geraListaEsp(){
        $this->sql = "SELECT bio_excursao, bio_local, bio_aparelho, bio_especie, COUNT(bio_especie) FROM tb_biotico1 WHERE bio_aparelho = 'Malhadeira' AND bio_excursao = 3 GROUP BY bio_local, bio_especie ORDER BY bio_excursao, bio_local ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
         echo "<tr>
<td align=\"left\">".$prod["0"]."</td>
<td align=\"left\">".$prod["1"]."</td>
<td align=\"left\">".$prod["2"]."</td>
<td align=\"left\">".$prod["3"]."</td>
<td>".$prod["4"]."</td>
</tr>";
	    }
     	}

        //m�todo que cria lista dos c�digos de campo de Outros Aparelhos
   public function geraListaNrEsp(){
        $this->sql = "SELECT bio_excursao, bio_local, bio_aparelho, bio_especie, COUNT(bio_especie) FROM tb_biotico1 WHERE bio_aparelho = 'Malhadeira' AND bio_excursao = 3 GROUP BY bio_local, bio_especie ORDER BY bio_excursao, bio_local ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
         echo "<tr>
<td align=\"left\">".$prod["0"]."</td>
<td align=\"left\">".$prod["1"]."</td>
<td align=\"left\">".$prod["2"]."</td>
<td align=\"left\">".$prod["3"]."</td>
<td>".$prod["4"]."</td>
</tr>";
	    }
     	}

//m�todo que cria lista das Esp�cies Cadastradas
   public function geraListaEspecies(){
        $this->sql = "SELECT * FROM tb_especies ORDER BY esp_especie ASC";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    echo "<option value=\"".$prod["0"]."\">".$prod["3"]."</option>\n";
        }
     	}

 //m�todo que cria lista Nr de Voucher utilizados
   public function geraListaVoucher(){
        $this->sql = "SELECT * FROM tb_malhadeira_biotico WHERE malh_voucher LIKE '%UNIR%'";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    echo "<option value=\"".$prod["20"]."\">".$prod["20"]."</option>\n";
        }
     	}

         //m�todo que cria lista de Pesquisadores
   public function geraListaPesq(){
        $this->sql = "SELECT * FROM usu_dados";
        $this->qr = self::execSQL($this->sql);
		while($prod = self::results())
	    {
	    echo "<option value=\"".$prod["6"]."\">".$prod["6"]."</option>\n";
        }
     	}

         //m�todo que mostra o nome da esp�cie a partir do c�digo
           public function NomeEspecie($cod){
    		$this->sql = "SELECT * FROM tb_especies WHERE id_tab_especie = '$cod'";
            $this->qr = self::execSql($this->sql);
            $this->data = self::listQr($this->qr);
            return $this->data["3"];
    	   	}

           //m�todo que mostra o nome do C�digo a partir do id
           public function CodMalhRed($cod){
    		$this->sql = "SELECT * FROM tb_limno WHERE id_tb_limno = '$cod'";
            $this->qr = self::execSql($this->sql);
            $this->data = self::listQr($this->qr);
            return $this->data["2"];
    	   	}


//m�todo que cria lista das Horas
        public function ListaHoras(){
        echo "<option value='00'>00</option>
                <option value='01'>01</option>
                <option value='02'>02</option>
                <option value='03'>03</option>
                <option value='04'>04</option>
                <option value='05'>05</option>
                <option value='06'>06</option>
                <option value='07'>07</option>
                <option value='08'>08</option>
                <option value='09'>09</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='20'>20</option>
                <option value='21'>21</option>
                <option value='22'>22</option>
                <option value='23'>23</option>";
	}
//m�todo que cria lista dos Minutos
        public function ListaMinutos(){
        echo "<option value='00'>00</option>
              <option value='01'>01</option>
                <option value='02'>02</option>
                <option value='03'>03</option>
                <option value='04'>04</option>
                <option value='05'>05</option>
                <option value='06'>06</option>
                <option value='07'>07</option>
                <option value='08'>08</option>
                <option value='09'>09</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='20'>20</option>
                <option value='21'>21</option>
                <option value='22'>22</option>
                <option value='23'>23</option>
                <option value='24'>24</option>
                <option value='25'>25</option>
                <option value='26'>26</option>
                <option value='27'>27</option>
                <option value='28'>28</option>
                <option value='29'>29</option>
                <option value='30'>30</option>
                <option value='31'>31</option>
                <option value='32'>32</option>
                <option value='33'>33</option>
                <option value='34'>34</option>
                <option value='35'>35</option>
                <option value='36'>36</option>
                <option value='37'>37</option>
                <option value='38'>38</option>
                <option value='39'>39</option>
                <option value='40'>40</option>
                <option value='41'>41</option>
                <option value='42'>42</option>
                <option value='43'>43</option>
                <option value='44'>44</option>
                <option value='45'>45</option>
                <option value='46'>46</option>
                <option value='47'>47</option>
                <option value='48'>48</option>
                <option value='49'>49</option>
                <option value='50'>50</option>
                <option value='51'>51</option>
                <option value='52'>52</option>
                <option value='53'>53</option>
                <option value='54'>54</option>
                <option value='55'>55</option>
                <option value='56'>56</option>
                <option value='57'>57</option>
                <option value='58'>58</option>
                <option value='59'>59</option>";
	}

    //m�todo que cria lista dos Minutos
        public function ListaDias(){
        echo "<option value='#'></option>
                <option value='01'>01</option>
                <option value='02'>02</option>
                <option value='03'>03</option>
                <option value='04'>04</option>
                <option value='05'>05</option>
                <option value='06'>06</option>
                <option value='07'>07</option>
                <option value='08'>08</option>
                <option value='09'>09</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='20'>20</option>
                <option value='21'>21</option>
                <option value='22'>22</option>
                <option value='23'>23</option>
                <option value='24'>24</option>
                <option value='25'>25</option>
                <option value='26'>26</option>
                <option value='27'>27</option>
                <option value='28'>28</option>
                <option value='29'>29</option>
                <option value='30'>30</option>
                <option value='31'>31</option>";
	}

        //m�todo que cria lista dos Minutos
        public function ListaMeses(){
        echo "<option value='#'></option>
                <option value='01'>01</option>
                <option value='02'>02</option>
                <option value='03'>03</option>
                <option value='04'>04</option>
                <option value='05'>05</option>
                <option value='06'>06</option>
                <option value='07'>07</option>
                <option value='08'>08</option>
                <option value='09'>09</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>";
	}



}


?>