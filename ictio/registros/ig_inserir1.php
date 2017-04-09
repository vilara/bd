
<script language="JavaScript" type="text/javascript">
function janelaSecundaria (URL){
   window.open(URL,"janela1","width=580,height=450,scrollbars=YES")
}
</script>

<style type="text/css">
#edicao { margin: 0; padding: 0; width: 500px; background: #DFF4DF; border: 1px solid #000000; margin: 0 auto; margin-top: 5px;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao h4 { font-size: 100%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:50px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>

 <div id="edicao">
     <!--   <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>     -->

<!--Área editável início     -->

<?php

$flag = $_GET["flag"];

$dado = new ManipulateData();
$dado->setTable("tb_ig_biotico");
$dado->setFieldOrder("id_tb_ig");
$dado->setFieldID("8");$ig_numero5 = $dado->getLastId();


$ig_numero4 = $ig_numero5 + 1;



if ($flag == 1)
{
$lim = $_POST["lim"];

}else
{
$lim = $_GET["lim"];


$especie = $_GET["especie"];
$voucher = $_GET["voucher"];
$dado->setTable("tb_especies");
$dado->setFieldID("id_tab_especie");
$dado->setFieldNr("3");
$esp = $dado->DadosFiltrados("$especie");
}

$dado->setTable("tb_limno_ig");
$dado->setFieldID("id_tb_limno");
/*$dado->setFieldNr("4");
$data = $dado->DadosFiltrados("$outr_lim");*/
$dado->setFieldNr("5");
$cod = $dado->DadosFiltrados("$lim");

$outr_col66 = $_GET["col"];

 ?>


<h3>Registro Nr:&nbsp;<span class="red"><?php echo"$ig_numero4 de $lim";  ?></span> </h3>

   <?php
     if ($outr_col66 == "Sim")
       {
      ?>
    <div align="center">Último registro para Coleção: <span class="red">(Esp: <?php echo"$esp";  ?>&nbsp;&nbsp;<?php echo"$outr_voucher";  ?>)</span></div>
       <?php
       }
       ?>
    <form id="forms" method="post" action="index.php?secoes=registros/ig_enviar&lim=<?php echo "$lim"; ?>" enctype="multipart/form-data">
      <fieldset>

        <label for="especie">
        1) Espécie:  </label>
            <SELECT name='especie' type='text' id='especie' tabindex="1" ><OPTION>
            <?php
           $lista = new ManipulateData();
           $lista->geraListaEspecies();
            ?>
            </select><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/esp_inserir')">Cadastrar espécie</a>


        <label for="comprimento">
        2) Quantidade: </label>
            <input name="qtde" type="text" id="qtde" tabindex="2" accesskey="p" size="5" />





           <label for="aparelho">
        3) Tecido:  </label>  <input name="teci" type="text" id="teci" tabindex="11" accesskey="c" size="8" />
          <!--  <input type="radio" name="outr_teci"  value="Sim" class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_teci" value="Não" class="checkbox"  checked>Não-->





   

            <label for="aparelho">
        4) Foto:  </label>
            <input type="radio" name="foto"  value="Sim" class="checkbox"  >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="foto" value="Não" class="checkbox"  checked>Não

         <label for="aparelho">
        5) Coleção:  </label>
            <input type="radio" name="col"  value="Sim"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="col" value="Não"  class="checkbox" checked>Não

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input name="voucher1" type="text" id="voucher1" size="8" />
            <!--Escolher voucher utilizado:
            <SELECT name='outr_voucher1' type='text' id='outr_voucher1' ><OPTION>-->
            <?php
           //    $lista->geraListaVoucher();
            ?>
           <!-- </select>     -->

    
            <label for="aparelho">

        6) Observações:  </label>
            <textarea type="radio" name="obs" cols="50" rows="5" tabindex="7"></textarea>



         <label for="determinador">
        7) Determinador: </label>
            <SELECT NAME='det' type='text' id='outr_ematur' tabindex="8">
            <option value="&nbsp;">&nbsp;</option> 
            <?php
             $lista->geraListaPesq();
             ?>
            </select>

            <!-- <label for="determinador">
        8) Análise: </label>
        <input type="radio" name="outr_anali"  value="Sim"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="outr_anali" value="Não"  class="checkbox" checked>Não-->


      </fieldset>



  <center> <input type="submit" value="ENVIAR" class="botao2"  />  </center>
    </form>



<!--Área editável fim     -->

</div>
