

<?php
$usu = $_COOKIE["usu"];
$senha = $_COOKIE["senha"];
$nivel = $_COOKIE["nivel"];
 // echo $nivel;
$contar = new ManipulateData();
        $contar->setTable("usu_senha");
        $contar->setFieldID("usu_senha");
        $nums = $contar->getContarDados("$senha");

?>
<div id="titulo_geral"><h3>BANCO DE DADOS DO SUBPROGRAMA DE ATIVIDADE PESQUEIRA</h3></div>

<div id="topo">


    <!--<div id="menu">   -->


    <ul id="menu_dropdown" class="menubar">

     <li class="submenu"><a href="../" title="Ictiomadeira" >Ictiomadeira</a></li>

     <?php

     if ($nums >= 1)
		{

        ?>

   <li class="submenu"><a href="?secoes=secoes/home">Início</a></li>
   <?php

  if ($nivel == 3)

  {

  ?>
    <li class="submenu"><a href="#">Admin</a>
      <ul class="menu">
      <li><a href="?secoes=admin/usu_mostrar">Usuários cadastrados</a></li>
      <li><a href="?secoes=admin/usu_cad_inserir">Inserir novo usuários</a></li>
      <li><a href="?secoes=admin/usu_sen_inserir">Trocar senha</a></li> <!--  -->
     </ul>
   </li>
 <?php

 }

  if ($nivel != 99)

  {

 ?>

   <li class="submenu"><a href="#">Cadastro</a>
      <ul class="menu">
        <!--<li><a href="?secoes=cadastros/usu_cad_inserir">Usuários</a></li>-->
        <li><a href="?secoes=cadastros/cad_loc">Localidades</a></li>
       <!--  <li><a href="?secoes=cadastros/cad_categ">Categoria</a></li> --> 
        <li><a href="?secoes=cadastros/cad_pesc">Pescadores</a></li>
        <li><a href="?secoes=cadastros/cad_merc">Mercado</a></li>
        <li><a href="?secoes=cadastros/cad_orig">Origem</a></li>
       <!-- <li><a href="#">História</a></li>
        <li><a href="#">Missão</a></li>
        <li><a href="#">Visão</a></li>
		<li><a href="#">Instalações</a></li>-->
      </ul>
   </li>
   <li class="submenu"><a href="#">Registros</a>
      <ul class="menu">
        <li><a href="?secoes=registros/pesc_caderno">Caderno</a></li>
        <li><a href="?secoes=registros/pesc_fami">Familiar</a></li>
        <li><a href="?secoes=registros/pesc_mercado">Biometria</a></li>
        <!--<li><a href="#">Política de Qualidade</a></li>
        <li><a href="#">Projetos Sociais</a></li>
		<li><a href="#">Resultado da pesquisa de satisfação</a></li>-->
      </ul>
   </li>
   <li class="submenu"><a href="#">Consultas</a>
     <ul class="menu">
     <!-- <li><a href="?secoes=consultas/mercado">Mercado</a></li> -->
     <!--<li><a href="?secoes=consultas/categorias">Categorias</a></li> -->
        <li><a href="?secoes=consultas/registros">Registros</a></li>
        <li><a href="?secoes=consultas/familiar_rel">Relatório Pesca Familiar</a></li>
        <li><a href="?secoes=consultas/res_familiar">Resumo Familiar</a></li>
         <li><a href="?secoes=consultas/pesc_rel">Pescador por dia</a></li>

          <li><a href="?secoes=consultas/caderno_rel">Relatório Caderno</a></li>
           <li><a href="?secoes=consultas/caderno_rel_pesc">Relatório Pescador Caderno</a></li>

              <li><a href="?secoes=consultas/estr_comp">Estrutura de comprimento</a></li>
     <!--       <li><a href="?secoes=consultas/caderno_rel_pesc_rend">Resumo rendimento do caderno</a></li>
        <li><a href="?secoes=consultas/filt">Filt</a></li>
         <li><a href="?secoes=consultas/filt_loc">Filt Loc</a></li>
          <li><a href="?secoes=consultas/filt_loc_faltando">Filt Loc faltando</a></li>
     <li><a href="?secoes=consultas/pesc">Pesc</a></li>
     <li><a href="?secoes=consultas/pesc_falt">Pescadores faltando</a></li>  -->
            <!--  <li><a href="#">Itinerário</a></li>
        <li><a href="#">Mapa das Rotas<sup>novo</sup></a></li> -->
      </ul>
   </li>


  <?php

       }



       if ($nivel == 3 OR $nivel == 99)

  {        ?>

      <li class="submenu"><a href="#">Nova Terra</a>
     <ul class="menu">


        <li><a href="?secoes=consultas/familiar_rel_nt">Relatório Pesca Familiar</a></li>

      </ul>
   </li>
    <?php

       }

    ?>








      <!--<li class="submenu"><a href="#">Contato</a>
      <ul class="menu">
        <li><a href="#">Colabore Conosco</a></li>
        <li><a href="#">Enquetes finalizadas</a></li>
        <li><a href="#">Fale Conosco</a></li>
		<li><a href="#">Trabalhe Conosco</a></li>
      </ul>
   </li>
   <li class="submenu"><a href="#">Localize seu ônibus</a></li>-->
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
</ul>


<!--    </div>  -->
</div>
