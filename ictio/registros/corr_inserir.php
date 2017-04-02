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

url = document.navegador.lim_red_exc.options[document.navegador.lim_red_exc.selectedIndex].value

if (url != " no") window.location = url;

}

</script>
 <?php include "log_auth1.php"; ?>

 <?php
$exc = $_GET["exc"];
$flag = $_GET["flag"];
?>

   <div id="edicao">
       <!-- <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>   -->
        <h3>Inserir dados de coleta de corredeiras</h3>

<!--Área editável início     -->



<form name="navegador" method="post" action="index.php?secoes=registros/corr_inserir1&flag=1" enctype="multipart/form-data">




 <fieldset>

    <label for="exc"> 1) Excursão:  </label>
              <SELECT name='lim_red_exc' onchange="destino()" type='text' id='lim_red_exc' tabindex="4">

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
            <option value="index.php?secoes=registros/corr_inserir&exc=0&flag=0">Geral</option>

              <?php
              }
              if($flag == 1)
                 {echo "<option value=\"".$exc."\">".$exc."</option>";}
           ?>   <option value="index.php?secoes=registros/corr_inserir&exc=0&flag=0">Geral</option>
                         <?php
               $lista = new ManipulateData1();
               $lista->geraListaExc2(corr_inserir);
           ?>

               </select>




        <label for="limno">
            1) Código de campo:
        </label>
             <SELECT name='red_lim' type='text' id='red_lim' tabindex="1" ><OPTION>
             <?php
                $lista = new ManipulateData();
                $lista->geraListaCodCampoCorr($exc);

	        ?>
            </select>


        <label for="hora">
              2) Horário da coleta: </label>
            <SELECT name='hora' type='text' id='hora' tabindex="2">
              <?php  $lista->ListaHoras();  ?>
              </select>:
              <SELECT name='min' type='text' id='min' tabindex="3">
                               <?php  $lista->ListaMinutos();  ?>
              </select>


              </fieldset>


   <center><input type="submit" value="ENVIAR" class="botao2"  /> </center>
               </form>



<!--Área editável fim     -->

</div>
