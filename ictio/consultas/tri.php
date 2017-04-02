<script language="JavaScript" type="text/javascript">

function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}

</script>
 <?php include "log_auth3.php"; ?> 
<div id="conteudo">
<h3>Lista de Trincas</h3>
</div>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="40%" class="bordasimples">

<tr class="titulo">
<td  width="20%">Cod</td>
    <td  width="20%">Local</td>
    <td  width="5%" >Trinca</td>
     <td  width="5%" >Projeto</td>

  </tr>


<?php
$tot = 0;
$soma = 0;
$cc = 2;
 // include "config.php";
$res = mysql_query("SELECT * FROM tb_local ORDER BY id_tab_local");
while($registro = mysql_fetch_row($res))
 {
 		$id = $registro[0];
        $loc = $registro[1];
        $tri = $registro[2];
         $pro = $registro[10];



// Definição da cor da linha alternada ------- end -------
?>
<tr>
 <td align="left"  width="20%" ><?php echo"$id"; ?></td>
    <td align="left"  width="20%" ><?php echo"$loc"; ?></td>
    <td align="left"  width="20%" ><?php echo"$tri"; ?></td>
                                                              <td align="left"  width="20%" ><?php echo"$pro"; ?></td> 

  </tr>
<?php

}


?>

  </table>


    
        </div>
    </div>
