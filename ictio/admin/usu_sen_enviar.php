<style type="text/css">
#edicao { margin: 0; padding: 0; width: 500px; background: #DFF4DF; border: 1px solid #000000; margin: 0 auto; margin-top: 5px;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao h4 { font-size: 100%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:50px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>

 <div id="edicao">
      <!--  <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>       -->
        <h3>Cadastro de nova senha</h3>

<!--Área editável início     -->
<?php
$id = $_POST["usu"];
$usu_senha = $_POST["usu_senha"];
$usu_csenha = $_POST["usu_csenha"];

if (empty($id)){echo "<div align='center'><b>Favor escolher usuário<br></div></b>"; $erro=1;}
else{
if ($usu_senha != $usu_csenha){echo "<div align='center'><h2>Erro na repeti&ccedil;&atilde;o da Senha, tente novamente</h2></div>"; $erro=1;}
else
{
if (strlen($usu_senha)<6 || strlen($usu_senha)>6){echo "<div align='center'><h2>Favor preencher a senha com 6 caracteres</h2></div>"; $erro=1;}
else{
$res1 = mysql_query("UPDATE `ictiomadeira`.`usu_senha` SET `usu_senha` = MD5('$usu_senha') WHERE `usu_senha`.`id_usu` = $id LIMIT 1 ;");
echo "<div align='center'><h3>Parabéns! Nova senha cadastrada com sucesso. </h3></div>";
$flag = 1;
} }}
?>

<?php
if ($flag == 1)
{
?>
<div id="botao1"><a href="index.php">Início</a></div>
<?php
}
else {
?>
<div id="botao1"><a href="javascript:history.back();">Voltar</a></div>
<?php 
}
?>
</div>
