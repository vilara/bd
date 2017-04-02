<style type="text/css">
#edicao { margin: 0; padding: 0; width: 500px; background: #DFF4DF; border: 1px solid #000000; margin: 0 auto; margin-top: 5px;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:150px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>


     <div id="edicao">

       <!-- <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>       -->
        <h3>Cadastro de Espécie</h3>
<form id="formulario1" method="post" action="index.php?secoes=edit/esp_enviar" enctype="multipart/form-data">
             <fieldset>

              <label for="codigo">
              1)Ordem:  </label>
              <SELECT name='esp_ordem' type='text' id='esp_ordem'>
              <option value='#'></option>
             <?php
             include "config.php";
			$res = mysql_query("SELECT esp_ordem FROM tb_especies GROUP BY esp_ordem ASC");
		while($registro = mysql_fetch_row($res))
		{
		    $esp_ordem = $registro[0];



			echo "<option value=\"$esp_ordem\">$esp_ordem</option>\n";
		}
	?></select>

              <label for="descricao">
              2)Família: </label>
              <SELECT name='esp_familia' type='text' id='esp_familia' >
              <option value='#'></option>
             <?php
             include "config.php";
			$res = mysql_query("SELECT esp_familia FROM tb_especies GROUP BY esp_familia ASC");
		while($registro = mysql_fetch_row($res))
		{
		    $esp_familia = $registro[0];



			echo "<option value=\"$esp_familia\">$esp_familia</option>\n";
		}
	?></select>
               <label for="catrof">
              3)Categoria trófica: </label>

               <SELECT name='esp_catrof' type='text' id='esp_catrof' >
              <option value='#'></option>
             <?php
             include "config.php";
			$res = mysql_query("SELECT esp_catrof FROM tb_especies GROUP BY esp_catrof ASC");
		while($registro = mysql_fetch_row($res))
		{
		    $esp_catrof = $registro[0];



			echo "<option value=\"$esp_catrof\">$esp_catrof</option>\n";
		}?></select>

          

                </select>
              <label for="especie">
              4)Espécies: </label>
              <input name="esp_especie" type="text" id="esp_especie" tabindex="4"  size="50" />





              </fieldset>



               <br />
  <center> <input type="submit" value="ENVIAR" class="botao2"  />   </center>
             </form>



<!--Área editável fim     -->



</div>
