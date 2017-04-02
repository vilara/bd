<?php
$usu = $_COOKIE["usu"];
$senha = $_COOKIE["senha"];
$nivel = $_COOKIE["nivel"];

$contar = new ManipulateData();
        $contar->setTable("usu_senha");
        $contar->setFieldID("usu_senha");
        $nums = $contar->getContarDados("$senha");

?>

<div id="titulo_geral"><h3>BANCO DE DADOS DO SUBPROGRAMA DE ICTIOPLANCTON</h3></div>

<div id="topo">


    <!--<div id="menu">   -->


    <ul id="menu_dropdown" class="menubar">

     <li class="submenu"><a href="http://www.ictiomadeira.com.br" title="Ictiomadeira" >Ictiomadeira</a></li>
     <?php

      ?>
   <li class="submenu"><a href="?secoes=secoes/home">In�cio</a></li>
   <li class="submenu"><a href="#">Cadastro</a>
      <ul class="menu">
        <li><a href="?secoes=cadastros/usu_cad_inserir">Usu�rios</a></li>
       <!-- <li><a href="#">Hist�ria</a></li>
        <li><a href="#">Miss�o</a></li>
        <li><a href="#">Vis�o</a></li>
		<li><a href="#">Instala��es</a></li>-->
      </ul>
   </li>
   <li class="submenu"><a href="#">Registros</a>
      <ul class="menu">
        <li><a href="?secoes=registros/cod_inserir">C�digos</a></li>
        <li><a href="?secoes=registros/bio_inserir">Amostras</a></li>
        <!--<li><a href="#">Pol�tica de Qualidade</a></li>
        <li><a href="#">Projetos Sociais</a></li>
		<li><a href="#">Resultado da pesquisa de satisfa��o</a></li>-->
      </ul>
   </li>
   <li class="submenu"><a href="#">Consultas</a>
      <!--<ul class="menu">
        <li><a href="#">Links �teis</a></li>
        <li><a href="#">Itiner�rio</a></li>
        <li><a href="#">Mapa das Rotas<sup>novo</sup></a></li>
      </ul>-->
   </li>

     <a href="log_out.php"><font color="red">(Logout)</font></a>

       <?php   ?>

      <li class="submenu"><a href="index.php"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login</b></a>
      <!--<ul class="menu">
        <li><a href="#">Colabore Conosco</a></li>
        <li><a href="#">Enquetes finalizadas</a></li>
        <li><a href="#">Fale Conosco</a></li>
		<li><a href="#">Trabalhe Conosco</a></li>
      </ul>-->
     </li>
      <?php  ?>

      <!--<li class="submenu"><a href="#">Contato</a>
      <ul class="menu">
        <li><a href="#">Colabore Conosco</a></li>
        <li><a href="#">Enquetes finalizadas</a></li>
        <li><a href="#">Fale Conosco</a></li>
		<li><a href="#">Trabalhe Conosco</a></li>
      </ul>
   </li>
   <li class="submenu"><a href="#">Localize seu �nibus</a></li>-->
</ul>


<!--    </div>  -->
</div>
