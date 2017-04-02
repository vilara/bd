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

function destino(){

url = document.navegador.lim_exc.options[document.navegador.lim_exc.selectedIndex].value

if (url != " no") window.location = url;

}

</script>
 <?php include "log_auth1.php"; ?>

 <?php
$exc = $_GET["exc"];
$flag = $_GET["flag"];
?>

   <div id="edicao">
      <!--  <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1> -->
        <h3>Inserir dados de coleta de malhadeira</h3>
        
<!--Área editável início     -->
<form name="navegador" method="post" action="index.php?secoes=registros/malh_inserir1&flag=1" enctype="multipart/form-data">

 <fieldset>

    <label for="exc"> 1) Excursão:  </label>
              <SELECT name='lim_exc' onchange="destino()" type='text' id='lim_exc' tabindex="4">

                <?php
              if ($flag == 9)
              {
                ?>
            <option value="no">Selecione</option>

              <?php
              }


              if ($flag == 0)
              {
                ?>
            <option value="index.php?secoes=registros/malh_inserir&exc=0&flag=0">Geral</option>

              <?php
              }
              if($flag == 1)
                 {echo "<option value=\"".$exc."\">".$exc."</option>";}
           ?>
             <option value="index.php?secoes=registros/malh_inserir&exc=0&flag=0">Geral</option>
                         <?php
               $lista = new ManipulateData1();
               $lista->geraListaExc2(malh_inserir);
           ?>

               </select>

        <label for="limno">
            2) Código de campo:
        </label>
             <SELECT name='malh_lim' type='text' id='malh_lim' tabindex="1" ><OPTION>
             <?php
                $lista = new ManipulateData();
                $lista->geraListaCodCampo1("Malhadeira",$exc);
           	 ?>
            </select>


        <label for="malh_hora">
              3) Horário da coleta: </label>
                <SELECT name='hora' type='text' id='hora' tabindex="2">
                <?php
                $lista->ListaHoras();
                ?>
              </select>:
              <SELECT name='min' type='text' id='min' tabindex="3">
                              <option value='00'>00</option>
             <?php
                $lista->ListaMinutos();
                ?>
              </select>


               <label for="malh_data">
              4) Data da coleta: </label>
              <SELECT name='dia' type='text' id='dia' tabindex="4">
               <?php
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

    
               <br />
 <center>  <input type="submit" value="ENVIAR" class="botao2"  />  </center>
               </form>




<!--Área editável fim     -->



</div>


