
<script language="JavaScript" type="text/javascript">

function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}

</script>


<?php
$sql = mysql_query("SELECT * FROM `cons_voucher` WHERE `nr_voucher` LIKE  '%$pesq%'");
$num = mysql_num_rows($sql);

?>

<div id="tabelas">
        <div id="tabela">
        <div id="pesq">Ictiomadeira
        <div id="pesq_res">Resultados da pesquisa: <b><?php // echo"$num"; ?></b><!-- registros--></div>
        </div>
        <br />
        <table cellspacing="0" align="center" width="900px" class="bordasimples">
        <tr class="titulo">
                <td colspan="15" align="left">&nbsp;&nbsp;&nbsp;<?php echo"$especie"; ?></td>
             </tr>


             <tr>
                <td align="center" width="27%" ><b>Espécie</b></td>
                <td align="center" width="5%" ><b>Nr</b></td>
                <td title="Data" width="5%" ><b>Exc</b></td>
                <td title="Data" width="15%" ><b>Código</b></td>
                <td title="Aparelho" width="15%" ><b>Aparelho</b></td>
                <td title="Excursão" width="5%" ><b>Qtde</b></td>
                <td title="Registros"  width="10%" ><b>Voucher</b></td>
                <td title="Registros"  width="5%" ><b>Tecido</b></td>
                <td title="Registros"  width="15%" ><b>Determinador</b></td>
                 <td title="Registros"  width="5%" ><b>Obs</b></td>
                <td title="Registros"  width="3%" ><b>Editar</b></td>
             </tr>
           <?php

         while($registro = mysql_fetch_row($sql))
           {$pesq =  $registro[1];
         //   echo "$pesq";
           ?>

             <?php
             $sql1 = mysql_query("SELECT * FROM `tb_malhadeira_biotico` WHERE `malh_voucher` LIKE '%$pesq%'  AND `malh_voucher` != 'Não'  ");
             $num1 = mysql_num_rows($sql1);
             $sql2 = mysql_query("SELECT * FROM `tb_redinha_biotico` WHERE `red_voucher` LIKE '%$pesq%' AND `red_voucher` != 'Não'  ");
             $num2 = mysql_num_rows($sql2);
             $sql3 = mysql_query("SELECT * FROM `tb_arrastofundo_biotico` WHERE `arr_voucher` LIKE '%$pesq%'  AND `arr_voucher` != 'Não' ");
             $num3 = mysql_num_rows($sql3);
             $sql4 = mysql_query("SELECT * FROM `tb_outros_biotico` WHERE `outr_voucher` LIKE '%$pesq%'  AND `outr_voucher` != 'Não' ");
             $num4 = mysql_num_rows($sql4);
             /*$sql5 = mysql_query("SELECT * FROM `tb_pesc_biotico` WHERE `pesc_voucher` = $pesq ");
             $num5 = mysql_num_rows($sql5);*/
              $sql6 = mysql_query("SELECT * FROM `tb_espinhel_biotico` WHERE `espi_voucher` LIKE '%$pesq%' AND `espi_voucher` != 'Não'  ");
             $num6 = mysql_num_rows($sql6);
             ?>



             <?php
             $qtde = 1;
             while($registro1 = mysql_fetch_row($sql1))
             {$lim =  $registro1[1];
             if ($lim > 0){
               $sql11 = mysql_query("SELECT * FROM `tb_limno` WHERE `id_tb_limno` = $lim ");
               $registro11 = mysql_fetch_row($sql11) ; }

             /*  $sql_esp = mysql_query("SELECT * FROM `tb_especies` WHERE `id_tab_especie` =  '$registro1[6]'");
               while($registro_esp = mysql_fetch_row($sql_esp))
               {$esp =  $registro_esp[3];} */
                $lista = new ManipulateData1();
                $esp = $lista->NomeEspecie($registro1[6]);
             ?>

             <tr>
                <td align="left"><?php echo"$esp"; ?></td>   <td title="Registros"><?php echo "$registro1[5]"; ?></td>  
                 <td title="Data" align="center"><?php echo "$registro11[1]"; ?></td>

                <td title="Data" align="center"><?php echo "$registro11[2]"; ?></td>

                <td title="Aparelho"><?php echo "$registro11[3]"; ?></td>
                <td title="Excursão"><?php echo"$qtde"; ?></td>
                <td title="Registros"><?php echo "$registro1[20]"; ?></td>
                <td title="Registros"><?php echo "$registro1[17]"; ?></td>

                <td title="Registros"><?php echo "$registro1[22]"; ?></td>
              <td title="Registros"><?php echo "$registro1[21]"; ?></td>   <td title="Registros">

                <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$registro1[0]";?>&aparelho=<?php echo "$registro11[3]"; ?>')" >
               <!-- <a target="_blank" href="../index.php?secoes=editar/editar_malh_inserir&idd=<?php echo"";?>&aparelho=<?php echo"" ;?>" > -->
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
             </tr>

             <?php

             }


             while($registro2 = mysql_fetch_row($sql2))
             {$lim =  $registro2[2];
              if ($lim > 0){
               $sql22 = mysql_query("SELECT * FROM `tb_limno` WHERE `id_tb_limno` = $lim ");
               $registro22 = mysql_fetch_row($sql22) ;
                       }

           /*   $sql_esp = mysql_query("SELECT * FROM `tb_especies` WHERE `id_tab_especie` =  ''");
               while($registro_esp = mysql_fetch_row($sql_esp))
               {$esp =  $registro_esp[3];}*/
                $lista = new ManipulateData1();
                $esp = $lista->NomeEspecie($registro2[6]);
             ?>

             <tr>
                <td align="left"><?php echo"$esp"; ?></td>
                 <td title="Excursão"><?php echo"$registro2[5]"; ?></td>
                <td title="Data" align="center"><?php echo "$registro22[1]"; ?></td>
                <td title="Data" align="center"><?php echo "$registro22[2]"; ?></td>
                <td title="Aparelho"><?php echo "$registro22[3]"; ?></td>
                <td title="Excursão"><?php echo"$registro2[1]"; ?></td>
                <td title="Registros"><?php echo "$registro2[10]"; ?></td>
                <td title="Registros"><?php echo "$registro2[7]"; ?></td>

                <td title="Registros"><?php echo "$registro2[12]"; ?></td>         <td title="Registros"><?php echo "$registro2[11]"; ?></td>
                <td title="Registros"><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$registro2[0]";?>&aparelho=<?php echo "$registro22[3]"; ?>')" >
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
             </tr>

             <?php
             }

             while($registro3 = mysql_fetch_row($sql3))
             {$lim =  $registro3[2];
              if ($lim > 0){
               $sql33 = mysql_query("SELECT * FROM `tb_limno_arr` WHERE `id_tb_limno_arr` = $lim ");
               $registro33 = mysql_fetch_row($sql33) ;
                                     }

           /*  $sql_esp = mysql_query("SELECT * FROM `tb_especies` WHERE `id_tab_especie` =  ''");
               while($registro_esp = mysql_fetch_row($sql_esp))
               {$esp =  $registro_esp[3];}*/
                $lista = new ManipulateData1();
                $esp = $lista->NomeEspecie($registro3[6]);
             ?>

             <tr>
                <td align="left"><?php echo"$esp"; ?></td>
                  <td title="Excursão"><?php echo"$registro3[5]"; ?></td>
                <td title="Data" align="center"><?php echo "$registro33[2]"; ?></td>
                <td title="Data" align="center"><?php echo "$registro33[1]"; ?></td>
                <td title="Aparelho"><?php echo "Arrasto Bentônico"; ?></td>
                <td title="Excursão"><?php echo"$registro3[1]"; ?></td>
                <td title="Registros"><?php echo "$registro3[10]"; ?></td>
                <td title="Registros"><?php echo "$registro3[7]"; ?></td>
                <td title="Registros"><?php echo "$registro3[12]"; ?></td>    <td title="Registros"><?php echo "$registro3[11]"; ?></td>
                <td title="Registros">
                 <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$registro3[0]";?>&aparelho=Arrasto de fundo')" >
             <!--   <a target="_blank" href="../index.php?secoes=editar/editar_malh_inserir&idd=<?php echo"$registro3[0]";?>&aparelho=Arrasto de fundo" > -->
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
             </tr>

             <?php
             }

              while($registro4 = mysql_fetch_row($sql4))
             {$lim =  $registro4[2];
              if ($lim > 0){
               $sql44 = mysql_query("SELECT * FROM `tb_limno_outr` WHERE `id_tb_limno_outr` = $lim ");
               $registro44 = mysql_fetch_row($sql44);  }

              /* $sql_esp = mysql_query("SELECT * FROM `tb_especies` WHERE `id_tab_especie` =  ''");
               while($registro_esp = mysql_fetch_row($sql_esp))
               {$esp =  $registro_esp[3];}*/
                $lista = new ManipulateData1();
                $esp = $lista->NomeEspecie($registro4[6]);

             if ($registro44[2] != "Espinhel"){
             ?>

             <tr>
                <td align="left"><?php echo"$esp"; ?></td>
                 <td title="Excursão"><?php echo"$registro4[5]"; ?></td>
                <td title="Data" align="center"><?php echo "$registro44[1]"; ?></td>
                <td title="Data" align="center"><?php echo "$registro44[5]"; ?></td>
                <td title="Aparelho"><?php echo "Puça"; ?></td>
                <td title="Excursão"><?php echo"$registro4[1]"; ?></td>
                <td title="Registros"><?php echo "$registro4[10]"; ?></td>
                <td title="Registros"><?php echo "$registro4[7]"; ?></td>

                <td title="Registros"><?php echo "$registro4[12]"; ?></td>    <td title="Registros"><?php echo "$registro4[11]"; ?></td>       
                <td title="Registros">
                <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$registro4[0]";?>&aparelho=Puça')" >
                <!-- <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$registro4[0]";?>&aparelho=Outros; ?>')" >  -->
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
             </tr>

             <?php
             }
                }

           /*   while($registro5 = mysql_fetch_row($sql5))
             {//$lim =  $registro5[2];                     */

             ?>

         <!--        <tr>
                <td align="center"><?php echo"$registro5[5]"; ?></td>
                <td title="Data" align="center"><?php echo "-"; ?></td>
                <td title="Data" align="center"><?php echo "$registro5[1]"; ?></td>
                <td title="Aparelho"><?php echo "Pesca"; ?></td>
                <td title="Excursão"><?php echo"-"; ?></td>
                <td title="Registros"><?php echo "-"; ?></td>
                <td title="Registros"><?php echo "$registro5[19]"; ?></td>
                <td title="Registros"><?php echo "-"; ?></td>
                <td title="Registros">
                <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$registro5[0]";?>&aparelho=pesc')" >
            <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$registro4[0]";?>&aparelho=Outros; ?>')" >
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
             </tr>
                                                                                                                                                                -->
             <?php
            //  }
             while($registro6 = mysql_fetch_row($sql6))
             {$lim =  $registro6[3];
              if ($lim > 0){
               $sql66 = mysql_query("SELECT * FROM `tb_limno_outr` WHERE `id_tb_limno_outr` = $lim ");
               $registro66 = mysql_fetch_row($sql66);    }

              /* $sql_esp = mysql_query("SELECT * FROM `tb_especies` WHERE `id_tab_especie` =  ''");
               while($registro_esp = mysql_fetch_row($sql_esp))
               {$esp =  $registro_esp[3];}*/
                $lista = new ManipulateData1();
                $esp = $lista->NomeEspecie($registro6[4]);


             ?>

             <tr>
                <td align="left"><?php echo"$esp"; ?></td>
                   <td title="Registros"><?php echo "$registro6[3]"; ?></td>
                <td title="Data" align="center"><?php echo "$registro66[1]"; ?></td>
                <td title="Data" align="center"><?php echo "$registro66[5]"; ?></td>
                <td title="Aparelho"><?php echo "$registro66[2]"; ?></td>
                <td title="Excursão"><?php echo"$registro6[1]"; ?></td>
                <td title="Registros"><?php echo "$registro6[20]"; ?></td>
                <td title="Registros"><?php echo "$registro6[16]"; ?></td>
                <td title="Registros"><?php echo "$registro6[21]"; ?></td>
                <td title="Registros">
                <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$registro6[0]";?>&aparelho=Espinhel')" >
                <!-- <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$registro4[0]";?>&aparelho=Outros; ?>')" >  -->
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
             </tr>

             <?php
             }


             ?>



           <?php








           }
          //  }
           ?>
             </table>
           <br />
          <br />
          <div id="rodape_branco">

          </div>


        </div>
    </div>


