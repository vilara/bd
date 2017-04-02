<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Incrições</title>
  <script>
  function valida_envia(){
    //valido o nome
    if (document.fvalida.nome.value.length==0){
       alert("Tem que escrever seu nome")
       document.fvalida.nome.focus()
       return 0;
    }
    else{
		 document.fvalida.submit();
    }
    }
  </script>
  <style type="text/css">
  html, body {margin: 0; padding: 0; font: 85% arial, hevetica, sans-serif; color: #505367; background-color: #fff;}
  #geral{ margin: 0; padding: 0;}
  #form { margin: 10px auto; padding: 0; border: 1px solid #ccc; width: 700px;}
  #form h3 {font-weight: bold; font-size: 100%; text-align: center; color: #990000; margin-top: 5px; text-decoration: underline;}
  #form h4 {font-weight: bold; font-size: 100%; margin-top: 5px; text-decoration: underline; margin: 20px;}
  #form fieldset {border:none; margin-left:20px;}
  #form label { margin: 0; padding: 0; display:  block; margin-top: 15px; color: #222222; font-family:  Arial; color: #555555; }
  .formu { margin: 0; padding: 1px; border: 1px solid #999; background: #E8E8E8; font-size: 11px; font-family:  Arial; margin-top: 4px;}
  input#enviar { width: 75px; height: 18px; display: block; border:  1px solid #999; margin: 0 auto; margin-top: 20px; color: #505367;}
  #form .sb { margin: 0; padding: 1px; font-size: 11px; font-family:  Arial; margin-top: 4px;}

  </style>
</head>

<body>
<div id="gerl">
<div id="form">

<h3>Inscrições para a Jornada Amazonense de Educação a Distância </h3>

<center>

<?php


   $corpo = "Formulário enviado\n";
   $corpo .= "Nome completo: " . $_POST["nome"] . "\n";
   $corpo .= "CPF: " . $_POST["cpf"] . "\n";
   $corpo .= "Identidade: " . $_POST["doc"] . $_POST["doctipo"] . "\n";
   $corpo .= "Formação: " . $_POST["formacao"] . "\n";
   $corpo .= "Empresa: " . $_POST["nomeemp"] . "\n";
   $corpo .= "Nome fantasia: " . $_POST["nomefantasia"] . "\n";
   $corpo .= "CNPJ: " . $_POST["cnpj"] . "\n";
   $corpo .= "Ramo: " . $_POST["ramo"] . "\n";
   $corpo .= "Departamento: " . $_POST["departamento"] . "\n";
   $corpo .= "Cargo: " . $_POST["cargo"] . "\n";
   $corpo .= "Setor: " . $_POST["setor"] . "\n";
   $corpo .= "Interesse: " . $_POST["int1"] . $_POST["int2"] . $_POST["int3"] . $_POST["int4"] . "\n";
   $corpo .= "Com/Res: " . $_POST["tipoendereco"] . "\n";
   $corpo .= "Endereço: " . $_POST["endereco"] . "\n";
   $corpo .= "Nr: " . $_POST["numero"] . "\n";
   $corpo .= "Complemento: " . $_POST["complemento"] . "\n";
   $corpo .= "Bairro: " . $_POST["bairro"] . "\n";
   $corpo .= "CEP: " . $_POST["cep"] . "\n";
   $corpo .= "Cidade: " . $_POST["cidade"] . "\n";
   $corpo .= "Estado: " . $_POST["uf"] . "\n";
   $corpo .= "País: " . $_POST["pais"] . "\n";
   $corpo .= "Tel Com: " . $_POST["telefonepaisemp"] . $_POST["telefoneestadoemp"] . $_POST["telefoneemp"] . "\n";
   $corpo .= "Tel Res: " . $_POST["telefonepais"] . $_POST["telefoneestado"] . $_POST["telefone"] . "\n";
   $corpo .= "Tel Fax: " . $_POST["faxpais"] . $_POST["faxestado"] . $_POST["fax"] . "\n";
   $corpo .= "Tel Cel: " . $_POST["celularpais"] . $_POST["celularestado"] . $_POST["celular"] . "\n";
   $corpo .= "Email Com: " . $_POST["emailemp"] . "\n";
   $corpo .= "Email Pess: " . $_POST["email"] . "\n";

   //envio o correio...
    // echo "$corpo";
  mail("majvilara@uol.com.br","Formulário recebido",$corpo);

   //agradeço pelo envio
    echo "Formulário enviado corretamente!.";


?></center>
</div>
</div>



</body>

</html>