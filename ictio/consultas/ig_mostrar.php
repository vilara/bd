<script language="JavaScript" type="text/javascript">

function janelaSecundaria (URL){
   window.open(URL,"janela1","width=820,height=600,scrollbars=YES")
}

</script>
 <?php include "log_auth3.php"; ?> 
<div id="conteudo">
<h3>Consulta Igarapés</h3>
</div>

<div id="tabelas">
<div id="tabela">
<table cellspacing="0" align="center" width="80%" class="bordasimples">

<tr class="titulo">
<td >Nr</td>
   <td  >Aparelho</td>
    <td  >Espécie</td>
    <td  >Qtde</td>
    <td  >Codigo de Campo</td>
    <td   >Biomassa</td>
    <td   >Gen</td>

     <td  >Foto</td>
    <td  >Voucher</td> <td   >Determinador</td>
    <td  >Obs</td>
     <td  >Edit</td>
  </tr>


<?php
if ($aparelho == "Todos"){$app = "";}
else {$app = " AND lim_ig_aparelho = '$aparelho'";}
$codd = " AND ig_lim = '$cod'";
                         if ($cod == "Todos")
                        {
                         $sql11 = mysql_query("SELECT * FROM tb_limno_ig WHERE id_tb_limno > 0 $app");
                         $num11 = mysql_num_rows($sql11);
                         while($registro11 = mysql_fetch_row($sql11))
                            {
                            $cod1 =  $registro11[0];
                            $codd .= " OR ig_lim = $cod1";
                            }
                        }
                        else {}

 // echo "$app - $num11 - $codd";
$res = mysql_query("SELECT * FROM tb_ig_biotico WHERE id_tb_ig > 0  $codd ORDER BY id_tb_ig");
while($registro = mysql_fetch_row($res))
 {
 		$id = $registro[0];
        $esp = $registro[1];
         $lista = new ManipulateData1();
         $NomeEsp = $lista->NomeEspecie($esp);
        $qtde = $registro[2];
          $lim = $registro[3];

           $login->setTable("tb_limno_ig");
            $login->setFieldId("id_tb_limno ='$lim'");
             $login->setFieldNr("4"); $NomeCod = $login->data_filter();
                $login->setFieldNr("1"); $aparr = $login->data_filter();

        $bio = $registro[4];
           $gen = $registro[5];
           $foto = $registro[6];
           $voucher = $registro[7];
           $nr = $registro[8];
           $det = $registro[9];
           $obs = $registro[10];



// Definição da cor da linha alternada ------- end -------
?>
<tr>
 <td align="left" ><?php echo"$nr"; ?></td>
  <td align="left"  ><?php echo"$aparr"; ?></td>
    <td align="left"  ><?php echo"$NomeEsp"; ?></td>
    <td align="left"  ><?php echo"$qtde"; ?></td>
    <td align="left"   ><?php echo"$NomeCod"; ?></td>
    <td align="left"  ><?php echo"$bio"; ?></td>
    <td align="left"  ><?php echo"$gen"; ?></td>
     <td align="left"  ><?php echo"$foto"; ?></td>
    <td align="left"  ><?php echo"$voucher"; ?></td>
        <td align="left"  ><?php echo"$det"; ?></td>
         <td align="left"  ><?php echo"$obs"; ?></td>
    <td title="Excursão" align="" ><a href="javascript:janelaSecundaria('editar/index.php?secoes=edit/editar_ig_inserir&idd=<?php echo"$id";?>')" >
                                <img src='img/edit.png' width='16' height='16' alt='Editar' border="0" /></a></td>


  </tr>
<?php

}


?>

  </table>


    
        </div>
    </div>
