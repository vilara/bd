<style type="text/css">/* Estilos tabelas */
#tabelas { margin: 0 auto; width: 90%;  margin-top: 10px; text-align: center; padding: 5px; }
/*#tabelas h3 { margin: 0; padding: 0; text-align: center; padding: 3px; background: url(../img/fundo.jpg) repeat-x left; color: #FFFFFF; font-family: Verdana, Helvetica, Sans-serif; font-weight: bold; font-size: 95%;}*/
#tabela {width: 100%; margin: auto auto;  margin-top: 10px;}
#tabela img {border: none;}

table.bordasimples {border-collapse: collapse;}
table.bordasimples tr td {border:1px solid #CCCCCC;}
table tr.titulo { background: url(../img/fundo.jpg) repeat-x left; color: #FFFFFF; font-family: Verdana, Helvetica, Sans-serif; font-weight: bold;}
table tr.titulo1 { background: url(../img/fundo.jpg) repeat-x left; color: #FFFFFF; font-family: Verdana, Helvetica, Sans-serif; font-weight: bold; font-size: 85%;}
</style>

<?php
 $lim = $_GET["lim"];
  $lim_cod = $_GET["lim_cod"];
  $exc = $_GET["exc"];
    $pad = $_GET["pad"];
 ?>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">

<tr class="titulo">

<td colspan="24">Aparelho: Malhadeira

 ---- C�digo: <?php echo"$lim_cod";?> ----Excurs�o: <?php echo"$exc";?>  ----Padronizado: <?php echo"$pad";?> </td>
</tr>
<tr class="titulo">
<td>Registro</td>

<td>Esp�cie</td>

<td>Qtde</td>

<td>Tecido</td>
<td>Voucher</td>
<td>Foto</td>
<td>Larva</td>
<td>Determinador</td>
<td>Obs</td>


<!--<td>Cp Max</td>
<td>Cp Min</td>-->
<!--<td>C�digo</td>
<td>Cp Base</td>-->

<!--<td>Total de esp�cies capturadas</td>    -->
</tr>
<?php



$l1 = 0;
$n = 1;



// Listagem das esp�cies capturadas de Arrasto de fundo
$sql = mysql_query("SELECT malh_numero,malh_especie,malh_teci,malh_voucher,malh_foto,malh_det,malh_obs FROM tb_malhadeira_biotico WHERE id_tb_malhadeira > '0' AND malh_lim = $lim ORDER BY malh_especie DESC");
$num = mysql_num_rows($sql);
while($registro = mysql_fetch_row($sql))
{
  $nr =  $registro[0];
$esp =  $registro[1];
$lista = new ManipulateData();
   $NomeEsp = $lista->NomeEspecie($esp);
$tot = 1;
$teci =  $registro[3];
$voucher =  $registro[4];
$foto =  $registro[5];
$det =  $registro[6];
$obs =  $registro[7];

$tott +=  $tot;

/*--------Linhas de resultados */
echo "<tr>
<td>".$nr."</td>

<td align=\"left\">".$NomeEsp."</td>
<td><b>".$tot."</b></td>

<td>".$teci."</td>
<td>".$voucher."</td>
<td>".$foto."</td>
<td>"."-"."</td>
<td>".$det."</td>
<td>".$obs."</td>




</tr>";
$n++;}
?>


</table>  <br />


<div><center><a target="_self" HREF="javaScript:window.print()">IMPRIMIR</a></center></div>

</div>
</div>
<!--<td>"/*.$cp_max[$n].*/"</td>
<td>"/*.$cp_min[$n].*/"</td>
<td>"/*.$cod.*/"</td>
<td>"/*.$cp_base.*/"</td>-->