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
$usu_nome_com = $_POST["usu_nome_com"];
$usu_prinome = $_POST["usu_prinome"];
$usu_cpf = $_POST["usu_cpf"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$usu_data_nasc = "$ano-$mes-$dia";
$usu_cit = $_POST["usu_cit"];
$funcao = $_POST["funcao"];
$institu = $_POST["institu"];
$lp = $_POST["lp"];
$titulacao = $_POST["titulacao"];
$email = $_POST["email"];
$lates = $_POST["lates"];
$subprog = $_POST["subprog"];
$nivel = $_POST["nivel"];

/*$usu_lograd = $_POST["usu_lograd"];
$usu_comple = $_POST["usu_comple"];
$usu_numero = $_POST["usu_numero"];
$usu_bairro = $_POST["usu_bairro"];
$usu_cidade = $_POST["usu_cidade"];
$usu_estado = $_POST["usu_estado"];
$usu_cep = $_POST["usu_cep"];
$usu_tel_cel = $_POST["usu_tel_cel"];
$usu_email = $_POST["usu_email"];
$usu_msn = $_POST["usu_msn"];
$usu_banco = $_POST["usu_banco"];
$usu_ag = $_POST["usu_ag"];
$usu_cc = $_POST["usu_cc"];*/

$usu_senha = $_POST["usu_senha"];
$usu_csenha = $_POST["usu_csenha"];
$usu_usuario = $_POST["usuario"];

$login = new ManipulateData();
$login->setTable("usu_senha");
$login->setFieldId("usu_usuario");
$num = $login->getContarDados("$usu_usuario");


if ($num != 0)
{echo "<div align='center'><h2>Nome de usu&#225;rio j&#225; &#233; cadastrado. Escolha outro nome.</h2></div>'";$erro=1;}
else{



if ($usu_senha != $usu_csenha)
{echo "<div align='center'><h2>Erro na repeti&ccedil;&atilde;o da Senha, tente novamente</h2></div>"; $erro=1;}
else
{

if (strlen($usu_senha)<6 || strlen($usu_senha)>6)
{echo "<div align='center'><h2>Favor preencher a senha com 6 caracteres</h2></div>"; $erro=1;}
else{




/*
if (empty($circulo))
   {echo "<div align='center'><b>Favor digitar seu C&iacute;rculo Hier&aacute;quico<br></b></div>";$erro=1;}
    else{
          if (empty($posto_grad))
	     {echo "<div align='center'><b>Favor preencher seu Posto ou Grad<br></div></b>"; $erro=1;}
    else{
	if (empty($arma_q_sv))
	{echo "<div align='center'><b>Favor digitar sua Arma, Quadro ou Servi&ccedil;o<br></div></b>"; $erro=1;}
        else{
	    if (empty($nome_completo))
	    {echo "<div align='center'><b>Favor preencher seu Nome Completo<br></div></b>"; $erro=1;}
	    else{
	         if (empty($nome_guerra))
	         {echo "<div align='center'><b>Favor preencher seu Nome de Guerra ou Primeiro Nome(caso seja civil)<br></div></b>"; $erro=1;}
		  else{
	               if (empty($secao))
	               {echo "<div align='center'><b>Favor preencher seu Local de Trabalho<br></div></b>"; $erro=1;}
                       else{
	                   if (empty($funcao))
	                   {echo "<div align='center'><b>Favor preencher sua Fun&ccedil;&atilde;o<br></div></b>"; $erro=1;}
			   else{
	                        if (empty($identidade))
	                           {echo "<div align='center'><b>Favor preencher sua Identidade<br></div></b>"; $erro=1;}
				 else{
	                             if (empty($dia))
	                             {echo "<div align='center'><b>Favor preencher o dia do seu nascimento<br></div></b>"; $erro=1;}
                                     else{
	                                 if (empty($mes))
	                                  {echo "<div align='center'><b>Favor preencher o m&ecirc;s do seu nascimento<br></div></b>"; $erro=1;}
 					  else{
	                                      if (empty($ano))
	                                      {echo "<div align='center'><b>Favor preencher o ano do seu nascimento<br></div></b>"; $erro=1;}
 					      else{
	                                          if (empty($logradouro))
	                                          {echo "<div align='center'><b>Favor preencher o tipo de Logradouro onde mora<br></div></b>"; $erro=1;}
						  else{
	                                              if (empty($nome_lograd))
	                                              {echo "<div align='center'><b>Favor preencher o nome do Logradouro onde mora<br></div></b>"; $erro=1;}
 						       else{
	                                                  if (empty($numero))
	                                                   {echo "<div align='center'><b>Favor preencher o n&uacute;mero de sua resid&ecirc;ncia<br></div></b>"; $erro=1;}
else{
	                                                  if (empty($bairro))
	                                                   {echo "<div align='center'><b>Favor preencher o Bairro<br></div></b>"; $erro=1;}
				    else{
	                                 if (empty($cidade))
	                                 {echo "<div align='center'><b>Favor preencher o nome de sua Cidade<br></div></b>"; $erro=1;}
 					else{
	                                    if (empty($estado))
	                                    {echo "<div align='center'><b>Favor preencher a Sigla de seu Estado<br></div></b>"; $erro=1;}
					else{
	                                    if (empty($cep))
	                                    {echo "<div align='center'><b>Favor preencher o CEP de sua resid&ecirc;ncia<br></div></b>"; $erro=1;}
					else{
	                                    if (empty($cpf))
	                                    {echo "<div align='center'><b>Favor preencher seu CPF<br></div></b>"; $erro=1;}
					else{
					    if (strlen($cpf)!=11)
					    {echo "<div align='center'><b>Favor preencher um CPF v&aacute;lido e sem H&iacute;fen<br></div></b>"; $erro=1;}
					else{
	                                    if (empty($senha))
	                                    {echo "<div align='center'><b>Favor preencher sua Senha<br></div></b>"; $erro=1;}
					else{
					    if (strlen($senha)<6 || strlen($senha)>6)
					    {echo "<div align='center'><b>Favor preencher a senha com 6 caracteres<br></div></b>"; $erro=1;}
					else{




*/

$pnot = $_FILES["usu_foto"]["tmp_name"];
$ptipo = $_FILES["usu_foto"]["type"];
$pname = $_FILES["usu_foto"]["name"];
$psize = $_FILES["usu_foto"]["size"];
$perror = $_FILES["usu_foto"]["error"];
$uploadfile = 'img/fotos';
move_uploaded_file($pnot, $uploadfile . $pname);
$usu_foto = "$pname";

$cadastra = new ManipulateData();
$cadastra->setTable("usu_dados");
$cadastra->setFields("id_usu_dados,usu_nome_com,usu_prinome,usu_cpf,usu_data_nasc,usu_foto,usu_cit,funcao,institu,lp,titulacao,email,lates");
$cadastra->setDados("NULL , '$usu_nome_com', '$usu_prinome', '$usu_cpf', '$usu_data_nasc', '$usu_foto', '$usu_cit', '$funcao'
, '$institu', '$lp', '$titulacao', '$email', '$lates'");
$cadastra->insert();

$dado_fim = new ManipulateData();
$dado_fim->setTable("usu_dados");
$dado_fim->setFieldOrder("id_usu_dados");
$dado_fim->setFieldID("0");$id_usu = $dado_fim->getLastId();

$cadastra->setTable("usu_senha");
$cadastra->setFields("id_usu_senha,usu_cpf,usu_senha,usu_nivel,usu_usuario,subpro,id_usu");
$cadastra->setDados("NULL , '$usu_cpf', MD5( '$usu_senha' ), '$nivel', '$usu_usuario', '$subprog', '$id_usu'");
$cadastra->insert();

echo "<div align='center'><h3>Parabéns! seu cadastro foi inserido com sucesso. </h3></div>";
$flag = 1;

} }}


//echo "$usu_ag-$usu_bairro-$usu_banco-$usu_cc-$usu_cep-$usu_cidade-$usu_comple-$usu_cpf-$usu_csenha-$usu_data_nasc-$usu_email-$usu_estado-$usu_foto-$usu_lograd-$usu_msn-$usu_nome_com-$usu_numero-$usu_prinome-$usu_senha-$usu_tel_cel";
?>



<!--Área editável fim     -->

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
