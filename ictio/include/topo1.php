<?php
$usu = $_COOKIE["usu"];
$senha = $_COOKIE["senha"];
$nivel = $_COOKIE["nivel"];
// echo "$nivel";
$contar = new ManipulateData();
        $contar->setTable("usu_senha");
        $contar->setFieldID("usu_senha");
        $nums = $contar->getContarDados("$senha");

?>

<div id="titulo_geral"><h3>BANCO DE DADOS DO SUBPROGRAMA DE ICTIOLOGIA</h3></div>

<div id="topo">


    <!--<div id="menu">   -->


    <ul id="menu_dropdown" class="menubar">


   <li class="submenu"><a href="../../" title="Ictiomadeira" >Ictiomadeira</a></li>

     <?php

     if ($nums >= 1)
		{

        ?>
   <li class="submenu"><a href="?secoes=secoes/home">In�cio</a></li>
  <?php

  if ($nivel == 3)

  {

  ?>
    <li class="submenu"><a href="#">Admin</a>
      <ul class="menu">
      <li><a href="?secoes=admin/usu_mostrar">Usu�rios cadastrados</a></li>
      <li><a href="?secoes=admin/usu_cad_inserir">Inserir novo usu�rios</a></li>
      <li><a href="?secoes=admin/usu_sen_inserir">Trocar senha</a></li> <!--  -->
     </ul>
   </li>

 <!--<li class="submenu"><a href="#">Teste</a>
      <ul class="menu">
      <li><a href="?secoes=consultas/teste_malhadeira">Teste Malhadeira</a></li>
       <li><a href="?secoes=consultas/teste_redinha">Teste Redinha</a></li>
           <li><a href="?secoes=consultas/teste_arrasto">Teste Arrasto</a></li>
           <li><a href="?secoes=consultas/teste_outros">Teste Outros</a></li>
           <li><a href="?secoes=consultas/teste_espinhel">Teste Espinhel</a></li>
           <li><a href="?secoes=consultas/teste_igarape">Teste Igarape</a></li>


     </ul>
   </li>    -->



   <li class="submenu"><a href="#">Coordenadas</a>
      <ul class="menu">
      <li><a href="?secoes=consultas/coord_malhadeira">Todos</a></li>

     </ul>
   </li> <!-- -->
 <?php

 }

 ?>



   <li class="submenu"><a href="#">Cadastro</a>
      <ul class="menu">
       <!--  -->
        <li><a href="?secoes=cadastros/esp_inserir">Esp�cie</a></li>
        <li><a href="?secoes=cadastros/det_inserir">Determinador</a></li>
        <li><a href="?secoes=cadastros/limno_inserir">C�digos de Campo</a></li>
         <!--<li><a href="?secoes=cadastros/limno_inserir_corr">C�digos para corredeiras</a></li>  -->
          <li><a href="?secoes=cadastros/limno_inserir_ig">C�digos para igarap�s</a></li>
         <li><a href="?secoes=cadastros/exc_inserir">Excurs�o</a></li>
        <li><a href="?secoes=cadastros/foto_inserir">Imagens</a></li>
       <!-- <li><a href="#">Hist�ria</a></li>
        <li><a href="#">Miss�o</a></li>
        <li><a href="#">Vis�o</a></li>
		<li><a href="#">Instala��es</a></li>-->
      </ul>
   </li>
<li class="submenu"><a href="#">Registros</a>
      <ul class="menu">
        <li><a href="?secoes=registros/malh_inserir&flag=9">Malhadeira</a></li>
        <li><a href="?secoes=registros/red_inserir&flag=9">Redinha</a></li>
        <li><a href="?secoes=registros/arr_inserir&flag=9">Arrasto Bent�nico</a></li>
        <li><a href="?secoes=registros/puc_inserir&flag=9">Pu�a</a></li>
        <li><a href="?secoes=registros/outr_inserir_tarr&flag=9">Tarrafa</a></li>
        <li><a href="?secoes=registros/esp_inserir&flag=9">Espinhel</a></li>
        <li><a href="?secoes=registros/can_inserir&flag=9">Cani�o</a></li>
       <!--   <li><a href="?secoes=registros/corr_inserir&flag=9">Corredeiras</a></li>   -->
              <li><a href="?secoes=registros/ig_inserir&flag=9">Igarap�s</a></li>
                   <!--   <li><a href="?secoes=registros/outr_inserir&flag=9">Outros</a></li>    -->

         </ul>
      </li>  <!-- -->

       <!-- <li><a href="?secoes=registros/pesc_inserir">Pesca</a></li> -->
        <!--<li><a href="#">Pol�tica de Qualidade</a></li>
        <li><a href="#">Projetos Sociais</a></li>
		<li><a href="#">Resultado da pesquisa de satisfa��o</a></li>-->


   <li class="submenu"><a href="#">Consultas</a>
      <ul class="menu">
        <li><a href="?secoes=consultas/cod_campo_limno">C�digos de Campo</a></li>
        <li><a href="?secoes=consultas/esp">Esp�cies</a></li>
        <li><a href="?secoes=consultas/registros">Registros</a></li>
         <li><a href="?secoes=consultas/tri">Trincas</a></li>
           <li><a href="?secoes=consultas/exc">Excurs�es</a></li>
<!--        <li><a href="?secoes=consultas/pesca">Pesca</a></li>-->
        <li><a href="?secoes=consultas/nr_especies">Riqueza</a></li>
        <li><a href="?secoes=consultas/lista_pres">Presen�a</a></li>
        <li><a href="?secoes=consultas/lista_abud">Abund�ncia</a></li>
         <li><a href="?secoes=consultas/lista_abud_g">Abund�ncia Sub Bacias</a></li>
        <li><a href="?secoes=consultas/curva_col">Curva do Coletor</a></li>
         <li><a href="?secoes=consultas/ig">Igarap�s</a></li>
  <li><a href="?secoes=consultas/spacefy">Specify</a></li>
   <li><a href="?secoes=consultas/corr">Corredeiras</a></li>
   <li><a href="?secoes=consultas/testes">Testes</a></li>
     <!--    <li><a href="?secoes=consultas/especies_update">Update</a></li>    -->
      </ul>
   </li>

        <?php

  if ($nivel == 3)

  {

  ?>
      <li class="submenu"><a href="#">Nova Terra</a>
      <ul class="menu">

       <li><a href="?secoes=consultas/nr_especies_nt">Riqueza</a></li>
        <li><a href="?secoes=consultas/lista_pres_nt">Presen�a</a></li>
     <li><a href="?secoes=consultas/lista_abud_nt">Abund�ncia</a></li>

      </ul>
   </li>
    <?php
    }
     ?>
      <li class="submenu"><a href="?secoes=pesquisa/pesquisa">Biologia</a>
        <ul class="menu">
        <li><a href="?secoes=consultas/ematur">Reprodu��o</a></li>

      </ul>
     </li>

      <li class="submenu"><a href="#">Bagres</a>
        <ul class="menu">
        <li><a href="?secoes=consultas/bagres_pesc">Pesca</a></li>
         <li><a href="?secoes=consultas/bagres_malh">Malhadeira</a></li>

      </ul>
     </li>


      <li class="submenu"><a href="?secoes=pesquisa/pesquisa">Pesquisas</a>
      <!--<ul class="menu">
        <li><a href="#">Colabore Conosco</a></li>
        <li><a href="#">Enquetes finalizadas</a></li>
        <li><a href="#">Fale Conosco</a></li>
		<li><a href="#">Trabalhe Conosco</a></li>
      </ul>-->
     </li>

      <li class="submenu"><a href="#">Mapa</a>
      <ul class="menu">
        <li><a href="?secoes=consultas/mapa3">Distribui��o</a></li>

             </ul>
   </li>

      <a href="log_out.php"><font color="red">(Logout)</font></a>

       <?php } else { ?>

      <li class="submenu"><a href="#"<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login</b></a>
      <!--<ul class="menu">
        <li><a href="#">Colabore Conosco</a></li>
        <li><a href="#">Enquetes finalizadas</a></li>
        <li><a href="#">Fale Conosco</a></li>
		<li><a href="#">Trabalhe Conosco</a></li>
      </ul>-->
     </li>
      <?php } ?>
   <!--<li class="submenu"><a href="#">Localize seu �nibus</a>  -->
</ul>


<!--    </div>  -->
</div>
