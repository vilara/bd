<script language="JavaScript" type="text/javascript">

function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}

</script>
 <?php include "log_auth3.php"; ?>



  <?php
$res = mysql_query("SELECT * FROM  `tb_especies` WHERE  `id_tab_especie` LIKE  '$nr'");
while($registro = mysql_fetch_row($res)){$es = $registro[3]; $n = $registro[0]; }
?>
<div id="conteudo">
<h3>Testes</h3>
</div>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" width="20%" align="center" width="100%" class="bordasimples">


<tr class="titulo"> <td  width="20%"><?php echo "$es - $n"; ?></td> </tr>

<tr class="titulo"> <td  width="20%">Outros</td> </tr>
<?php
$res = mysql_query("SELECT * FROM  `tb_outros_biotico` WHERE  `outr_especie` LIKE  '$nr'");
while($registro = mysql_fetch_row($res)){$id = $registro[5];
?><tr> <td align="left"  width="20%" ><?php echo"$id"; ?></td>  </tr>  <?php  }  ?>

<tr class="titulo"> <td  width="20%">Malhadeira</td> </tr>
<?php
$res = mysql_query("SELECT * FROM  `tb_malhadeira_biotico` WHERE  `malh_especie` LIKE  '$nr'");
while($registro = mysql_fetch_row($res)){$id = $registro[5];
?><tr> <td align="left"  width="20%" ><?php echo"$id"; ?></td>  </tr>  <?php  }  ?>

<tr class="titulo"> <td  width="20%">Redinha</td> </tr>
<?php
$res = mysql_query("SELECT * FROM  `tb_redinha_biotico` WHERE  `red_especie` LIKE  '$nr'");
while($registro = mysql_fetch_row($res)){$id = $registro[5];
?><tr> <td align="left"  width="20%" ><?php echo"$id"; ?></td>  </tr>  <?php  }  ?>

<tr class="titulo"> <td  width="20%">Arrasto</td> </tr>
<?php
$res = mysql_query("SELECT * FROM  `tb_arrastofundo_biotico` WHERE  `arr_especie` LIKE  '$nr'");
while($registro = mysql_fetch_row($res)){$id = $registro[5];
?><tr> <td align="left"  width="20%" ><?php echo"$id"; ?></td>  </tr>  <?php  }  ?>

<tr class="titulo"> <td  width="20%">Espinhel</td> </tr>
<?php
$res = mysql_query("SELECT * FROM  `tb_espinhel_biotico` WHERE  `espi_esp` LIKE  '$nr'");
while($registro = mysql_fetch_row($res)){$id = $registro[2];
?><tr> <td align="left"  width="20%" ><?php echo"$id"; ?></td>  </tr>  <?php  }  ?>



<tr class="titulo"> <td  width="20%">Pesca</td> </tr>
<?php
$res = mysql_query("SELECT * FROM  `tb_pesc_biotico` WHERE  `pesc_esp` LIKE  '$nr'");
while($registro = mysql_fetch_row($res)){$id = $registro[5];
?><tr> <td align="left"  width="20%" ><?php echo"$id"; ?></td>  </tr>  <?php  }  ?>

  </table>



        </div>
    </div>
