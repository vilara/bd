 <?php // include "log_auth.php"; ?>
<?php // include "log_auth3.php"; ?>
<div id="conteudo1">

<div id="caixa1_1">


        <h3>Cadastro de usuários</h3>

<!--Área editável início     -->

<form id="formulario1" method="post" action="?secoes=cadastros/usu_cad_enviar" enctype="multipart/form-data">
             <fieldset>

              <label for="Nome">
              1) Nome completo:  </label>
              <input name="usu_nome_com" type="text"  id="usu_nome_com" tabindex="1" accesskey="n" size="50" /><span class="notas">(Sem abreviaturas)</span>


              <label for="Primeiro nome">
              2) Primeiro nome: </label>
              <input name="usu_prinome" type="text" id="usu_prinome" tabindex="2" accesskey="p" size="50" /><span class="notas">(Como é conhecido)</span>

               <label for="cpf">
              3) CPF: </label>
              <input name="usu_cpf" type="text" id="usu_cpf" tabindex="3" accesskey="c" size="12" /><span class="notas">(Sem hífen)</span>

              <label for="data_nasc">
              4) Data de nascimento: </label>
              <input name="dia" type="text" id="usu_data_nasc" tabindex="4"  size="2" />
              <input name="mes" type="text" id="usu_data_nasc" tabindex="5"  size="2" />
              <input name="ano" type="text" id="usu_data_nasc" tabindex="6"  size="4" /> <span class="notas">(dd/mm/aaaa)</span>

              <label for="fotografia">
              5) Fotografia: </label>
              <input name="usu_foto" type="file" id="usu_data_nasc" tabindex="7"  size="12" /><span class="notas">(Máximo de 100Kb, Tam: 5cm de larg X 7cm de alt, JPG)</span>

              <label for="citacao">
              6) Maneira como é citado?: </label>
              <input name="usu_cit" type="text" id="citacao" tabindex="8"  size="18" /><span class="notas">(Exemplo:  Torrente-Vilara, G.)</span>


              <!-- <fieldset>
               <label for="logradouro">
              6) Logradouro:  </label>
              <input name="usu_lograd" type="text" id="usu_lograd" tabindex="8" size="40" />

             <label for="logradouro">
              7) Número:  </label>
              <input name="usu_numero" type="text" id="usu_numero" tabindex="9"  size="5" />

              <label for="complemento">
              8) Complemento:  </label>
              <input name="usu_comple" type="text" id="usu_comple" tabindex="10"  size="30" />

               <label for="bairro">
              9) Bairro:  </label>
              <input name="usu_bairro" type="text" id="usu_bairro" tabindex="11" size="30" />

              <label for="cidade">
              10) Cidade:  </label>
              <input name="usu_cidade" type="text" id="usu_cidade" tabindex="12"  size="30" />

<label for="estado">
              11) Estado:  </label>
              <input name="usu_estado" type="text" id="usu_estado" tabindex="13" size="3" />(Sigla)


              <label for="cep">
              12) CEP:  </label>
              <input name="usu_cep" type="text" id="usu_cep" tabindex="14"  size="10" />(69000-999)


              <label for="tel_cel">
              13) Telefone celular:  </label>
              <input name="usu_tel_cel" type="text" id="usu_tel_cel" tabindex="15" size="15" />(92-9999-9999)

              <label for="email">
              14) Email:  </label>
              <input name="usu_email" type="text" id="usu_email" tabindex="16"  size="30" />

              <label for="msn">
              15) Msn:  </label>
              <input name="usu_msn" type="text" id="usu_msn" tabindex="17" size="30" />

              </fieldset>


              <fieldset>
               <label for="banco">
              16) Banco:  </label>
              <input name="usu_banco" type="text" id="usu_banco" tabindex="18"  size="40" />

             <label for="agencia">
              17) Agência:  </label>
              <input name="usu_ag" type="text" id="usu_ag" tabindex="19"  size="10" />

              <label for="conta_corrente">
              18) Conta corrente:  </label>
              <input name="usu_cc" type="text" id="usu_cc" tabindex="20" size="10" />

              </fieldset>-->





              <label for="usuario">
              6) Usuário:  </label>
              <input name="usuario" type="text" id="isiario" tabindex="22" size="15" />
               <label for="senha">
             7) Senha:  </label>
              <input name="usu_senha" type="password" id="usu_senha" tabindex="23" size="10" /><span class="notas">(6 caracteres)</span>
             <label for="conf_senha">
              8) Confirmar senha:  </label>
              <input name="usu_csenha" type="password" id="usu_csenha" tabindex="24"  size="10" />
              </fieldset>

             <input type="submit" value="ENVIAR" class="botao2"  />
             </form>


</div>
<!--Área editável fim     -->
</div>
