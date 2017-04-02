<style type="text/css">
#edicao { margin: 0; padding: 0; width: 500px; background: #DFF4DF; border: 1px solid #000000; margin: 0 auto; margin-top: 5px;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:150px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>

<script language=javascript>


</script>

 <?php
$exc = $_GET["exc"];
?>
 <?php include "../log_auth.php"; ?>

        <div id="edicao">
       <!-- <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>   -->
        <h3>Inserir dados de coleta da Pesca</h3>
        


<form name="navegador" method="post" action="index.php?secoes=registros/pesc_inserir1&flag=1" enctype="multipart/form-data">

 <fieldset>

 <label for="aparelho">

      1) Procedência:  </label>
      <SELECT NAME='proced' type='text' id='lim_aparelho' tabindex="4">
      <option value='no'>Selecione</option>
      <option value='Resgate' <?php echo"$ress";?>>Resgate</option>
      <option value='Pesca' <?php echo"$ress";?>>Pesca</option>
      </select>

      <label for="Primeiro nome">
      2) Código: </label>
      <input name="cod" type="text" id="cod" tabindex="1" accesskey="p" size="15" />



      <label for="local">
      3) Local:  </label>
      <SELECT name='local' type='text' id='loc' tabindex="2" ><OPTION>
      <option value='no'>Selecione</option>
      <option value='Abuna' <?php echo"$ress";?>>Abunã</option>
      <option value='Calama' <?php echo"$ress";?>>Calama</option>
      <option value='Humaita' <?php echo"$ress";?>>Humaitá</option>
      <option value='Jaciparana' <?php echo"$ress";?>>Jaciparana</option>
      <option value='Santo Antonio' <?php echo"$ress";?>>Santo Antônio</option>
      <option value='Simao Grande' <?php echo"$ress";?>>Simão Grande</option>
      <option value='Vila Amazonas' <?php echo"$ress";?>>Vila Amazonas</option>
      <option value='Vila Teotonio' <?php echo"$ress";?>>Vila Teotônio</option>
      </select>

    <!--
      <label for="localidade">
      4) Localidade:  </label>
      <textarea type="radio" name="localidade" cols="50" rows="2" tabindex="3"></textarea>-->

      <label for="data">
              4) Data da coleta: </label>
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
              <input name="ano" type="text" id="malh_data_ano" tabindex="6"  size="4" class="checkbox1" /> dd/mm/aaaa


              </fieldset>

  <center> <input type="submit" value="ENVIAR" class="botao2"  />  </center>
               </form>


</div>
