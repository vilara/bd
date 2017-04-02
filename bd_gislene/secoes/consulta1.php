<?php
$flag = $_GET["flag"];
?>
<div id="conteudo">
<h3>Parâmetros da consulta</h3>
 <form id="formulario" method="post" action="index.php?secoes=secoes/consulta1&flag=1" enctype="multipart/form-data">
    <fieldset>

        <label for="limno">
            1) Excursão:

             <SELECT name='exc' type='text'  tabindex="1" >

             <option value='Todas'>Todas</option>
             <?php
                $lista = new ManipulateData();
                $lista->geraListaExc();
            ?>
        </select>

            </label>&nbsp;&nbsp;&nbsp;

 <label for="limno">
            2) Local:

             <SELECT name='exc' type='text'  tabindex="1" >

             <option value='Todas'>Todas</option>
             <?php
                $lista->geraListaLoc();
            ?>
        </select>

            </label>&nbsp;&nbsp;&nbsp;

<label for="inicial">
3) Aparelho de pesca: <SELECT NAME='aparelho' type='text' id='aparelho' tabindex="1">
              <option value='Todos'>Todos</option>

                <option value='Malhadeira'>Malhadeira</option>
                 <option value='Rede de cerco'>Rede de cerco</option>
                 <option value='Arrasto de fundo'>Arrasto de fundo</option>
                </select>

</label> &nbsp;&nbsp;&nbsp;

   <input type="submit" value="Submeter" class="botao2"  />
<!--Área editável fim     -->
 </fieldset></form>
          </div>

          <?php
if ($flag == 1)
{
		include_once "tabelas.php";
}
          ?>