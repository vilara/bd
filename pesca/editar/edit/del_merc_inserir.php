<style type="text/css">
#edicao { margin: 0; padding: 0; width: 100%;}
#edicao h3 { font-size: 120%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:150px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>


       <div id="edicao">

<?php
$aparelho = $_GET["aparelho"];
$id = $_GET["idd"];
$lista = new ManipulateData();


//Editar aparelho Pesca Mercado----------------------------------------------------- início
if ($aparelho  == "Biometria")
{

?>
<h3>Deseja realmente excluir este registro?</h3>
<form id="forms" method="post" action="index.php?secoes=edit/del_merc_enviar&idd=<?php echo"$id";?>&aparelho=Biometria" enctype="multipart/form-data">


  <div id="botao1">   <input type="submit" value="SIM" /> &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="button" value="NÃO" onClick="window.close()">
  <!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>
  <?php
  }
//Editar aparelho Pesca Mercado----------------------------------------------------- fim






//Editar aparelho Pesca familiar----------------------------------------------------- início
else if ($aparelho  == "Familiar")
{



?>
<h3>Deseja realmente excluir este registro?</h3>
<form id="forms" method="post" action="index.php?secoes=edit/del_merc_enviar&idd=<?php echo"$id";?>&aparelho=Familiar" enctype="multipart/form-data">


  <div id="botao1">   <input type="submit" value="SIM" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="NÃO" onClick="window.close()">  <!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>

<?php
  }
//Editar aparelho Pesca Familiar----------------------------------------------------- fim








//Editar aparelho Pesca Caderno----------------------------------------------------- início
else if ($aparelho  == "Caderno")
{



?>
<h3>Deseja realmente excluir este registro?</h3>
<form id="forms" method="post" action="index.php?secoes=edit/del_merc_enviar&idd=<?php echo"$id";?>&aparelho=Caderno" enctype="multipart/form-data">


  <div id="botao1">   <input type="submit" value="SIM" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="button" value="NÃO" onClick="window.close()">  <!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">Voltar</a>--></div>
             </form>

<?php
  }
//Editar aparelho Pesca Familiar----------------------------------------------------- fim
?>







</div>
