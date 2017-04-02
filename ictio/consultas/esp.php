<script language="JavaScript" type="text/javascript">

function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}

</script>
 <?php include "log_auth3.php"; ?> 
<div id="conteudo">
<h3>Lista de Espécies</h3>
</div>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="100%" class="bordasimples">

<tr class="titulo">
<td  width="20%">Nr Cadastro</td>
    <td  width="20%">Ordem</td>
    <td  width="20%" >Família</td>
    <td  width="20%" >Espécie</td>
    <td   width="20%">Cat Trófica</td>
    <td   width="10%">Editar</td>
    <?php
         if ($usu == "gislene" OR $usu == "vilara"){
  ?>
    <td   width="10%">Excluir</td>
    <?php
     }
  ?>
  </tr>


<?php
$tot = 0;
$soma = 0;
$cc = 2;

 // include "config.php";
$res = mysql_query("SELECT * FROM tb_especies ORDER BY esp_ordem, esp_especie");
while($registro = mysql_fetch_row($res))
 {
 		$id = $registro[0];
        $ord = $registro[1];
        $fam = $registro[2];
        $esp = $registro[3];
        $cat_trof = $registro[4];


// Definição da cor da linha alternada ------- end -------
?>
<tr>
 <td align="left"  width="20%" ><?php echo"$id"; ?></td>
    <td align="left"  width="20%" ><?php echo"$ord"; ?></td>
    <td align="left"  width="20%" ><?php echo"$fam"; ?></td>
    <td  width="20%" ><?php echo"$esp"; ?></td>
    <td  width="20%" ><?php echo"$cat_trof"; ?></td>


    <td  width="10%" >
   <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_esp_inserir&id=<?php echo $id ;?>')" >
 <img class='table_a' src='img/edit.png' width='16' height='16' alt='Editar' />  </a></td>
  <?php
   if ($usu == "gislene" OR $usu == "vilara"){
  ?>

  <td  width="10%" > <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/del_esp_inserir&idd=<?php echo"$id";?>')" >
                                <img src='img/del.png' width='16' height='16' alt='Deletar' border="0" /></a></td>
   <?php
      }
  ?>
  </tr>
<?php

}



setlocale(LC_TIME,"portuguese");
$data_completa = strftime("%d de %B de %Y.");
?>

  </table>


    
        </div>
    </div>
