<style type="text/css">
#edicao { margin: 0; padding: 0; width: 500px; background: #DFF4DF; border: 1px solid #000000; margin: 0 auto; margin-top: 5px;}
#edicao h3 { font-size: 200%; text-align: center; text-decoration: underline;}
#edicao fieldset {border:none; margin-left:150px; text-align: left;}
#edicao label { display:block; font-weight:bold; margin-top:20px;}
#botao1 { color: #FFFF33; text-align: center;}
#botao1 a { text-align: center; text-decoration: none; color: #000000; font-weight: bold;}
#edicao input { margin:0; padding:0; border:1px solid #616161; margin-left:0px; }
#edicao select { border:1px solid #616161; }
</style>

<?php include "log_auth3.php"; ?>
<?php // include "../log_auth3.php"; ?>
   <div id="edicao">

       <!-- <h1>Banco de dados do Laboratório de Ictiologia da UNIR</h1>       -->
        <h3>Cadastro de usuários</h3>

<!--Área editável início     -->

<form id="formulario1" method="post" action="?secoes=admin/usu_cad_enviar" enctype="multipart/form-data">
             <fieldset>

              <label for="Nome">
              1) Nome completo:  </label>
              <input name="usu_nome_com" type="text"  id="usu_nome_com" tabindex="1" accesskey="n" size="50" /><span class="notas">(Sem abreviaturas)</span>


        <!--      <label for="Primeiro nome">
              2) Primeiro nome: </label>
              <input name="usu_prinome" type="text" id="usu_prinome" tabindex="2" accesskey="p" size="50" /><span class="notas">(Como é conhecido)</span>
-->
            <!--   <label for="cpf">
              3) CPF: </label>
              <input name="usu_cpf" type="text" id="usu_cpf" tabindex="3" accesskey="c" size="12" /><span class="notas">(Sem hífen)</span>

              <label for="data_nasc">
              4) Data de nascimento: </label>
              <input name="dia" type="text" id="usu_data_nasc" tabindex="4"  size="2" />
              <input name="mes" type="text" id="usu_data_nasc" tabindex="5"  size="2" />
              <input name="ano" type="text" id="usu_data_nasc" tabindex="6"  size="4" /> <span class="notas">(dd/mm/aaaa)</span>
-->
              <label for="fotografia">
              2) Fotografia: </label>
              <input name="usu_foto" type="file" id="usu_data_nasc" tabindex="7"  size="12" /><span class="notas">(Máximo de 100Kb, Tam: 5cm de larg X 7cm de alt, JPG)</span>

              <label for="citacao">
              3) Maneira como é citado?: </label>
              <input name="usu_cit" type="text" id="citacao" tabindex="8"  size="18" /><span class="notas">(Exemplo:  Torrente-Vilara, G.)</span>


              <label for="funcao">
              4) Função: </label>
              <input name="funcao" type="text" id="funcao" tabindex="9"  size="30" />


              <label for="citacao">
              5) Instituição: </label>
              <input name="institu" type="text" id="institu" tabindex="10"  size="30" />


              <label for="citacao">
              6)Linha de pesqisa: </label>
              <textarea name="lp" id="lp" cols="35" rows="4" tabindex="11"></textarea>

              <label for="titulacao">
              7) Titulação: </label>
              <input name="titulacao" type="text" id="titulacao" tabindex="12"  size="50" />

              <label for="email">
              8) Email:  </label>
              <input name="email" type="text" id="email" tabindex="13"  size="30" />

               <label for="lates">
             9) Nr Curriculun Lates:  </label>
              <input name="lates" type="text" id="lates" tabindex="14"  size="30" />


                <label for="subprog"> 13) Subprograma:  </label>
              <SELECT name='subprog' type='text' id='subprog' tabindex="15">
             <!-- <option value='no'>Selecione</option>     -->
              <!--  <option value='ictio'>Ictiologia</option>   -->
                 <option value='pesca'>Pesca</option>
               <!--   <option value='plancton'>Ictioplâncton</option>  -->
               </select>

               <label for="nivel"> 14) Nível:  </label>
              <SELECT name='nivel' type='text' id='nivel' tabindex="15">

                <option value='1'>Usuário</option>
                 <option value='2'>Gerente</option>
                <!--  <option value='3'>Administrador</option>  -->
               </select>

              <label for="usuario">
              10) Login:  </label>
              <input name="usuario" type="text" id="isiario" tabindex="15" size="15" />
               <label for="senha">
             11) Senha:  </label>
              <input name="usu_senha" type="password" id="usu_senha" tabindex="16" size="10" /><span class="notas">(6 caracteres)</span>
             <label for="conf_senha">
             12) Confirmar senha:  </label>
              <input name="usu_csenha" type="password" id="usu_csenha" tabindex="17"  size="10" />
              </fieldset>

            <center> <input type="submit" value="ENVIAR" class="botao2"  /> </center>
             </form>



<!--Área editável fim     -->
</div>
