<?php
$usu = $_COOKIE["usu"];
$senha = $_COOKIE["senha"];
$nivel = $_COOKIE["nivel"];

$contar = new ManipulateData();
        $contar->setTable("usu_senha");
        $contar->setFieldID("usu_senha");
        $nums = $contar->getContarDados("$senha");

?>

<div id="titulo_geral"><h3>BANCO DE DADOS DO SUBPROGRAMA DE ICTIOLOGIA</h3></div>

<div id="topo">


    <!--<div id="menu">   -->


    <ul id="menu_dropdown" class="menubar">


   <li class="submenu"><a href="../" title="Ictiomadeira" >Ictiomadeira</a></li>

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
 <?php

 }

 ?>

   <li class="submenu"><a href="#">Cadastro</a>
      <ul class="menu">
       <!--  -->
        <li><a href="?secoes=cadastros/esp_inserir">Esp�cie</a></li>
        <li><a href="?secoes=cadastros/det_inserir">Determinador</a></li>
        <li><a href="?secoes=cadastros/limno_inserir">C�digos de Campo</a></li>
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
        <li><a href="?secoes=registros/malh_inserir">Malhadeira</a></li>
        <li><a href="?secoes=registros/red_inserir">Redinha</a></li>
        <li><a href="?secoes=registros/arr_inserir">Arrasto Bent�nico</a></li>
        <li><a href="?secoes=registros/outr_inserir">Pu�a</a></li>
        <li><a href="?secoes=registros/esp_inserir">Espinhel</a></li>
        <li><a href="?secoes=registros/can_inserir">Cani�o</a></li>
       <!-- <li><a href="?secoes=registros/pesc_inserir">Pesca</a></li> -->
        <!--<li><a href="#">Pol�tica de Qualidade</a></li>
        <li><a href="#">Projetos Sociais</a></li>
		<li><a href="#">Resultado da pesquisa de satisfa��o</a></li>-->
      </ul>
   </li>
   <li class="submenu"><a href="#">Consultas</a>
      <ul class="menu">
        <li><a href="?secoes=consultas/cod_campo_limno">C�digos de Campo</a></li>
        <li><a href="?secoes=consultas/esp">Esp�cies</a></li>
        <li><a href="?secoes=consultas/registros">Registros</a></li>
        <li><a href="?secoes=consultas/pesca">Pesca</a></li>
        <li><a href="?secoes=consultas/nr_especies">Riqueza</a></li>
        <li><a href="?secoes=consultas/lista_pres">Presen�a</a></li>
        <li><a href="?secoes=consultas/lista_abud">Abund�ncia</a></li>
        <li><a href="?secoes=consultas/curva_col">Curva do Coletor</a></li>
      </ul>
   </li>
      <li class="submenu"><a href="?secoes=pesquisa/pesquisa">Pesquisa</a>
      <!--<ul class="menu">
        <li><a href="#">Colabore Conosco</a></li>
        <li><a href="#">Enquetes finalizadas</a></li>
        <li><a href="#">Fale Conosco</a></li>
		<li><a href="#">Trabalhe Conosco</a></li>
      </ul>-->
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
