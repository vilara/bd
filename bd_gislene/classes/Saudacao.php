<?php
/*************************************************************************************
**	CLASSE EM PHP QUE FAZ O TEXTO DE SAUDAวรO DO SISTEMA
**	DATA DA CRIAวรO: 03/01/2009
**	DESENVOLVIDO POR: MARCELO MARTINS VILARA
**	CำDIGO LIVRE MANTIDO PELA GNU
**************************************************************************************/
class Saudacao{

	private $dia_s, $dia, $mes, $ano, $hora;

   	public function setDia(){
		$this->dia = date(d);
      }

       public function setMes(){
		$this->mes = date(m);
       }

       public function setAno(){
		$this->ano = date(Y);
       }


       	public function dia(){
		return $this->dia;
        }

       	public function mes(){
		return $this->mes;
	}

       	public function ano(){
		return $this->ano;
	}

}

$saudacao = new Saudacao();
$saudacao->setDia();
$d = $saudacao->dia();
$saudacao->setMes();
$m = $saudacao->mes();
$saudacao->setAno();
$a = $saudacao->ano();

echo "Domingo $d de $m de $a";

?>