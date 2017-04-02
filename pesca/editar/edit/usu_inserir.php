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


$res = mysql_query("SELECT * FROM usu_dados WHERE id_usu_dados = $id");
while($registro = mysql_fetch_row($res))
 {
 		$nome = $registro[1];
        $foto = $registro[5];
        $cit = $registro[6];
        $func = $registro[7];
         $instituto = $registro[8];
        $lp = $registro[9];
        $tit = $registro[10];
         $email = $registro[11];
          $lates = $registro[12];
           $public = $registro[13];


        $login = new ManipulateData();
        $login->setTable("usu_senha");
        $login->setFieldId("id_usu ='$id'");
        $login->setFieldNr("3"); $nivel = $login->data_filter();
        $login->setFieldNr("4"); $usu = $login->data_filter();
        $login->setFieldNr("5"); $subprog = $login->data_filter();

}
?>


        <h3>Modificar Cadastro de Usuário</h3>
        
<!--Área editável início     -->

 <?php // include "log_auth.php";
  //
  ?>
<form id="formulario1" method="post" action="?secoes=edit/usu_enviar&id=<?php echo"$id";?>

" enctype="multipart/form-data">
             <fieldset>

              <label for="Nome">
              1) Nome completo:  </label>
              <input name="nome" type="text"  id="nome" tabindex="1" accesskey="n" value="<?php echo "$nome"; ?>" size="50" /><span class="notas">(Sem abreviaturas)</span>



              <label for="fotografia">
              2) Fotografia: </label>
              <input name="foto" type="file" id="foto" tabindex="7"  size="22" value="<?php echo "$foto"; ?>" /><span class="notas">(Máximo de 100Kb, Tam: 5cm de larg X 7cm de alt, JPG. Só preencha se for modificar a foto!)</span>

              <label for="citacao">
              3) Maneira como é citado?: </label>
              <input name="cit" type="text" id="citacao" tabindex="8"  size="18"  value="<?php echo "$cit"; ?>" /><span class="notas">(Exemplo:  Torrente-Vilara, G.)</span>


              <label for="funcao">
              4) Função: </label>
              <input name="funcao" type="text" id="funcao" tabindex="9"  value="<?php echo "$func"; ?>"  size="80" />


              <label for="institu">
              5) Instituição: </label>
              <input name="institu" type="text" id="institu" tabindex="10"  size="80"  value="<?php echo "$instituto"; ?>" />


              <label for="citacao">
              6)Linha de pesqisa: </label>
              <textarea name="lp" id="lp" cols="35" rows="4" tabindex="11"><?php echo "$lp"; ?></textarea>

              <label for="titulacao">
              7) Titulação: </label>
              <input name="titulacao" type="text" id="titulacao" tabindex="12"  value="<?php echo "$tit"; ?>"  size="50" />

              <label for="email">
              8) Email:  </label>
              <input name="email" type="text" id="email" tabindex="13"  value="<?php echo "$email"; ?>"  size="30" />

               <label for="lates">
             9) Nr Curriculun Lates:  </label>
              <input name="lates" type="text" id="lates" tabindex="14"  value="<?php echo "$lates"; ?>"  size="30" />
              <?php
              if ($public == "N"){$n = "selected";}
              else if ($public == "S"){$nn = "selected";}
              ?>

              <label for="public"> 10) Publicado:  </label>
              <SELECT name='public' type='text' id='public' tabindex="15">
              <option value='N' <?php echo "$n"; ?>>Não</option>
                <option value='S' <?php echo "$nn"; ?>>Sim</option>

               </select>
               <?php
              if ($subprog == "ictio"){$s = "selected";}
              else if ($subprog == "pesca"){$ss = "selected";}
              else if ($subprog == "plancton"){$sss = "selected";}
               else if ($subprog == "Todos"){$ssss = "selected";}
              ?>

                <label for="subprog"> 13) Subprograma:  </label>
              <SELECT name='subprog' type='text' id='subprog' tabindex="15">

              
                 <option value='pesca' <?php echo "$ss"; ?>>Pesca</option>
                 
                 
               </select>
                <?php
              if ($nivel == "1"){$i = "selected";}
              else if ($nivel == "2"){$ii = "selected";}
              else if ($nivel == "3"){$iii = "selected";}
              ?>
               <label for="nivel"> 14) Nível:  </label>
              <SELECT name='nivel' type='text' id='nivel' tabindex="15">

                <option value='1' <?php echo "$i"; ?>  >Usuário</option>
                 <option value='2' <?php echo "$ii"; ?>>Gerente</option><?php   if ($nivel == 3){

?>
             <option value='3' <?php echo "$iii"; ?>>Administrador</option> <?php

              }

?>
               
               </select>
              <label for="email">
              15) Login:  </label>
              <input name="usu" type="text" id="usu" tabindex="13"  value="<?php echo "$usu"; ?>"  size="20" />


              </fieldset>



               <br />
 <center>  <input type="submit" value="ENVIAR" class="botao2"  /> </center>
             </form>



<!--Área editável fim     -->



</div>
