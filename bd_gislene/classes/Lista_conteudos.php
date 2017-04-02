<?php
include_once("CriaPaginacao.php");

class ListaProdutos extends CriaPaginacao{

	private $strSessao, $strNumPagina, $strPaginas, $strUrl;
	
	public function setNumPagina($x){
		$this->strNumPagina = $x;
	}

	public function setUrl($x){
		$this->strUrl = $x;
	}
	
	public function setSessao($x){
		$strSessao = $x;
	}
	
	public function getPaginas(){
		return $this->strNumPagina = $x;
	}
	
/**************
** Lista Index
***************/
	public function geraListaIndex(){
		$sql = "SELECT idProd, nomeProd, imgProd, dtaqProd, descProd FROM tbprodutos WHERE dtaqProd='1' ORDER BY RAND()";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(9); // quantidade de produtos por tela
		$this->setMaximoLinks(6); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($prod = self::results()){
			$contador ++;
			echo "
					<li>
					<span class=\"span-titulo\">".$prod["nomeProd"]."</span>
					<img src=\"fotosproduto/".$prod["imgProd"]."\" alt=\"fotosproduto/".$prod["descProd"]."\" />
					<a href=\"fotospopup/".$prod["imgProd"]."\" title=\"".$prod["descProd"]."\" 
																		class=\"bt-detalhes\">mais detalhes</a>
					</li>				
				";
			self::setContador($contador);
		}
	}

/*****************************************
** Lista de todos os produtos por sessão
******************************************/
	public function geraListaProdutos($idSessao, $idSubSessao){
		$sql = "SELECT * FROM tbprodutos WHERE sessaoProduto='$idSessao' AND subSessaoProduto='$idSubSessao' ORDER BY RAND()";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(9); // quantidade de produtos por tela
		$this->setMaximoLinks(6); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($prod = self::results()){
			$contador ++;
			echo "
					<li>
					<a href=\"fotospopup/".$prod["imgProd"]."\" title=\"".$prod["descProd"]."\">
					<img src=\"fotosproduto/".$prod["imgProd"]."\" alt=\"".$prod["nomeProd"]."\" />
					</a>
					<span class=\"desc-heart\">".$prod["nomeProd"]."</span>
					</li>						
				";
			self::setContador($contador);
		}
	}
/*****************************************
** Lista Pesquisa
******************************************/
	public function geraListaPesquisa($strBusca){
		$sql = "SELECT idProd, nomeProd, imgProd, descProd FROM tbprodutos WHERE nomeProd LIKE '%$strBusca%' ";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(9); // quantidade de produtos por tela
		$this->setMaximoLinks(6); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($prod = self::results()){
			$contador ++;
			echo "
					<li>
					<a href=\"fotospopup/".$prod["imgProd"]."\" title=\"".$prod["descProd"]."\">
					<img src=\"fotosproduto/".$prod["imgProd"]."\" alt=\"".$prod["nomeProd"]."\" />
					</a>
					<span class=\"desc-heart\">".$prod["nomeProd"]."</span>
					</li>						
				";
			self::setContador($contador);
		}		
	}
}










?>