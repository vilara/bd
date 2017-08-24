<style type="text/css">
#edicao { margin: 0; padding: 0; width: 100%; background: #EEEEEE; border: 1px solid #000000;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:150px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>


       <div id="edicao">
  <?php
// include "../../log_auth3.php";
$id = $_GET["idd"];


$res = mysql_query("SELECT * FROM usu_det WHERE id_det = $id");
while($registro = mysql_fetch_row($res))
 {
 		$nome = $registro[1];
        $cit = $registro[2];
        $funcao = $registro[3];



       }

      
?>


        <h3>Modificar Cadastro de Determinador</h3>
        
<!--Área editável início     -->

 <?php // include "log_auth.php";
  //
  ?>
<form id="formulario1" method="post" action="?secoes=edit/usu_enviar&id=<?php echo"$id";?>" enctype="multipart/form-data">
             <fieldset>

              <label for="Nome">
              1) Nome:  </label>
              <input name="nome" type="text"  id="nome" tabindex="1" accesskey="n" value="<?php echo "$nome"; ?>" size="20" /><span class="notas">(Sem abreviaturas)</span>



                   <label for="citacao">
              2) Maneira como é citado?: </label>
              <input name="cit" type="text" id="citacao" tabindex="8"  size="18"  value="<?php echo "$cit"; ?>" /><span class="notas">(Exemplo:  Torrente-Vilara, G.)</span>


              <label for="funcao">
              3) Função: </label>
                <SELECT NAME='funcao' type='text' id='funcao' tabindex="17">
            <option value="<?php echo "$funcao"; ?>"  selected="selected" ><?php echo "$funcao"; ?></option>
             <option value='Pesquisador'>Pesquisador</option>
             <option value='Tecnico'>Técnico</option>
              <option value='Consultor'>Consultor</option>
               <option value='Pescador'>Pescador</option>
               <option value='Colaborador'>Colaborador</option></select>




              </fieldset>



               <br />
 <center>  <input type="submit" value="ENVIAR" class="botao2"  /> </center>
             </form>



<!--Área editável fim     -->



</div>
