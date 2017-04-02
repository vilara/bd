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
       <!-- <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1> -->


<!--Área editável início     -->

  <?php

$id = $_GET["idd"];
// echo "$id";
//Editar aparelho Pesca-----------------------------------------------------


// echo"$data_i--$data_f";

$res = mysql_query("SELECT * FROM tb_ig_biotico WHERE id_tb_ig = '$id'");
while($registro = mysql_fetch_row($res))
 {
$id_tb_ig = $registro[0];
$ig_especie = $registro[1];
                              $lista = new ManipulateData();
                               $NomeEsp = $lista->NomeEspecie($ig_especie);
$ig_qtde = $registro[2];
$ig_lim = $registro[3];
                               $NomeCod = $lista->CodIg($ig_lim);
$ig_biomass = $registro[4];
$ig_gen = $registro[5];
$ig_foto = $registro[6];
$ig_voucher = $registro[7];
$ig_numero = $registro[8];
$ig_det = $registro[9];
$ig_obs = $registro[10];
?>


<h3>Editar registro de Igarapés</h3>
<form id="forms" method="post" action="index.php?secoes=edit/editar_ig_enviar&idd=<?php echo"$id";?>" enctype="multipart/form-data">

    <fieldset>

                 <label for="cpp">
        1) Cod:  <?php echo "$NomeCod"; ?>  </label>

        <label for="Especie">
        2) Espécie:  </label>
           <SELECT NAME='ig_especie' type='text' id='esp' tabindex="7">
           <option value='<?php echo "$ig_especie"; ?>'><?php echo "$NomeEsp"; ?></option>
            <?php
             $lista->GeraListaEspecies();
            ?>
           </select>

         <label for="cpp">
        3) Qtde:  </label>
            <input name="ig_qtde" type="text" id="ig_qtde" tabindex="8"  size="15" value="<?php echo "$ig_qtde"; ?>" class="checkbox1" />



<label for="cpp">
        4) Biomassa:  </label>
            <input name="ig_biomass" type="text" id="cpc" tabindex="10"  size="15" value="<?php echo "$ig_biomass"; ?>" class="checkbox1" />

         <label for="cpp">
        5) Gen:  </label>
            <input name="ig_gen" type="text" id="cpp" tabindex="11"  size="15" value="<?php echo "$ig_gen"; ?>" class="checkbox1" />

        <label for="cpp">
        6) Foto:  </label>
            <input name="ig_foto" type="text" id="cpp" tabindex="12"  size="15" value="<?php echo "$ig_foto"; ?>" class="checkbox1" />

        <label for="cpp">
       7) Voucher:  </label>
            <input name="ig_voucher" type="text" id="cpp" tabindex="13"  size="15" value="<?php echo "$ig_voucher"; ?>" class="checkbox1" />

            <label for="cpp">
        8) Numero:  </label>
            <input name="ig_numero" type="text" id="cpp" tabindex="13"  size="15" value="<?php echo "$ig_numero"; ?>" class="checkbox1" />


    <label for="cpp">
        9) Determinador:  </label>
            <input name="ig_det" type="text" id="cpp" tabindex="13"  size="15" value="<?php echo "$ig_det"; ?>" class="checkbox1" />



        <label for="obs">
          10) Observações:  </label>
            <textarea type="ig_obs" name="ig_obs" cols="50" rows="5" tabindex="7" value="<?php echo"$ig_obs";?>" ><?php echo"$ig_obs";?></textarea>

<?php
}
?>


             </fieldset>

          <div id="botao1">   <input type="submit" value="Editar" /> <!--&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>

 </div>
