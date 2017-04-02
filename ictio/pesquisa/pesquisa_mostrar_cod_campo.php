<script language="JavaScript" type="text/javascript">

function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}

</script>

<?php
/*$sql = mysql_query("SELECT * FROM `tb_especies` WHERE `esp_especie` LIKE  '%$pesq%'");
$num = mysql_num_rows($sql);*/

?>

<div id="tabelas">
        <div id="tabela">
        <div id="pesq">Ictiomadeira
        <div id="pesq_res">Resultados da pesquisa: <b><?php // echo"$num"; ?></b><!-- registros--></div>
        </div>
        <br />


           <?php

          /* while($registro = mysql_fetch_row($sql))
           {$especie =  $registro[3];$id =  $registro[0];*/
           ?>
           <table cellspacing="0" align="center" width="900px" class="bordasimples">
             <?php
             $sql1 = mysql_query("SELECT * FROM `tb_limno` WHERE `lim_cod` LIKE  '%$pesq%' ORDER BY lim_excursao, lim_data ASC ");
             $num = mysql_num_rows($sql1);
             $sql2 = mysql_query("SELECT * FROM `tb_limno_arr` WHERE `lim_arr_cod` LIKE  '%$pesq%' ORDER BY lim_arr_excursao, lim_arr_data ASC ");
             $num2 = mysql_num_rows($sql2);
             $sql3 = mysql_query("SELECT * FROM `tb_limno_outr` WHERE `lim_outr_cod` LIKE  '%$pesq%' ORDER BY lim_outr_excursao, lim_outr_aparelho, lim_outr_data ASC ");
             $num3 = mysql_num_rows($sql3);
             /*if ($num > 0)
             {*/
             ?>
             <tr class="titulo">
                <td colspan="7" align="left">Resultados</td>
             </tr>


             <tr>
                <td align="center" width="10%" ><b>Codigo</b></td>
                <td title="Data" width="20%" ><b>Aparelho</b></td>
                <td title="Aparelho" width="5%" ><b>Excursão</b></td>
                <td title="Excursão" width="20%" ><b>Local</b></td>
                <td title="Registros"  width="10%" ><b>Data</b></td>
                <td title="Registros"  width="10%" ><b>Padronizado</b></td>

                <td title="Registros"  width="10%" ><b>Editar</b></td>
             </tr>


             <?php

              while($registro1 = mysql_fetch_row($sql1))
             {$loc = $registro1[4];
                 $sql11 = mysql_query("SELECT * FROM `tb_local` WHERE `id_tab_local` = $loc ");
                 $registro11 = mysql_fetch_row($sql11)

             ?>

             <tr>
                <td align="center"><?php echo"$registro1[2]"; ?></td>
                <td title="Data" align="center"><?php echo "$registro1[3]"; ?></td>
                <td title="Aparelho"><?php echo "$registro1[1]"; ?></td>
                <td title="Excursão"><?php echo"$registro11[1]"; ?></td>
                <td title="Registros"><?php echo "$registro1[5]"; ?></td>
                <td title="Registros"><?php echo "$registro1[27]"; ?></td>
                <td title="Registros">
                <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/rel_limno_edit&idd=<?php echo"$registro1[0]";?>&lim_aparelho=<?php echo"$registro1[3]" ;?>')" >
<!--                <a target="_blank" href="../index.php?secoes=editar/rel_limno_edit&idd=<?php echo"$registro1[0]";?>&lim_aparelho=<?php echo"$registro1[3]" ;?>" >
-->                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
             </tr>

             <?php
             }




             while($registro2 = mysql_fetch_row($sql2))
             {$loc = $registro2[3];
                 $sql22 = mysql_query("SELECT * FROM `tb_local` WHERE `id_tab_local` = $loc ");
                 while($registro22 = mysql_fetch_row($sql22)){$local = $registro22[1];}
             ?>

             <tr>
                <td align="center"><?php echo"$registro2[1]"; ?></td>
                <td title="Aparelho" align="center"><?php echo "Arrasto"; ?></td>
                <td title="Excursão"><?php echo "$registro2[2]"; ?></td>
                <td title="Local"><?php echo"$local"; ?></td>
                <td title="Registros"><?php echo "$registro2[34]"; ?></td>
                <td title="Registros"><?php echo "$registro2[38]"; ?></td>
                <td title="Registros">
                 <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/rel_limno_edit&idd=<?php echo"$registro2[0]";?>&lim_aparelho=Arrasto de fundo')" >
             <!--   <a target="_blank" href="../index.php?secoes=editar/rel_limno_edit&idd=<?php echo"$registro2[0]";?>&lim_aparelho=Arrasto de fundo" >-->
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
             </tr>

             <?php
             }



             while($registro3 = mysql_fetch_row($sql3))
             {$loc = $registro3[3];
                 $sql33 = mysql_query("SELECT * FROM `tb_local` WHERE `id_tab_local` = $loc ");
                 while($registro33 = mysql_fetch_row($sql33)){$local = $registro33[1];}
             ?>

             <tr>
                <td align="center"><?php echo"$registro3[5]"; ?></td>
                <td title="Data" align="center"><?php echo "$registro3[2]"; ?></td>
                <td title="Aparelho"><?php echo "$registro3[1]"; ?></td>
                <td title="Excursão"><?php echo"$local"; ?></td>
                <td title="Registros"><?php echo "$registro3[4]"; ?></td>
                <td title="Registros"><?php echo "$registro3[16]"; ?></td>
                <td title="Registros">
                 <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/rel_limno_edit&idd=<?php echo"$registro3[0]";?>&lim_aparelho=Outros')" >
               <!-- <a target="_blank" href="../index.php?secoes=editar/rel_limno_edit&idd=<?php echo"$registro3[0]";?>&lim_aparelho=Outros" > -->
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
             </tr>

             <?php
             }
             ?>
             </table>
           <br />


          <br />
          <div id="rodape_branco">

          </div>


        </div>
    </div>


