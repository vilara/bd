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


        ?>
        <h3>Cadastro de Arquivos</h3>






        <form id="forms" method="post" action="index.php?secoes=cadastros/arquivo_enviar" enctype="multipart/form-data">
              <fieldset>

                    <label for="nome">

                    1) Nome Arquivo: </label>
                    <input name="nome" type="text" id="nome" tabindex="2" accesskey="p" size="30" />

                    <label for="comprimento">
                    2) Data: </label>

                 <SELECT name='dia' type='text' id='dia' tabindex="4">
               <?php
                $lista = new ManipulateData();
                $lista->ListaDias();
                ?>
              </select>
              <SELECT name='mes' type='text' id='mes' tabindex="5">
                 <?php
                $lista->ListaMeses();
                ?>
              </select>
              <input name="ano" type="text" id="ano" tabindex="6"  size="4" class="checkbox1" /> dd/mm/aaaa



                    <label for="ematur">
                    3) Categoria: </label>
                    <SELECT NAME='categoria' type='text' id='categoria' tabindex="5">
                    <option value='#'>Select</option>
                    <option value='backup'>Backup</option>
                    <option value='fichas_campo'>Ficha de Campo</option>
                    <option value='invoice'>Invoice</option>
                    <option value='diversos'>Diversos</option>
                    <option value='imagens'>Imagens</option>
                    <option value='resumos'>Resumo de Registros</option>
                      </select>
                    <label for="arquivos">
                    4) Inserir: </label>
                    <input name="arquivos" type="file" id="arquivos" tabindex="2" accesskey="p" size="50" />



                   


              </fieldset>



         <center>     <input type="submit" value="ENVIAR" class="botao2"  /> </center>
        </form>



        <!--Área editável fim     -->

    </div>
