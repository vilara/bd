<style type="text/css">
#edicao { margin: 0; padding: 0; width: 500px; background: #DFF4DF; border: 1px solid #000000; margin: 0 auto; margin-top: 5px;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:20px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>
    <div id="edicao">
       <!-- <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>  -->

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
        <h3>Cadastro de fotos</h3>






        <form id="forms" method="post" action="index.php?secoes=cadastros/foto_enviar" enctype="multipart/form-data">
              <fieldset>

                    <label for="especie">
                    1) Espécie:  </label>
                    <SELECT name='especie' type='text' id='outr_especie' tabindex="1" ><OPTION>
                    <?php
                    $lista = new ManipulateData();
                    $lista->geraListaEspecies();
                    ?>
                    </select><a href="index.php?secoes=cadastros/esp_inserir" title="Inserir nova espécie" target="_blank">Cadastrar espécie</a>

                    <label for="comprimento">
                    2) Foto: </label>
                    <input name="arquivo" type="file" id="outr_qtde" tabindex="2" accesskey="p" size="50" />

                    <label for="comprimento">
                    3) Autor: </label>
                    <input name="autor" type="text" id="malh_cp" tabindex="3" accesskey="p" size="40" />

                    <label for="comprimento">
                    4) Comentário: </label>
                    <textarea type="radio" name="coment" cols="50" rows="4" tabindex="12"></textarea>

                     <label for="ematur">
                    5) Estágio de maturação: </label>
                    <SELECT NAME='ematur' type='text' id='malh_ematur' tabindex="5">
                    <option value='#'>Select</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    </select><label for="comprimento">



              </fieldset>



         <center>     <input type="submit" value="ENVIAR" class="botao2"  /> </center>
        </form>



        <!--Área editável fim     -->

    </div>
