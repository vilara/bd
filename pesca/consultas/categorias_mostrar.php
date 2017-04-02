
<script language="JavaScript" type="text/javascript">
function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}
</script>
<div id="tabelas">
        <div id="tabela">
            <table cellspacing="0" align="center" width="100%" class="bordasimples">
                <!--Início dos resultados para Malhadeira    -->
                <?php
                //  $lista1 = new ManipulateData1();
                ?>
                      <tr class="titulo">
                        <td colspan="2">Categorias</td>
                      </tr>

                      <tr class="titulo">
                        <td align="left" >Categoria</td>
                        <td title="Excursão" align="" >Edit</td>
                      </tr>

                      <?php
                      $nn = 1;

                        $sql = mysql_query("SELECT * FROM pesc_especie ORDER BY id_esp ASC");
                        $num = mysql_num_rows($sql);
                        while($registro = mysql_fetch_row($sql))
                            {
                                $categ =  $registro[1];

                                ?>
                                <tr>
                                <td align="left" ><?php echo "$categ"; ?></td>
                                <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_categ_inserir&idd=<?php echo"$id_lim[$nn]";?>&aparelho=<?php echo "$aparelho"; ?>')" >
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>
                                </tr>
                                <?php
                                $nn++;
                            }
                      ?>

            </table>

          <br />
          <div id="rodape_branco">
           TOTAL:&nbsp;<?php echo $nn -1; ?>
          </div>
       </div>
    </div>


