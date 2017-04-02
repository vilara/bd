
<script language="JavaScript" type="text/javascript">
function janelaSecundaria (URL){
   window.open(URL,"janela1","width=580,height=450,scrollbars=YES")
}
</script>

<style type="text/css">
#edicao { margin: 0; padding: 0; width: 500px; background: #DFF4DF; border: 1px solid #000000; margin: 0 auto; margin-top: 5px;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao h4 { font-size: 100%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:50px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>

 <div id="edicao">
        <!--<h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>  -->

        <!--Área editável início     -->
        <?php

        $flag = $_GET["flag"];

        $dado = new ManipulateData();
        $dado->setTable("tb_espinhel_biotico");
        $dado->setFieldOrder("id_tb_espi");
        $dado->setFieldID("2");$espi_numero5 = $dado->getLastId();
        $espi_numero4 = $espi_numero5 + 1;
        $dado->setTable("cons_voucher");
        $dado->setFieldOrder("id_cons_voucher");
        $dado->setFieldID("1");$nr_voucher3 = $dado->getLastId();


        /*$res7 = mysql_query("SELECT * FROM cons_gen ");
        while($registro = mysql_fetch_row($res7))
        {$nr_gen = $registro[1];}
        $nr_gen3 = $nr_gen + 1;*/

        if ($flag == 1)
        {
        $lim = $_POST["outr_lim"];
        $hora = $_POST["hora"];
        $min = $_POST["min"];
        $outr_hora = "$hora:$min:00";
        }else
        {
        $lim = $_GET["lim"];
        $especie = $_GET["especie"];
        $voucher = $_GET["voucher"];

        $dado->setTable("tb_especies");
        $dado->setFieldID("id_tab_especie");
        $dado->setFieldNr("3");
        $esp = $dado->DadosFiltrados("$especie");
        }

        $dado->setTable("tb_limno_outr");
        $dado->setFieldID("id_tb_limno_outr");
        $dado->setFieldNr("4");
        $outr_data = $dado->DadosFiltrados("$lim");
        $dado->setFieldNr("5");
        $cod = $dado->DadosFiltrados("$lim");

        $outr_col66 = $_GET["col"];

        ?>
        <h3>Registro de Espinhel</h3>
        <h3>Registro Nr:&nbsp;<span class="red"><?php echo"$espi_numero4 de $cod";  ?></span> </h3>

        <?php
        if ($outr_col66 == "Sim")
        {
        ?>
        <div align="center">Último registro para Coleção: <span class="red">(Esp: <?php echo"$esp";  ?>&nbsp;&nbsp;<?php echo"$voucher";  ?>)</span></div>
        <?php
        }
        ?>




        <form id="forms" method="post" action="index.php?secoes=registros/esp_enviar&lim=<?php echo "$lim"; ?>&outr_hora=<?php echo "$outr_hora"; ?>&outr_data=<?php echo "$outr_data"; ?>" enctype="multipart/form-data">
              <fieldset>

                    <label for="especie">
                    1) Espécie:  </label>
                    <SELECT name='especie' type='text' id='outr_especie' tabindex="1" ><OPTION>
                    <?php
                    $lista = new ManipulateData();
                    $lista->geraListaEspecies();
                    ?>
                    </select><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/esp_inserir')">Cadastrar espécie</a>

                    <label for="comprimento">
                    2) Quantidade: </label>
                    <input name="qtde" type="text" id="outr_qtde" tabindex="2" accesskey="p" size="5" />

                    <label for="comprimento">
                    3) Comprimento padrão: </label>
                    <input name="cpp" type="text" id="malh_cp" tabindex="3" accesskey="p" size="5" />cm

                    <label for="comprimento">
                    4) Comprimento total: </label>
                    <input name="cpt" type="text" id="malh_cp" tabindex="4" accesskey="p" size="5" />cm

                    <label for="comprimento">
                    5) Comprimento da cabeça: </label>
                    <input name="cpc" type="text" id="malh_cp" tabindex="5" accesskey="p" size="5" />cm

                    <label for="ptt">
                    6) Peso total: </label>
                    <input name="ptt" type="text" id="malh_pt" tabindex="6" accesskey="c" size="5" />g

                    <label for="ptc">
                    7) Peso sem cabeça: </label>
                    <input name="ptc" type="text" id="malh_pt" tabindex="7" accesskey="c" size="5" />g

                    <label for="pte">
                    8) Peso eviscerado e sem cabeça: </label>
                    <input name="pte" type="text" id="malh_pt" tabindex="8" accesskey="c" size="5" />g

                    <label for="gr">
                    9) Grau de repleção: </label>
                    <input type="radio" name="gr" value="0"  class="checkbox"/>0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gr"  value="1"  class="checkbox"/>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gr" value="2"  class="checkbox"/>2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gr"  value="3"  class="checkbox"/>3

                    <label for="gg">
                    10) Grau de Gordura:</label>
                    <input type="radio" name="gg" value="0"  class="checkbox"/>0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gg"  value="1"  class="checkbox"/>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gg" value="2"  class="checkbox"/>2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gg"  value="3"  class="checkbox"/>3

                    <label for="sexo">
                    11) Sexo:  </label>
                    <SELECT NAME='sexo' type='text' id='malh_sexo' tabindex="9">
                    <option value='#'>Select</option>
                    <option value='Macho'>Macho</option>
                    <option value='Fêmea'>Fêmea</option>
                    <option value='Indeterminado'>Indeterminado</option>
                    <option value='Não determinado'>Não determinado</option>
                    <option value='Deteriorado'>Deteriorado</option>
                    </select>

                    <label for="ematur">
                    12) Estágio de maturação: </label>
                    <SELECT NAME='ematur' type='text' id='malh_ematur' tabindex="10">
                    <option value='#'>Select</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    </select>

                    <label for="aparelho">
                    13) Histologia:  </label>
                    <input type="radio" name="histo"  value="Sim"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="histo" value="Não"  class="checkbox" checked>Não

                    <label for="aparelho">
                    14) Tecido:  </label>
                    <input type="radio" name="teci"  value="Sim"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="teci" value="Não"  class="checkbox" checked>Não

                    <label for="transparencia">
                    15) Crescimento:  </label>
                    <input type="radio" name="cresc"  value="Nenhum"  class="checkbox" >Nenhum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="cresc" value="Otólito"  class="checkbox">Otólito&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="cresc"  value="Escama"  class="checkbox" >Escama

                    <label for="aparelho">
                    16) Foto:  </label>
                    <input type="radio" name="foto"  value="Sim" class="checkbox"  >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="foto" value="Não" class="checkbox"  checked>Não

                    <label for="aparelho">
                    17) Coleção:  </label>
                    <input type="radio" name="col"  value="Sim"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="col" value="Não"  class="checkbox" checked>Não

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input name="voucher1" type="text" id="arr_voucher1" size="8" />
                    <!--Escolher voucher utilizado:
                    <SELECT name='voucher1' type='text' id='outr_voucher1' ><OPTION> -->
                    <?php
                 //    $lista->geraListaVoucher();
                    ?>
                   <!-- </select>    -->

                    <label for="aparelho">
                    18) Observações:  </label>
                    <textarea type="radio" name="obs" cols="50" rows="5" tabindex="11"></textarea>

                    <label for="determinador">
                    19) Determinador: </label>
                    <SELECT NAME='det' type='text' id='outr_ematur' tabindex="12">
                    <option value="&nbsp;">&nbsp;</option> 
                    <?php
                    $lista->geraListaPesq();
                    ?>
                    </select>

                    <!-- <label for="determinador">
                    8) Análise: </label>
                    <input type="radio" name="outr_anali"  value="Sim"  class="checkbox" >Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="outr_anali" value="Não"  class="checkbox" checked>Não-->


              </fieldset>



             <center> <input type="submit" value="ENVIAR" class="botao2"  /> </center>
        </form>



        <!--Área editável fim     -->

    </div>
