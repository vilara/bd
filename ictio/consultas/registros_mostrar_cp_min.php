
<script language="JavaScript" type="text/javascript">

function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}

</script>
<div id="tabelas">
        <div id="tabela">
            <table cellspacing="0" align="center" width="100%" class="bordasimples">






                <!--Início dos resultados para Malhadeira    -->
                <?php
                if ($aparelho == "Malhadeira")
                {
                      $lista1 = new ManipulateData1();


                      if ($aparelho == "Todos")
                      {$apare = " ";}
                      else if ($aparelho == "Malha + Rede")
                      {$apare = " AND bio_val = 'mr'";}
                      else{$apare = " AND bio_aparelho = '$aparelho'";}




                      if ($exc == "Todas")
                      {$excu = " ";}
                       else if ($exc == "Geral")
                      {$excu = " AND lim_excursao = '0'";}
                      else
                      {$excu = " AND lim_excursao = '$exc'";}



                       if ($esp == "Todas")
                      {$espe = " ";}
                      else
                      {$espe = " AND malh_especie = '$cod_esp'";}

                      ?>
                      <tr class="titulo">
                        <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão: <?php echo"$exc ";?></td>
                      </tr>

                      <tr class="titulo">
                      <!--<td align="left" >Exc</td>
                        <td align="left" >Local</td>
        <td align="left" >Ponto</td>
        <td align="left" >Padronizado</td>
        <td align="left" >Análise</td>

                        <td align="left" >Código</td>-->



                        <td align="left" >Ordem</td>
                        <td align="left" >Família</td>
                        <td align="left" >Espécie</td>



                        <td title="Aparelho" align="" >F3</td>
                        <td title="Aparelho" align="" >F4</td>

                      </tr>

                      <?php
                      $nn = 1;
                        $codd = " AND malh_lim = '$cod'";
                         if ($cod == "Todos")
                        {
                         $sql11 = mysql_query("SELECT * FROM tb_limno WHERE lim_aparelho = 'Malhadeira' $excu");
                         $num11 = mysql_num_rows($sql11);
                         while($registro11 = mysql_fetch_row($sql11))
                            {
                            $cod1 =  $registro11[0];
                            $codd .= " OR malh_lim = $cod1";
                            }
                        }
                       //  echo $codd;
                      // Listagem das espécies capturadas de Malhadeira  ********************
                        $sql = mysql_query("SELECT * FROM tb_malhadeira_biotico WHERE id_tb_malhadeira > '0' $espe   AND (malh_ematur = 3 OR malh_ematur = 4)  AND malh_cp > 0 AND (malh_lim > 0 $codd) GROUP BY malh_especie ORDER BY malh_especie ASC");
                        $num = mysql_num_rows($sql);
                        while($registro = mysql_fetch_row($sql))                                                                              /*AND malh_sexo = 'Fêmea'  AND (malh_ematur = 3 OR malh_ematur = 4)   GROUP BY malh_especie */
                            {
                                $id_lim[$nn] =  $registro[0];
                                $limm =  $registro[1];
                                    $login = new ManipulateData();
                                    $login->setTable("tb_limno");
                                    $login->setFieldId("id_tb_limno ='$limm'");
                                    $login->setFieldNr("1"); $excur = $login->data_filter();
                                    $login->setFieldNr("2"); $NomeCod = $login->data_filter();
                                    $login->setFieldNr("4"); $locc = $login->data_filter();
                                     $login->setFieldNr("27"); $pad1 = $login->data_filter();
                                    $login->setTable("tb_local");
                                    $login->setFieldId("id_tab_local ='$locc'");
                                    $login->setFieldNr("2"); $cod_loc = $login->data_filter();
                                    $login->setFieldNr("3"); $desc_loc = $login->data_filter();
                                $esp =  $registro[6];
                                $lista = new ManipulateData1();
                                $NomeEsp = $lista->NomeEspecie($esp);
                                $NomeOrd = $lista->NomeOrd($esp);
                                $NomeFam = $lista->NomeFam($esp);
                                $hora =  $registro[2];
                                $data =  $registro[3];
                                $num =  $registro[5];



                            $sql_min_f3 = mysql_query("SELECT MIN(malh_cp) FROM tb_malhadeira_biotico WHERE id_tb_malhadeira > '0'  AND (malh_ematur = 3)  AND malh_especie = $esp AND malh_cp > 0 AND (malh_lim > 0 $codd)");
                                while($registro_min_f3 = mysql_fetch_row($sql_min_f3)){$cp_min_f3 =  $registro_min_f3[0];}   /* */

                              $sql_min_f4 = mysql_query("SELECT MIN(malh_cp) FROM tb_malhadeira_biotico WHERE id_tb_malhadeira > '0'  AND (malh_ematur = 4)  AND malh_especie = $esp AND malh_cp > 0 AND (malh_lim > 0 $codd)");
                                while($registro_min_f4 = mysql_fetch_row($sql_min_f4)){$cp_min_f4 =  $registro_min_f4[0];}
                             /*   $sql_min_f3 = mysql_query("SELECT MIN(malh_cp) FROM tb_malhadeira_biotico WHERE id_tb_malhadeira > '0' AND malh_especie = $esp AND malh_cp > 0 AND malh_cp != '' AND malh_sexo = 'Fêmea' AND (malh_ematur = 3) AND (malh_lim > 0 $codd)");
                                while($registro_min_f3 = mysql_fetch_row($sql_min_f3)){$cp_min_f3 =  $registro_min_f3[0];}*/
                         /*
                             $sql_min_f4 = mysql_query("SELECT MIN(malh_cp) FROM tb_malhadeira_biotico WHERE id_tb_malhadeira > '0' AND malh_especie = $esp AND malh_cp > 0 AND malh_cp != '' AND malh_sexo = 'Fêmea' AND (malh_ematur = 4) AND (malh_lim > 0 $codd)");
                                while($registro_min_f4 = mysql_fetch_row($sql_min_f4)){$cp_min_f4 =  $registro_min_f4[0];}*/

                                $cp =  $registro[7];
                                $pt =  $registro[8];
                                $sexo =  $registro[9];
                                $ematur =  $registro[10];
                                $pg =  $registro[11];
                                $gg =  $registro[12];
                                $gr =  $registro[13];
                                $cresc =  $registro[14];
                                $histo =  $registro[15];
                                $fecund =  $registro[16];
                                $teci =  $registro[17];
                                $foto1 =  $registro[18];
                                $voucher =  $registro[20];
                                $det =  $registro[22];
                                 $anali =  $registro[24];
                                $malh_histo_conf = $registro[25];
                                 $obss = $registro[21];




                                  if ($gr == 9){$gr = 0;}
                                    if ($cp == 0){$cp = "";}
                                     if ($pt == 0){$pt = "";}
                                     if ($pg == 0){$pg = "";}

                                if ($histo == "Sim" AND $malh_histo_conf == "Não"){$color = "#FF0000";}
                                else{$color = "#000000";}
                                ?>
                                <tr>
                              <!--  <td align="left" ><?php echo "$exc"; ?></td>
                                <td align="left" ><?php echo "$cod_loc"; ?></td>

                          <td align="left" ><?php echo "$desc_loc"; ?></td>
                          <td align="left" ><?php echo "$pad1"; ?></td>
                          <td align="left" ><?php echo "$anali"; ?></td>

-->


                             <!--   <td align="left" ><?php echo "$NomeCod"; ?></td>  -->

                                <td align="left" ><?php echo "$NomeOrd"; ?></td>
                                <td align="left" ><?php echo "$NomeFam"; ?></td>
                                <td align="left" ><?php echo "$NomeEsp"; ?></td>

                                <td title="Excursão" align="" ><?php echo "$cp_min_f3"; ?></td>
                                <td title="Excursão" align="" ><?php echo "$cp_min_f4"; ?></td>

                                </tr>
                                <?php
                                $nn++;
                            }
                   }









                    /* Início dos resultados para Redinha   */
                    if ($aparelho == "Redinha")
                    {
                            $lista1 = new ManipulateData1();
                            $NomeCodLimMalhRed = $lista1->NomeCodLimMalhRed($cod);
                            if ($aparelho == "Todos")
                            {$apare = " ";}
                            else if ($aparelho == "Malha + Rede")
                            {$apare = " AND bio_val = 'mr'";}
                            else{$apare = " AND bio_aparelho = '$aparelho'";}
                            if ($exc == "Todas")
                            {$excu = " ";}
                            else if ($exc == "Cheia")
                            {$excu = " AND bio_est = 'Cheia'";}
                            else if ($exc == "Seca")
                            {$excu = " AND bio_est = 'Seca'";}
                              else if ($exc == "Geral")
                      {$excu = " AND lim_excursao = '0'";}
                            else {$excu = " AND lim_excursao = '$exc'";}


                               if ($esp == "Todas")
                      {$espe = " ";}
                      else
                      {$espe = " AND red_especie = '$cod_esp'";}
                            ?>
                            <tr class="titulo">
                               <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão: <?php echo"$exc ";?> ---- Código:<?php echo"$NomeCodLimMalhRed";?></td>
                            </tr>

                            <tr class="titulo">

                            <td align="left" >Exc</td>
                        <td align="left" >Local</td>
        <td align="left" >Ponto</td>
        <td align="left" >Padronizado</td>
        <td align="left" >Análise</td>

                        <td align="left" >Código</td>

       <td title="Aparelho" align="" >Data</td>
       <td title="Data" align="" >Hora</td>


                        <td align="left" >Ordem</td>
                        <td align="left" >Família</td>
                        <td align="left" >Espécie</td>


                        <td title="Numero" align="" ><a href="index.php?secoes=consultas/registros&flag=1&flag1=1&flag2=2&aparelho=<?php echo"$aparelho"; ?>&exc=<?php echo"$exc"; ?>&cod=<?php echo"$cod"; ?>&ord=malh_numero">Número</a></td>

        <td title="Excursão" align="" >Qtde</td>
                        <td title="Excursão" align="" >Cp</td>
                        <td title="Registros" align="" >Pt</td>
                        <td title="Data" align="" >Sexo</td>
                        <td title="Aparelho" align="" >Ematur</td>
                        <td title="Excursão" align="" >pg</td>
                        <td title="Registros" align="" >gg</td>
                        <td title="Data" align="" >gr</td>
                        <td title="Aparelho" align="" >Crescim</td>
                        <td title="Aparelho" align="" >Histo</td>
                        <td title="Excursão" align="" >Fecund</td>
                        <td title="Excursão" align="" >Teci</td>
                        <td title="Excursão" align="" >Voucher</td>

        <td title="Excursão" align="" >Foto</td>
        <td title="Excursão" align="" >Larva</td>

                        <td title="Excursão" align="" >Det</td>
                        <td title="Excursão" align="" >Obs</td>
                        <td title="Excursão" align="" >Edit</td>











                            </tr>

                            <?php
                            $nn = 1;
                        $codd = " AND red_lim = '$cod'";


                         if ($cod == "Todos" AND $exc != "Todas")
                        {     if($exc == "Geral"){$exc = "0"   ;} echo "$exc";  
                         $sql11 = mysql_query("SELECT * FROM tb_limno WHERE lim_aparelho = 'Redinha' AND lim_excursao = $exc");
                         $num11 = mysql_num_rows($sql11);
                         while($registro11 = mysql_fetch_row($sql11))
                            {
                            $cod1 =  $registro11[0];


                            $codd .= " OR red_lim = $cod1";
                            }
                        }
                         if ($cod == "Todos" AND $exc == "Todas"){$codd = "";}
                      //   echo "$codd";
                            // Listagem das espécies capturadas de Redinha
                            $sql = mysql_query("SELECT * FROM tb_redinha_biotico WHERE id_tb_redinha > '0' $espe AND (red_lim > 0 $codd) ORDER BY red_data, red_hora ASC");
                            $num = mysql_num_rows($sql);
                                while($registro = mysql_fetch_row($sql))
                                {



                             $li =  $registro[2];
                            $sql1111 = mysql_query("SELECT * FROM tb_limno WHERE id_tb_limno = $li");
                            while($registro1111 = mysql_fetch_row($sql1111))
                            {
                            $i =  $registro1111[0];

                            $cc =  $registro1111[1];


                             $ec =  $registro1111[4];
                             $sql1112 = mysql_query("SELECT * FROM tb_local WHERE id_tab_local = $ec");
                            while($registro1112 = mysql_fetch_row($sql1112))
                            {$ecc =  $registro1112[3];
                             $locc1 =  $registro1112[2];
                            }
                             $pp =  $registro1111[27];
                             $ana11 =  $registro1111[34];
                             $codc =  $registro1111[2];
                             }



                                    $id_lim[$nn] =  $registro[0];
                                    $num =  $registro[5];
                                    $esp =  $registro[6];
                                    $lista = new ManipulateData1();
                                  $NomeEsp = $lista->NomeEspecie($esp);
                                $NomeOrd = $lista->NomeOrd($esp);
                                $NomeFam = $lista->NomeFam($esp);
                                    $hora11 =  $registro[4];
                                    $data =  $registro[3];
                                    $qtde =  $registro[1];
                                    $teci =  $registro[7];
                                    $voucher =  $registro[10];
                                    $det =  $registro[12];
                                    $ana =  $registro[14];
                                    $obbs =  $registro[11];
                                    ?>
                                    <tr>

                                     <td align="left" ><?php echo "$cc"; ?></td>
                <td align="left" ><?php echo "$locc1"; ?></td>

                                <td align="left" ><?php echo "$ecc"; ?></td>
                                  <td align="left" ><?php echo "$pp"; ?></td>
                                  <td align="center"><?php echo "$ana11"; ?></td>
                                      <td title="Lago Cunião" align="center"><?php echo "$codc"; ?></td>

 <td align="left" ><?php echo "$data"; ?></td>
<td align="left" ><?php echo "$hora11"; ?></td>



                                     <td align="left" ><?php echo "$NomeOrd"; ?></td>
                                <td align="left" ><?php echo "$NomeFam"; ?></td>
                                <td align="left" ><?php echo "$NomeEsp"; ?></td>
                                      <td title="Lago Cunião" align="center"><?php echo "$num"; ?></td>

                                      <td title="Aparelho" align=""><?php echo "$qtde"; ?></td>

  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>

  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>


                                      <td title="Excursão" align="" ><?php echo "$teci"; ?></td>
                                      <td title="Excursão" align="" ><?php echo "$voucher"; ?></td>

  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>

                                      <td title="Excursão" align="" ><?php echo "$det"; ?></td>
                                    <!--  <td title="Excursão" align="" ><?php echo "$ana"; ?></td>-->
                                      <td align="" ><?php echo "$obbs"; ?></td>
                                      <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$id_lim[$nn]";?>&aparelho=<?php echo "$aparelho"; ?>')" ><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                                    </tr>
                                    <?php
                                    $nn++;
                                }
                            }







                                 /* Início dos resultados para Redinha   */
                    if ($aparelho == "Espinhel")
                    {
                            $lista1 = new ManipulateData1();
                            $NomeCodLimOutr = $lista1->NomeCodLimOutr($cod);



                               if ($esp == "Todas")
                      {$espe = " ";}
                      else
                      {$espe = " AND espi_esp = '$cod_esp'";}
                            ?>
                            <tr class="titulo">
                               <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão: <?php echo"$exc ";?> ---- Código:<?php echo"$NomeCodLimOutr";?></td>
                            </tr>

                            <tr class="titulo">

                              <td align="left" >Exc</td>
                        <td align="left" >Local</td>
        <td align="left" >Ponto</td>
        <td align="left" >Padronizado</td>
        <td align="left" >Análise</td>

                        <td align="left" >Código</td>

       <td title="Aparelho" align="" >Data</td>
       <td title="Data" align="" >Hora</td>


                        <td align="left" >Ordem</td>
                        <td align="left" >Família</td>
                        <td align="left" >Espécie</td>


                        <td title="Numero" align="" ><a href="index.php?secoes=consultas/registros&flag=1&flag1=1&flag2=2&aparelho=<?php echo"$aparelho"; ?>&exc=<?php echo"$exc"; ?>&cod=<?php echo"$cod"; ?>&ord=malh_numero">Número</a></td>

        <td title="Excursão" align="" >Qtde</td>
                        <td title="Excursão" align="" >Cp</td>
                        <td title="Registros" align="" >Pt</td>
                        <td title="Data" align="" >Sexo</td>
                        <td title="Aparelho" align="" >Ematur</td>
                        <td title="Excursão" align="" >pg</td>
                        <td title="Registros" align="" >gg</td>
                        <td title="Data" align="" >gr</td>
                        <td title="Aparelho" align="" >Crescim</td>
                        <td title="Aparelho" align="" >Histo</td>
                        <td title="Excursão" align="" >Fecund</td>
                        <td title="Excursão" align="" >Teci</td>
                        <td title="Excursão" align="" >Voucher</td>

        <td title="Excursão" align="" >Foto</td>
        <td title="Excursão" align="" >Larva</td>

                        <td title="Excursão" align="" >Det</td>
                        <td title="Excursão" align="" >Obs</td>
                        <td title="Excursão" align="" >Edit</td>











                            </tr>

                            <?php
                            $nn = 1;
                        $codd = " AND espi_lim = '$cod'";

                         if ($exc == "Todas")
                      {$excu = " ";}
                           else if ($exc == "Geral")
                      {$excu = " AND lim_excursao = '0'";}
                      else
                      {$excu = " AND lim_outr_excursao = '$exc'";}

                         if ($cod == "Todos")
                        {
                         $sql11 = mysql_query("SELECT * FROM tb_limno_outr WHERE lim_outr_aparelho = 'Espinhel' $excu");
                         $num11 = mysql_num_rows($sql11);
                         while($registro11 = mysql_fetch_row($sql11))
                            {
                            $cod1 =  $registro11[0];
                            $exc1 =  $registro11[1];
                            $loc5 =  $registro11[3];
                            $data =  $registro11[4];
                          //    echo "$loc5-$cod1<br>";

                             $sql1113 = mysql_query("SELECT * FROM tb_local WHERE id_tab_local = $loc5");
                            while($registro1113 = mysql_fetch_row($sql1113))
                            {$ecc =  $registro1113[3];
                             $locc2 =  $registro1113[2];
                            }
                             $pad5 =  $registro11[16];
                              $ana5 =  $registro11[17];
                                $cod5 =  $registro11[5];


                            $codd .= " OR espi_lim = $cod1";
                            } //  echo "$codd-$exc--$espe";
                        }
                      //   echo "$codd";
                            // Listagem das espécies capturadas de Redinha
                            $sql = mysql_query("SELECT * FROM tb_espinhel_biotico WHERE id_tb_espi > '0' $espe AND (espi_lim > 0 $codd) ORDER BY id_tb_espi ASC");
                            $num = mysql_num_rows($sql);
                                while($registro = mysql_fetch_row($sql))
                                {
                                  $id =  $registro[0];
                                    $id_lim =  $registro[3];

                                     $sql0 = mysql_query("SELECT * FROM tb_limno_outr WHERE id_tb_limno_outr = '$id_lim'");

                         while($registro0 = mysql_fetch_row($sql0))
                            {
                            $cod0 =  $registro0[0];
                            $exc0 =  $registro0[1];
                            $loc0 =  $registro0[3];
                             $sql11133 = mysql_query("SELECT * FROM tb_local WHERE id_tab_local = $loc0");
                            while($registro11133 = mysql_fetch_row($sql11133))
                            {$ecc3 =  $registro11133[3];
                             $locc23 =  $registro11133[2];
                            }

                            $dat0 =  $registro0[4];
                             $pad0 =  $registro0[16];
                              $ana0 =  $registro0[17];
                              $cod0 =  $registro0[5];
                            }


                                    $num =  $registro[2];
                                    $esp =  $registro[4];
                                    $lista = new ManipulateData1();
                                  $NomeEsp = $lista->NomeEspecie($esp);
                                $NomeOrd = $lista->NomeOrd($esp);
                                $NomeFam = $lista->NomeFam($esp);
                                   /* $hora =  $registro[4];
                                    */
                                    $qtde =  $registro[1];
                                    /* $hora11 =  $registro[4];
                                    $data =  $registro[3];*/
                                    $teci =  $registro[16];
                                    $voucher =  $registro[20];
                                    $det =  $registro[21];
                                    $oobs =  $registro[22];
                                    ?>
                                    <tr>
                                     <td align="left" ><?php echo "$exc0"; ?></td>
                                  <td align="left" ><?php echo "$locc23"; ?></td>
                                   <td align="left" ><?php echo "$ecc3"; ?></td>

                                   <td align="left" ><?php echo "$pad0"; ?></td>
                                   <td align="left" ><?php echo "$ana0"; ?></td>
                                  <td align="left" ><?php echo "$cod0"; ?></td>

 <td align="left" ><?php echo "$dat0"; ?></td>
 <td align="left" >&nbsp;</td>


                                     <td align="left" ><?php echo "$NomeOrd"; ?></td>
                                <td align="left" ><?php echo "$NomeFam"; ?></td>
                                <td align="left" ><?php echo "$NomeEsp"; ?></td>
                                      <td title="Lago Cunião" align="center"><?php echo "$num"; ?></td>

                                      <td title="Aparelho" align=""><?php echo "$qtde"; ?></td>

  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>

  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>


                                      <td title="Excursão" align="" ><?php echo "$teci"; ?></td>
                                      <td title="Excursão" align="" ><?php echo "$voucher"; ?></td>

  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>

                                      <td title="Excursão" align="" ><?php echo "$det"; ?></td> <td title="Excursão" align="" ><?php echo "$oobs"; ?></td>
                                      <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$id";?>&aparelho=<?php echo "$aparelho"; ?>')" ><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                                    </tr>
                                    <?php
                                    $nn++;
                                }
                            }














                        /* Início dos resultados para Arrasto de fundo  */
                        if ($aparelho == "Arrasto de fundo")
                        {
                         if ($exc == "Todas")
                      {$excu = " ";}
                        else if ($exc == "Geral")
                      {$excu = " AND lim_arr_excursao = '0'";}
                      else
                      {$excu = " AND lim_arr_excursao = '$exc'";}
                        $nn = 1;
                        $codd = " AND arr_lim = '$cod'";
                         if ($cod == "Todos")
                        {
                         $sql11 = mysql_query("SELECT * FROM tb_limno_arr WHERE id_tb_limno_arr > 0 $excu");
                         $num11 = mysql_num_rows($sql11);
                         while($registro11 = mysql_fetch_row($sql11))
                            {
                            $cod1 =  $registro11[0];
                             $exxc =  $registro11[2];
                             $ponto =  $registro11[58];
                            $codd .= " OR arr_lim = $cod1";
                            }
                        }
                       /* else
                       {
                         $sql11 = mysql_query("SELECT * FROM tb_limno_arr WHERE lim_arr_excursao = $exc");
                         $num11 = mysql_num_rows($sql11);
                         while($registro11 = mysql_fetch_row($sql11))
                            {

                             $exxc =  $registro11[2];
                             $ponto =  $registro11[58];
                             }
                       }*/
                       //  echo "$codd";

                        $lista1 = new ManipulateData1();
                        $NomeCodLimArr = $lista1->NomeCodLimArr($cod);
                        if ($aparelho == "Todos")
                        {$apare = " ";}
                        else if ($aparelho == "Malha + Rede")
                        {$apare = " AND bio_val = 'mr'";}
                        else{$apare = " AND bio_aparelho = '$aparelho'";}
                        if ($exc == "Todas")
                        {$excu = " ";}
                        else if ($exc == "Cheia")
                        {$excu = " AND bio_est = 'Cheia'";}
                        else if ($exc == "Seca")
                        {$excu = " AND bio_est = 'Seca'";}
                          else if ($exc == "Geral")
                      {$excu = " AND lim_arr_excursao = '0'";}
                        else {$excu = " AND lim_arr_excursao = '$exc'";}

                           if ($esp == "Todas")
                      {$espe = " ";}
                      else
                      {$espe = " AND arr_especie = '$cod_esp'";}
                        ?>
                        <tr class="titulo">
                          <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão: <?php echo"$exc ";?> ---- Código:  <?php echo"$NomeCodLimArr--$cod";?></td>
                        </tr>

                        <tr class="titulo">

                       <td align="left" >Exc</td>
                        <td align="left" >Local</td>
        <td align="left" >Ponto</td>
        <td align="left" >Padronizado</td>
        <td align="left" >Análise</td>

                        <td align="left" >Código</td>

       <td title="Aparelho" align="" >Data</td>
       <td title="Data" align="" >Hora</td>


                        <td align="left" >Ordem</td>
                        <td align="left" >Família</td>
                        <td align="left" >Espécie</td>


                        <td title="Numero" align="" ><a href="index.php?secoes=consultas/registros&flag=1&flag1=1&flag2=2&aparelho=<?php echo"$aparelho"; ?>&exc=<?php echo"$exc"; ?>&cod=<?php echo"$cod"; ?>&ord=malh_numero">Número</a></td>

        <td title="Excursão" align="" >Qtde</td>
                        <td title="Excursão" align="" >Cp</td>
                        <td title="Registros" align="" >Pt</td>
                        <td title="Data" align="" >Sexo</td>
                        <td title="Aparelho" align="" >Ematur</td>
                        <td title="Excursão" align="" >pg</td>
                        <td title="Registros" align="" >gg</td>
                        <td title="Data" align="" >gr</td>
                        <td title="Aparelho" align="" >Crescim</td>
                        <td title="Aparelho" align="" >Histo</td>
                        <td title="Excursão" align="" >Fecund</td>
                        <td title="Excursão" align="" >Teci</td>
                        <td title="Excursão" align="" >Voucher</td>

        <td title="Excursão" align="" >Foto</td>
        <td title="Excursão" align="" >Larva</td>

                        <td title="Excursão" align="" >Det</td>
                        <td title="Excursão" align="" >Obs</td>
                        <td title="Excursão" align="" >Edit</td>













                        </tr>
                        <?php
                        $nn = 1;
                        // Listagem das espécies capturadas de Redinha
                        $sql = mysql_query("SELECT * FROM tb_arrastofundo_biotico WHERE id_tb_arrastofundo > '0' $espe AND (arr_lim > 0 $codd) ORDER BY arr_data, arr_hora ASC");
                        $num = mysql_num_rows($sql);
                            while($registro = mysql_fetch_row($sql))
                            {
                             $li =  $registro[2];
                            $sql111 = mysql_query("SELECT * FROM tb_limno_arr WHERE id_tb_limno_arr = $li");
                         $num111 = mysql_num_rows($sql111);
                         while($registro111 = mysql_fetch_row($sql111))
                            {
                              $cc =  $registro111[1];
                             $ec =  $registro111[2];
                             $pp =  $registro111[38];
                             $nn =  $registro111[50];
                             $ponto =  $registro111[58];
                             }



                                $id_lim[$nn] =  $registro[0];
                                $num =  $registro[5];
                                $esp =  $registro[6];
                                $lista = new ManipulateData1();
                                $NomeEsp = $lista->NomeEspecie($esp);
                                $NomeOrd = $lista->NomeOrd($esp);
                                $NomeFam = $lista->NomeFam($esp);
                                $hora =  $registro[4];
                                $data =  $registro[3];
                                $qtde =  $registro[1];
                                $teci =  $registro[7];
                                $voucher =  $registro[10];
                                $det =  $registro[12];
                                $larva =  $registro[15]; $oobbss =  $registro[11];
                                if($larva == "N"){$larva = "Não Larva";}else{$larva = "Larva";}
                                ?>
                                <tr>  <?php
                          if ($cod == "Todos")
                          {

                         ?>
                                 <td align="left" ><?php echo "$ec"; ?></td>
                                  <?php
                         }
                         else {
                         ?>
                             <td align="left" ><?php echo "$ec"; ?></td>
                           <?php
                         }
                                                 ?>

                                      <td align="left" >&nbsp;</td>
                                  <td align="left" ><?php echo "$ponto"; ?></td>
                                   <td align="left" ><?php echo "$pp"; ?></td>
                                    <td align="left" ><?php echo "$nn"; ?></td>
                                     <td align="left" ><?php echo "$cc"; ?></td>

  <td title="Lago Cunião" align="" ><?php echo "$data"; ?></td>
  <td title="Lago Cunião" align="center"><?php echo "$hora"; ?></td>


                                   <td align="left" ><?php echo "$NomeOrd"; ?></td>
                                <td align="left" ><?php echo "$NomeFam"; ?></td>
                                <td align="left" ><?php echo "$NomeEsp"; ?></td>
                                    <td title="Lago Cunião" align="center"><?php echo "$num"; ?></td>

                                    <td title="Aparelho" align=""><?php echo "$qtde"; ?></td>

  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>

  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>

                                    <td title="Excursão" align="" ><?php echo "$teci"; ?></td>
                                    <td title="Excursão" align="" ><?php echo "$voucher"; ?></td>

  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" ><?php echo "$larva"; ?></td>

                                    <td title="Excursão" align="" ><?php echo "$det"; ?></td>
                                     <td title="Excursão" align="" ><?php echo "$oobbss"; ?></td>
                                    <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$id_lim[$nn]";?>&aparelho=<?php echo "$aparelho"; ?>')" ><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                                </tr>
                                <?php
                                $nn++;
                             }
                           }






                if ($aparelho == "Puça")
                {
                      if ($exc == "Todas")
                      {$excu = " ";}
                        else if ($exc == "Geral")
                      {$excu = " AND lim_outr_excursao = '0'";}
                      else
                      {$excu = " AND lim_outr_excursao = '$exc'";}
                        $nn = 1;
                        $codd = " AND outr_lim = '$cod'";
                         if ($cod == "Todos")
                        {
                         $sql11 = mysql_query("SELECT * FROM tb_limno_outr WHERE lim_outr_aparelho = 'Puça' $excu");
                         $num11 = mysql_num_rows($sql11);
                         while($registro11 = mysql_fetch_row($sql11))
                            {
                            $cod1 =  $registro11[0];
                            $codd .= " OR outr_lim = $cod1";
                            }
                       }

                $lista1 = new ManipulateData1();
                $NomeCodLimOutr = $lista1->NomeCodLimOutr($cod);
                $NomeAparOutr = $lista1->NomeAparOutr($cod);
                if ($aparelho == "Todos")
                {$apare = " ";}
                else if ($aparelho == "Malha + Rede")
                {$apare = " AND bio_val = 'mr'";}
                else{$apare = " AND bio_aparelho = '$aparelho'";}
                       if ($exc == "Todas")
                      {$excu = " ";}
                      else
                      {$excu = " AND lim_excursao = '$exc'";}
                     if ($esp == "Todas")
                      {$espe = " ";}
                      else
                      {$espe = " AND outr_especie = '$cod_esp'";}
                ?>
                <tr class="titulo">
                    <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão: <?php echo"$exc ";?> ---- Código:  <?php echo"$NomeCodLimOutr";?></td>
                </tr>

                <tr class="titulo">

               <td align="left" >Exc</td>
                        <td align="left" >Local</td>
        <td align="left" >Ponto</td>
        <td align="left" >Padronizado</td>
        <td align="left" >Análise</td>

                        <td align="left" >Código</td>

       <td title="Aparelho" align="" >Data</td>
       <td title="Data" align="" >Hora</td>


                        <td align="left" >Ordem</td>
                        <td align="left" >Família</td>
                        <td align="left" >Espécie</td>


                        <td title="Numero" align="" ><a href="index.php?secoes=consultas/registros&flag=1&flag1=1&flag2=2&aparelho=<?php echo"$aparelho"; ?>&exc=<?php echo"$exc"; ?>&cod=<?php echo"$cod"; ?>&ord=malh_numero">Número</a></td>

        <td title="Excursão" align="" >Qtde</td>
                        <td title="Excursão" align="" >Cp</td>
                        <td title="Registros" align="" >Pt</td>
                        <td title="Data" align="" >Sexo</td>
                        <td title="Aparelho" align="" >Ematur</td>
                        <td title="Excursão" align="" >pg</td>
                        <td title="Registros" align="" >gg</td>
                        <td title="Data" align="" >gr</td>
                        <td title="Aparelho" align="" >Crescim</td>
                        <td title="Aparelho" align="" >Histo</td>
                        <td title="Excursão" align="" >Fecund</td>
                        <td title="Excursão" align="" >Teci</td>
                        <td title="Excursão" align="" >Voucher</td>

        <td title="Excursão" align="" >Foto</td>
        <td title="Excursão" align="" >Larva</td>

                        <td title="Excursão" align="" >Det</td>
                        <td title="Excursão" align="" >Obs</td>
                        <td title="Excursão" align="" >Edit</td>



















                </tr>

                <?php
                $nn = 1;




                // Listagem das espécies capturadas de Redinha
                $sql = mysql_query("SELECT * FROM tb_outros_biotico WHERE id_tb_outros > '0' $espe AND (outr_lim > 0 $codd) ORDER BY outr_data, outr_hora ASC");
                $num = mysql_num_rows($sql);
                while($registro = mysql_fetch_row($sql))
                {
                		$id_lim[$nn]  =  $registro[0];
                $id_lim1 =  $registro[2];

                  $login = new ManipulateData();
                                    $login->setTable("tb_limno_outr");
                                    $login->setFieldId("id_tb_limno_outr ='$id_lim1'");
                                    $login->setFieldNr("1"); $excur = $login->data_filter();
                                    $login->setFieldNr("5"); $NomeCod = $login->data_filter();
                                    $login->setFieldNr("3"); $locc = $login->data_filter();
                                      $login->setFieldNr("16"); $padd = $login->data_filter();
                                    $login->setTable("tb_local");
                                    $login->setFieldId("id_tab_local ='$locc'");
                                    $login->setFieldNr("2"); $cod_loc = $login->data_filter();
                                    $login->setFieldNr("3"); $locc3 = $login->data_filter();
                $hora =  $registro[4];
                $num =  $registro[5];
                $esp =  $registro[6];
                $lista = new ManipulateData1();
                $NomeEsp = $lista->NomeEspecie($esp);
                $NomeOrd = $lista->NomeOrd($esp);
                $NomeFam = $lista->NomeFam($esp);
                $hora =  $registro[4];
                $data =  $registro[3];
                $qtde =  $registro[1];
                $teci =  $registro[7];
                $voucher =  $registro[10];
                $det =  $registro[12];
                 $anaa =  $registro[14];
                 $ooobs =  $registro[11];
                ?>
                <tr>
                <td align="left" ><?php echo "$excur"; ?></td>
                 <td align="left" ><?php echo "$cod_loc"; ?></td>
                 <td align="left" ><?php echo "$locc3"; ?></td>

    <td align="left" ><?php echo "$padd"; ?></td>
                 <td align="left" ><?php echo "$anaa"; ?></td>


                <td align="left" ><?php echo "$NomeCod"; ?></td>
    <td title="Lago Cunião" align="" ><?php echo "$data"; ?></td>
     <td title="Lago Cunião" align="" ><?php echo "$hora"; ?></td>



                  <td align="left" ><?php echo "$NomeOrd"; ?></td>
                                <td align="left" ><?php echo "$NomeFam"; ?></td>
                                <td align="left" ><?php echo "$NomeEsp"; ?></td>
                    <td title="Lago Cunião" align="" ><?php echo "$num"; ?></td>

                    <td title="Aparelho" align=""><?php echo "$qtde"; ?></td>

  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>


                    <td title="Excursão" align="" ><?php echo "$teci"; ?></td>
                    <td title="Excursão" align="" ><?php echo "$voucher"; ?></td>

  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>

                    <td title="Excursão" align="" ><?php echo "$det"; ?></td>
                   <!-- <td title="Excursão" align="" ><?php echo "$anaa"; ?></td>--> <td title="Excursão" align="" ><?php echo "$ooobs"; ?></td>
                    <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$id_lim[$nn]";?>&aparelho=<?php echo "$aparelho"; ?>')" ><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                </tr>
                <?php
                $nn++;
                }
                }





                            if ($aparelho == "Tarrafa")
                {
                      if ($exc == "Todas")
                      {$excu = " ";}
                        else if ($exc == "Geral")
                      {$excu = " AND lim_outr_excursao = '0'";}
                      else
                      {$excu = " AND lim_outr_excursao = '$exc'";}
                        $nn = 1;
                        $codd = " AND outr_lim = '$cod'";
                         if ($cod == "Todos")
                        {
                         $sql11 = mysql_query("SELECT * FROM tb_limno_outr WHERE lim_outr_aparelho = 'Tarrafa' $excu");
                         $num11 = mysql_num_rows($sql11);
                         while($registro11 = mysql_fetch_row($sql11))
                            {
                            $cod1 =  $registro11[0];
                            $codd .= " OR outr_lim = $cod1";
                            }
                       }

                $lista1 = new ManipulateData1();
                $NomeCodLimOutr = $lista1->NomeCodLimOutr($cod);
                $NomeAparOutr = $lista1->NomeAparOutr($cod);
                if ($aparelho == "Todos")
                {$apare = " ";}
                else if ($aparelho == "Malha + Rede")
                {$apare = " AND bio_val = 'mr'";}
                else{$apare = " AND bio_aparelho = '$aparelho'";}
                       if ($exc == "Todas")
                      {$excu = " ";}
                      else
                      {$excu = " AND lim_excursao = '$exc'";}
                     if ($esp == "Todas")
                      {$espe = " ";}
                      else
                      {$espe = " AND outr_especie = '$cod_esp'";}
                ?>
                <tr class="titulo">
                    <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão: <?php echo"$exc ";?> ---- Código:  <?php echo"$NomeCodLimOutr";?></td>
                </tr>

                <tr class="titulo">




                 <td align="left" >Exc</td>
                        <td align="left" >Local</td>
        <td align="left" >Ponto</td>
        <td align="left" >Padronizado</td>
        <td align="left" >Análise</td>

                        <td align="left" >Código</td>

       <td title="Aparelho" align="" >Data</td>
       <td title="Data" align="" >Hora</td>


                        <td align="left" >Ordem</td>
                        <td align="left" >Família</td>
                        <td align="left" >Espécie</td>


                        <td title="Numero" align="" ><a href="index.php?secoes=consultas/registros&flag=1&flag1=1&flag2=2&aparelho=<?php echo"$aparelho"; ?>&exc=<?php echo"$exc"; ?>&cod=<?php echo"$cod"; ?>&ord=malh_numero">Número</a></td>

        <td title="Excursão" align="" >Qtde</td>
                        <td title="Excursão" align="" >Cp</td>
                        <td title="Registros" align="" >Pt</td>
                        <td title="Data" align="" >Sexo</td>
                        <td title="Aparelho" align="" >Ematur</td>
                        <td title="Excursão" align="" >pg</td>
                        <td title="Registros" align="" >gg</td>
                        <td title="Data" align="" >gr</td>
                        <td title="Aparelho" align="" >Crescim</td>
                        <td title="Aparelho" align="" >Histo</td>
                        <td title="Excursão" align="" >Fecund</td>
                        <td title="Excursão" align="" >Teci</td>
                        <td title="Excursão" align="" >Voucher</td>

        <td title="Excursão" align="" >Foto</td>
        <td title="Excursão" align="" >Larva</td>

                        <td title="Excursão" align="" >Det</td>
                        <td title="Excursão" align="" >Obs</td>
                        <td title="Excursão" align="" >Edit</td>












                </tr>

                <?php
                $nn = 1;




                // Listagem das espécies capturadas de Redinha
                $sql = mysql_query("SELECT * FROM tb_outros_biotico WHERE id_tb_outros > '0' $espe AND (outr_lim > 0 $codd) ORDER BY outr_data, outr_hora ASC");
                $num = mysql_num_rows($sql);
                while($registro = mysql_fetch_row($sql))
                {
                		$id_lim[$nn]  =  $registro[0];
                $id_lim1 =  $registro[2];

                  $login = new ManipulateData();
                                    $login->setTable("tb_limno_outr");
                                    $login->setFieldId("id_tb_limno_outr ='$id_lim1'");
                                    $login->setFieldNr("1"); $excur = $login->data_filter();
                                    $login->setFieldNr("5"); $NomeCod = $login->data_filter();
                                    $login->setFieldNr("3"); $locc = $login->data_filter();
                                     $login->setFieldNr("16"); $padd4 = $login->data_filter();
                                    $login->setTable("tb_local");
                                    $login->setFieldId("id_tab_local ='$locc'");
                                    $login->setFieldNr("2"); $cod_loc = $login->data_filter();
                                       $login->setFieldNr("3"); $locc4 = $login->data_filter();

                $hora =  $registro[4];
                $num =  $registro[5];
                $esp =  $registro[6];
                $lista = new ManipulateData1();
                $NomeEsp = $lista->NomeEspecie($esp);
                $NomeOrd = $lista->NomeOrd($esp);
                $NomeFam = $lista->NomeFam($esp);
                $hora =  $registro[4];
                $data =  $registro[3];
                $qtde =  $registro[1];
                $teci =  $registro[7];
                $voucher =  $registro[10];
                $det =  $registro[12];
                 $anaa =  $registro[14];$ooobs =  $registro[11];
                ?>
                <tr>
                <td align="left" ><?php echo "$excur"; ?></td>
                 <td align="left" ><?php echo "$cod_loc"; ?></td>
                   <td align="left" ><?php echo "$locc4"; ?></td>


  <td align="left" ><?php echo "$padd4"; ?></td>
  <td title="Excursão" align="" ><?php echo "$anaa"; ?> </td>

                <td align="left" ><?php echo "$NomeCod"; ?></td>

<td title="Lago Cunião" align="" ><?php echo "$data"; ?></td>
<td title="Lago Cunião" align="" ><?php echo "$hora"; ?></td>


                  <td align="left" ><?php echo "$NomeOrd"; ?></td>
                                <td align="left" ><?php echo "$NomeFam"; ?></td>
                                <td align="left" ><?php echo "$NomeEsp"; ?></td>
                    <td title="Lago Cunião" align="" ><?php echo "$num"; ?></td>

                    <td title="Aparelho" align=""><?php echo "$qtde"; ?></td>

  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>

                    <td title="Excursão" align="" ><?php echo "$teci"; ?></td>
                    <td title="Excursão" align="" ><?php echo "$voucher"; ?></td>

  <td title="Excursão" align="" >&nbsp;</td>
  <td title="Excursão" align="" >&nbsp;</td>

                    <td title="Excursão" align="" ><?php echo "$det"; ?></td>
                   <td title="Excursão" align="" ><?php echo "$ooobs"; ?></td>
                    <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$id_lim[$nn]";?>&aparelho=<?php echo "$aparelho"; ?>')" ><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                </tr>
                <?php
                $nn++;
                }
                }





                if ($aparelho == "Espinhel-ant")
                {
                      if ($exc == "Todas")
                      {$excu = " ";}
                       else if ($exc == "Geral")
                      {$excu = " AND lim_outr_excursao = '0'";}
                      else
                      {$excu = " AND lim_outr_excursao = '$exc'";}
                        $nn = 1;
                        $codd = " AND outr_lim = '$cod'";
                         if ($cod == "Todos")
                        {
                         $sql11 = mysql_query("SELECT * FROM tb_limno_outr WHERE lim_outr_aparelho = 'Espinhel' $excu");
                         $num11 = mysql_num_rows($sql11);
                         while($registro11 = mysql_fetch_row($sql11))
                            {
                            $cod1 =  $registro11[0];
                            $codd .= " OR outr_lim = $cod1";
                            }
                       }

                $lista1 = new ManipulateData1();
                $NomeCodLimOutr = $lista1->NomeCodLimOutr($cod);
                $NomeAparOutr = $lista1->NomeAparOutr($cod);
                if ($aparelho == "Todos")
                {$apare = " ";}
                else if ($aparelho == "Malha + Rede")
                {$apare = " AND bio_val = 'mr'";}
                else{$apare = " AND bio_aparelho = '$aparelho'";}
                       if ($exc == "Todas")
                      {$excu = " ";}
                      else
                      {$excu = " AND lim_excursao = '$exc'";}
                     if ($esp == "Todas")
                      {$espe = " ";}
                      else
                      {$espe = " AND outr_especie = '$cod_esp'";}
                ?>
                <tr class="titulo">
                    <td colspan="19">Aparelho: <?php echo"$aparelho ";?>---- Excursão: <?php echo"$exc ";?> ---- Código:  <?php echo"$NomeCodLimOutr";?></td>
                </tr>

                <tr class="titulo">
                  <td align="left" >Exc</td>
                   <td align="left" >Cod Ponto</td>
                    <td align="left" >Ponto</td>
                   <td align="left" >Ordem</td>
                        <td align="left" >Família</td>
                        <td align="left" >Espécie</td>
                    <td title="Aparelho" align="" ><a href="index.php?secoes=consultas/registros&flag=1&flag1=1&flag2=2&aparelho=<?php echo"$aparelho"; ?>&exc=<?php echo"$exc"; ?>&cod=<?php echo"$cod"; ?>&ord=outr_numero">Número</a></td>
                     <td title="Aparelho" align="" >Hora</td>
                    <td title="Aparelho" align="" >Data</td>
                    <td title="Excursão" align="" >Qtde</td>
                    <td title="Excursão" align="" >Teci</td>
                    <td title="Excursão" align="" >Voucher</td>
                    <td title="Excursão" align="" >Det</td>
                    <td title="Excursão" align="" >Análise</td> <td title="Excursão" align="" >Obs</td>
                    <td title="Excursão" align="" >Edit</td>
                </tr>

                <?php
                $nn = 1;




                // Listagem das espécies capturadas de Redinha
                $sql = mysql_query("SELECT * FROM tb_outros_biotico WHERE id_tb_outros > '0' $espe AND (outr_lim > 0 $codd) ORDER BY outr_data, outr_hora ASC");
                $num = mysql_num_rows($sql);
                while($registro = mysql_fetch_row($sql))
                {
                		$id_lim[$nn]  =  $registro[0];
                $id_lim1 =  $registro[2];

                  $login = new ManipulateData();
                                    $login->setTable("tb_limno_outr");
                                    $login->setFieldId("id_tb_limno_outr ='$id_lim1'");
                                    $login->setFieldNr("1"); $excur = $login->data_filter();
                                    $login->setFieldNr("5"); $NomeCod = $login->data_filter();
                                    $login->setFieldNr("3"); $locc = $login->data_filter();
                                    $login->setTable("tb_local");
                                    $login->setFieldId("id_tab_local ='$locc'");
                                    $login->setFieldNr("2"); $cod_loc = $login->data_filter();

                $hora =  $registro[4];
                $num =  $registro[5];
                $esp =  $registro[6];
                $lista = new ManipulateData1();
                $NomeEsp = $lista->NomeEspecie($esp);
                $NomeOrd = $lista->NomeOrd($esp);
                $NomeFam = $lista->NomeFam($esp);
                $hora =  $registro[4];
                $data =  $registro[3];
                $qtde =  $registro[1];
                $teci =  $registro[7];
                $voucher =  $registro[10];
                $det =  $registro[12];
                 $anaa =  $registro[14];$ooobs =  $registro[11];
                ?>
                <tr>
                <td align="left" ><?php echo "$excur"; ?></td>
                 <td align="left" ><?php echo "$cod_loc"; ?></td>
                <td align="left" ><?php echo "$NomeCod"; ?></td>
                  <td align="left" ><?php echo "$NomeOrd"; ?></td>
                                <td align="left" ><?php echo "$NomeFam"; ?></td>
                                <td align="left" ><?php echo "$NomeEsp"; ?></td>
                    <td title="Lago Cunião" align="" ><?php echo "$num"; ?></td>
                    <td title="Lago Cunião" align="" ><?php echo "$hora"; ?></td>
                    <td title="Lago Cunião" align="" ><?php echo "$data"; ?></td>
                    <td title="Aparelho" align=""><?php echo "$qtde"; ?></td>
                    <td title="Excursão" align="" ><?php echo "$teci"; ?></td>
                    <td title="Excursão" align="" ><?php echo "$voucher"; ?></td>
                    <td title="Excursão" align="" ><?php echo "$det"; ?></td>
                    <td title="Excursão" align="" ><?php echo "$anaa"; ?></td> <td title="Excursão" align="" ><?php echo "$ooobs"; ?></td>
                    <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$id_lim[$nn]";?>&aparelho=<?php echo "$aparelho"; ?>')" ><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                </tr>
                <?php
                $nn++;
                }
                }












               /* if ($aparelho == "Outros")
                {


                $lista1 = new ManipulateData1();
                $NomeCodLimOutr = $lista1->NomeCodLimOutr($cod);
                $NomeAparOutr = $lista1->NomeAparOutr($cod);

                if ($aparelho == "Todos")
                {$apare = " ";}
                else if ($aparelho == "Malha + Rede")
                {$apare = " AND bio_val = 'mr'";}
                else{$apare = " AND bio_aparelho = '$aparelho'";}
                if ($exc == "Todas")
                {$excu = " ";}
                else if ($exc == "Cheia")
                {$excu = " AND bio_est = 'Cheia'";}
                else if ($exc == "Seca")
                {$excu = " AND bio_est = 'Seca'";}
                else {$excu = " AND lim_excursao = '$exc'";}
                ?>
                <tr class="titulo">
                    <td colspan="9">Aparelho: <?php echo"$aparelho ";?>---- Excursão: <?php echo"$exc ";?> ---- Código:  <?php echo"$NomeCodLimOutr";?></td>
                </tr>

                <tr class="titulo">
                    <td align="left" >Espécie</td>
                    <td title="Aparelho" align="" >Número</td>
                    <td title="Aparelho" align="" >Data</td>
                    <td title="Excursão" align="" >Aparelho</td>
                    <td title="Excursão" align="" >Qtde</td>
                    <td title="Excursão" align="" >Teci</td>
                    <td title="Excursão" align="" >Voucher</td>
                    <td title="Excursão" align="" >Det</td>
                    <td title="Excursão" align="" >Edit</td>
                </tr>

                <?php
                $nn = 1;
                // Listagem das espécies capturadas de Redinha
                $sql = mysql_query("SELECT * FROM tb_outros_biotico WHERE id_tb_outros > '0'  AND outr_lim = '$cod' ORDER BY outr_data, outr_hora ASC");
                $num = mysql_num_rows($sql);
                while($registro = mysql_fetch_row($sql))
                {
                $id_lim[$nn] =  $registro[0];
                $num =  $registro[5];
                $esp =  $registro[6];
                $lista = new ManipulateData1();
                $NomeEsp = $lista->NomeEspecie($esp);
                $hora =  $registro[4];
                $data =  $registro[3];
                $qtde =  $registro[1];
                $teci =  $registro[7];
                $voucher =  $registro[10];
                $det =  $registro[12];

                ?>
                <tr>
                    <td align="left" ><?php echo "$NomeEsp"; ?></td>
                    <td title="Lago Cunião" align="" ><?php echo "$num"; ?></td>
                    <td title="Lago Cunião" align="" ><?php echo "$data"; ?></td>
                    <td title="Aparelho" align=""><?php echo "$qtde"; ?></td>
                    <td title="Excursão" align="" ><?php echo "$teci"; ?></td>
                    <td title="Excursão" align="" ><?php echo "$voucher"; ?></td>
                    <td title="Excursão" align="" ><?php echo "$det"; ?></td>
                    <td title="Excursão" align="" ><a target="_blank" href="../index.php?secoes=editar/editar_malh_inserir&idd=<?php echo"$id_lim[$nn]";?>&aparelho=<?php echo"$aparelho" ;?>" ><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                </tr>
                <?php
                $nn++;
                }
                }*/














                ?>
               <!-- <tr class="linha_tit1">
                    <td align="left"  colspan="13" >TOTAL</td>
                    <td title="Lago Cunião" align=""></td>
                </tr>-->

            </table>

          <br />
          <div id="rodape_branco">
           TOTAL:&nbsp;<?php echo $nn -1; ?>
          </div>


        </div>
    </div>


