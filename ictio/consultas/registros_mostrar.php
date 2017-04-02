
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


                      if ($esp == "Todas"){$espe = " ";}else{$espe = " AND tb_especies.esp_especie = '$esp'";}
                      if ($esp == "Em branco"){$espe = " AND tb_malhadeira_biotico.malh_especie IS NULL";}
                      if ($cod_lim == "Todas" OR $quant > 1){$codd = "";}else{$codd = " AND tb_malhadeira_biotico.malh_lim = $cod_lim";}

                      ?>
                      <tr class="titulo">
                        <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão:
                       <?php
                       $quant3 = 1;
                        while($quant3 <= $quant){
                        echo "$exc[$quant3]&nbsp;&nbsp;";
                        if($quant3 == 1){$excu = "(";}
                        $excu .= " tb_limno.lim_excursao = $exc[$quant3] ";
                        if($exc[$quant3] ==  "" AND $quant == 1){$excu .= " tb_limno.lim_excursao >= 0 ";}
                        if($quant3 < $quant){$excu .= " OR ";}else{$excu .= ")";}
                        $quant3++;
                                                }

                       ?>

                        </td>
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
                                              <td align="left" >Cat Trof</td>

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
                          <td title="Excursão" align="" >Esto</td>
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


                    $sql = mysql_query("SELECT * FROM tb_malhadeira_biotico INNER JOIN  tb_limno
                        ON tb_malhadeira_biotico.malh_lim = tb_limno.id_tb_limno
                        INNER JOIN tb_especies ON  tb_malhadeira_biotico.malh_especie = tb_especies.id_tab_especie
                        INNER JOIN tb_local ON  tb_limno.lim_local = tb_local.id_tab_local
                        WHERE  tb_malhadeira_biotico.id_tb_malhadeira > '0' AND $excu $espe $codd
                        ");

                     //   $num = mysql_num_rows($sql);
                        while($registro = mysql_fetch_row($sql))
                            {

                            $id_lim =  $registro[0];
                            $espec =  $registro[6];
                                $lista = new ManipulateData1();
                                $NomeEsp = $lista->NomeEspecie($espec);
                                $NomeOrd = $lista->NomeOrd($espec);
                                $NomeFam = $lista->NomeFam($espec);
                                 $CatTrof = $lista->CatTrof($espec);
                                $hora =  $registro[2];
                                $data =  $registro[3];
                                $num =  $registro[5];
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
                                $estom = $registro[26];
                                $obss = $registro[21];
                                $exccc = $registro[29];
                                $anali = $registro[62];
                                $cod_loc = $registro[73];
                                $desc_loc = $registro[72];
                                $pad1 = $registro[55];
                                $anali = $registro[62];
                                $NomeCod = $registro[30];


                                  if ($gr == 9){$gr = 0;}
                                    if ($cp == 0){$cp = "";}
                                     if ($pt == 0){$pt = "";}
                                     if ($pg == 0){$pg = "";}

                                if ($histo == "Sim" AND $malh_histo_conf == "Não"){$color = "#FF0000";}
                                else{$color = "#000000";}
                                ?>
                                <tr>
                                    <td align="left" ><?php echo "$exccc"; ?></td>
                                    <td align="left" ><?php echo "$cod_loc"; ?></td>
                                    <td align="left" ><?php echo "$desc_loc"; ?></td>
                                    <td align="left" ><?php echo "$pad1"; ?></td>
                                    <td align="left" ><?php echo "$anali"; ?></td>
                                    <td align="left" ><?php echo "$NomeCod"; ?></td>
                                    <td title="Aparelho" align=""><?php echo "$data"; ?></td>
                                    <td title="Lago Cunião" align="" ><?php echo "$hora"; ?></td>
                                    <td align="left" ><?php echo "$NomeOrd"; ?></td>
                                    <td align="left" ><?php echo "$NomeFam"; ?></td>
                                    <td align="left" ><?php echo "$NomeEsp"; ?></td>
                                    <td align="left" ><?php echo "$CatTrof"; ?></td>
                                    <td title="Número" align=""><?php echo "$num"; ?></td>
                                    <td title="Excursão" align="" >&nbsp;</td>
                                    <td title="Excursão" align="" ><?php echo "$cp"; ?></td>
                                    <td title="Excursão" align="" ><?php echo "$pt"; ?></td>
                                    <td title="Excursão" align="" ><?php echo "$sexo"; ?></td>
                                    <td title="Excursão" align="" ><?php echo "$ematur"; ?></td>
                                    <td title="Excursão" align="" ><?php echo "$pg"; ?></td>
                                    <td title="Excursão" align="" ><?php echo "$gg"; ?></td>
                                    <td title="Excursão" align="" ><?php echo "$gr"; ?></td>
                                    <td title="Excursão" align="" ><?php echo "$cresc"; ?></td>
                                    <td title="Excursão" align=""  ><font color="<?php echo"$color"; ?>"><?php echo "$histo"; ?></font> </td>
                                    <td title="Excursão" align="" ><?php echo "$fecund"; ?></td>
                                    <td title="Excursão" align="" ><?php echo "$estom"; ?></td>
                                    <td title="Excursão" align="" ><?php echo "$teci"; ?></td>
                                    <td title="Excursão" align="" ><?php echo "$voucher"; ?></td>
                                    <td title="Excursão" align="" ><?php echo "$foto1"; ?></td>
                                    <td title="Excursão" align="" >&nbsp;</td>
                                    <td title="Excursão" align="" ><?php echo "$det"; ?></td> <td title="Excursão" align="" ><?php echo "$obss"; ?></td>
                                    <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$id_lim";?>&aparelho=<?php echo "$aparelho"; ?>')" >
                                    <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                                </tr>
                                <?php
                                $nn++;
                            }
                   }


                    /* Início dos resultados para Redinha   */
                    if ($aparelho == "Redinha")
                    {
                            $lista1 = new ManipulateData1();
                            if ($esp == "Todas"){$espe = " ";}else{$espe = " AND tb_especies.esp_especie = '$esp'";}
                      if ($cod_lim == "Todas" OR $cod_lim == ""){$codd = "";}else{$codd = " AND tb_redinha_biotico.red_lim = $cod_lim";}
                   //   echo "$espe--$codd";
                      ?>
                      <tr class="titulo">
                        <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão:
                       <?php
                       $quant3 = 1;
                        while($quant3 <= $quant){
                        echo "$exc[$quant3]&nbsp;&nbsp;";
                        if($quant3 == 1){$excu = "(";}
                        $excu .= " tb_limno.lim_excursao = $exc[$quant3] ";
                        if($exc[$quant3] ==  "" AND $quant == 1){$excu .= " tb_limno.lim_excursao >= 0 ";}
                        if($quant3 < $quant){$excu .= " OR ";}else{$excu .= ")";}
                        $quant3++;
                        }

                            ?>
                           </td></tr>

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


                                              <td align="left" >Cat Trof</td>
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
                                <td title="Excursão" align="" >Esto</td>
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

                      $sql = mysql_query("SELECT * FROM tb_redinha_biotico INNER JOIN  tb_limno
                        ON tb_redinha_biotico.red_lim = tb_limno.id_tb_limno
                        INNER JOIN tb_especies ON  tb_redinha_biotico.red_especie = tb_especies.id_tab_especie
                        INNER JOIN tb_local ON  tb_limno.lim_local = tb_local.id_tab_local
                        WHERE  tb_redinha_biotico.id_tb_redinha > '0' AND $excu $espe $codd
                        ");

                        $num = mysql_num_rows($sql);
                                while($registro = mysql_fetch_row($sql))
                                {
                                        $id_lim =  $registro[0];
                                        $num =  $registro[5];
                                        $esp =  $registro[6];
                                        $lista = new ManipulateData1();
                                        $NomeEsp = $lista->NomeEspecie($esp);
                                        $NomeOrd = $lista->NomeOrd($esp);
                                        $NomeFam = $lista->NomeFam($esp);
                                 $CatTrof = $lista->CatTrof($esp);
                                        $hora11 =  $registro[4];
                                        $data =  $registro[3];
                                        $qtde =  $registro[1];
                                        $teci =  $registro[7];
                                        $voucher =  $registro[10];
                                        $det =  $registro[12];
                                        $ana =  $registro[14];
                                        $obbs =  $registro[11];
                                        $exccc =  $registro[30];
                                        $loccc =  $registro[74];
                                        $ponto =  $registro[73];
                                        $pp =  $registro[56];
                                        $ana11 =  $registro[63];
                                        $codc =  $registro[31];
                                    ?>
                                    <tr>
                                          <td align="left" ><?php echo "$exccc"; ?></td>
                                          <td align="left" ><?php echo "$loccc"; ?></td>
                                          <td align="left" ><?php echo "$ponto"; ?></td>
                                          <td align="left" ><?php echo "$pp"; ?></td>
                                          <td align="center"><?php echo "$ana11"; ?></td>
                                          <td title="Lago Cunião" align="center"><?php echo "$codc"; ?></td>
                                          <td align="left" ><?php echo "$data"; ?></td>
                                          <td align="left" ><?php echo "$hora11"; ?></td>
                                          <td align="left" ><?php echo "$NomeOrd"; ?></td>
                                          <td align="left" ><?php echo "$NomeFam"; ?></td>
                                          <td align="left" ><?php echo "$NomeEsp"; ?></td>
                                           <td align="left" ><?php echo "$CatTrof"; ?></td>
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
                                           <td title="Esto" align="" >&nbsp;</td>
                                          <td title="Excursão" align="" ><?php echo "$teci"; ?></td>
                                          <td title="Excursão" align="" ><?php echo "$voucher"; ?></td>
                                          <td title="Excursão" align="" >&nbsp;</td>
                                          <td title="Excursão" align="" >&nbsp;</td>
                                          <td title="Excursão" align="" ><?php echo "$det"; ?></td>
                                          <td align="" ><?php echo "$obbs"; ?></td>
                                          <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$id_lim";?>&aparelho=<?php echo "$aparelho"; ?>')" ><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                                          </tr>
                                    <?php
                                    $nn++;
                                }
                            }







                                 /* Início dos resultados para Redinha   */
                    if ($aparelho == "Espinhel")
                    {


                      if ($esp == "Todas"){$espe = " ";}else{$espe = " AND tb_especies.esp_especie = '$esp'";}
                      if ($cod_lim == "Todos" OR $cod_lim == ""){$codd = "";}else{$codd = " AND tb_espinhel_biotico.espi_lim = $cod_lim";}
                     echo "$espe--$codd";
                      ?>
                      <tr class="titulo">
                        <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão:
                       <?php
                       $quant3 = 1;
                        while($quant3 <= $quant){
                        echo "$exc[$quant3]&nbsp;&nbsp;";
                        if($quant3 == 1){$excu = "(";}
                        $excu .= " tb_limno_outr.lim_outr_excursao = $exc[$quant3] ";
                        if($exc[$quant3] ==  "" AND $quant == 1){$excu .= " tb_limno_outr.lim_outr_excursao >= 0 ";}
                        if($quant3 < $quant){$excu .= " OR ";}else{$excu .= ")";}
                        $quant3++;
                        }



                       ?></td></tr>

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

                                              <td align="left" >Cat Trof</td>
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
                                 <td title="Excursão" align="" >Esto</td>
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

                             $sql = mysql_query("SELECT * FROM tb_espinhel_biotico INNER JOIN  tb_limno_outr
                        ON tb_espinhel_biotico.espi_lim = tb_limno_outr.id_tb_limno_outr
                        INNER JOIN tb_especies ON  tb_espinhel_biotico.espi_esp = tb_especies.id_tab_especie
                        INNER JOIN tb_local ON  tb_limno_outr.lim_local = tb_local.id_tab_local
                        WHERE  tb_espinhel_biotico.id_tb_espi > '0' AND tb_limno_outr.lim_outr_aparelho = 'Espinhel' AND $excu $espe $codd
                        ");

                            $num = mysql_num_rows($sql);
                                while($registro = mysql_fetch_row($sql))
                                {
                                    $id =  $registro[0];
                                    $id_lim =  $registro[3];
                                    $num =  $registro[2];
                                    $esp =  $registro[4];
                                    $lista = new ManipulateData1();
                                    $NomeEsp = $lista->NomeEspecie($esp);
                                    $NomeOrd = $lista->NomeOrd($esp);
                                    $NomeFam = $lista->NomeFam($esp);
                                 $CatTrof = $lista->CatTrof($esp);
                                    $qtde =  $registro[1];
                                    $teci =  $registro[16];
                                    $voucher =  $registro[20];
                                    $det =  $registro[21];
                                    $oobs =  $registro[22];
                                    $exc0 =  $registro[26];
                                    $locc23 =  $registro[53];
                                    $ecc3 =  $registro[52];
                                    $pad0 =  $registro[41];
                                    $ana0 =  $registro[42];
                                    $cod0 =  $registro[30];
                                    $dat0 =  $registro[29];
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
                                               <td align="left" ><?php echo "$CatTrof"; ?></td>
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
                                if ($esp == "Todas"){$espe = " ";}else{$espe = " AND tb_especies.esp_especie = '$esp'";}
                                if ($cod_lim == "Todos" OR $cod_lim == ""){$codd = "";}else{$codd = " AND tb_arrastofundo_biotico.arr_lim = $cod_lim";}
                             //    echo "$espe--$codd";
                                ?>
                          <tr class="titulo">
                          <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão:
                                <?php
                                $quant3 = 1;
                                while($quant3 <= $quant){
                                echo "$exc[$quant3]&nbsp;&nbsp;";
                                if($quant3 == 1){$excu = "(";}
                                $excu .= " tb_limno_arr.lim_arr_excursao = $exc[$quant3] ";
                                if($exc[$quant3] ==  "" AND $quant == 1){$excu .= " tb_limno_arr.lim_arr_excursao >= 0 ";}
                                if($quant3 < $quant){$excu .= " OR ";}else{$excu .= ")";}
                                $quant3++;
                                }

                       ?></td></tr>

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

                                              <td align="left" >Cat Trof</td>
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
                           <td title="Excursão" align="" >Esto</td>
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
                       $sql = mysql_query("SELECT * FROM tb_arrastofundo_biotico INNER JOIN  tb_limno_arr
                        ON tb_arrastofundo_biotico.arr_lim = tb_limno_arr.id_tb_limno_arr
                        INNER JOIN tb_especies ON  tb_arrastofundo_biotico.arr_especie = tb_especies.id_tab_especie
                        INNER JOIN tb_local ON  tb_limno_arr.lim_arr_loc = tb_local.id_tab_local
                        WHERE  tb_arrastofundo_biotico.id_tb_arrastofundo > '0' AND $excu $espe $codd
                        ");

                        $num = mysql_num_rows($sql);
                            while($registro = mysql_fetch_row($sql))
                            {
                                $id_lim =  $registro[0];
                                $num =  $registro[5];
                                $esp =  $registro[6];
                                $lista = new ManipulateData1();
                                $NomeEsp = $lista->NomeEspecie($esp);
                                $NomeOrd = $lista->NomeOrd($esp);
                                $NomeFam = $lista->NomeFam($esp);
                                 $CatTrof = $lista->CatTrof($esp);
                                $hora =  $registro[22];
                                $data =  $registro[3];
                                $qtde =  $registro[1];
                                $teci =  $registro[7];
                                $voucher =  $registro[10];
                                $det =  $registro[12];
                                $larva =  $registro[15];
                                $oobbss =  $registro[11];
                                $exc3 =  $registro[20];
                                $ec =  $registro[87];
                                $ponto =  $registro[88];
                                $pp =  $registro[56];
                                $nn =  $registro[68];
                                $cc =  $registro[19];
                                if($larva == "N"){$larva = "Não Larva";}else{$larva = "Larva";}
                                ?>
                                <tr>
                                  <td align="left" ><?php echo "$exc3"; ?></td>
                                  <td align="left" ><?php echo "$ec"; ?></td>
                                  <td align="left" ><?php echo "$ponto"; ?></td>
                                  <td align="left" ><?php echo "$pp"; ?></td>
                                  <td align="left" ><?php echo "$nn"; ?></td>
                                  <td align="left" ><?php echo "$cc"; ?></td>
                                  <td title="Lago Cunião" align="" ><?php echo "$data"; ?></td>
                                  <td title="Lago Cunião" align="center"><?php echo "$hora"; ?></td>
                                  <td align="left" ><?php echo "$NomeOrd"; ?></td>
                                  <td align="left" ><?php echo "$NomeFam"; ?></td>
                                  <td align="left" ><?php echo "$NomeEsp"; ?></td>
                                   <td align="left" ><?php echo "$CatTrof"; ?></td>
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
                                  <td title="Excursão" align="" >&nbsp;</td>
                                  <td title="Excursão" align="" ><?php echo "$teci"; ?></td>
                                  <td title="Excursão" align="" ><?php echo "$voucher"; ?></td>
                                  <td title="Excursão" align="" >&nbsp;</td>
                                  <td title="Excursão" align="" ><?php echo "$larva"; ?></td>
                                  <td title="Excursão" align="" ><?php echo "$det"; ?></td>
                                  <td title="Excursão" align="" ><?php echo "$oobbss"; ?></td>
                                  <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$id_lim";?>&aparelho=<?php echo "$aparelho"; ?>')" ><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                                </tr>
                                <?php
                                $nn++;
                             }
                           }



                                             if ($aparelho == "Outros")
                {
                      if ($esp == "Todas"){$espe = " ";}else{$espe = " AND tb_especies.esp_especie = '$esp'";}
                      if ($cod_lim == "Todos" OR $cod_lim == ""){$codd = "";}else{$codd = " AND tb_outros_biotico.outr_lim = $cod_lim";}
                    //  echo "$espe--$aparelho";
                      ?>
                      <tr class="titulo">
                        <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão:
                       <?php
                       $quant3 = 1;
                        while($quant3 <= $quant){
                        echo "$exc[$quant3]&nbsp;&nbsp;";
                        if($quant3 == 1){$excu = "(";}
                        $excu .= " tb_limno_outr.lim_outr_excursao = $exc[$quant3] ";
                        if($exc[$quant3] ==  "" AND $quant == 1){$excu .= " tb_limno_outr.lim_outr_excursao >= 0 ";}
                        if($quant3 < $quant){$excu .= " OR ";}else{$excu .= ")";}
                        $quant3++;
                        }
                       ?></td></tr>

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
                                              <td align="left" >Cat Trof</td>
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
                        $sql = mysql_query("SELECT * FROM tb_outros_biotico INNER JOIN  tb_limno_outr
                        ON tb_outros_biotico.outr_lim = tb_limno_outr.id_tb_limno_outr
                        INNER JOIN tb_especies ON  tb_outros_biotico.outr_especie = tb_especies.id_tab_especie
                        INNER JOIN tb_local ON  tb_limno_outr.lim_local = tb_local.id_tab_local
                        WHERE  tb_outros_biotico.id_tb_outros > '0' AND tb_limno_outr.lim_outr_aparelho = 'Outros' AND $excu $espe $codd
                        ");              $num = mysql_num_rows($sql);



                while($registro = mysql_fetch_row($sql))
                {
                $idddd =  $registro[0];
                $hora =  $registro[4];
                $num =  $registro[5];
                $esp =  $registro[6];
                $lista = new ManipulateData1();
                $NomeEsp = $lista->NomeEspecie($esp);
                $NomeOrd = $lista->NomeOrd($esp);
                $NomeFam = $lista->NomeFam($esp);
                                 $CatTrof = $lista->CatTrof($esp);
                $hora =  $registro[4];
                $data =  $registro[3];
                $qtde =  $registro[1];
                $teci =  $registro[7];
                $voucher =  $registro[10];
                $det =  $registro[12];
                 $anaa =  $registro[14];
                 $ooobs =  $registro[11];
                 $excur =  $registro[18];
                 $cod_loc =  $registro[45];
                 $locc3 =  $registro[44];
                 $padd =  $registro[33];
                 $anaa =  $registro[34];
                  $NomeCod =  $registro[22];
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
                                       <td align="left" ><?php echo "$CatTrof"; ?></td>
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
                                      <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$idddd";?>&aparelho=<?php echo "$aparelho"; ?>')" ><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                                      </tr>
                <?php
                $nn++;
                }
                }





                     if ($aparelho == "Caniço")
                {
                      if ($esp == "Todas"){$espe = " ";}else{$espe = " AND tb_especies.esp_especie = '$esp'";}
                      if ($cod_lim == "Todos" OR $cod_lim == ""){$codd = "";}else{$codd = " AND tb_outros_biotico.outr_lim = $cod_lim";}
                     echo "$espe--$codd";
                      ?>
                      <tr class="titulo">
                        <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão:
                       <?php
                       $quant3 = 1;
                        while($quant3 <= $quant){
                        echo "$exc[$quant3]&nbsp;&nbsp;";
                        if($quant3 == 1){$excu = "(";}
                        $excu .= " tb_limno_outr.lim_outr_excursao = $exc[$quant3] ";
                        if($exc[$quant3] ==  "" AND $quant == 1){$excu .= " tb_limno_outr.lim_outr_excursao >= 0 ";}
                        if($quant3 < $quant){$excu .= " OR ";}else{$excu .= ")";}
                        $quant3++;
                        }
                       ?></td></tr>

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
                                              <td align="left" >Cat Trof</td>
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
                        $sql = mysql_query("SELECT * FROM tb_outros_biotico INNER JOIN  tb_limno_outr
                        ON tb_outros_biotico.outr_lim = tb_limno_outr.id_tb_limno_outr
                        INNER JOIN tb_especies ON  tb_outros_biotico.outr_especie = tb_especies.id_tab_especie
                        INNER JOIN tb_local ON  tb_limno_outr.lim_local = tb_local.id_tab_local
                        WHERE  tb_outros_biotico.id_tb_outros > '0' AND tb_limno_outr.lim_outr_aparelho = 'Caniço' AND $excu $espe $codd
                        ");              $num = mysql_num_rows($sql);



                while($registro = mysql_fetch_row($sql))
                {
                $id_lim =  $registro[0];
                $hora =  $registro[4];
                $num =  $registro[5];
                $esp =  $registro[6];
                $lista = new ManipulateData1();
                $NomeEsp = $lista->NomeEspecie($esp);
                $NomeOrd = $lista->NomeOrd($esp);
                $NomeFam = $lista->NomeFam($esp);

                                 $CatTrof = $lista->CatTrof($esp);
                $hora =  $registro[4];
                $data =  $registro[3];
                $qtde =  $registro[1];
                $teci =  $registro[7];
                $voucher =  $registro[10];
                $det =  $registro[12];
                 $anaa =  $registro[14];
                 $ooobs =  $registro[11];
                 $excur =  $registro[18];
                 $cod_loc =  $registro[45];
                 $locc3 =  $registro[44];
                 $padd =  $registro[33];
                 $anaa =  $registro[34];
                  $NomeCod =  $registro[22];
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
                                       <td align="left" ><?php echo "$CatTrof"; ?></td>
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
                                      <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$id_lim";?>&aparelho=<?php echo "$aparelho"; ?>')" ><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                                      </tr>
                <?php
                $nn++;
                }
                }




                if ($aparelho == "Puça")
                {
                      if ($esp == "Todas"){$espe = " ";}else{$espe = " AND tb_especies.esp_especie = '$esp'";}
                      if ($cod_lim == "Todos" OR $cod_lim == ""){$codd = "";}else{$codd = " AND tb_outros_biotico.outr_lim = $cod_lim";}
                     echo "$espe--$codd";
                      ?>
                      <tr class="titulo">
                        <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão:
                       <?php
                       $quant3 = 1;
                        while($quant3 <= $quant){
                        echo "$exc[$quant3]&nbsp;&nbsp;";
                        if($quant3 == 1){$excu = "(";}
                        $excu .= " tb_limno_outr.lim_outr_excursao = $exc[$quant3] ";
                        if($exc[$quant3] ==  "" AND $quant == 1){$excu .= " tb_limno_outr.lim_outr_excursao >= 0 ";}
                        if($quant3 < $quant){$excu .= " OR ";}else{$excu .= ")";}
                        $quant3++;
                        }
                       ?></td></tr>

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
                                              <td align="left" >Cat Trof</td>
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
                        $sql = mysql_query("SELECT * FROM tb_outros_biotico INNER JOIN  tb_limno_outr
                        ON tb_outros_biotico.outr_lim = tb_limno_outr.id_tb_limno_outr
                        INNER JOIN tb_especies ON  tb_outros_biotico.outr_especie = tb_especies.id_tab_especie
                        INNER JOIN tb_local ON  tb_limno_outr.lim_local = tb_local.id_tab_local
                        WHERE  tb_outros_biotico.id_tb_outros > '0' AND tb_limno_outr.lim_outr_aparelho = 'Puça' AND $excu $espe $codd
                        ");              $num = mysql_num_rows($sql);



                while($registro = mysql_fetch_row($sql))
                {
                $id_lim =  $registro[0];
                $hora =  $registro[4];
                $num =  $registro[5];
                $esp =  $registro[6];
                $lista = new ManipulateData1();
                $NomeEsp = $lista->NomeEspecie($esp);
                $NomeOrd = $lista->NomeOrd($esp);
                $NomeFam = $lista->NomeFam($esp);
                                 $CatTrof = $lista->CatTrof($esp);
                $hora =  $registro[4];
                $data =  $registro[3];
                $qtde =  $registro[1];
                $teci =  $registro[7];
                $voucher =  $registro[10];
                $det =  $registro[12];
                $anaa =  $registro[14];
                $ooobs =  $registro[11];
                $excur =  $registro[18];
                $cod_loc =  $registro[45];
                $locc3 =  $registro[44];
                $padd =  $registro[33];
                $anaa =  $registro[34];
                $NomeCod =  $registro[22];
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
                                       <td align="left" ><?php echo "$CatTrof"; ?></td>
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
                                      <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$id_lim";?>&aparelho=<?php echo "$aparelho"; ?>')" ><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                                      </tr>
                <?php
                $nn++;
                }
                }




                  if ($aparelho == "Manual")
                {
                      if ($esp == "Todas"){$espe = " ";}else{$espe = " AND tb_especies.esp_especie = '$esp'";}
                      if ($cod_lim == "Todos" OR $cod_lim == ""){$codd = "";}else{$codd = " AND tb_outros_biotico.outr_lim = $cod_lim";}
                     echo "$espe--$codd";
                      ?>
                      <tr class="titulo">
                        <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão:
                       <?php
                       $quant3 = 1;
                        while($quant3 <= $quant){
                        echo "$exc[$quant3]&nbsp;&nbsp;";
                        if($quant3 == 1){$excu = "(";}
                        $excu .= " tb_limno_outr.lim_outr_excursao = $exc[$quant3] ";
                        if($exc[$quant3] ==  "" AND $quant == 1){$excu .= " tb_limno_outr.lim_outr_excursao >= 0 ";}
                        if($quant3 < $quant){$excu .= " OR ";}else{$excu .= ")";}
                        $quant3++;
                        }
                       ?></td></tr>

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

                                              <td align="left" >Cat Trof</td>
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
                        $sql = mysql_query("SELECT * FROM tb_outros_biotico INNER JOIN  tb_limno_outr
                        ON tb_outros_biotico.outr_lim = tb_limno_outr.id_tb_limno_outr
                        INNER JOIN tb_especies ON  tb_outros_biotico.outr_especie = tb_especies.id_tab_especie
                        INNER JOIN tb_local ON  tb_limno_outr.lim_local = tb_local.id_tab_local
                        WHERE  tb_outros_biotico.id_tb_outros > '0' AND tb_limno_outr.lim_outr_aparelho = 'Manual' AND $excu $espe $codd
                        ");              $num = mysql_num_rows($sql);



                while($registro = mysql_fetch_row($sql))
                {
                $id_lim =  $registro[0];
                $hora =  $registro[4];
                $num =  $registro[5];
                $esp =  $registro[6];
                $lista = new ManipulateData1();
                $NomeEsp = $lista->NomeEspecie($esp);
                $NomeOrd = $lista->NomeOrd($esp);
                $NomeFam = $lista->NomeFam($esp);
                                 $CatTrof = $lista->CatTrof($esp);
                $hora =  $registro[4];
                $data =  $registro[3];
                $qtde =  $registro[1];
                $teci =  $registro[7];
                $voucher =  $registro[10];
                $det =  $registro[12];
                 $anaa =  $registro[14];
                 $ooobs =  $registro[11];
                 $excur =  $registro[18];
                 $cod_loc =  $registro[45];
                 $locc3 =  $registro[44];
                 $padd =  $registro[33];
                 $anaa =  $registro[34];
                  $NomeCod =  $registro[22];
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
                                       <td align="left" ><?php echo "$CatTrof"; ?></td>
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
                                      <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$id_lim";?>&aparelho=<?php echo "$aparelho"; ?>')" ><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                                      </tr>
                <?php
                $nn++;
                }
                }









                            if ($aparelho == "Tarrafa")
                { if ($esp == "Todas"){$espe = " ";}else{$espe = " AND tb_especies.esp_especie = '$esp'";}
                      if ($cod_lim == "Todos" OR $cod_lim == ""){$codd = "";}else{$codd = " AND tb_outros_biotico.outr_lim = $cod_lim";}
                     echo "$espe--$codd";
                      ?>
                      <tr class="titulo">
                        <td colspan="30">Aparelho: <?php echo"$aparelho ";?>---- Excursão:
                       <?php
                       $quant3 = 1;
                        while($quant3 <= $quant){
                        echo "$exc[$quant3]&nbsp;&nbsp;";
                        if($quant3 == 1){$excu = "(";}
                        $excu .= " tb_limno_outr.lim_outr_excursao = $exc[$quant3] ";
                        if($exc[$quant3] ==  "" AND $quant == 1){$excu .= " tb_limno_outr.lim_outr_excursao >= 0 ";}
                        if($quant3 < $quant){$excu .= " OR ";}else{$excu .= ")";}
                        $quant3++;
                        }
                        ?></td></tr>

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

                                              <td align="left" >Cat Trof</td>
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
                        $sql = mysql_query("SELECT * FROM tb_outros_biotico INNER JOIN  tb_limno_outr
                        ON tb_outros_biotico.outr_lim = tb_limno_outr.id_tb_limno_outr
                        INNER JOIN tb_especies ON  tb_outros_biotico.outr_especie = tb_especies.id_tab_especie
                        INNER JOIN tb_local ON  tb_limno_outr.lim_local = tb_local.id_tab_local
                        WHERE  tb_outros_biotico.id_tb_outros > '0' AND tb_limno_outr.lim_outr_aparelho = 'Tarrafa' AND $excu $espe $codd
                        ");                         $num = mysql_num_rows($sql);
                while($registro = mysql_fetch_row($sql))
                {
                $id_lim =  $registro[0];
                $hora =  $registro[4];
                $num =  $registro[5];
                $esp =  $registro[6];
                $lista = new ManipulateData1();
                $NomeEsp = $lista->NomeEspecie($esp);
                $NomeOrd = $lista->NomeOrd($esp);
                $NomeFam = $lista->NomeFam($esp);
                                 $CatTrof = $lista->CatTrof($esp);
                $hora =  $registro[4];
                $data =  $registro[3];
                $qtde =  $registro[1];
                $teci =  $registro[7];
                $voucher =  $registro[10];
                $det =  $registro[12];
                 $anaa =  $registro[14];$ooobs =  $registro[11];
                  $excur =  $registro[18];
                 $cod_loc =  $registro[45];
                 $locc4 =  $registro[44];
                 $padd4 =  $registro[33];
                 $anaa =  $registro[34];
                  $NomeCod =  $registro[22];
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
                       <td align="left" ><?php echo "$CatTrof"; ?></td>
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
                      <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_malh_inserir&idd=<?php echo"$id_lim";?>&aparelho=<?php echo "$aparelho"; ?>')" ><img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                   </tr>
                <?php
                $nn++;
                }
                }




                ?>


            </table>

          <br />
          <div id="rodape_branco">
           TOTAL:&nbsp;<?php echo $nn -1; ?>
          </div>


        </div>
    </div>


