<script language="JavaScript" type="text/javascript">

function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}

</script>



<?php
$sql = mysql_query("SELECT * FROM `tb_especies` WHERE `esp_especie` LIKE  '%$pesq%'");
$num = mysql_num_rows($sql);

?>

<div id="tabelas">
        <div id="tabela">
        <div id="pesq">Ictiomadeira
        <div id="pesq_res">Resultados da pesquisa: <b><?php // echo"$num"; ?></b><!-- registros--></div>
        </div>
        <br />


           <table cellspacing="0" align="center" width="900px" class="bordasimples">
             <?php


         //     echo"$pesq";
             $sql1 = mysql_query("SELECT * FROM `tb_malhadeira_biotico` WHERE `malh_numero` = '$pesq'");
             $num1 = mysql_num_rows($sql1);
             $sql2 = mysql_query("SELECT * FROM `tb_redinha_biotico` WHERE `red_numero` = '$pesq'");
             $num2 = mysql_num_rows($sql2);
             $sql3 = mysql_query("SELECT * FROM `tb_arrastofundo_biotico` WHERE `arr_numero` = '$pesq'");
             $num3 = mysql_num_rows($sql3);
             $sql4 = mysql_query("SELECT * FROM `tb_outros_biotico` WHERE `outr_numero` = '$pesq'");
             $num4 = mysql_num_rows($sql4);
              $sql5 = mysql_query("SELECT * FROM `tb_espinhel_biotico` WHERE `espi_nr` = '$pesq'");
             $num5 = mysql_num_rows($sql5);

            //  echo "$num5";
             /* $sql4 = mysql_query("SELECT * FROM `tb_pesc_biotico` WHERE `outr_numero` = '$pesq'");
             $num4 = mysql_num_rows($sql4);*/

             ?>

             <tr>
             <td align="center" width="30%" ><b>Espécie</b></td>
                <td align="center" width="10%" ><b>Registro</b></td>
                <td title="Data" width="20%" ><b>Código</b></td>
                <td title="Aparelho" width="20%" ><b>Aparelho</b></td>
                <td title="Excursão" width="5%" ><b>Qtde</b></td>
                <td title="Registros"  width="10%" ><b>Voucher</b></td>
                <td title="Registros"  width="10%" ><b>Tecido</b></td>
                                <td title="Registros"  width="10%" ><b>Obs</b></td>

                <td title="Registros"  width="15%" ><b>Determinador</b></td>
                <td title="Registros"  width="10%" ><b>Editar</b></td>
                <!--   <td title="Registros"  width="10%" ><b>Esto</b></td>         -->

             </tr>


             <?php
             $qtde = 1;
             while($registro1 = mysql_fetch_row($sql1))
             {$lim =  $registro1[1];$esp = $registro1[6];
               if ($lim != ""){$sql11 = mysql_query("SELECT * FROM `tb_limno` WHERE `id_tb_limno` = $lim ");
               $registro11 = mysql_fetch_row($sql11); }
               $lista = new ManipulateData1();
               $NomeEsp = $lista->NomeEspecie($esp);

             ?>

             <tr>
             <td align="left"><?php echo"$NomeEsp"; ?></td>
                <td align="center"><?php echo"$registro1[5]"; ?></td>
                <td title="Data" align="center"><?php echo "$registro11[2]"; ?></td>
                <td title="Aparelho"><?php echo "$registro11[3]"; ?></td>
                <td title="Excursão"><?php echo"$qtde"; ?></td>
                <td title="Registros"><?php echo "$registro1[20]"; ?></td>
                <td title="Registros"><?php echo "$registro1[17]"; ?></td>
                           <td title="Registros"><?php echo "$registro1[21]"; ?></td>
                <td title="Registros"><?php echo "$registro1[22]"; ?></td>
                <td title="Registros">
                 <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$registro1[0]";?>&aparelho=<?php echo "$registro11[3]"; ?>')" >
             <!--   <a target="_blank" href="../index.php?secoes=editar/editar_malh_inserir&idd=<?php echo"$registro1[0]";?>&aparelho=<?php echo"$registro11[3]" ;?>" >-->
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>

                                   <!--<td title="Resumo" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/esto_inserir&reg=<?php echo"$pesq";?>&aparelho=<?php echo"$registro11[3]";?>&nome_esp=<?php echo"$NomeEsp";?>')" >
 <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>-->
             </tr>

             <?php

             }


             while($registro2 = mysql_fetch_row($sql2))
             {$lim =  $registro2[2];$esp = $registro2[6];
               $sql22 = mysql_query("SELECT * FROM `tb_limno` WHERE `id_tb_limno` = $lim ");
               $registro22 = mysql_fetch_row($sql22);
               $lista = new ManipulateData1();
               $NomeEsp = $lista->NomeEspecie($esp);

             ?>

             <tr>
              <td align="left"><?php echo"$NomeEsp"; ?></td>
                <td align="center"><?php echo"$registro2[5]"; ?></td>
                <td title="Data" align="center"><?php echo "$registro22[2]"; ?></td>
                <td title="Aparelho"><?php echo "$registro22[3]"; ?></td>
                <td title="Excursão"><?php echo"$registro2[1]"; ?></td>
                <td title="Registros"><?php echo "$registro2[10]"; ?></td>
                <td title="Registros"><?php echo "$registro2[7]"; ?></td>
                      <td title="Registros"><?php echo "$registro2[11]"; ?></td>
                <td title="Registros"><?php echo "$registro2[12]"; ?></td>
                <td title="Registros">
                    <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$registro2[0]";?>&aparelho=<?php echo "$registro22[3]"; ?>')" >
             <!--   <a target="_blank" href="../index.php?secoes=editar/editar_malh_inserir&idd=<?php echo"$registro1[0]";?>&aparelho=<?php echo"$registro11[3]" ;?>" >-->
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>

                 <!--<a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$registro2[0]";?>&aparelho=<?php echo "$registro22[3]"; ?>')" >
                <a target="_blank" href="../index.php?secoes=editar/editar_malh_inserir&idd=<?php echo"$registro2[0]";?>&aparelho=<?php echo"$registro22[3]" ;?>" >
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>-->
             </tr>

             <?php
             }

             while($registro3 = mysql_fetch_row($sql3))
             {$lim =  $registro3[2];$esp = $registro3[6];
               $sql33 = mysql_query("SELECT * FROM `tb_limno_arr` WHERE `id_tb_limno_arr` = '$lim' ");
               $registro33 = mysql_fetch_row($sql33);
               $lista = new ManipulateData1();
               $NomeEsp = $lista->NomeEspecie($esp);
             ?>

             <tr>
              <td align="left"><?php echo"$NomeEsp"; ?></td>
                <td align="center"><?php echo"$registro3[5]"; ?></td>
                <td title="Data" align="center"><?php echo "$registro33[1]"; ?></td>
                <td title="Aparelho"><?php echo "Arrasto de fundo"; ?></td>
                <td title="Excursão"><?php echo"$registro3[1]"; ?></td>
                <td title="Registros"><?php echo "$registro3[10]"; ?></td>
                <td title="Registros"><?php echo "$registro3[7]"; ?></td>
                    <td title="Registros"><?php echo "$registro3[11]"; ?></td> 
                <td title="Registros"><?php echo "$registro3[12]"; ?></td>
                <td title="Registros">


                   <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$registro3[0]";?>&aparelho=Arrasto de fundo')" >
             <!--   <a target="_blank" href="../index.php?secoes=editar/editar_malh_inserir&idd=<?php echo"$registro1[0]";?>&aparelho=<?php echo"$registro11[3]" ;?>" >-->
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>


             </tr>

             <?php
             }

              while($registro4 = mysql_fetch_row($sql4))
             {$lim =  $registro4[2];$esp = $registro4[6];
               $sql44 = mysql_query("SELECT * FROM `tb_limno_outr` WHERE `id_tb_limno_outr` = $lim ");
               $registro44 = mysql_fetch_row($sql44);
               $lista = new ManipulateData1();
               $NomeEsp = $lista->NomeEspecie($esp);

             ?>

             <tr>
              <td align="left"><?php echo"$NomeEsp"; ?></td>
                <td align="center"><?php echo"$registro4[5]"; ?></td>
                <td title="Data" align="center"><?php echo "$registro44[5]"; ?></td>
                <td title="Aparelho"><?php echo "$registro44[2]"; ?></td>
                <td title="Excursão"><?php echo"$registro4[1]"; ?></td>
                <td title="Registros"><?php echo "$registro4[10]"; ?></td>
                <td title="Registros"><?php echo "$registro4[7]"; ?></td>
                  <td title="Registros"><?php echo "$registro4[11]"; ?></td>
                <td title="Registros"><?php echo "$registro4[12]"; ?></td>
                   <td title="Registros">
                    <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$registro4[0]";?>&aparelho=Puça')" >
             <!--   <a target="_blank" href="../index.php?secoes=editar/editar_malh_inserir&idd=<?php echo"$registro1[0]";?>&aparelho=<?php echo"$registro11[3]" ;?>" >-->
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>


               <!-- <td title="Registros"><a target="_blank" href="../index.php?secoes=editar/editar_malh_inserir&idd=<?php echo"$registro4[0]";?>&aparelho=Puça" >
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>-->
             </tr>

             <?php
             }




               while($registro5 = mysql_fetch_row($sql5))
             {$lim =  $registro5[3];$esp = $registro5[4];
               $sql55 = mysql_query("SELECT * FROM `tb_limno_outr` WHERE `id_tb_limno_outr` = $lim ");
               $registro55 = mysql_fetch_row($sql55);
               $lista = new ManipulateData1();
               $NomeEsp = $lista->NomeEspecie($esp);

             ?>

             <tr>
              <td align="left"><?php echo"$NomeEsp"; ?></td>
                <td align="center"><?php echo"$registro5[2]"; ?></td>
                <td title="Data" align="center"><?php echo "$registro55[5]"; ?></td>
                <td title="Aparelho"><?php echo "$registro55[2]"; ?></td>
                <td title="Excursão"><?php echo"$registro5[1]"; ?></td>
                <td title="Registros"><?php echo "$registro5[20]"; ?></td>
                <td title="Registros"><?php echo "$registro5[16]"; ?></td>
                  <td title="Registros"><?php echo "$registro5[22]"; ?></td>
                <td title="Registros"><?php echo "$registro5[21]"; ?></td>
                   <td title="Registros">
                    <a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$registro5[0]";?>&aparelho=Espinhel')" >
             <!--   <a target="_blank" href="../index.php?secoes=editar/editar_malh_inserir&idd=<?php echo"$registro1[0]";?>&aparelho=<?php echo"$registro11[3]" ;?>" >-->
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>


               <!-- <td title="Registros"><a target="_blank" href="../index.php?secoes=editar/editar_malh_inserir&idd=<?php echo"$registro4[0]";?>&aparelho=Puça" >
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>-->
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


