<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Incrições</title>
  <script>
  function valida_envia(){
    //valido o nome
    if (document.fvalida.nome.value.length==0 || document.fvalida.nome.value.length<8 ){
       alert("Favor preencher o campo 'Nome completo' corretamente!")
       document.fvalida.nome.focus()
       return false;
    }

    if (document.fvalida.cpf.value.length==0 || document.fvalida.cpf.value.length<11 || document.fvalida.cpf.value.length>11){
       alert("Favor preencher o campo 'CPF' corretamente!")
       document.fvalida.cpf.focus()
       return false;
    }


    if (document.fvalida.doc.value.length==0){
       alert("Favor preencher o campo 'Documento de Identidade' corretamente!")
       document.fvalida.doc.focus()
       return false;
    }

    if (document.fvalida.doctipo.value.length==0){
       alert("Favor preencher o campo 'Tipo do documento de Identidade' corretamente!")
       document.fvalida.doctipo.focus()
       return false;
    }

    if (document.fvalida.formacao.value.length==0){
       alert("Favor preencher o campo 'Formação' corretamente!")
       document.fvalida.formacao.focus()
       return false;
    }

    if (document.fvalida.endereco.value.length==0){
       alert("Favor preencher o campo 'Endereço' corretamente!")
       document.fvalida.endereco.focus()
       return false;
    }
    if (document.fvalida.numero.value.length==0){
       alert("Favor preencher o campo 'Número' corretamente!")
       document.fvalida.numero.focus()
       return false;
    }

    if (document.fvalida.complemento.value.length==0){
       alert("Favor preencher o campo 'Complemento' corretamente!")
       document.fvalida.complemento.focus()
       return false;
    }

    if (document.fvalida.bairro.value.length==0){
       alert("Favor preencher o campo 'Bairro' corretamente!")
       document.fvalida.bairro.focus()
       return false;
    }

    if (document.fvalida.cep.value.length==0){
       alert("Favor preencher o campo 'CEP' corretamente!")
       document.fvalida.cep.focus()
       return false;
    }

    if (document.fvalida.cidade.value.length==0){
       alert("Favor preencher o campo 'Cidade' corretamente!")
       document.fvalida.cidade.focus()
       return false;
    }

    if (document.fvalida.uf.value.length==0){
       alert("Favor preencher o campo 'Estado' corretamente!")
       document.fvalida.uf.focus()
       return false;
    }

    if (document.fvalida.pais.value.length==0){
       alert("Favor preencher o campo 'País' corretamente!")
       document.fvalida.pais.focus()
       return false;
    }

    if (document.fvalida.telefonepaisemp.value.length==0 || document.fvalida.telefoneestadoemp.value.length==0 || document.fvalida.telefoneemp.value.length==0){
       alert("Favor preencher todos os campos de 'Telefone comercial' corretamente!")
       document.fvalida.telefonepaisemp.focus()
       return false;
    }

    if (document.fvalida.telefonepais.value.length==0 || document.fvalida.telefoneestado.value.length==0 || document.fvalida.telefone.value.length==0){
       alert("Favor preencher todos os campos de 'Telefone residencial' corretamente!")
       document.fvalida.telefonepais.focus()
       return false;
    }

    if (document.fvalida.faxpais.value.length==0 || document.fvalida.faxestado.value.length==0 || document.fvalida.fax.value.length==0){
       alert("Favor preencher todos os campos de 'Telefone FAX' corretamente!")
       document.fvalida.faxpais.focus()
       return false;
    }

    if (document.fvalida.celularpais.value.length==0 || document.fvalida.celularestado.value.length==0 || document.fvalida.celular.value.length==0){
       alert("Favor preencher todos os campos de 'Telefone Celular' corretamente!")
       document.fvalida.celularpais.focus()
       return false;
    }

    if (document.fvalida.emailemp.value.length==0 || document.fvalida.emailemp.value.indexOf('@')==-1 || document.fvalida.emailemp.value.indexOf('.')==-1 )
{
       alert("Favor preencher o campo 'E-mail da empresa' corretamente!")
       document.fvalida.emailemp.focus()
       return false;
    }

    if (document.fvalida.email.value.length==0 || document.fvalida.email.value.indexOf('@')==-1 || document.fvalida.email.value.indexOf('.')==-1 ){
       alert("Favor preencher o campo 'E-mail pessoal' corretamente!")
       document.fvalida.email.focus()
       return false;
    }




     /*

    */

    }
  </script>
  <style type="text/css">
  html, body {margin: 0; padding: 0; font: 85% arial, hevetica, sans-serif; color: #505367; background-color: #fff;}
  #geral{ margin: 0; padding: 0;}
  #form { margin: 10px auto; padding: 0; border: 1px solid #ccc; width: 600px;}
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

                <form id="forms" name="fvalida" method="post" action="formulario1_enviar.php" onSubmit="return valida_envia();">
                                  <table align="center" border="0" cellpadding="3" cellspacing="1" width="100%">
                                    <tbody><tr>
                                      <td colspan="2" align="center" height="18">
									<font style="font-size: 9pt;">* Campos de preenchimento obrigatório!
										</font></td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" align="left" height="25">
                                        <span class="style1"><b>Informações
                                          Pessoais </b> </span></td>
                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Tratamento</span></td>

                                      <td align="left" width="70%" height="25"><span class="style1">
                                        <select name="tratamento" size="1">
                                          <option value="">Selecione</option>
                                          <option value="Sr.">Sr.</option>
                                          <option value="Sra.">Sra.</option>
                                          <option value="Prof.">Prof.</option>
                                          <option value="Profa.">Profa.</option>

                                          <option value="Dr.">Dr.</option>
                                          <option value="Dra.">Dra.</option>
                                          <option value="Prof. Dr.">Prof. Dr.</option>
                                          <option value="Profa. Dra.">Profa. Dra.</option>
                                          <option value="Exmo. Sr.">Exmo. Sr.</option>
                                          <option value="Exma. Sra.">Exma. Sra.</option>

                                          <option value="Ilmo. Sr.">Ilmo. Sr.</option>
                                          <option value="Ilma. Sra.">Ilma. Sra.</option>
                                          <option value="Magnífico Reitor">Magnífico
                                            Reitor</option>
                                          <option value="Magnífica Reitora">Magnífica
                                            Reitora</option>
                                          <option value="Outros">Outros</option>
                                        </select>

                                      </span> </td>
                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Nome
                                        completo *</span></td>
                                      <td align="left" height="25">
                                        <input name="nome" id="nome" size="40" maxlength="255" type="text">                                      </td>
                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">C.P.F.
                                        *</span></td>

                                      <td align="left" width="70%" height="25">
                                        <input name="cpf" size="10" maxlength="11" type="text">(Não utilizar hífen)                                        </td>
                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Documento
                                        de identidade *</span></td>
                                      <td align="left" width="70%" height="25">
                                        <span class="style1">
                                        <input name="doc" size="15" maxlength="255" type="text">
                                        Tipo
                                        <input name="doctipo" size="20" maxlength="255" type="text">

                                        </span></td>
                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Formação
                                        acadêmica *</span></td>
                                      <td align="left" width="70%" height="25">
                                        <input name="formacao" size="30" maxlength="255" type="text">                                        </td>
                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="34"><span class="style1"> Nome da Empresa/ Instituição</span></td>

                                      <td align="left" width="70%" height="34">
                                        <input name="nomeemp" size="40" maxlength="255" type="text">                                        </td>
                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Nome
                                        Fantasia</span></td>
                                      <td align="left" height="25">
                                        <span class="style1">
                                        <input name="nomefantasia" size="40" maxlength="255" type="text">
                                        <br>

                                        Campo
                                        utilizado para identificar sua Empresa/
                                        Instituição em crachás </span></td>
                                    </tr>
                                    <tr>
                                      <td align="left" height="25"><span class="style1">CNPJ</span></td>
                                      <td align="left" height="25">
                                        <input name="cnpj" id="cnpj" size="25" maxlength="255" type="text">                                      </td>
                                    </tr>

                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Ramo
                                        de Atividade</span></td>
                                      <td align="left" width="70%" height="25">
                                        <input name="ramo" size="40" maxlength="255" type="text">                                        </td>
                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Departamento</span></td>
                                      <td align="left" width="70%" height="25">
                                        <input name="departamento" size="40" maxlength="255" type="text">                                        </td>

                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Cargo</span></td>
                                      <td align="left" width="70%" height="25">
                                        <input name="cargo" size="40" maxlength="255" type="text">                                        </td>
                                    </tr>
                                    <tr>
                                      <td align="left" height="25"><span class="style1">Setor</span></td>
                                      <td align="left" height="25"><span class="style1">

                                        <select name="setor" size="1" id="setor">
                                          <option value="">Selecione</option>
                                          <option value="Pública">Pública</option>
                                          <option value="Privada">Privada</option>
                                          <option value="ONG">ONG</option>
                                        </select>
                                      </span> </td>

                                    </tr>
                                    <tr>
                                      <td align="left" height="25"><span class="style1">Área
                                        de Interesse</span></td>
                                      <td align="left" height="25">

                                        <input type="checkbox" name="int1" value="Educação média e fundamental">Educação média e fundamental<br />
                                        <input type="checkbox" name="int2" value="Educação tecnológica / profissionalizante">Educação tecnológica / profissionalizante<br />
                                        <input type="checkbox" name="int3" value="Educação Universitária">Educação Universitária<br />
                                        <input type="checkbox" name="int4" value="Educação corporativa">Educação corporativa<br />


                                        </td>
                                    </tr>

                                    <tr>
                                      <td colspan="2" align="left" height="25">
                                        <span class="style1"><b>Informações
                                          para correspondência</b> </span></td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" align="left" height="25">


                                          <span class="style1">
                                          <input name="tipoendereco" value="Comercial" checked="checked" type="radio">
                                          Comercial
                                          <input name="tipoendereco" value="Residencial" type="radio">

                                          Residencial                                      </span></td>
                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Endereço
                                        *</span></td>
                                      <td align="left" width="70%" height="25">
                                        <input name="endereco" size="40" maxlength="255" type="text">                                        </td>
                                    </tr>
                                    <tr>
                                      <td align="left" height="25"><span class="style1">N°
                                        *</span></td>

                                      <td align="left" height="25">
                                        <input name="numero" size="7" maxlength="255" type="text">                                        </td>
                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Complemento</span></td>
                                      <td align="left" width="70%" height="25">
                                        <input name="complemento" size="40" maxlength="255" type="text">                                        </td>
                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Bairro
                                        *</span></td>

                                      <td align="left" width="70%" height="25">
                                        <input name="bairro" size="40" maxlength="255" type="text">                                        </td>
                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">CEP
                                        *</span></td>
                                      <td align="left" width="70%" height="25">
                                        <span class="style1">
                                        <input name="cep" size="10" maxlength="255" type="text">
                                        (XXXXX-XXX)</span></td>

                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Cidade
                                        *</span></td>
                                      <td align="left" width="70%" height="25">
                                        <input name="cidade" size="30" maxlength="255" type="text">                                        </td>
                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Estado
                                        *</span></td>
                                      <td align="left" width="70%" height="25"><span class="style1">

                                        <select name="uf" size="1">
                                          <option value="">Selecione</option>
                                          <option value="Exterior">Exterior</option>
                                          <option value="AC">AC</option>
                                          <option value="AL">AL</option>
                                          <option value="AM">AM</option>

                                          <option value="AP">AP</option>
                                          <option value="BA">BA</option>
                                          <option value="CE">CE</option>
                                          <option value="DF">DF</option>
                                          <option value="ES">ES</option>
                                          <option value="GO">GO</option>

                                          <option value="MA">MA</option>
                                          <option value="MS">MS</option>
                                          <option value="MT">MT</option>
                                          <option value="MG">MG</option>
                                          <option value="PA">PA</option>
                                          <option value="PB">PB</option>

                                          <option value="PE">PE</option>
                                          <option value="PI">PI</option>
                                          <option value="PR">PR</option>
                                          <option value="RJ">RJ</option>
                                          <option value="RN">RN</option>
                                          <option value="RO">RO</option>

                                          <option value="RR">RR</option>
                                          <option value="RS">RS</option>
                                          <option value="SC">SC</option>
                                          <option value="SP">SP</option>
                                          <option value="SE">SE</option>
                                          <option value="TO">TO</option>

                                        </select>
                                      </span> </td>
                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">País
                                        *</span></td>
                                      <td align="left" width="70%" height="25">
                                        <input name="pais" size="30" maxlength="255" type="text">                                        </td>
                                    </tr>

                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Telefone
                                        Comercial *</span></td>
                                      <td align="left" width="70%" height="25">
                                        <span class="style1">
                                        <input name="telefonepaisemp" size="3" maxlength="255" type="text">
                                        <input name="telefoneestadoemp" size="3" maxlength="255" type="text">
                                        <input name="telefoneemp" size="15" maxlength="255" type="text">
                                        [PAÍS] [ESTADO] [TELEFONE]</span></td>
                                    </tr>

                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Telefone
                                        Residencial *</span></td>
                                      <td align="left" width="70%" height="25">
                                        <span class="style1">
                                        <input name="telefonepais" size="3" maxlength="255" type="text">
                                        <input name="telefoneestado" size="3" maxlength="255" type="text">
                                        <input name="telefone" size="15" maxlength="255" type="text">
                                        [PAÍS] [ESTADO] [TELEFONE]</span></td>
                                    </tr>

                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Fax
                                        * </span></td>
                                      <td align="left" width="70%" height="25">
                                        <span class="style1">
                                        <input name="faxpais" size="3" maxlength="255" type="text">
                                        <input name="faxestado" size="3" maxlength="255" type="text">
                                        <input name="fax" size="15" maxlength="255" type="text">
                                        [PAÍS] [ESTADO] [FAX]</span></td>
                                    </tr>

                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">Celular
                                        * </span></td>
                                      <td align="left" width="70%" height="25">
                                        <span class="style1">
                                        <input name="celularpais" size="3" maxlength="255" type="text">
                                        <input name="celularestado" size="3" maxlength="255" type="text">
                                        <input name="celular" size="15" maxlength="255" type="text">
                                        [PAÍS] [ESTADO] [CELULAR]</span></td>
                                    </tr>

                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">E-mail
                                        Comercial *</span></td>
                                      <td align="left" width="70%" height="25">
                                        <input name="emailemp" size="30" maxlength="255" type="text">                                        </td>
                                    </tr>
                                    <tr>
                                      <td align="left" width="28%" height="25"><span class="style1">E-mail
                                        pessoal *</span></td>
                                      <td align="left" width="70%" height="25">
                                        <input name="email" size="30" maxlength="255" type="text">                                        </td>

                                    </tr>
                                  </tbody></table>

                               <br>

                                <center><input value="Enviar os Dados" name="enviar" type="submit"> </center>
                            </form>


</div>
</div>



</body>

</html>