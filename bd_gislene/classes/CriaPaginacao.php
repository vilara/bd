<?php
include_once("mySqlConn.php");

	class criaPaginacao extends MySqlConn{

		public $qr, $dadosGerados;

		protected function results(){
		$this->dadosGerados = self::listQr($this->qr);
		return $this->dadosGerados;
		}

        public function geraListaIndex(){
		$this->qr = self::execSQL("SELECT * FROM tb_excursao ORDER BY id_excursao ASC");
		while($prod = self::results())
		      {
			$contador ++;
			echo $prod["0"];
            echo "<br>";
		       }
     	}

	}
?>