<script language="JavaScript" type="text/javascript">

function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}

</script>
 <?php include "log_auth3.php"; ?> 
<div id="conteudo">
<h3>Lista de Excursão</h3>
</div>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="40%" class="bordasimples">

<tr class="titulo">
<td  width="20%">Nr</td>
    <td  width="20%">Mes</td>
    <td  width="5%" >Ano</td>
    <td  width="20%">Tipo</td>
    <td  width="5%" >Ph 2 categ</td>
    <td  width="5%" >Ph 4 categ</td>
  </tr>


<?php
$tot = 0;
$soma = 0;
$cc = 2;
 // include "config.php";
$res = mysql_query("SELECT * FROM tb_excursao ORDER BY ex_numero");
while($registro = mysql_fetch_row($res))
 {
 		$nr = $registro[1];
        $mes = $registro[2];
        $ano = $registro[3];
          $tipo = $registro[4];
        $ph = $registro[5];
           $ph4 = $registro[6];



// Definição da cor da linha alternada ------- end -------
?>
<tr>
 <td align="left"  width="20%" ><?php echo"$nr"; ?></td>
    <td align="left"  width="20%" ><?php echo"$mes"; ?></td>
    <td align="left"  width="20%" ><?php echo"$ano"; ?></td>
    <td align="left"  width="20%" ><?php echo"$tipo"; ?></td>
    <td align="left"  width="20%" ><?php echo"$ph"; ?></td>
    <td align="left"  width="40%" ><?php echo"$ph4"; ?></td>


  </tr>
<?php

}


?>

  </table>


    
        </div>
    </div>
